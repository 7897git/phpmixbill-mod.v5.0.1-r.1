<?php 
$koneksi =mysqli_connect("localhost","wifiprab_ayar","2Belas098dua$","wifiprab_ayar");

//cek koneksi
if (mysqli_connect_error()){
	echo "Konksi database gagal :". mysqli_connect_error();
} ?>