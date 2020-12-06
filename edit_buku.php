<!DOCTYPE html>
<html>
<head>
	<title>form kategori</title>
</head>
<body>
	<?php
			include 'koneksi.php';
			$id = $_GET['id_buku'];
			$sql = "SELECT * FROM buku WHERE id_buku like '%$id%'";
			$tampil = mysqli_query($connect, $sql);
			while($hasil=mysqli_fetch_array($tampil)){
				$id_buku = $hasil['id_buku'];
				$id_kategori = $hasil['id_kategori'];
				$judul = $hasil['judul'];
				$isbn = $hasil['isbn'];
				$penerbit = $hasil['penerbit'];
				$penulis = $hasil['penulis'];	
			}
		?>
	<center>
	<table><tr><td>
		<form method="POST" action="Proses_Buku.php?aksi_buku=update">
			<table>
			<tr>
				<td>Id Buku</td>
				<td>:</td>
				<td><input type="text" name="id_buku" value="<?= $id_buku?>"></td>
			</tr>
			<tr>
				<td>Id Kategori</td>
				<td>:</td>
				<td><input type="text" name="id_kategori" value="<?= $id_kategori?>"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" value="<?= $judul?>"></td>
			</tr>
			<tr>
				<td>ISBN</td>
				<td>:</td>
				<td><input type="text" name="isbn" value="<?= $isbn?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit" value="<?= $penerbit?>"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis" value="<?= $penulis?>"></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset"></td>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
		</form>	
	</td></tr></table>
	</center>
</body>
</html>