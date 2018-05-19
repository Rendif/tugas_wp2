<?php

session_start();
include"koneksi.php"; 
include"fungsi.php"; 


$gambar=$_FILES['foto']['name'];
$tmp=$_FILES['foto']['tmp_name'];
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$divisi=$_POST['divisi'];
$email=$_POST['email'];
$id_admin=$_SESSION['id_admin'];

 	$nik=$_POST['nik'];
 	if(empty($foto)) 
 	{
 		$simpan=mysqli_query($koneksi,"update karyawan set nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', divisi='$divisi', email='$email' where nik='$nik'");
 	}
 	else
 	{
 		$karyawan=mysqli_fetch_array(mysqli_query($koneksi,"select gambar from karyawan where nik='$nik'"));
 		unlink('./images/'.$data['foto']); 
 		$simpan=mysqli_query($koneksi,"update karyawan set gambar='$gambar' nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', divisi='$divisi', email='$email' where nik='$nik'");
 		move_uploaded_file($foto,"./images/".$foto);
 	}

 	if($simpan)
 	msgbox("berhasil dibuat","./data.php"); 
    else
    msgbox("Gagal terdafar","./data.php"); 

?>