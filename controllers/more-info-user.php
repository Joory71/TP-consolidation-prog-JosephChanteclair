<?php
//Je récupère ici la connection à la bdd
include('../../models/bdd.php');
//Ici je récupère l'url de la page
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//et je conserve le 5 ème caractère en partant de la fin.
//Par exemple pour l'url "http://localhost/TP-consolidation-prog-JosephChanteclair/views/info-user/2.php" on récupère "2".
$idUser= substr( $actual_link, -5, 1);
$req=$bdd->prepare("SELECT * FROM users where id = $idUser");
$req->execute();

/* Récupération de toutes les lignes du jeu de résultats */

$result=$req->fetchAll();
foreach ($result as $row => $a) {
    //Je stock les valeurs dans de nouvelles variables pour plus de facilité d'intégration derrière
    $nom = $a['nom'];
    $prenom = $a['prenom'];
    $role = $a['role'];
    $adresse = $a['adresse'];
    $telephone = $a['telephone'];
}
$bdd = null;
?>