<?php 
require_once '../config/config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $id = $_POST['id_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tempat = $_POST['tempat'];
    
 	$query = "UPDATE `user` SET `nm_user`=$nama,`email_user`=$email,`pass_user`=$password,`id_tempat`=$tempat WHERE id_user='$id'";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>