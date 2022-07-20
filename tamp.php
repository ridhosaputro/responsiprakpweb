<html>
	<head>
		<title>My Guest Book</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">PESAN DISINI </font></strong></div>
			<form name="form1" method="POST" action="pros.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>menu martabak</td>
						<td><input name="makanan" type="text" id="makanan"></td> </tr>
					</tr>

					<tr>
						<td>Tipe </td>
						<td>
							<select name="tipe" id="tipe">
						<option>Pandan</option>
						<option>Original</option>
						<option>Red velvet</option>
						<option>Black forest</option>
						</td>
					</select>
					</tr>
					<tr>
						<td>Catatan</td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="liht.php">::Lihat Rincian Pesanan::
		</a></strong></div>

	</body>
</html>