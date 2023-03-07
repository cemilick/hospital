<?php
    require '../../database/koneksi.php';

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $created_at = date("Y-m-d");

    $query = "INSERT INTO `berita` (`id`, `judul`, `isi`, `created_at`) VALUES ('','" . $judul . "','" . $isi . "','" . $created_at . "')";

    $result = mysqli_query($conn, $query);

    if($result){
        header('location: /hospital_website/admin/pages/berita');
    } else {
        echo 'Something Went Wrong!';
    }
?>