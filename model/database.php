<?php
    $hostname = "modonoob.net";
    $dbname = "e04_julieprodb";
    $db_username = "internal";
    $db_password = "hunter2";

    try {
        $db = new PDO("mysql:host=$hostname;dbname=$dbname", $db_username, $db_password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>