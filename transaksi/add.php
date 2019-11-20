<?php 
 require_once 'config.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$lapangan= $_POST['lapangan'];
 	$user = $_POST['status'];
 	$status = $_POST['status'];
    $tanggal = $_POST['tanggal'];
 	$jam_mulai = $_POST['jam_mulai'];
 	$jam_akhir = $_POST['jam_akhir'];
 	$total = $_POST['total'];

    $query = "INSERT INTO `transaksi`(`id_lapangan`, `id_user`, `id_status`, `tanggal_transaksi`, `jam_mulai`, `jam_akhir`, `total`) VALUES ('$lapangan','$user', '$status','$tanggal','$jam_mulai','$jam_akhir','$total')"; 
     
    $exeQuery = mysqli_query($conn, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>