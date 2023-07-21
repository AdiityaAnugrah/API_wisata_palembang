<?php

require_once('helper.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jam_buka_tutup = $_POST['jam_buka_tutup'];
$kordinat = $_POST['kordinat'];
$gambar_url = $_POST['gambar_url'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$query = "INSERT INTO wisata VALUES (null, '$nama', '$alamat', '$jam_buka_tutup', '$kordinat', '$gambar_url', '$kategori', '$deskripsi')";
$sql   = mysqli_query($db_connect, $query);

if($sql){
    echo json_encode( array('message' => 'data telah ditambahkan!'));
}else{
    echo json_encode( array('message' => 'Maaf ada yang error'));
}

?>