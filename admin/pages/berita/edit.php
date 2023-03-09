<?php
    require '../../database/koneksi.php';

    $dir = '../../images/';
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    if(isset($_FILES['picture']) && !($_FILES['picture']['name'] == "")){
        $oldPicture = $_POST['oldpict'];
        chmod($oldPicture, 0777);
        unlink(realpath($oldPicture));
        $picture = $_FILES['picture'];
        $pictureName = strtolower($dir . "berita/" . strval(time()) . "_" . $picture['name']);
        move_uploaded_file($picture["tmp_name"], $pictureName);
        unlink($oldPicture);
        $query = "UPDATE `berita` SET `judul` = '" . $judul . "', `isi` = '" . $isi ."',`picture` = '" . $pictureName . "' WHERE `berita`.`id` = " . $id;
    } else {
        $query = "UPDATE `berita` SET `judul` = '" . $judul . "', `isi` = '" . $isi ."' WHERE `berita`.`id` = " . $id;
    }

    $result = mysqli_query($conn, $query);

    if($result){
        header('location: /hospital_website/admin/pages/berita');
    } else {
        echo 'Something Went Wrong!';
    }
?>