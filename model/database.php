<?php
    $dbname = "e04_julieprodb";
    $username = "mgs_user";
    $password = "pa55word";

    try {
        $db = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>