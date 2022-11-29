<?php
//Je récupère ici la connection à la bdd
include('../../models/bdd.php');
//Ici je récupère l'url de la page
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//et je conserve le 5 ème caractère en partant de la fin.
//Par exemple pour l'url "http://localhost/TP-consolidation-prog-JosephChanteclair/views/info-user/2.php" on récupère "2".
$idCours= substr( $actual_link, -5, 1);

$req=$bdd->prepare("SELECT * FROM cours where id = $idCours");
$req->execute();

/* Récupération de toutes les lignes d'un jeu de résultats */

$result=$req->fetchAll();
foreach ($result as $row => $a) {
//Je stock les valeurs dans de nouvelles variables pour plus de facilité d'intégration derrière
    $code = $a['code'];
    $nomCours = $a['nomCours'];
    $trigramme = $a['trigramme'];
    $description = $a['description'];

}
$bdd = null;
