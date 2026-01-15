<?php
header('Content-Type: application/json');

// Koneksi database
$host = 'localhost';
$dbname = 'web_design';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Contoh query data
    $stmt = $pdo->query("SELECT produk, SUM(jumlah) as total_jumlah FROM form GROUP BY produk ORDER BY total_jumlah DESC");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
