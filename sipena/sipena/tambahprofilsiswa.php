<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nis     = $_POST['nis'];
    $nisn    = $_POST['nisn'];
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $ttl     = $_POST['ttl'];
    $alamat  = $_POST['alamat'];
    $no_hp   = $_POST['no_hp'];
    $email   = $_POST['email'];

    // Proses upload foto
    $foto = '';
    if ($_FILES['foto']['name'] != '') {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $folder = "uploads/";
        move_uploaded_file($tmp, $folder . $foto);
    }

    $insert = mysqli_query($conn, "INSERT INTO siswa (nis, nisn, nama, kelas, ttl, alamat, no_hp, email, foto) VALUES (
        '$nis', '$nisn', '$nama', '$kelas', '$ttl', '$alamat', '$no_hp', '$email', '$foto'
    )");

    if ($insert) {
        echo "<script>alert('Data siswa berhasil ditambahkan'); window.location='biodatasiswa.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Profil Siswa - SIPENA</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="biodatasiswa-page">
    <div class="container">
        <h2>Tambah Data Siswa</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="form-box">
            <label>NIS</label>
            <input type="text" name="nis" required>

            <label>NISN</label>
            <input type="text" name="nisn" required>

            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>Kelas</label>
            <input type="text" name="kelas" required>

            <label>Tempat Tanggal Lahir</label>
            <input type="text" name="ttl" required>

            <label>Alamat</label>
            <input type="text" name="alamat" required>

            <label>Nomor HP</label>
            <input type="text" name="no_hp" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Foto</label>
            <input type="file" name="foto" accept="image/*">

            <button type="submit" name="submit" class="btn btn-edit">➕ Tambah Data</button>
        </form>
    </div>
</body>
</html>