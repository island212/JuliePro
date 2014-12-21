<?php
require_once('database.php');

function create_client_entraineur($idEntraineur,$idClient){
    global $db;

    $query = "INSERT INTO entraineur_client (Personne_idPersonne, Client_idClient)
              VALUES ('$idEntraineur', '$idClient')";

    $db->exec($query);
}


?>