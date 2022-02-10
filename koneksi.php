<?php
class database{
			
var $host = "localhost";
var $username = "root";
var $password = "";
var $database = "db_siswa";
var $koneksi = "";
function __construct(){
$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);

	if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	
}
			
				function tampil_data()
				{
					$data = mysqli_query($this->koneksi,"select * from daftar_siswa");
					while($row = mysqli_fetch_array($data)){
						$hasil[] = $row;
					}
					return $hasil;
				}
			
				function tambah_data($nama,$tempat_lahir,$tanggal_lahir,$warga_negara,$alamat,$email,$nomor_hp,$asal_smp,$nama_ayah,$nama_ibu,$penghasilan_ortu)
				{
					mysqli_query($this->koneksi,"insert into daftar_siswa values ('','$nama','$tempat_lahir','$tanggal_lahir','$warga_negara','$alamat','$email','$nomor_hp','$asal_smp','$nama_ayah','$nama_ibu','$penghasilan_ortu'");
				}
			
				function get_by_id($id_barang)
				{
					$query = mysqli_query($this->koneksi,"select * from daftar_siswa where id_barang='$id_barang'");
					return $query ->fetch_array();
				}
			
				function update_data($nama,$tempat_lahir,$tanggal_lahir,$warga_negara,$alamat,$email,$nomor_hp,$asal_smp,$nama_ayah,$nama_ibu,$penghasilan_ortu)
				{
					$query = mysqli_query($this->koneksi,"update daftar_siswa set nama ='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',warga_negara='$warga_negara', alamat='$alamat',email='$email', nomor_hp='$nomor_hp', asal_smp='$asal_smp', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', penghasilan_ortu='$penghasilan_ortu', where id_barang=-'");
				}
			
				function delete_data($id_barang)
				{
					$query = mysqli_query($this->koneksi,"delete from daftar_siswa where id_barang='$id_barang'");
				}
			}
			?>