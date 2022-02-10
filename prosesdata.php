<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add"){
	$koneksi->tambah_data ( $_POST['nama'],$_POST['tempat_lahir'],$_POST['tanggal_lahir'],$_POST['warga_negara'],$_POST['alamat'],$_POST['email'],$_POST['nomor_hp'],$_POST['asal_smp'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['penghasilan_ortu'] );
	header('location:tampil_data.php');
}
elseif($action=="update"){
	$koneksi->update_data($_POST['nama'],$_POST['tempat_lahir'],$_POST['tanggal_lahir'],$_POST['warga_negara'],$_POST['alamat'],$_POST['email'],$_POST['nomor_hp'],$_POST['asal_smp'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['penghasilan_ortu'] );
	header('location:tampil_data.php');
}
elseif($action=="delete"){
	$id_barang = $_GET['id_barang'];
	$koneksi->delete_data($id);
	header('location:tampil_data.php');
}
?>