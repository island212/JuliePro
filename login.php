<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    else {
        include('errors/login_failed.php');
    }

    
?>