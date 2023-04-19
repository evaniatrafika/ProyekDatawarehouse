<?php
session_start();

//koneksi database
$conn = mysqli_connect("localhost", "root", "", "dwofinal");

if(mysqli_connect_error()){
	echo "koneksi ke database gagal".mysqli_connect_error();
}
?>