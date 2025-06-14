<?php
include 'koneksi.php';
$id = $_GET['id'];
$koneksi->query("DELETE FROM siswa WHERE id=$id");
header("Location: biodatasiswa.php");