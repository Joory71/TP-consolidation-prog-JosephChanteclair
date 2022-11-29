<?php
//Je récupère ici la connection à la bdd
include('../models/bdd.php');

$maxLigne = 3;
$cpt = 0;
$req = $bdd->query("SELECT * FROM users");

foreach ($req as $row) {
    $cpt++;
    //Là je gènère le html des "cartes",que l'on retrouve ne front, avec les infos issues de la BDD
    echo '<div class="wrapper-card col-lg-3 col-6 mx-auto"><a href="../views/info-user/' . $row['id'] . '.php"><div class="wrapper-img"><img src="../medias/avatars/' . $row['id'] . '.jpg" alt="photo"></div><h2>' . $row['nom'] . '</h2><h3>' . $row['prenom'] . '</h3><p>' . $row['role'] . '</p></a></div>';
    //Si le résultat du compteur divisé par le nombre max de cartes par ligne différent de 1 on ne fait rien (donc en gros si on a moins de 3 éléments sur la ligne ou 3 éléments)
    if ($cpt / $maxLigne != 1) {
        //Sinon on ajoute un saut de ligne et on réinitialise le compteur à 0
    } else {
        echo '<br>';
        $cpt = 0;
    }
}
$bdd = null;
