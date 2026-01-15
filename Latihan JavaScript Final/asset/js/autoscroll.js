$(document).ready(function () {
    $('a.nav-link').on('click', function (e) {
        // Cek apakah link punya hash (#section)
        if (this.hash !== "") {
            e.preventDefault();

            const hash = this.hash;

            $('html, body').animate(
                {
                    scrollTop: $(hash).offset().top - 70
                },
                800,
                'swing'
            );

            // Tutup navbar di mode mobile setelah klik
            $('.navbar-collapse').collapse('hide');
        }
    });
});
