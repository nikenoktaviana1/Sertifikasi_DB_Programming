<!DOCTYPE html>
<html>
<head>
	<title>edit kategori</title>
</head>
<body>
<?php
			include 'koneksi.php';
			$sql = "SELECT * FROM kategori WHERE id_kategori = '$_GET[id]'";
			$tampil = mysqli_query($connect, $sql);
			while($hasil=mysqli_fetch_array($tampil)){
				$id_kategori = $_GET['id'];
				$kategori = $hasil['kategori'];
			}
		?>
	<center>
	<form action="Proses_Kategori.php?aksi=update" method="POST">
		<table>
			<tr>
				<td>id_kategori</td>
				<td>:</td>
				<td><input type="text" name="id_kategori" value="<?= $id_kategori?>"></td>
			</tr>
			<tr>
				<td>kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori" value="<?= $kategori?>"></td>
			</tr>
			<tr>
				<td rowspan="3"><input type="submit" name="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>