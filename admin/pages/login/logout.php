<?php
    session_start();

    $_SESSION['isLogin'] = FALSE;
    $_SESSION['message'] = 'Sukses logout, silahkan login kembali!';
    $_SESSION['type'] = 'info';
    header('location: /hospital_website/admin/pages/login');
?>