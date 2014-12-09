<?php
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    if($action == 'home') {
        include('home.php');
    }
    else if($action == 'list_clients') {
        require('../model/personne_db.php');
        $clients = get_listeClient(2);
        include('client_list.php');
    }
}
?>