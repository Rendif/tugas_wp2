<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Ghoibsilents</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="admin.php" class="navbar-brand"><span>Ruang Admin</span></a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
             <li><a href="data.php" class="smoothScroll">Data Karyawan</a></li>
                <li><a href="inputkaryawan.php" class="smoothScroll">Input Karyawan</a></li>
                <li><a href="logout.php" class="smoothScroll">Logout</a></li>
            </ul>
        </div>

    </div>
</div>

<<section id="pricing">
     <div class="container">
          <div class="row">
<br>
<br>
<table align="center" width="80%" border="1" cellspacing="0" cellpadding="0">

<tr>
<td width="2%" bgcolor="#b0d5d0"><div align="center">NIK</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Foto</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Nama</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Tgl Lahir</td>
<td width="8%" bgcolor="#b0d5d0"><div align="center">Alamat</td>
<td width="8%" bgcolor="#b0d5d0"><div align="center">Divisi</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Email</td>
<td colspan="2" bgcolor="#b0d5d0"><div align="center">Aksi</div></td>
</tr>

<?php
include "koneksi.php";
include "fungsi.php";
$n=0;
$query= "SELECT * FROM tb_karyawan" ;
$sql = mysqli_query($koneksi, $query); 
while($data = mysqli_fetch_array($sql))
{ // Ambil semua data dari hasil eksekusi $sql   
  echo "<tr>";
  echo "<td>".$data['nik']."</td>";  
  echo "<td><img src=images/".$data['foto']." 'width='50' height='50'></td>";  
  echo "<td>".$data['nama']."</td>"; 
  echo "<td>".$data['tgl_lahir']."</td>"; 
   echo "<td>".$data['alamat']."</td>";
  echo "<td>".$data['divisi']."</td>";
  echo "<td>".$data['email']."</td>"; 
  echo "<td><a href='editdata.php?nik=".$data['nik']."'>Ubah</a></td>";    
  echo "<td><a href='hapus.php?nik=".$data['nik']."'>Hapus</a></td>";
  echo "</tr>"; 
}   
?>
</table>
 </div>
     </div>
</section>

</body>

<footer>
    <div class="container">
        <div class="row">

               <div class="col-md-8 col-sm-6">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                         <p>Ganjar Okta Mahendra
                         <span>||</span> 
                         Tugas WP2</p>
                    </div>
               </div>

            <div class="col-md-4 col-sm-6">
                <ul class="wow fadeInUp social-icon" data-wow-delay="0.8s">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                    </ul>
               </div>
            
        </div>
    </div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>