<?php
    $dbname = "e04_julieprodb";
    $db_username = "mgs_user";
    $db_password = "pa55word";

    try {
        $db = new PDO("mysql:host=localhost;dbname=$dbname", $db_username, $db_password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>