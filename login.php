<?php
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    require_once('model/personne_db.php');

    switch($action) {
        case 'login':
            echo(get_type($username, $password));
            break;
    }

    
?>