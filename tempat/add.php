<?php 
 require_once 'config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$nama = $_POST['nama'];
 	$kota = $_POST['kota'];
 	$alamat = $_POST['alamat'];
 	$maps = $_POST['maps'];
 	$hari = $_POST['hari'];
 	$buka = $_POST['tutup'];
 	$kategori = $_POST['kategori'];

    $query = "INSERT INTO `tempat`(`id_tempat`, `kota_tempat`, `alamat_tempat`, `maps_tempat`, `hari_kerja`, `jam_buka`, `jam_tutup`, `id_kategori`) VALUES ('$nama','$kota', '$alamat', '$maps', '$hari', '$buka', '$kategori')"; 
     
    $exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>