<?php
    require '../../database/koneksi.php';
    $dir = '../../images/';
    $id = $_POST['id'];
    $namaDokter = $_POST['nama'];
    $pelayanan = $_POST['pelayanan'];
    $tanggal = $_POST['tanggal'];
    $masuk = $_POST['masuk'];
    $pulang = $_POST['pulang'];
    $masuk = $tanggal . " " . $masuk;
    $pulang = $tanggal . " " . $pulang;
    if(isset($_FILES['picture']) && !($_FILES['picture']['name'] == "")){
        $oldPicture = $_POST['oldpict'];
        chmod($oldPicture, 0777);
        unlink(realpath($oldPicture));
        $picture = $_FILES['picture'];
        $pictureName = strtolower($dir . "dokter/" . strval(time()) . "_" . $picture['name']);
        move_uploaded_file($picture["tmp_name"], $pictureName);
        unlink($oldPicture);
        $query = "UPDATE `jadwal` SET `nama_dokter` = '" . $namaDokter . "', `pelayanan` = '" . $pelayanan . "', `jadwal_masuk` = '" . $masuk . "', `jadwal_pulang` = '" . $pulang . "', `picture` = '" . $pictureName . " ' WHERE  `jadwal`.`id` = " . $id;
    } else {
        $query = "UPDATE `jadwal` SET `nama_dokter` = '" . $namaDokter . "', `pelayanan` = '" . $pelayanan . "', `jadwal_masuk` = '" . $masuk . "', `jadwal_pulang` = '" . $pulang . "' WHERE  `jadwal`.`id` = " . $id;
    }

    $result = mysqli_query($conn, $query);  

    if($result){
        header('location: /hospital_website/admin/pages/dokter');
    } else {
        echo 'Something Went Wrong!';
    }
?>