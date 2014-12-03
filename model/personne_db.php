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
?>