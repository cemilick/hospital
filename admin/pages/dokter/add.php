<?php
    require '../../database/koneksi.php';

    $namaDokter = $_POST['nama'];
    $pelayanan = $_POST['pelayanan'];
    $tanggal = $_POST['tanggal'];
    $masuk = $_POST['masuk'];
    $pulang = $_POST['pulang'];
    $masuk = $tanggal . " " . $masuk;
    $pulang = $tanggal . " " . $pulang;

    $query = "INSERT INTO `jadwal` (`id`, `nama_dokter`, `pelayanan`, `jadwal_masuk`, `jadwal_pulang`) VALUES ('','" . $namaDokter . "','" . $pelayanan . "','" . $masuk . "','" . $pulang . "')";

    $result = mysqli_query($conn, $query);

    if($result){
        header('location: /hospital_website/admin/pages/dokter');
    } else {
        echo 'Something Went Wrong!';
    }
?>