// Variabel untuk menyimpan instance chart
let chartInstance = null;

// Fetch data dari PHP
async function loadChartData() {
    try {
        const response = await fetch('chart_data.php');
        const data = await response.json();

        if (data.error) {
            console.error('Error:', data.error);
            return;
        }

        // Grupkan data berdasarkan produk dan hitung total
        const productTotals = {};

        data.forEach(item => {
            if (!productTotals[item.produk]) {
                productTotals[item.produk] = 0;
            }
            productTotals[item.produk] += parseInt(item.total_jumlah);
        });

        // Konversi ke array untuk chart
        const labels = Object.keys(productTotals);
        const values = Object.values(productTotals);

        // Warna untuk setiap produk
        const colors = [
            { bg: 'rgba(255, 99, 132, 0.6)', border: 'rgba(255, 99, 132, 1)' },
            { bg: 'rgba(54, 162, 235, 0.6)', border: 'rgba(54, 162, 235, 1)' },
            { bg: 'rgba(255, 206, 86, 0.6)', border: 'rgba(255, 206, 86, 1)' },
            { bg: 'rgba(75, 192, 192, 0.6)', border: 'rgba(75, 192, 192, 1)' },
            { bg: 'rgba(153, 102, 255, 0.6)', border: 'rgba(153, 102, 255, 1)' },
            { bg: 'rgba(255, 159, 64, 0.6)', border: 'rgba(255, 159, 64, 1)' },
            { bg: 'rgba(199, 199, 199, 0.6)', border: 'rgba(199, 199, 199, 1)' },
            { bg: 'rgba(83, 102, 255, 0.6)', border: 'rgba(83, 102, 255, 1)' }
        ];

        const backgroundColors = labels.map((_, index) => colors[index % colors.length].bg);
        const borderColors = labels.map((_, index) => colors[index % colors.length].border);

        // Update atau buat chart
        if (chartInstance) {
            updateChart(labels, values, backgroundColors, borderColors);
        } else {
            createChart(labels, values, backgroundColors, borderColors);
        }

        // Update timestamp terakhir
        updateLastRefreshTime();

    } catch (error) {
        console.error('Fetch error:', error);
    }
}

// Fungsi untuk membuat chart pertama kali
function createChart(labels, values, backgroundColors, borderColors) {
    const ctx = document.getElementById('salesChart').getContext('2d');

    chartInstance = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Jumlah Produksi',
                data: values,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                duration: 750,
                easing: 'easeInOutQuart'
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#fff',
                        callback: function (value) {
                            return value.toLocaleString('id-ID');
                        }
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                },
                x: {
                    ticks: {
                        color: '#fff',
                        font: {
                            size: 12,
                            weight: 'bold'
                        }
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        color: '#fff',
                        padding: 15,
                        font: {
                            size: 14,
                            weight: 'bold'
                        }
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    borderColor: '#fff',
                    borderWidth: 1,
                    padding: 12,
                    titleFont: {
                        size: 14,
                        weight: 'bold'
                    },
                    bodyFont: {
                        size: 13
                    },
                    callbacks: {
                        label: function (context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += context.parsed.y.toLocaleString('id-ID') + ' unit';
                            return label;
                        }
                    }
                }
            }
        }
    });
}

// Fungsi untuk update chart yang sudah ada
function updateChart(labels, values, backgroundColors, borderColors) {
    chartInstance.data.labels = labels;
    chartInstance.data.datasets[0].data = values;
    chartInstance.data.datasets[0].backgroundColor = backgroundColors;
    chartInstance.data.datasets[0].borderColor = borderColors;
    chartInstance.update('active');
}

// Fungsi untuk update timestamp terakhir refresh
function updateLastRefreshTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('id-ID');
    const refreshElement = document.getElementById('lastRefresh');

    if (refreshElement) {
        refreshElement.textContent = `Terakhir diperbarui: ${timeString}`;
    }
}

// Panggil fungsi saat halaman selesai dimuat
document.addEventListener('DOMContentLoaded', function () {
    // Load data pertama kali
    loadChartData();

    // Set interval untuk auto-refresh setiap 5 detik
    setInterval(() => {
        loadChartData();
    }, 5000); // 5000 ms = 5 detik
});