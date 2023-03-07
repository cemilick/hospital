<?php
    require '../../database/koneksi.php';

    $id = $_POST['id'];

    $query = "DELETE FROM `berita` WHERE `berita`.`id` = " . $id;

    $result = mysqli_query($conn, $query);
?>