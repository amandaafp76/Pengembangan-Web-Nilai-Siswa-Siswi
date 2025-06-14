<?php
$conn = new mysqli("sql105.infinityfree.com", "if0_39229836", "sipena123", "if0_39229836_SipenaKelompok8");

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