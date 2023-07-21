<?php


define('HOST', '103.219.251.244');
define('USER', 'adityaan_wisata_kota');
define('PASS', 'VkA;7!_y^VyE');
define('DB', 'adityaan_wisata_kota_palembang');

$db_connect = mysqli_connect( HOST, USER, PASS, DB) or die (' belum connect');

header('Content-Type: application/json');

?>