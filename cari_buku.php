<!DOCTYPE html>
<html>
<head>
	<title>Cari Data</title>
</head>
<body>
<center>
<a href="form_kategori.php">[form kategori]</a>
	<form method="POST">
		<input type="text" name="cari_buku" placeholder="masukkan judul yang ingin dicari">
		<input type="submit" name="submit" value="cari">
	</form>
	
	<table border="1">
		<tr>
			<td>ID Buku</td>
			<td>Id Kategori</td>
			<td>Judul Buku</td>
			<td>ISBN</td>
			<td>Nama Penerbit</td>
			<td>Nama Penulis</td>
		</tr>
		<?php
			if (isset($_POST['submit'])) {
				$cari = $_POST['cari_buku'];
				include 'Methods.php';
				$db = new database();
				foreach($db->cari_data_buku($cari) as $hasil){
				$idbuku = $hasil['id_buku'];
				$id_kategori = $hasil['id_kategori'];
				$judul = $hasil['judul'];
				$ISBN = $hasil['isbn'];
				$penerbit = $hasil['penerbit'];
				$penulis = $hasil['penulis'];
				echo "<tr>
					<td>$idbuku</td>
					<td>$id_kategori</td>
					<td>$judul</td>
					<td>$ISBN</td>
					<td>$penerbit</td>
					<td>$penulis</td>
					<td>
						<a href='edit_buku.php?id_buku=$idbuku'>[Edit]</a>
						<a href='Proses_Buku.php?id_buku=$idbuku&aksi=hapus' onclick='return confirm(\"Hapus data dengan id_buku = $idbuku ??\")'>[Hapus]</a>
					</td>
				</tr>";
				}
		}
		?>
	</table>
	<a href="tampil_buku.php">[Lihat Data Buku]</a>
	</center>
</body>
</html>