$(function () {
    const canvas = document.getElementById("orderChart");
    if (!canvas) return;

    const ctx = canvas.getContext("2d");

    // Data (ubah angka sesuai kebutuhan)
    const labels = ["Jersey", "PDL", "Workshirt"];
    const values = [45, 30, 25];

    const bg = [
        "rgba(212, 175, 55, 0.80)",  // gold
        "rgba(66, 133, 244, 0.80)",  // blue
        "rgba(52, 168, 83, 0.80)"    // green
    ];

    const border = [
        "rgba(212, 175, 55, 1)",
        "rgba(66, 133, 244, 1)",
        "rgba(52, 168, 83, 1)"
    ];

    new Chart(ctx, {
        type: "bar",
        data: {
            labels,
            datasets: [{
                label: "Jumlah Pesanan",
                data: values,
                backgroundColor: bg,
                borderColor: border,
                borderWidth: 2,
                borderRadius: 12
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,

            // bikin bar "pas" di atas label bawah
            datasets: {
                bar: {
                    categoryPercentage: 0.75, // ruang per kategori
                    barPercentage: 0.9        // lebar bar dalam kategori
                }
            },

            scales: {
                x: {
                    grid: { display: false },
                    ticks: {
                        autoSkip: false,
                        padding: 10,
                        font: { size: 13 }
                    }
                },
                y: {
                    beginAtZero: true,
                    suggestedMax: Math.max(...values) + 5,
                    grid: { color: "rgba(0,0,0,0.08)" },
                    ticks: {
                        stepSize: 5,
                        padding: 8,
                        font: { size: 12 }
                    }
                }
            },

            plugins: {
                // Legend custom biar 3 warna tampil (Jersey/PDL/Workshirt)
                legend: {
                    position: "top",
                    labels: {
                        boxWidth: 40,
                        boxHeight: 12,
                        padding: 16,
                        generateLabels(chart) {
                            const ds = chart.data.datasets[0];
                            return chart.data.labels.map((text, i) => ({
                                text,
                                fillStyle: ds.backgroundColor[i],
                                strokeStyle: ds.borderColor[i],
                                lineWidth: 2,
                                hidden: false,
                                index: i
                            }));
                        }
                    }
                },

                tooltip: {
                    callbacks: {
                        label: (ctx) => ` ${ctx.label}: ${ctx.parsed.y}`
                    }
                }
            }
        }
    });
});
