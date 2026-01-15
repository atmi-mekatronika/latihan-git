<?php
$host = "localhost";
$user = "root";
$pass = ""; // default XAMPP biasanya kosong
$db   = "web_design";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denz Apparel </title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/autoscroll.js"></script>
    <script src="asset/js/chart.js"></script>
    <script src="asset/js/grafik.js"></script>
    <script src="asset/js/no_telepon.js"></script>
    <link rel="stylesheet" href="customstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar" id="mainNav">
            <img src="asset/img/2.png" class="logoheader" alt="Logo">
            <a class="navbar-brand judul" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav custom-nav">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link" href="#products">Products</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </nav>
    </header>




    <section id="home">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active smut">
                    <img src="asset/img/3.JPG" class="d-block w-100" alt="...">
                    <div class="bekgron"></div>
                    <div class="hero-text transparan ">
                        <h5>Custom Jersey &<br>Workwear Premium</h5>
                        <p>Buat desainmu tampil beda dengan kualitas profesional.</p>
                    </div>
                </div>

                <div class="carousel-item smut">
                    <img src="asset/img/4.jpg" class="d-block w-100 " alt="...">
                    <div class="bekgron"></div>
                    <div class="hero-text transparan ">
                        <h5>Custom Jersey &<br>Workwear Premium</h5>
                        <p>Buat desainmu tampil beda dengan kualitas profesional.</p>
                    </div>
                </div>

                <div class="carousel-item smut">
                    <img src="asset/img/5.jpg" class="d-block w-100 " alt="...">
                    <div class="bekgron"></div>
                    <div class="hero-text transparan ">
                        <h5>Custom Jersey &<br>Workwear Premium</h5>
                        <p>Buat desainmu tampil beda dengan kualitas profesional.</p>
                    </div>
                </div>

                <div class="carousel-item smut">
                    <img src="asset/img/6.jpg" class="d-block w-100 " alt="...">
                    <div class="bekgron"></div>
                    <div class="hero-text transparan ">
                        <h5>Custom Jersey &<br>Workwear Premium</h5>
                        <p>Buat desainmu tampil beda dengan kualitas profesional.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="asset/img/7.jpg" class="d-block w-100 " alt="...">
                    <div class="bekgron"></div>
                    <div class="hero-text transparan ">
                        <h5>Custom Jersey &<br>Workwear Premium</h5>
                        <p>Buat desainmu tampil beda dengan kualitas profesional.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>




    <section id="products" class="padding-atas padding-produk">
        <div class="container">

            <h2 class="text-center text-white m-b-teks">OUR PRODUCTS</h2>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="product-box text-center p-4">
                        <h4 class="text-white mb-3">Jersey</h4>
                        <img src="asset/img/jersey.JPG" class="img-fluid produk-gambar" alt="Jersey">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="product-box text-center p-4">
                        <h4 class="text-white mb-3">PDL</h4>
                        <img src="asset/img/pdl.JPG" class="img-fluid produk-gambar" alt="PDL">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="product-box text-center p-4">
                        <h4 class="text-white mb-3">Workshirt</h4>
                        <img src="asset/img/ws.JPG" class="img-fluid produk-gambar" alt="Work Shirt">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="profile-parallax">
        <div class="profile-overlay">
            <div class="container">
                <h2 class="text-center text-white mb-5">OUR PROFILE</h2>

                <div class="row align-items-center">
                    <div class="col-md-6 text-white mb-4">
                        <h4 class="mb-3">Tentang Perusahaan</h4>
                        <p>
                            Denz Apparel merupakan vendor konveksi yang khusus membuat
                            jersey, pdl, vest, dan workshirt
                        </p>

                        <div class="mt-4">
                            <h6 class="fw-bold">Alamat</h6>
                            <p class="mb-0">
                                Perumahan Puri Hutama, Bintaan, Danguran<br>
                                Kec. Klaten Selatan<br>
                                Kabupaten Klaten, Jawa Tengah 57426
                            </p>
                        </div>
                    </div>

                    <!-- Chart Container -->
                    <div class="col-md-6">
                        <div class="chart-container">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section id="contact" class="contact-section">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $stmt = $conn->prepare("
        INSERT INTO form
        (produk, nama_pemesan, nomor_telepon, jumlah,
         ukuran_s, ukuran_m, ukuran_l,
         ukuran_xl, ukuran_xxl, ukuran_xxxl)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

            $stmt->bind_param(
                "sssiiiiiii",
                $_POST['produk'],
                $_POST['nama_pemesan'],
                $_POST['nomor_telepon'],
                $_POST['jumlah'],
                $_POST['ukuran_s'],
                $_POST['ukuran_m'],
                $_POST['ukuran_l'],
                $_POST['ukuran_xl'],
                $_POST['ukuran_xxl'],
                $_POST['ukuran_xxxl']
            );

            $stmt->execute();
            $stmt->close();
        }
        ?>

        <div class="container">
            <h2 class="text-center text-white mb-5">CONTACT</h2>
            <div class="row justify-content-center mb-4">
                <div class="col-md-4 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <img src="asset/img/logo-wa.png" alt="WhatsApp">
                        </div>
                        <h5 class="contact-title">WhatsApp</h5>
                        <p class="contact-value">+62 857-9341-5071</p>
                        <a class="contact-link" href="https://wa.me/6285793415071" target="_blank" rel="noopener"> Chat Sekarang </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <img src="asset/img/instagram-logo.png" alt="Instagram">
                        </div>
                        <h5 class="contact-title">Instagram</h5>
                        <p class="contact-value">@denzapparel</p>
                        <a class="contact-link" href="https://instagram.com/denzapparel" target="_blank" rel="noopener"> Kunjungi Profil </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-card-tiktok">
                        <div class="contact-icon-tiktok"> <img src="asset/img/tiktok-logo.png" alt="TikTok">
                        </div>
                        <h5 class="contact-title">TikTok</h5>
                        <p class="contact-value">@denz_apparel</p>
                        <a class="contact-link" href="https://www.tiktok.com/@denz_apparel" target="_blank" rel="noopener"> Lihat Akun </a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="contact-card order-card">

                        <div class="contact-icon order-icon mb-3">
                            <i class="fa-solid fa-clipboard-list"></i>
                        </div>

                        <h5 class="contact-title">Form Pemesanan</h5>
                        <p class="contact-value mb-4">
                            Isi detail pesanan, kami akan hubungi via WhatsApp
                        </p>

                        <form method="POST">

                            <div class="form-group text-left">
                                <label class="order-label">Nama Pemesan</label>
                                <input type="text" class="form-control order-input"
                                    name="nama_pemesan" required>
                            </div>

                            <div class="form-group text-left">
                                <label class="order-label">Nomor Telepon (Cth:085612345678)</label>
                                <input type="text"
                                    class="form-control order-input"
                                    name="nomor_telepon"
                                    id="nomorTelepon"
                                    maxlength="13"
                                    required>
                                <small id="counterTelepon" class="form-text text-muted">
                                    13/13
                                </small>
                            </div>

                            <div class="form-group text-left">
                                <label class="order-label">Produk</label>
                                <select class="form-control order-input"
                                    name="produk" required>
                                    <option value="" disabled selected>Pilih Produk</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="PDL">PDL</option>
                                    <option value="Workshirt">Workshirt</option>
                                </select>
                            </div>

                            <div class="form-group text-left">
                                <label class="order-label">Jumlah Total</label>
                                <input type="number" min="1"
                                    class="form-control order-input"
                                    name="jumlah" required>
                            </div>

                            <div class="form-group text-left">
                                <label class="order-label">Rincian Ukuran</label>

                                <div class="size-grid">
                                    <div class="size-item">
                                        <span class="size-badge">S</span>
                                        <input type="number" name="ukuran_s" value="0" class="form-control order-input">
                                    </div>

                                    <div class="size-item">
                                        <span class="size-badge">M</span>
                                        <input type="number" name="ukuran_m" value="0" class="form-control order-input">
                                    </div>

                                    <div class="size-item">
                                        <span class="size-badge">L</span>
                                        <input type="number" name="ukuran_l" value="0" class="form-control order-input">
                                    </div>

                                    <div class="size-item">
                                        <span class="size-badge">XL</span>
                                        <input type="number" name="ukuran_xl" value="0" class="form-control order-input">
                                    </div>

                                    <div class="size-item">
                                        <span class="size-badge">XXL</span>
                                        <input type="number" name="ukuran_xxl" value="0" class="form-control order-input">
                                    </div>

                                    <div class="size-item">
                                        <span class="size-badge">XXXL</span>
                                        <input type="number" name="ukuran_xxxl" value="0" class="form-control order-input">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="contact-link order-btn w-100 mt-3">
                                <i class="fa-solid fa-paper-plane mr-2"></i> Kirim Pesanan
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>