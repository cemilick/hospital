<?php
    require '../../database/koneksi.php';

    $id = $_POST['id'];

    $query = "DELETE FROM `jadwal` WHERE `jadwal`.`id` = " . $id;

    $result = mysqli_query($conn, $query);
?>