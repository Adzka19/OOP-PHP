<?php 	
include('koneksi.php');
$db = new database();
$data = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah.php">Tambah Data</a>
<table border="1">
		<tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Warga Negara</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Asal SMP</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Penghasilan Ortu</th>
            <th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
	      ?>
			<tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['tempat_lahir']; ?></td>
                <td><?php echo $row['tanggal_lahir']; ?></td>
                <td><?php echo $row['warga_negara']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['nomor_hp']; ?></td>
                <td><?php echo $row['asal_smp']; ?></td>
                <td><?php echo $row['nama_ayah']; ?></td>
                <td><?php echo $row['nama_ibu']; ?></td>
                <td><?php echo $row['penghasilan_ortu']; ?></td>
                <td><a href="edit.php">Update</a>
			  <a href="prosesdata.php">Delete</a>
		    </td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>