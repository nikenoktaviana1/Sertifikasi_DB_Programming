<!DOCTYPE html>
<html>
<head>
	<title>form kategori</title>
</head>
<body>
	<center>
	<table><tr><td>
		<form method="POST" action="Proses_Buku.php?aksi_buku=input">
			<table>
			<tr>
				<td>Id Buku</td>
				<td>:</td>
				<td><input type="text" name="id_buku" placeholder="masukkan id buku"></td>
			</tr>
			<tr>
				<td>Id Kategori</td>
				<td>:</td>
				<td><input type="text" name="id_kategori" placeholder="masukkan id kategori"></td>
			</tr>
			<tr>			</tr>

				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" placeholder="masukkan judul"></td>
			<tr>
				<td>ISBN</td>
				<td>:</td>
				<td><input type="text" name="isbn" placeholder="masukkan ISBN"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit" placeholder="masukkan penerbit"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis" placeholder="masukkan penulis"></td>
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