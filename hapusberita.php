<?php
session_start();
require 'koneksi.php';
echo "<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
header("location: login.php");

$id_berita = $_GET['id_berita'];

$query = "delete from berita where id_berita = $id_berita";

if(mysqli_query($koneksi, $query)){
    header("Location: berita.php");
}else{
    echo "tidak berhasil";
}
?>
