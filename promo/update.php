<?php 
 require_once 'config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$id = $_POST['id'];
 	$nama = $_POST['nama'];
 	$link = $_POST['link'];
 	$image = $_POST['image'];

 	$query = "UPDATE  lapangan SET nm_promo = '$nama',link_promo = '$link', img_promo = '$image' WHERE id_promo='$id'";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }
 ?>