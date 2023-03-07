<?php
    require '../../database/koneksi.php';
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $success = FALSE;
    $query = "SELECT * FROM `users`";
    
    $result = mysqli_query($conn, $query);  
    foreach($result as $user){
        if($username == $user['username']){
            if($password == $user['password']){
                $_SESSION['isLogin'] = TRUE;
                $success = TRUE;
                break;  
            }
        }
    }

    if($success){
        header('location: /hospital_website/admin/');
    } else {
        header('location: /hospital_website/admin/pages/login/');
    }
?>