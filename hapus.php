<?php

include "koneksi.php";
$nik = $_GET['nik'];
$query = "DELETE FROM tb_karyawan WHERE nik='$nik'";
mysqli_query($koneksi, $query);
header('location:data.php');

?>