<?php
$conn = new mysqli("localhost", "root", "", "web_design");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama   = $_POST['nama_pemesan'];
    $telp   = $_POST['nomor_telepon'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $ukuran_s = $POST['ukuran_s'];
        $ukuran_m = $POST['ukuran_m'];
        $ukuran_l = $POST['ukuran_l'];
        $ukuran_xl = $POST['ukuran_xl']; 


    $stmt = $conn->prepare(
        "INSERT INTO orders (nama_pemesan, nomor_telepon, produk, jumlah)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param("sssi", $nama, $telp, $produk, $jumlah);
    $stmt->execute();
    $stmt->close();
}
?>
