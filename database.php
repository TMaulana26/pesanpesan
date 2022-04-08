<?php
$conn = mysqli_connect("localhost", "root", "", "Pesan");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$url = 'index.php';

if (isset($_POST['submit'])) {
    $pesan = $_POST['pesan'];
    $sql = "INSERT INTO pesan_user (time_date,pesan)
    VALUES (now(),'$pesan')";
    if (mysqli_query($conn, $sql)) {
        header("Location: pesan.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
