<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM guru WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $ttl = $_POST['ttl'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    // Cek jika foto baru diupload
    if ($_FILES['foto']['name']) {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
         $folder = "uploads/";
        move_uploaded_file($tmp, $folder.$foto);
        $update = "UPDATE guru SET nip='$nip', nama='$nama', mapel='$mapel', ttl='$ttl', no_hp='$no_hp', email='$email', foto='$foto' WHERE id=$id";
    } else {
        $update = "UPDATE guru SET nip='$nip', nama='$nama', mapel='$mapel', ttl='$ttl', no_hp='$no_hp', email='$email' WHERE id=$id";
    }

    mysqli_query($conn, $update);
    header("Location: biodataguru.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil Guru</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h2>Edit Profil Guru</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="nip" value="<?= $data['nip'] ?>" required><br>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
            <input type="text" name="mapel" value="<?= $data['mapel'] ?>" required><br>
            <input type="text" name="ttl" value="<?= $data['ttl'] ?>" required><br>
            <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" required><br>
            <input type="email" name="email" value="<?= $data['email'] ?>" required><br>
            <label>Foto (biarkan kosong jika tidak diubah):</label><br>
            <input type="file" name="foto" accept="image/*"><br><br>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>