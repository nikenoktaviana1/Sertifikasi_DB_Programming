<?php
	class database {
 
	function tampil_kategori(){ //fungsi query untuk menampilkan isi tabel kategori
		include "koneksi.php"; 
		$data =mysqli_query($connect,"select kategori.id_kategori, kategori.kategori, view_1.Total_Buku from kategori  left join view_1  on view_1.id_kategori = kategori.id_kategori");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d; //melakukan perulangan sesuai dengan data yang ada di database
		}
		return $hasil;
	}
	function insert_kategori($id, $kategori){ //fungsi query untuk melakukan insert atau input data ke tabel kategori
			include "koneksi.php";
			mysqli_query($connect,"CALL InsertKategori('$id', '$kategori')");//insert data kategori
		}
	function update_kategori($id, $kategori){ //fungsi query untuk melakukan update data pada tabel kategori
			include "koneksi.php";
			mysqli_query($connect,"UPDATE kategori set kategori = '$kategori' where id_kategori = '$id'");//update data kategori
	}
	function delete_kategori($id){ //fungsi query untuk melakukan hapus data pada tabel kategori
			include "koneksi.php";
			mysqli_query($connect,"DELETE FROM kategori where id_kategori = '$id'");//delete data kategori
	}
	function cari_kategori($kategori){ //fungsi query untuk melakukan pencarian data pada tabel kategori berdasarkan nama kategori
		include "koneksi.php";
		$data = mysqli_query($connect, "SELECT * from kategori where kategori like '%$kategori%'"); //cari data kategori
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		
		return $hasil;
	}
	
	
	function tampil_buku(){ //fungsi query untuk menampilkan isi tabel buku
		include "koneksi.php";
		$data =mysqli_query($connect,"select * from buku ");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function insert_buku($id_buku, $id_kategori, $judul, $isbn, $penerbit, $penulis){ //fungsi query untuk melakukan insert atau input data ke tabel buku
			include "koneksi.php";
			mysqli_query($connect,"CALL InsertBuku('$id_buku', '$id_kategori','$judul','$isbn','$penerbit','$penulis')");//insert data buku
		}
	function update_buku($id_buku, $id_kategori, $judul, $isbn, $penerbit, $penulis){ //fungsi query untuk melakukan update data pada tabel buku
			include "koneksi.php";
			mysqli_query($connect,"UPDATE buku set judul = '$judul', isbn = '$isbn', penerbit = '$penerbit', penulis = '$penulis' where id_buku = '$id_buku'"); 
	}
	function delete_buku($id_buku){ //fungsi query untuk melakukan hapus data pada tabel buku
			include "koneksi.php";
			mysqli_query($connect,"DELETE FROM buku where id_buku = '$id_buku'"); //delete data buku
	}
	function cari_data_buku($judul){ //fungsi query untuk melakukan pencarian data pada tabel buku berdasarkan nama buku
		include "koneksi.php";
		$data = mysqli_query($connect,"SELECT * from buku where judul like '%$judul%'"); //cari data buku
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	}
?>