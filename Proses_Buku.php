<?php
include 'Methods.php';
$db = new database();
 
$aksi = $_GET['aksi_buku'];
 if($aksi == "input"){
 	$db->insert_buku($_POST['id_buku'],$_POST['id_kategori'],$_POST['judul'],$_POST['isbn'],$_POST['penerbit'],$_POST['penulis']); //mengirim data ke fungsi insert untuk menjalankan fungsi insert
 	header("location:tampil_buku.php");
 	//untuk berpindah halaman tampil buku
 }elseif($aksi == "hapus"){ 	
 	$db->delete_buku($_GET['id_buku']);
 	//mengirim data ke fungsi delete untuk menjalankan fungsi hapus
	header("location:tampil_buku.php");
	//untuk berpindah halaman tampil buku
 }elseif($aksi == "update"){
 	$db->update_buku($_POST['id_buku'],$_POST['id_kategori'],$_POST['judul'], $_POST['isbn'], $_POST['penerbit'], $_POST['penulis']);
 	//mengirim data ke fungsi update untuk menjalankan fungsi update
 	header("location:tampil_buku.php");
 	//untuk berpindah halaman tampil buku
 }
?>