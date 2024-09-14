<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data nuptk yang di kirim dari url
$nuptk = $_GET['nuptk'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_guru where nuptk='$nuptk'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>