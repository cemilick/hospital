<?php
    require '../../database/koneksi.php';
    $dir = "../../images/";
    $namaDokter = $_POST['nama'];
    $pelayanan = $_POST['pelayanan'];
    $tanggal = $_POST['tanggal'];
    $masuk = $_POST['masuk'];
    $pulang = $_POST['pulang'];
    $masuk = $tanggal . " " . $masuk;
    $pulang = $tanggal . " " . $pulang;
    if(isset($_FILES['picture']) && !($_FILES['picture']['name'] == "")){
        $picture = $_FILES['picture'];
        $pictureName = strtolower($dir . "dokter/" . strval(time()) . "_" . $picture['name']);
        move_uploaded_file($picture["tmp_name"], $pictureName);
        $query = "INSERT INTO `jadwal` (`id`, `nama_dokter`, `pelayanan`, `jadwal_masuk`, `jadwal_pulang`,`picture`) VALUES ('','" . $namaDokter . "','" . $pelayanan . "','" . $masuk . "','" . $pulang . "','" . $pictureName . "')";
    } else {
        $query = "INSERT INTO `jadwal` (`id`, `nama_dokter`, `pelayanan`, `jadwal_masuk`, `jadwal_pulang`,`picture`) VALUES ('','" . $namaDokter . "','" . $pelayanan . "','" . $masuk . "','" . $pulang . "','')";
    }

    $result = mysqli_query($conn, $query);

    if($result){
        header('location: /hospital_website/admin/pages/dokter');
    } else {
        echo 'Something Went Wrong!';
    }
?>