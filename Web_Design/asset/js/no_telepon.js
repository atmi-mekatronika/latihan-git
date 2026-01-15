
document.addEventListener('DOMContentLoaded', function () {
    const inputTelepon = document.getElementById('nomorTelepon');
    const counterTelepon = document.getElementById('counterTelepon');
    const maxLength = 13;

    // Cegah selain angka saat diketik
    inputTelepon.addEventListener('keypress', function (e) {
        if (!/[0-9]/.test(e.key)) {
            e.preventDefault();
        }
    });

    // Handle paste & update counter
    inputTelepon.addEventListener('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
        const sisa = maxLength - this.value.length;
        counterTelepon.textContent = sisa + '/' + maxLength;
    });
});