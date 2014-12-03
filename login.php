<?php
    if(isset($_POST['action'])) {
        $action = $_POST['action'];
    }

    require('model/database.php');
    switch($action) {
        case 'login':
            echo('LOGIN FULL SUCCESSFUL GENRE STYLE!');
            break;
    }

    
?>