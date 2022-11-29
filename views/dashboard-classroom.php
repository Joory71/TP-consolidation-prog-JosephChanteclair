<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Page présentant les différents cours sous forme de 'carte résumée'">
    <!--Ici j'include les scripts bootstrap stockés dans le fichier cdn.php pour plus de facilités lors de la mise en page / css-->
    <?php include('../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../style/main.css">
    <title>Dashboard Cours</title>
</head>
<header>
    <?php
    //Je récupère ici le menu pour plus de facilité lors de modifications (ajout de liens, changement url etc)
    include('../views/partials/menu.php');
    ?>
</header>

<body>
    <main>
        <h1>Dashboard Cours</h1>
        <div class="container">

                <?php
                echo '<div class="row">';
                include('../controllers/card-cours.php');
                echo '</div>';
                ?>

        </div>
    </main>
</body>

</html>