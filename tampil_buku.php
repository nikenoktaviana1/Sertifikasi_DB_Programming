<!DOCTYPE html>
<html>
<head>
	<title>Tampil Tabel Buku</title>
</head>
<body>
	<center>TAMPIL DATA BUKU</center>
	<center>
	<a href="form_buku.php">[form buku]</a>
	<a href="cari_buku.php">[cari buku]</a>
	<table border="1">
		<tr>
			<td>ID Buku</td>
			<td>Id Kategori</td>
			<td>Judul Buku </td>
			<td>ISBN</td>
			<td>Nama Penerbit</td>
			<td>Nama Penulis</td>
			<td>Aksi</td>
		</tr>
		<?php
			include 'Methods.php';
			$db = new database();
			foreach($db->tampil_buku() as $hasil){
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
						<a href='edit_buku.php?id_buku=$idbuku'>Edit</a>
						<a href='Proses_Buku.php?id_buku=$idbuku&aksi_buku=hapus' onclick='return confirm(\"Hapus data dengan id_buku = $idbuku ??\")'>Hapus</a>
					</td>
				</tr>";
			}
		?>
	</table>
	<a href="tampil_kategori.php">[Lihat Data Kategori]</a>
	</center>
</body>
</html>