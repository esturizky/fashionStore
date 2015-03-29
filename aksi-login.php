<?php 
include("conn.php");
session_start(); 
$username = $_POST['Username']; 
$password = $_POST['Password'];
$sql="SELECT * FROM login WHERE Username='" . $username . "' and Password='". $password ."'";
$result = mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if ($num == 1) {
    //kalau username dan password sudah terdaftar di database
    header('location:back-end.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=4');
}
	if($num < 1) 
		{
			echo "Username Belum Terdaftar!<br/>";
			// echo "<a href='login.php'>&amp;amp;laquo; Back</a>";
		} 
		else {
			echo "username password benar";
			//if($pass <> $hasil['password']) { echo "Password Salah!<br/>";
			//echo "<a href='login.php'>&amp;amp;laquo; Back</a>";
		} 
			//else { $_SESSION['username'] = $hasil['username']; header('location:index.php'); } } ?>