<?php
$conn = new mysqli("127.0.0.1:3307", "root", "", "dbnilaii");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($conn) {
    $result = mysqli_query($conn, "SELECT * FROM nilai");
    while ($row = mysqli_fetch_assoc($result)):
        // tampilkan data...
    endwhile;
} else {
    echo "Koneksi ke database gagal.";
}

?>
