<?php 
require_once '../config/config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $id = $_POST['id_admin'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tempat = $_POST['tempat'];
    $saldo = $_POST['saldo'];
    
 	$query = "UPDATE `admin` SET `nm_admin`=$nama,`email_admin`=$email,`pass_admin`=$password,`id_tempat`=$tempat,`saldo_admin`=$saldo WHERE id_admin='$id'";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>