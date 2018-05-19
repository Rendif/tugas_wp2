<?php
include 'koneksi.php';
include 'fungsi.php';

$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$tgl_lahir           = $_POST['tgl_lahir'];
$alamat         = $_POST['alamat'];
$divisi        = $_POST['divisi'];
$email         = $_POST['email'];
$foto		= $_FILES['foto']['name'];
$tmp        = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;

$path = "../images".$foto;

if(move_uploaded_file($tmp, $path)){

$query="INSERT INTO tb_karyawan SET nik='$nik',nama='$nama',tgl_lahir='$tgl_lahir',alamat='$alamat',divisi='$divisi',email='$email', foto='$foto'";
mysqli_query($koneksi, $query);

header("location:data.php");
}
?>