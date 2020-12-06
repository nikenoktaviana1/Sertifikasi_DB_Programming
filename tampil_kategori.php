<!DOCTYPE html>
<html>
<head>
	<title>Tampil Kategori</title>
</head>
<body>
	<center>TAMPIL DATA KATEGORI</center>
	<center>
	<a href="form_kategori.php">[form kategori]</a>
	<a href="cari_kategori.php">[cari data]</a>
	<table border="1">
		<tr>
			<td>Id Kategori</td>
			<td>kategori</td>
			<td>Total Buku</td>
			<td>Aksi</td>
		</tr>
		<?php
			include 'Methods.php';
			$db = new database();
			foreach($db->tampil_kategori() as $hasil){
				$id = $hasil['id_kategori'];
				$kategori = $hasil['kategori'];
				$jml = $hasil['Total_Buku'];
				echo "<tr>
					<td>$id</td>
					<td>$kategori</td>
					<td>$jml</td>
					<td>
						<a href='edit_kategori.php?id=$id'>Edit</a>
						<a href='Proses_Kategori.php?id=$id&aksi=hapus' onclick='return confirm(\"Hapus data dengan id_kategori = $id ??\")'>Hapus</a>
					</td>
				</tr>";
			}
		?>
	</table>
	<a href="tampil_buku.php">[Lihat Data Buku]</a>
	</center>
</body>
</html>