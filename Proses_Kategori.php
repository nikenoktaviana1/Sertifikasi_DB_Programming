<?php
include 'Methods.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->insert_kategori($_POST['id_kategori'],$_POST['kategori']);
 	//mengirim data ke fungsi insert untuk menjalankan fungsi insert
 	header("location:tampil_kategori.php");
 	//untuk berpindah halaman tampil kategori
 }elseif($aksi == "hapus"){ 	
 	$db->delete_kategori($_GET['id']);
 	//mengirim data ke fungsi delete untuk menjalankan fungsi hapus
	header("location:tampil_kategori.php");
	//untuk berpindah halaman tampil kategori
 }elseif($aksi == "update"){
 	$db->update_kategori($_POST['id_kategori'],$_POST['kategori']);
 	//mengirim data ke fungsi update untuk menjalankan fungsi update
 	header("location:tampil_kategori.php");
 	//untuk berpindah halaman tampil kategori
 }
?>