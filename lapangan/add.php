<?php 
 require_once 'config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$nama = $_POST['nama'];
 	$harga = $_POST['harga'];
 	$tempat = $_POST['tempat'];

    $query = "INSERT INTO `admin`(`nm_lapangan`, `harga_lapangan`, `id_tempat`) VALUES ('$nama','$email', '$tempat')"; 
     
    $exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>