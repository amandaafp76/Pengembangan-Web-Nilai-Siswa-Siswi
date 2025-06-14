<?php
include 'koneksi.php';
session_start();
date_default_timezone_set("Asia/Jakarta");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $_SESSION['step'] = 1; // Reset ke langkah pertama saat halaman dibuka pertama kali
}

$info = "";

// Langkah 1: Kirim kode
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['step']) && $_POST['step'] == '1') {
    $email = $_POST['email'];
    $kode = rand(100000, 999999);
    $waktu_expired = date("Y-m-d H:i:s", strtotime("+10 minutes"));

    // Simpan ke database
    $query = "INSERT INTO lupa_pass (email, kode, waktu_expired) VALUES ('$email', '$kode', '$waktu_expired')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['email_lupa'] = $email;
        $_SESSION['kode_lupa'] = $kode;
        $_SESSION['step'] = 2;
        $info = "Kode telah dikirim (simulasi). Kode: <b>$kode</b>";
    } else {
        $info = "Gagal menyimpan ke database: " . mysqli_error($conn);
    }
}

// Langkah 2: Verifikasi kode
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['step']) && $_POST['step'] == '2') {
    $kode_input = $_POST['kode'];
    $email = $_SESSION['email_lupa'];

    $result = mysqli_query($conn, "SELECT * FROM lupa_pass WHERE email='$email' ORDER BY id DESC LIMIT 1");
    $data = mysqli_fetch_assoc($result);

    if ($data && $kode_input == $data['kode'] && strtotime($data['waktu_expired']) > time()) {
        $_SESSION['step'] = 3;
        $info = "Kode verifikasi benar. Silakan atur ulang password.";
    } else {
        $info = "Kode salah atau sudah kedaluwarsa.";
    }
}

// Langkah 3: Reset Password
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['step']) && $_POST['step'] == '3') {
    $passwordBaru = $_POST['newPwd'];
    $konfirmasi = $_POST['confirmPwd'];

    if ($passwordBaru === $konfirmasi) {
        $email = $_SESSION['email_lupa'];
        $passwordHash = password_hash($passwordBaru, PASSWORD_DEFAULT);

        // Update ke tabel login/akun Anda
        $update = mysqli_query($conn, "UPDATE login SET password='$passwordHash' WHERE email='$email'");

        if ($update) {
            $info = "Password berhasil direset. ";
            session_destroy(); // Hapus sesi
        } else {
            $info = "Gagal reset password: " . mysqli_error($conn);
        }
    } else {
        $info = "Konfirmasi password tidak cocok.";
    }
}

// Ambil step dari session
$step = $_SESSION['step'] ?? 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="lupa-password-page">
    <header>
        <h1>Lupa Password?</h1>
    </header>

    <div class="container">
        <p><?= $info ?></p>

        <!-- Langkah 1 -->
        <?php if ($step == 1): ?>
        <form method="POST">
            <input type="hidden" name="step" value="1">
            <label for="email">Masukkan Email</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Kirim Kode</button>
        </form>
        <?php endif; ?>

        <!-- Langkah 2 -->
        <?php if ($step == 2): ?>
        <form method="POST">
            <input type="hidden" name="step" value="2">
            <label for="kode">Masukkan Kode Verifikasi</label>
            <input type="text" id="kode" name="kode" required>
            <button type="submit">Verifikasi</button>
        </form>
        <?php endif; ?>

        <!-- Langkah 3 -->
        <?php if ($step == 3): ?>
        <form method="POST">
            <input type="hidden" name="step" value="3">
            <label for="newPwd">Password Baru</label>
            <input type="password" id="newPwd" name="newPwd" required minlength="6">
            <label for="confirmPwd">Konfirmasi Password</label>
            <input type="password" id="confirmPwd" name="confirmPwd" required minlength="6">
            <button type="submit">Reset Password</button>
        </form>
        <?php endif; ?>

        <br>
        <a href="cobalogin.php">Kembali ke Login</a>
    </div>
</body>
</html>