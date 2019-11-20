<?php 
require_once '../config/config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $id= $_POST['id'];
    $lapangan= $_POST['lapangan'];
    $user = $_POST['status'];
    $status = $_POST['status'];
    $tanggal = $_POST['tanggal'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_akhir = $_POST['jam_akhir'];
    $total = $_POST['total'];
    
 	$query = "UPDATE `transaksi` SET `id_lapangan`='$lapangan',`id_user`='$user',`id_status`='$status',`tanggal_transaksi`='$tanggal',`jam_mulai`='$jam_mulai',`jam_akhir`='$jam_akhir',`total`='$total' WHERE `id_transaksi`='$id'";

 	$exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>