<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page présentant les différents utilisateurs sous forme de 'carte résumée'">
    <!--Ici j'include les scripts bootstrap stockés dans le fichier cdn.php pour plus de facilités lors de la mise en page / css-->
    <?php include('../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../style/main.css">
    <title>Dashboard Utilisateurs</title>
</head>
<header>
    <?php
    //Je récupère ici le menu pour plus de facilité lors de modifications (ajout de liens, changement url etc)
    include('../views/partials/menu.php');
    ?>
</header>

<body>
    <main>
        <h1>Dashboard utilisateurs</h1>
        <div class="container">
            <?php
            echo '<div class="row">';
            include('../controllers/card-users.php');
            echo '</div>';
            ?>
        </div>
        </div>
    </main>
</body>

</html>