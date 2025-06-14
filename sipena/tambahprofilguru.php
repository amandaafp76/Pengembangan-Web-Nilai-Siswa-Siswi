<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $ttl = $_POST['ttl'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
   $folder = "uploads/";

    move_uploaded_file($tmp, $folder.$foto);

    mysqli_query($conn, "INSERT INTO guru (nip, nama, mapel, ttl, no_hp, email, foto)
                         VALUES ('$nip', '$nama', '$mapel', '$ttl', '$no_hp', '$email', '$foto')");

    header("Location: biodataguru.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Profil Guru</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Profil Guru</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="nip" placeholder="NIP" required><br>
            <input type="text" name="nama" placeholder="Nama Guru" required><br>
            <input type="text" name="mapel" placeholder="Mata Pelajaran" required><br>
            <input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" required><br>
            <input type="text" name="no_hp" placeholder="No HP" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="file" name="foto" accept="image/*" required><br><br>
            <button type="submit" class="btn btn-small">Simpan</button>
        </form>
    </div>
</body>
</html>