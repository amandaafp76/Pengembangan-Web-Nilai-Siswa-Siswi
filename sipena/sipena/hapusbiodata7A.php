<?php
include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = mysqli_prepare($conn, "DELETE FROM biodata7a WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
}

// Kembali ke halaman daftar biodata
header("Location: viewbiodatasiswa7A.php");
exit();
?>