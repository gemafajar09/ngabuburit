<?php

include "koneksi.php";
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$simpan = $con->query("INSERT INTO `tb_user`(`nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `pekerjaan`) VALUES ('$nama','$tempat','$tanggal','$jenis_kelamin','$alamat','$pekerjaan')");

// json_encode berfuingsi untuk mengubah data menjadi data object atau mengirim dalam bentuk json ke file AJAX 
if($simpan == TRUE){
    echo json_encode(['pesan' => 'Berhasil']); 
}else{
    echo json_encode(['pesan' => 'ERROR']);
}