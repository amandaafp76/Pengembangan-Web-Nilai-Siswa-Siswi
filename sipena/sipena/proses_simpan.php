<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = date('Y-m-d');

    $data_presensi = [
        'Amanda Fahma' => $_POST['amanda'] ?? '',
        'Pawestri W.G' => $_POST['pawes'] ?? '',
        'Rehania Putri 1' => $_POST['rehania1'] ?? '',
        'Rehania Putri 2' => $_POST['rehania2'] ?? '',
    ];

    foreach ($data_presensi as $nama => $status) {
        if ($status) {
            $stmt = $conn->prepare("INSERT INTO kehadiran (nama, status, tanggal) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nama, $status, $tanggal);
            $stmt->execute();
        }
    }

    echo "<script>alert('Presensi berhasil disimpan!');</script>";
}
?>
