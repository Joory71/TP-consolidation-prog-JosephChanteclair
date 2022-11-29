<?php
//Je récupère ici la connection à la bdd
include('../models/bdd.php');
//Variable pour définir le nombre max de "cartes" par ligne
$maxLigne = 3;
$cpt = 0;
$req = $bdd->query("SELECT * FROM cours");
foreach ($req as $row) {
    //Ici, je fais en sorte de limiter le nombre de caractère du nom du cours à 20.
    //En gros, si le nom du cours fait plus de 20 caractères alors je le stoppe a 17 et je met 3 petits points...
    if (strlen($row['nomCours']) > 20) {
        $row['nomCours'] = substr($row['nomCours'], 0, 17) . '...';
    }
    //Là je gènère le html des "cartes",que l'on retrouve ne front, avec les infos issues de la BDD
    echo '<div class="wrapper-card col-lg-3 col-6 mx-auto">
        <a href="../views/info-cours/' . $row['id'] . '.php">
        <div class="wrapper-img">
        <img src="../medias/cours/' . $row['id'] . '.jpg" alt="photo">
        </div><h2>' . $row['code'] . '</h2><h3>' . $row['nomCours'] . '</h3>
        <p>' . $row['trigramme'] . '</p></a></div>';
    //Ici, sur chaque itération de la boucle foreach j'incrément le compteur de +1.
    $cpt++;
    //Si le résultat du compteur divisé par le nombre max de cartes par ligne différent de 1 on ne fait rien (donc en gros si on a moins de 3 éléments sur la ligne ou 3 éléments)
    if ($cpt / $maxLigne != 1) {
        //Sinon on ajoute un saut de ligne et on réinitialise le compteur à 0
    } else {
        echo '<br>';
        $cpt = 0;
    }
}
$bdd = null;
