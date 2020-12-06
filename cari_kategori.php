<!DOCTYPE html>
<html>
<head>
	<title>Cari Data</title>
</head>
<body>
<center>
<a href="form_kategori.php">[form kategori]</a>
	<form method="POST">
		<input type="text" name="cari_Kategori" placeholder="masukkan kategori yang ingin dicari">
		<input type="submit" name="submit" value="cari">
	</form>
	
	<table border="1">
		<tr>
			<td>Id Kategori</td>
			<td>Kategori</td>
			
		</tr>
		<?php
			if (isset($_POST['submit'])) {
				$cari = $_POST['cari_Kategori'];
				include 'Methods.php';
				$db = new database();
				foreach($db->cari_kategori($cari) as $hasil){
				$id = $hasil['id_kategori'];
				$kategori = $hasil['kategori'];
				echo "<tr>
					<td>$id</td>
					<td>$kategori</td>
					<td>
						<a href='edit_kategori.php?id=$id'>[Edit]</a>
						<a href='Proses_Kategori.php?id=$id&aksi=hapus' onclick='return confirm(\"Hapus data dengan id_kategori = $id ??\")'>[Hapus]</a>
					</td>
				</tr>";
				}
		}
		?>
	</table>
	<a href="tampil_kategori.php">[Lihat Data kategori]</a>
</center>
</body>
</html>