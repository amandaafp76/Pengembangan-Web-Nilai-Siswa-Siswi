<?php
include 'koneksi.php';

// Ambil data dari form
$data_presensi = [
    'Amanda Fahma'     => $_POST['amanda'] ?? null,
    'Pawestri W.G'     => $_POST['pawes'] ?? null,
    'Rehania Putri 1'  => $_POST['rehania1'] ?? null,
    'Rehania Putri 2'  => $_POST['rehania2'] ?? null
];

// Simpan ke database
foreach ($data_presensi as $nama => $status) {
    if ($status) {
        $stmt = $conn->prepare("INSERT INTO kehadiran (nama, status) VALUES (?, ?)");
        $stmt->bind_param("ss", $nama, $status);
        $stmt->execute();
    }
}

// Kembali ke halaman presensi atau tampilkan pesan sukses
header("Location: presensi_berhasil.php");
exit;
?>
