<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['profesi'];
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $kode = trim(($role === 'guru') ? $_POST['nip'] : $_POST['nisn']);

    // Cek berdasarkan profesi, email, dan kode
    $query = "SELECT * FROM login WHERE profesi=? AND email=? AND kode=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $role, $email, $kode);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            // Login berhasil
            if ($role === 'guru') {
                header("Location: berandaguru.php");
            } else {
                header("Location: berandasiswa.php");
            }
            exit();
        } else {
            echo "<script>alert('Password salah.');</script>";
        }
    } else {
        echo "<script>alert('Login gagal. Periksa data yang dimasukkan.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Masuk</title>
    <link rel="stylesheet" href="style1.css"> 
</head>
<body class="masuk-page">
    <div class="container">
        <h2>Masuk</h2>
        <form method="POST" action="">
            <div class="input-container">
                <label for="role">Pilih sebagai</label>
                <select id="role" name="profesi" required onchange="toggleFields()">
                    <option value="" disabled selected>Pilih Peran</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>

            <!-- Input NIP untuk Guru -->
            <div class="input-container hidden" id="nip-container">
                <label for="nip">Masukkan NIP</label>
                <input type="text" id="nip" name="nip" placeholder="Masukkan NIP">
            </div>

            <!-- Input NISN untuk Siswa -->
            <div class="input-container hidden" id="nisn-container">
                <label for="nisn">Masukkan NISN</label>
                <input type="text" id="nisn" name="nisn" placeholder="Masukkan NISN">
            </div>

            <div class="input-container">
                <label for="email">Masukkan Email</label>
                <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
            </div>

            <div class="input-container">
                <label for="password">Masukkan Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
            </div>

            <p class="text-small">Lupa Password? <a href="lupapassword.php">Klik di sini</a></p> 
            <p class="text-small" style="text-align: center;">Belum memiliki akun? <a href="pendaftaran.php">Daftar</a></p>
            
            <button type="submit" style="background-color: #003366; color: white; padding: 10px 137px; border-radius: 5px; border: none; cursor: pointer;">
                Masuk
            </button>
        </form>
    </div>

    <script>
        function toggleFields() {
            let role = document.getElementById("role").value;
            let nipContainer = document.getElementById("nip-container");
            let nisnContainer = document.getElementById("nisn-container");

            nipContainer.classList.toggle("hidden", role !== "guru");
            nisnContainer.classList.toggle("hidden", role !== "siswa");
        }
    </script>
</body>
</html>