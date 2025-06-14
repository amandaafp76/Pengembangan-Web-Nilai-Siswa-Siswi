<?php include 'koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan di URL.";
    exit;
}
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM siswa WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Edit Siswa</title></head>
<body>
<h2>Edit Data Siswa</h2>
<form method="post">
    NIS: <input name="nis" value="<?= $data['nis'] ?>"><br>
    NISN: <input name="nisn" value="<?= $data['nisn'] ?>"><br>
    Nama: <input name="nama" value="<?= $data['nama'] ?>"><br>
    Kelas: <input name="kelas" value="<?= $data['kelas'] ?>"><br>
    TTL: <input name="ttl" value="<?= $data['ttl'] ?>"><br>
    Alamat: <input name="alamat" value="<?= $data['alamat'] ?>"><br>
    No HP: <input name="no_hp" value="<?= $data['no_hp'] ?>"><br>
    Email: <input name="email" value="<?= $data['email'] ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $sql = "UPDATE siswa SET 
        nis='{$_POST['nis']}',
        nisn='{$_POST['nisn']}',
        nama='{$_POST['nama']}',
        kelas='{$_POST['kelas']}',
        ttl='{$_POST['ttl']}',
        alamat='{$_POST['alamat']}',
        no_hp='{$_POST['no_hp']}',
        email='{$_POST['email']}'
        WHERE id=$id";
    if ($koneksi->query($sql)) {
        echo "Berhasil diubah. <a href='biodatasiswa.php'>Kembali</a>";
    } else {
        echo "Gagal: " . $koneksi->error;
    }
}
?>
</body>
</html>