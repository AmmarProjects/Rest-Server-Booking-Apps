<?php 
require_once '../config/config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];
    $alamat = $_POST['alamat'];
    $maps = $_POST['maps'];
    $hari = $_POST['hari'];
    $buka = $_POST['tutup'];
    $kategori = $_POST['kategori'];
    
 	$query = "UPDATE `tempat` SET `nm_tempat`='$nama',`kota_tempat`='$kota',`alamat_tempat`='$alamat',`maps_tempat`='$maps',`hari_kerja`='$hari',`jam_buka`='$buka',`jam_tutup`='$tutup',`id_kategori`='$kategori' WHERE id_tempat='$id'";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>