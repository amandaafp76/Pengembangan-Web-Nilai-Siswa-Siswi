<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $profesi = $_POST['profesi'];
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $konfirmasi = trim($_POST['konfirmasi']);
    $kode = ($profesi === "guru") ? $_POST['nip'] : $_POST['nisn'];

    if ($password !== $konfirmasi) {
        echo "<script>alert('Konfirmasi password tidak cocok.');</script>";
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $simpanDaftar = mysqli_query($conn, "INSERT INTO daftar (email, password) VALUES ('$email', '$hashed')");
        $simpanLogin = mysqli_query($conn, "INSERT INTO login (email, password, kode, profesi) VALUES ('$email', '$hashed', '$kode', '$profesi')");

        if ($simpanDaftar && $simpanLogin) {
            echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location.href='cobalogin.php';</script>";
            exit();
        } else {
            echo "<script>alert('Gagal mendaftar. Email mungkin sudah digunakan.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 360px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .input-container {
            margin-bottom: 15px;
        }
        .input-container label {
            display: block;
            margin-bottom: 5px;
        }
        .input-container input,
        .input-container select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        p.text-small {
            font-size: 0.9em;
            text-align: center;
        }
    </style>
</head>
<body class="pendaftaran-page">

    <div class="container">
        <h2 style="text-align: center;">Form Pendaftaran</h2>
        <form method="POST" action="">
            <div class="input-container">
                <label for="profesi">Pilih sebagai</label>
                <select name="profesi" id="profesi" required onchange="toggleKode()">
                    <option value="">-- Pilih Peran --</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>

            <div class="input-container" id="nip-field" style="display:none;">
                <label for="nip">NIP (untuk Guru)</label>
                <input type="text" id="nip" name="nip" placeholder="Masukkan NIP">
            </div>

            <div class="input-container" id="nisn-field" style="display:none;">
                <label for="nisn">NISN (untuk Siswa)</label>
                <input type="text" id="nisn" name="nisn" placeholder="Masukkan NISN">
            </div>

            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="contoh@email.com" required>
            </div>

            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <div class="input-container">
                <label for="konfirmasi">Konfirmasi Password</label>
                <input type="password" name="konfirmasi" placeholder="Ulangi password" required>
            </div>

            <p class="text-small">Sudah punya akun? <a href="cobalogin.php">Masuk</a></p>
            <button type="submit">Daftar</button>
        </form>
    </div>

    <script>
        function toggleKode() {
            const role = document.getElementById("profesi").value;
            document.getElementById("nip-field").style.display = (role === "guru") ? "block" : "none";
            document.getElementById("nisn-field").style.display = (role === "siswa") ? "block" : "none";
        }
    </script>

</body>
</html>