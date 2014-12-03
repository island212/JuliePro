<?php
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    require_once('model/database.php');

    switch($action) {
        case 'login':
            echo('LOGIN FULL SUCCESSFUL GENRE STYLE!');
            break;
    }

    
?>