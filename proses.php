<?php
include 'database.php';
$db = new database();


$aksi =$_GET['aksi'];
	if($aksi == "tambah"){
		$db->input($_POST['tanggal'],$_POST['nama'],$_POST['email'],$_POST['instansi'],$_POST['bidang'], $_POST['tujuan'],$_POST['keperluan']);
		header("location:buku_tamu.php");
}
		




?>