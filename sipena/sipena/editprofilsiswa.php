<?php
include 'koneksi.php';
session_start();

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
    $nis     = $_POST['nis'];
    $nisn    = $_POST['nisn'];
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $ttl     = $_POST['ttl'];
    $alamat  = $_POST['alamat'];
    $no_hp   = $_POST['no_hp'];
    $email   = $_POST['email'];

    // Proses upload foto jika ada
    if ($_FILES['foto']['name'] != '') {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $folder = "uploads/";
        move_uploaded_file($tmp, $folder . $foto);
    } else {
        $foto = $data['foto']; // pakai foto lama jika tidak upload baru
    }

    $update = mysqli_query($conn, "UPDATE siswa SET 
        nis='$nis', nisn='$nisn', nama='$nama', kelas='$kelas', ttl='$ttl',
        alamat='$alamat', no_hp='$no_hp', email='$email', foto='$foto'
        WHERE id='$id'
    ");

    if ($update) {
        echo "<script>alert('Data berhasil diperbarui'); window.location='biodatasiswa.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil Siswa - SIPENA</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="biodatasiswa-page">
    <div class="container">
        <h2>Edit Data Siswa</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="form-box">
            <label>NIS</label>
            <input type="text" name="nis" value="<?= $data['nis'] ?>" required>

            <label>NISN</label>
            <input type="text" name="nisn" value="<?= $data['nisn'] ?>" required>

            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

            <label>Kelas</label>
            <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required>

            <label>Tempat Tanggal Lahir</label>
            <input type="text" name="ttl" value="<?= $data['ttl'] ?>" required>

            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required>

            <label>Nomor HP</label>
            <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" required>

            <label>Email</label>
            <input type="email" name="email" value="<?= $data['email'] ?>" required>

            <label>Foto (kosongkan jika tidak diubah)</label>
            <input type="file" name="foto" accept="image/*">

            <button type="submit" name="submit" class="btn btn-edit">💾 Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>