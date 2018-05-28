<?php
include"koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"fungsi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan

$username = $_POST['username'];
$password = $_POST['password']; //engencrypssi password
$login   = mysqli_query($koneksi, "select* from admin where username='$username' and password='$password'"); //menocokan data yang diinput dengan data yang ada di tabel
$row = mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $password)
{
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	header('location:./admin.php');

}
else
{
	msgbox ("Gagal Login","login.php");
}

?>
