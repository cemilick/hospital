<?php
    require '../../database/koneksi.php';

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $query = "UPDATE `jadwal` SET `judul` = '" . $judul . "', `isi` = '" . $isi ."' WHERE `berita`.`id` = " . $id;

    $result = mysqli_query($conn, $query);

    if($result){
        header('location: /hospital_website/admin/pages/dokter');
    } else {
        echo 'Something Went Wrong!';
    }
?>