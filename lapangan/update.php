<?php 
 require_once 'config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$id = $_POST['id'];
 	$nama = $_POST['nama'];
 	$harga = $_POST['harga'];
 	$tempat = $_POST['tempat'];

 	$query = "UPDATE  lapangan SET nm_lapangan = '$nama',harga_lapangan = '$harga', id_tempat = '$tempat' WHERE id_lapangan='$id'";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>