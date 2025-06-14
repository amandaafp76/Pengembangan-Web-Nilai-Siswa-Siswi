<?php
include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Gunakan prepared statement
    $stmt = mysqli_prepare($conn, "DELETE FROM nilai WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
}

header("Location: viewnilaisiswa7A.php");
exit();
?>
