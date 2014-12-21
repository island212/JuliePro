<?php
require_once('../model/database.php');
require_once('../model/personne_db.php');
require_once('../model/client_db.php');
require_once '../model/entraineur_client_db.php';

if(isset($_GET['action'])) {
    $action = $_GET['action'];
    if($action == 'home') {
        include('home.php');
    }
    else if($action == 'list_clients') {
        session_start();
        $idEntraineur = $_SESSION["detailsPersonne"]["idPersonne"];
        $clients = get_liste_client($idEntraineur);
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

        $checkDate =

        if(create_personne($username, $password, $fname, $lname, 2) == -1){
            echo '<script language="javascript">';
            echo 'alert("Le nom d\'utilisteur existe deja")';
            echo '</script>';
        } /*2 = client*/
        $personneId = get_idPersonne($username);
        create_client($address, $cell, $courriel, $cp, $dInscription, $dNaissance, $personneId, $telephone, $ville);
        $idClient = get_idClient($personneId);
        session_start();
        $idEntraineur = $_SESSION["detailsPersonne"]["idPersonne"];
        create_client_entraineur($idEntraineur, $idClient);

        header("Location: .?action=list_clients");
    }
    else if($action == 'list_clients_tests') {
        session_start();
        $clients = get_liste_client($_SESSION['detailsPersonne']['idPersonne']);
        include('client_test_add.php');
    }
}
?>