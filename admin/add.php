<?php 
require_once '../config/config.php'; 

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$nama = $_POST['nama'];
 	$email = $_POST['email'];
    $password = $_POST['password'];
    $tempat = $_POST['tempat'];
     
 	$query = "INSERT INTO `admin`(`nm_admin`, `email_admin`, `pass_admin`, `id_tempat`) VALUES ('$nama','$email','$password', '$tempat')";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>