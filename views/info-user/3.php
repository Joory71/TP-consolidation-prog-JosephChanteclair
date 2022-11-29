<?php
//Je récpuère ici le "programme" pour récupérer et pouvoir utiliser les variables plus bas dans le code
include('../../controllers/more-info-user.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page présentant les informations détaillées de <?php echo $prenom; ?>">
    <!--Ici j'include les scripts bootstrap stockés dans le fichier cdn.php pour plus de facilités lors de la mise en page / css-->
    <?php include('../../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../../style/main.css">
    <title>Plus d'information sur <?php echo $prenom; ?></title>
</head>
<header>
    <?php
    //Je récupère ici le menu pour plus de facilité lors de modifications (ajout de liens, changement url etc)
    include('../../views/partials/menu.php');
    ?>
</header>

<body>
    <main>

        <h1>Plus d'informations sur <?php echo $prenom; ?></h1>
        <div class="container">
            <div class="row">
                <?php
                //Ici on insère les valeurs dans l'html via php.
                //Pour info, pour les images j'ai choisi de les nommer 1.jpg, 2.jpg etc
                //Comme ça lors de la génération j'insère l'image correspondante au bon $id de la BDD
                echo '<div class="wrapper-card col-lg-4 col-6">
               <div class="wrapper-img"><img src="http://localhost/TP-consolidation-prog-JosephChanteclair/medias/avatars/' . $idUser . '.jpg" alt="Photo de profil de Jihane">
               </div><h2>' . $nom . '</h2>
               <h3>' . $prenom . '</h3>
               <p>' . $role . '<br>'
                    . $adresse . '<br>'
                    . $telephone . '</p>
               </div>';
                ?>
            </div>
        </div>
    </main>
</body>

</html>