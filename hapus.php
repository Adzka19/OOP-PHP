<?php
include 'koneksi.php';
$id = $_GET["iaction"];

    $query = "DELETE FROM daftar_siswa WHERE id_barang='$id_barang' ";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='tampil_data.php';</script>";
    }
?>