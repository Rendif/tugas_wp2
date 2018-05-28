<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Balmond official</title>

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
			<a href="index.html" class="navbar-brand"><span>Balmond official</span></a>
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

<?php

include'koneksi.php';
$nik=$_GET['nik'];
$data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tb_karyawan where nik='$nik'"));

?>

<<section id="pricing">
     <div class="container">
          <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h1>Edit Data Karyawan</h1>
                         <hr>
                    </div>
               </div>

				<div align="center" style=" margin-top:200px">
				<form action="prosesedit.php" method="post">
				<table width="30%" border="0" cellspacing="0" cellpadding="10" id="wrap">

         <tr><td>Foto</td>
		 <td> <img src="images/<?php echo $karyawan['gambar']; ?>" width="70" height="50"><input type="file" name="gambar"></td>
         <tr><td>Nama</td>
		 <td><input type="text" name="nama" value="<?php echo $karyawan['nama'] ?>"></td>
		 <tr><td>Tgl Lahir</td>
		 <td><label>
		 <td><input type="date" name="tgl_lahir" value="<?php echo $karyawan['tgl_lahir'] ?>"></td>
		 </label></td></tr>
		 <tr><td>Agama</td>
          	 <td> <select name="agama"> <option value="">-pilih</option><?php
			 $query=mysqli_query($koneksi,"select*from agama");
			 while($divisi=mysqli_fetch_array($query))
			 {
		 	 if($divisi['agama']==$divisi['agama'])
			  {$status="selected";}
			 else {$status="";}
			 echo "<option value='$divisi[divisi]' $status>$divisi[divisi]</option>";
			 }
		 ?></select></td>
		 <tr><td>Status</td>
          	 <td> <select name="Status"> <option value="">-pilih</option><?php
			 $query=mysqli_query($koneksi,"select*from status");
			 while($divisi=mysqli_fetch_array($query))
			 {
		 	 if($divisi['status']==$divisi['status'])
			  {$status="selected";}
			 else {$status="";}
			 echo "<option value='$divisi[divisi]' $status>$divisi[divisi]</option>";
			 }
		 ?></select></td>
         <tr><td>Alamat</td>
		 <td><input type="text" name="alamat" value="<?php echo $karyawan['alamat'] ?>"></td>
		 <tr><td>Divisi</td>
          	 <td> <select name="divisi"> <option value="">-pilih</option><?php
			 $query=mysqli_query($koneksi,"select*from divisi");
			 while($divisi=mysqli_fetch_array($query))
			 {
		 	 if($divisi['divisi']==$divisi['divisi'])
			  {$status="selected";}
			 else {$status="";}
			 echo "<option value='$divisi[divisi]' $status>$divisi[divisi]</option>";
			 }
		 ?></select></td>
		 <tr><td>Email</td>
		 <td><input type="email" name="email" value="<?php echo $karyawan['email'] ?>"></td>
        
        </table>
         
       <div class="btnn">
            <button type="submit" value="prosesedit.php">Simpan</button>
        </div>  
     </div>
   </form>
 				
</section>
    	
      
<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-8 col-sm-6">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                         <p>Rendi firnando
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
