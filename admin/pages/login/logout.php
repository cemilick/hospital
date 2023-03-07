<?php
    session_start();

    $_SESSION['isLogin'] = FALSE;

    header('location: /hospital_website/admin/pages/login');
?>