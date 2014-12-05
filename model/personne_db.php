<?php
require_once('database.php');
function get_type($username, $password) {
    global $db;
    $usernameQuery = "SELECT username FROM personne
                    WHERE username='$username'";
    $checkUsername = $db->query($usernameQuery)->fetch();
    if ($checkUsername[0] == $username) {
        $passwordQuery = "SELECT password FROM personne
        WHERE password='$password' AND username='$username'";
        $checkPassword = $db->query($passwordQuery)->fetch();
        if ($checkPassword[0] == $password) {
            $query = "SELECT type FROM personne
                    WHERE username='$username' AND password='$password'";
            $type = $db->query($query)->fetch();
            return $type[0];
        } else {
            return -1;
        }
    } else {
        return -2;
    }
}
/*Retourne 0 et insert une personne si la requete fonctionne;
  Retourne -1 si le username existe deja;*/
function create_personne($username,$passowrd,$firstName,$lastName,$type){
    global $db;
    $usernameQuery = "SELECT username FROM personne
                    WHERE username='$username'";
    $checkUsername = $db->query($usernameQuery)->fetch();
    if ($checkUsername[0] == $username) {
        $insertQuery = "INSERT INTO personne (username,password,firstName,lastName,[type])
                        VALUES ($$username,$$passowrd,$$firstName,$lastName,$type)";
        $db->exec($insertQuery);
        return 0;
    } else {
        return -1;
    }
}
/*Retourne le idPersonne selon le username ou retourne -1 si le username n'existe pas*/
function get_idPersonne($username){
    global $db;
    $usernameQuery = "SELECT username FROM personne
                    WHERE username='$username'";
    $checkUsername = $db->query($usernameQuery)->fetch();
    if ($checkUsername[0] == $username) {
        $selectQuery = "SELECT idPersonne FROM personne
                        WHERE username='$username'";
        $id=$db->query($selectQuery)->fetch();
        return $id[0];
    } else {
        return -1;
    }
}

?>