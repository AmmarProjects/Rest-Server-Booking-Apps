<?php 
require_once '../config/config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $id = $_POST['id_superadmin'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tempat = $_POST['tempat'];
    $saldo = $_POST['saldo'];
    
 	$query = "UPDATE `superadmin` SET `nm_superadmin`=$nama,`email_superadmin`=$email,`pass_superadmin`=$password,`id_tempat`=$tempat,`saldo_superadmin`=$saldo WHERE id_superadmin='$id'";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>