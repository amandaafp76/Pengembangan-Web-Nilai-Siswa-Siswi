<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ganjil = $_POST['ganjil'];
    $genap = $_POST['genap'];
    $rata = ($ganjil + $genap) / 2;
    $predikat = ($rata >= 85) ? 'A' : (($rata >= 75) ? 'B' : 'C');

    $query = "UPDATE nilai7b SET nisn='$nisn', nama='$nama', kelas='$kelas',
              ganjil=$ganjil, genap=$genap, rata_rata=$rata, predikat='$predikat'
              WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: viewnilaisiswa7B.php");
}

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM nilai7b WHERE id=$id"));
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
        input[type="number"],
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
            border-color: #003366;
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
    <h2>Edit Nilai</h2>
    NISN: <input type="text" name="nisn" value="<?= $data['nisn'] ?>" required><br>
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
    Kelas: <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required><br>
    Ganjil: <input type="number" name="ganjil" step="0.01" value="<?= $data['ganjil'] ?>" required><br>
    Genap: <input type="number" name="genap" step="0.01" value="<?= $data['genap'] ?>" required><br>
    <button type="submit">Update</button>
</form>

</body>
</html>