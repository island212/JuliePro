<?php
require('database.php');
function get_type($username, $password)
{
    global $db;
    $usernameQuery = "SELECT username FROM Personne
                    WHERE username='$username'";
    $checkUsername = $db->query($usernameQuery);
    if ($checkUsername == $username) {
        $passwordQuery = "SELECT password FROM Personne
        WHERE $password='$password'";
        $checkPassword = $db->query($passwordQuery);
        if ($checkPassword == $password) {
            $query = "SELECT type FROM Personne
                    WHERE username='$username',password='$password'";
            $type = $db->query($query);
            switch ($type) {
                case 0:
                    return "Super-utilisateur";
                    break;
                case 1:
                    return "Entraineur";
                    break;
                case 2:
                    return "Client";
                    break;
                default:
                    return "type non-valide";
                    break;
            }
        } else {
            return "Le mot de passe n'est pas valide"
        }
    } else {
        return "Le nom d'utilisateur n'existe pas";
    }
}
?>