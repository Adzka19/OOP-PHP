<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id_barang))
{
    $data_siswa = $db->get_by_id($id);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Siswa</h3>
<hr/>
<form method="post" action="prosesdata.php?action=update">
<input type="hidden" name="id_barang" value="<?php echo $data_siswa['id']; ?>"/>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_siswa['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir" value="<?php echo $data_siswa['tempat_lahir']; ?>"/></td>
	</tr>
    <tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir" value="<?php echo $data_siswa['tanggal_lahir']; ?>"/></td>
	</tr>
    <tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="warga_negara" value="<?php echo $data_siswa['warga_negara']; ?>"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?php echo $data_siswa['alamat']; ?>"/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?php echo $data_siswa['email']; ?>"/></td>
	</tr>
    <tr>
		<td>Nomor HP</td>
		<td>:</td>
		<td><input type="text" name="nomor_hp" value="<?php echo $data_siswa['nomor_hp']; ?>"/></td>
	</tr>
    <tr>
		<td>Asal SMP</td>
		<td>:</td>
		<td><input type="text" name="asal_smp" value="<?php echo $data_siswa['asal_smp']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="nama_ayah" value="<?php echo $data_siswa['nama_ayah']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="nama_ibu" value="<?php echo $data_siswa['nama_ibu']; ?>"/></td>
	</tr>
    <tr>
		<td>Penghasilan Ortu</td>
		<td>:</td>
		<td><input type="text" name="penghasilan_ortu" value="<?php echo $data_siswa['penghasilan_ortu']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>
