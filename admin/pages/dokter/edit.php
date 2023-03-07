<?php
    require '../../database/koneksi.php';

    $id = $_POST['id'];
    $namaDokter = $_POST['nama'];
    $pelayanan = $_POST['pelayanan'];
    $tanggal = $_POST['tanggal'];
    $masuk = $_POST['masuk'];
    $pulang = $_POST['pulang'];
    $masuk = $tanggal . " " . $masuk;
    $pulang = $tanggal . " " . $pulang;

    $query = "UPDATE `jadwal` SET `nama_dokter` = '" . $namaDokter . "', `pelayanan` = '" . $pelayanan . "', `jadwal_masuk` = '" . $masuk . "', `jadwal_pulang` = '" . $pulang . "' WHERE  `jadwal`.`id` = " . $id;

    $result = mysqli_query($conn, $query);  

    if($result){
        header('location: /hospital_website/admin/pages/dokter');
    } else {
        echo 'Something Went Wrong!';
    }
?>