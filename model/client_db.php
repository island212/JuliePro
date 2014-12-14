<?php
require_once('database.php');

/*type 2 = client*/
function create_client($adresse, $cellulaire, $courriel, $cp, $dateInscription, $dateNaissance, $idPersonne, $telephone, $ville, $idEntraineur){
    global $db;

    $query = "INSERT INTO client (telephone, cellulaire, adresse, ville, cp, dateNaissance, dateInscription, courriel, Personne_idPersonne)
              VALUES ('$telephone','$cellulaire','$adresse','$ville','$cp','$dateNaissance','$dateInscription','$courriel', '$idPersonne')";
    $db->exec($query);

    $idClientQuery="SELECT idClient
                    FROM client
                    WHERE idPersonne='$idPersonne'";
    $idClient = $db->query($idClientQuery);
    $entraineur_client_query = "INSERT INTO entraineur_client (Personne_idPersonne, Client_idClient)
                                VALUES ('$idEntraineur', '$idClient')";
    $db->exec($entraineur_client_query);
}

/*Retourne les info sur le client avec plus de details*/
function get_infoClient_detail($idClient){
    global $db;

    $query = "SELECT telephone, cellulaire, adresse, ville, cp, dateNaissance, dateInscrition, courriel
              FROM client
              WHERE idClient = '$idClient'";
    $client = $db->query($query)->fetch();

    return $client;
}

function get_idClient($idPersonne){
    global $db;

    $query="SELECT idClient
            FROM client
            WHERE idPersonne='$idPersonne'";
    $idClient = $db->query($query);

    return $idClient;
}

?>
