<?php

require_once('helper.php');

parse_str(file_get_contents('php://input'),$value);

$id             = $value['id'];
$nama           = $value['nama'];
$alamat         = $value['alamat'];
$jam_buka_tutup = $value['jam_buka_tutup'];
$kordinat       = $value['kordinat'];
$gambar_url     = $value['gambar_url'];
$kategori       = $value['kategori'];
$deskripsi      = $value['deskripsi'];

$query = "UPDATE wisata SET nama = '$nama', alamat = '$alamat', jam_buka_tutup = '$jam_buka_tutup', kordinat = '$kordinat', gambar_url = '$gambar_url', kategori = '$kategori', 'deskripsi = $deskripsi', WHERE id = '$id'";
$sql   = mysqli_query($db_connect, $query);

if($sql){
    echo json_encode( array('message' => 'data telah diupdate!'));
}else{
    echo json_encode( array('message' => 'Maaf ada yang error'));
}

?>