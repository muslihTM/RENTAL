<?php
session_start();
include "koneksi.php";

$user 	= $_POST['username'];
$pas  	= md5($_POST['password']);
$level	= $_POST['level'];

$qlogin = $con->query("select * from user where username='$user' and password='$pas'");

$row	= $qlogin->fetch_array();
$cek	= $qlogin->num_rows;

if ($cek > 0 ) {
	$_SESSION['rental'] = $row['id_user'];
	$_SESSION['nama']	= $row['nama_user'];
	$_SESSION['level']	= $row['level'];
	
	echo "<script>alert('Hai ".$_SESSION['nama']."')</script>";
} else {
	echo "<script>alert('Gagal login')</script>";
}