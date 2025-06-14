<?php include 'koneksi.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    // Simpan data ke database
    $query = "INSERT INTO biodata9a (nisn, nama, kelas, tempat_lahir, tanggal_lahir, alamat, no_hp, email)
              VALUES ('$nisn', '$nama', '$kelas', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_hp', '$email')";
    mysqli_query($conn, $query);

    header("Location: viewbiodatasiswa9A.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Biodata Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #003366;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px 14px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #016A70;
            outline: none;
        }

        button[type="submit"] {
            background-color: #003366;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>

<form method="POST">
    <h2>Tambah Biodata Siswa Kelas 9A</h2>
    NISN: <input type="text" name="nisn" required><br>
    Nama: <input type="text" name="nama" required><br>
    Kelas: <input type="text" name="kelas" required><br>
    Tempat Lahir: <input type="text" name="tempat_lahir" required><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br>
    Alamat: <textarea name="alamat" rows="3" required></textarea><br>
    No. HP: <input type="text" name="no_hp"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit">Simpan</button>
</form>

    </body>
    </html>