<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ganjil = $_POST['ganjil'];
    $genap = $_POST['genap'];
    $rata = ($ganjil + $genap) / 2;

    if ($rata >= 85) {
        $predikat = 'A';
    } elseif ($rata >= 70) {
        $predikat = 'B';
    } else {
        $predikat = 'C';
    }

    $query = "INSERT INTO nilai8b (nisn, nama, kelas, ganjil, genap, rata_rata, predikat) 
              VALUES ('$nisn', '$nama', '$kelas', '$ganjil', '$genap', '$rata', '$predikat')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: viewnilaisiswa8B.php"); // kembali ke daftar nilai
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>