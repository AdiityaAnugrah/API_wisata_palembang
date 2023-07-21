<?php

    require_once('helper.php');

    if(empty($_GET)){
        $query = mysqli_query( $db_connect, "SELECT * FROM wisata");
        $result= array();
        while ($row = mysqli_fetch_array($query)){
        array_push($result, array(
            'id' => $row['id'],
            'nama' => $row['nama'],
            'alamat' => $row['alamat'],
            'jam_buka_tutup' => $row['jam_buka_tutup'],
            'kordinat' => $row['kordinat'],
            'gambar_url' => $row['gambar_url'],
            'kategori' => $row['kategori'],
            'deskripsi' => $row['deskripsi'],

        ));
        

    }

    echo json_encode( array('wisata' => $result));

    }else{
        $query = mysqli_query( $db_connect, " SELECT * FROM wisata WHERE id=". $_GET ['id']);

        $result =  array();
        while($row = $query-> fetch_assoc()){
            $result = array(
                'id' => $row['id'],
                'nama' => $row['nama'],
                'alamat' => $row['alamat'],
                'jam_buka_tutup' => $row['jam_buka_tutup'],
                'kordinat' => $row['kordinat'],
                'gambar_url' => $row['gambar_url'],
                'kategori' => $row['kategori'],
                'deskripsi' => $row['deskripsi'],

            );
        }

        echo json_encode($result);
    }



?>