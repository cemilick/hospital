<?php
    require '../../database/koneksi.php';

    $dir = '../../images/';
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $created_at = date("Y-m-d");
    if(isset($_FILES['picture']) && !($_FILES['picture']['name'] == "")){
        $picture = $_FILES['picture'];
        $pictureName = strtolower($dir . "berita/" . strval(time()) . "_" . $picture['name']);
        move_uploaded_file($picture["tmp_name"], $pictureName);
        $query = "INSERT INTO `berita` (`id`, `judul`, `isi`, `created_at`, `picture`) VALUES ('','" . $judul . "','" . $isi . "','" . $created_at . "','" . $pictureName . "')";
    } else {
        $query = "INSERT INTO `berita` (`id`, `judul`, `isi`, `created_at`) VALUES ('','" . $judul . "','" . $isi . "','" . $created_at . "')";
    }

    $result = mysqli_query($conn, $query);

    if($result){
        header('location: /hospital_website/admin/pages/berita');
    } else {
        echo 'Something Went Wrong!';
    }
?>