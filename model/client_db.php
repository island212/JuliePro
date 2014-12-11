<?php
/*type 2 = client*/
function create_client($adresse, $cellulaire, $courriel, $cp, $dateInscription, $dateNaissance, $idPersonne, $telephone, $ville){
    global $db;

    $query = "INSERT INTO client (telephone, cellulaire, adresse, ville, cp, dateNaissance, dateInscription, courriel, Personne_idPersonne)
              VALUES ('.$telephone.','.$cellulaire.','.$adresse.','.$ville.','.$cp.','.$dateNaissance.','.$dateInscription.','.$courriel.', '.$idPersonne.')";

    $db->exec($query);
}

/*Retourne les info sur le client avec plus de details*/
function get_infoClient_detail($idClient){
    global $db;
    $query = "SELECT telephone, cellulaire, adresse, ville, cp, dateNaissance, dateInscrition, courriel FROM client
              WHERE idClient = $idClient";
    $client = $db->query($query)->fetch();
    return $client;
}

?>
