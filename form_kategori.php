<!DOCTYPE html>
<html>
<head>
	<title>form kategori</title>
</head>
<body>
	<center>
	<table><tr><td>
		<form method="POST" action="Proses_Kategori.php?aksi=tambah">
			<table>
			<tr>
				<td>Id Kategori</td>
				<td>:</td>
				<td><input type="text" name="id_kategori" placeholder="masukkan id kategori"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori" placeholder="masukkan id kategori"></td>
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