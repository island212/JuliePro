<?php
require_once('database.php');
function get_type($username,$password){
    global $db;
    $query="SELECT type FROM Personne
            WHERE username='$username',password='$password'";
    $type=$db->query($query);
    switch($type){
        case 0:
            return 'Super-utilisateur';
            break;
        case 1:
            return 'Entraineur';
            break;
        case 2:
            return 'Client';
            break;
    }
}


?>