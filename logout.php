<?php

session_start(); //memulai membaca sesi
unset($_SESSION['nama']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['login']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['proseslogin']);
unset($_SESSION['id_admin']);
session_destroy(); //menghancurkan sesi
header('location:./index.html'); //mendirect ke index.php

?>