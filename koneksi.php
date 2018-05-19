<?php

$host     = 'localhost';
$database = 'goibsilents';
$user     = 'root';
$password = '';

$koneksi = mysqli_connect ($host, $user, $password) or die ("koneksi server gagal");

if($koneksi){
	mysqli_select_db ($koneksi, $database) or die ("koneksi database gagal");
}

?>