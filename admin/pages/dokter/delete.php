<?php
    require '../../database/koneksi.php';

    $id = $_POST['id'];

    $query = "SELECT `picture` FROM `jadwal` WHERE `jadwal`.`id` = " . $id;
    $result = mysqli_query($conn, $query);
    $oldPicture = mysqli_fetch_assoc($result)['picture'];
    chmod($oldPicture, 0777);
    unlink(realpath($oldPicture));
    
    $query = "DELETE FROM `jadwal` WHERE `jadwal`.`id` = " . $id;
    $result = mysqli_query($conn, $query);
?>