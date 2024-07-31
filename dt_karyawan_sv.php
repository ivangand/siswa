<?php
session_start(); 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$id_karyawan = $_POST['id_karyawan'];
	$nama = $_POST['nama'];
	$tmp_tgl_lahir = $_POST['tmp_tgl_lahir'];
	$jenkel = $_POST['jenkel'];
	$agama = $_POST['agama'];
}

$query = "INSERT INTO tb_karyawan set id_karyawan='$id_karyawan', nama='$nama', tmp_tgl_lahir='$tmp_tgl_lahir', jenkel='$jenkel', agama='$agama'";
mysqli_query($koneksi, $query);

if ($query) {
	header("location: datakaryawan.php");
}else{
	echo "gagal";
}

 ?>