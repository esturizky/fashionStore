<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fashion";
//membuat koneksi
$conn = mysqli_connect( $servername, $username, $password, $database);
//cek koneksi
//if ($conn->connect_error) {
//	die("Fail to Connenct : ". $conn->connect_error);
//q}
echo "Connectin Successfull";
?>