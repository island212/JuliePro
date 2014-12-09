<?php
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    if($action == 'home') {
        include('home.php');
    }
}
?>