<?php

require_once('../model/database.php');
require_once('../model/personne_db.php');
require_once('../model/client_db.php');

if(isset($_GET['action'])) {
    $action = $_GET['action'];
    if($action == 'home') {
        include('home.php');
    }
    else if($action == 'list_clients') {
        $clients = get_liste_client(2);
        include('client_list.php');
    }
    else if($action == 'add_client_form') {
        include('client_add.php');
    }
    else if($action == 'add_client') {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $address = $_POST['adresse'];
        $cell = $_POST['cellulaire'];
        $courriel = $_POST['courriel'];
        $cp = $_POST['cp'];
        $dInscription = $_POST['dateInscription'];
        $dNaissance = $_POST['dateNaissance'];
        $telephone = $_POST['telephone'];
        $ville = $_POST['ville'];


        session_start();

        create_personne($username, $password, $fname, $lname, 2);
        $personneId = get_idPersonne($username);
        create_client($address, $cell, $courriel, $cp, $dInscription, $dNaissance, $personneId, $telephone, $ville, $_SESSION["detailsPersonne"]["idPersonne"]);

        header("Location: .?action=list_clients");

    }
}
?>