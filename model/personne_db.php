<?php
require_once('database.php');

/*Retourne la categorie d'une personne si le username et le password sont trouvés, -1 si le password est éronné ou -2 si le username n'est pas trouvé.*/
function get_type($username) {
    global $db;

    $query = "SELECT categorie
              FROM personne
              WHERE username='$username'";
    $type = $db->query($query)->fetch();

    return $type[0];
}
/*Retourne 0 et insert une personne si la requete fonctionne;
  Retourne -1 si le username existe deja;*/
function create_personne($username,$password,$firstName,$lastName,$type){
    global $db;

    $insertQuery = "INSERT INTO personne(username, password, firstName, lastName, categorie)
                    VALUES ('$username','$password','$firstName','$lastName','$type')";
    $db->exec($insertQuery);
}
/*Retourne le idPersonne selon le username ou retourne -1 si le username n'existe pas*/
function get_idPersonne($username){
    global $db;

    $query = "SELECT idPersonne
              FROM personne
              WHERE username='$username'";
    $id=$db->query($query)->fetch();

    return $id[0];
}

/*Retourne une liste de client selon le idPersonne d'un entraineur*/
function get_liste_client($idPersonne){
    global $db;

    $query = "SELECT personne.firstName, personne.lastName, personne.username, personne.password, client.adresse, client.cellulaire, client.courriel, client.cp, client.dateInscription, client.dateNaissance, client.telephone, client.ville
              FROM entraineur_client
              INNER JOIN client
              ON client.idClient = entraineur_client.Client_idClient
              INNER JOIN personne
              ON personne.idPersonne = client.Personne_idPersonne
              WHERE entraineur_client.Personne_idPersonne = '$idPersonne'";
    $listeClient = $db->query($query);

    return $listeClient;
}

/*Retourne tous les champs d'une personne*/
function get_info_personne($idPersonne){
    global $db;

    $query = "SELECT firstName, lastName, username, password, categorie, idPersonne
              FROM personne
              WHERE idPersonne='$idPersonne'";
    $infos = $db->query($query)->fetch();

    return $infos;
}

function check_username($username){
    global $db;

    $query = "SELECT COUNT(username)
              FROM personne
              WHERE username='$username'";
    $checkUsername = $db->query($query)->fetch();

    if($checkUsername[0] == 1){
        return true;
    }
    else{
        return false;
    }
}

function check_password($username, $password){
    global $db;

    $query = "SELECT COUNT(password)
              FROM personne
              WHERE username='$username' AND  password='$password'";
    $checkPassword = $db->query($query) ->fetch();

    if($checkPassword[0] == 1){
        return true;
    }
    else{
        return false;
    }
}