<?php
//Je récpuère ici les deux "programmes" pour récupérer et pouvoir utiliser les variables plus bas dans le code
include('../../controllers/more-info-cours.php');
include('../../controllers/more-info-user.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page présentant les informations détaillées du cours <?php echo $code; ?>">
    <!--Ici j'include les scripts bootstrap stockés dans le fichier cdn.php pour plus de facilités lors de la mise en page / css-->
    <?php include('../../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../../style/main.css">
    <title>Plus d'information sur le cours <?php echo $code; ?></title>
</head>
<header>
    <?php
    //Je récupère ici le menu pour plus de facilité lors de modifications (ajout de liens, changement url etc)
    include('../../views/partials/menu.php');
    ?>
</header>

<body>
    <main>

        <h1>Plus d'informations sur le cours <?php echo $code; ?></h1>
        <div class="container">
            <div class="row">
                <?php
                //Ici on insère les valeurs dans l'html via php.
                //Pour info, pour les images j'ai choisi de les nommer 1.jpg, 2.jpg etc
                //Comme ça lors de la génération j'insère l'image correspondante au bon $id de la BDD
                echo '<div class="wrapper-card col-lg-4 col-6">
               <div class="wrapper-img"><img src="http://localhost/TP-consolidation-prog-JosephChanteclair/medias/cours/' . $idCours . '.jpg" alt="Logo HTML5">
               </div><h2>' . $nomCours . '</h2>
               <h3>' . $code . '</h3>
               <h3>' . $prenom . '</h3>
               <h3>' . $nom . '</h3>
               <p>' . $trigramme . '<br>'
                    . $description . '</p>
               </div>';
                ?>
            </div>
        </div>
    </main>
</body>

</html>