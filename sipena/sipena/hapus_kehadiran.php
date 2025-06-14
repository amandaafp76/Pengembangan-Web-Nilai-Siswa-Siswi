<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM kehadiran WHERE id=$id");
header("Location: lihat_kehadiran.php");
?>
