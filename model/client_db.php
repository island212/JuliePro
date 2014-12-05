<?php
/*type 2 = client*/
function create_client($adresse, $cellulaire, $courriel, $cp, $dateInscription, $dateNaissance, $idPersonne, $telephone, $ville){
    global $db;

    $query = "INSERT INTO `client`
    (`telephone`, `cellulaire`, `adresse`, `ville`, `cp`, `dateNaissance`, `dateInscription`, `courriel`, `Personne_idPersonne`)
    VALUES ('.$telephone.','.$cellulaire.','.$adresse.','.$ville.','.$cp.','.$dateNaissance.','.$dateInscription.','.$courriel.', '.$idPersonne.')";

    $db->query($query);
}

?>
