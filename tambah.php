<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="prosesdata.php?action=add">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir"/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" class="form-control" name="tanggal_lahir"></input></td>
	</tr>
	<tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="warga_negara"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email"/></td>
	</tr>
    <tr>
		<td>Nomor HP</td>
		<td>:</td>
		<td><input type="text" name="nomor_hp"/></td>
	</tr>
    <tr>
		<td>Asal SMP</td>
		<td>:</td>
		<td><input type="text" name="asal_smp"/></td>
	</tr>
    <tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="nama_ayah"/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="nama_ibu"/></td>
	</tr>
    <tr>
		<td>Penghasilan Ortu</td>
		<td>:</td>
		<td><input type="text" name="penghasilan_ortu"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>