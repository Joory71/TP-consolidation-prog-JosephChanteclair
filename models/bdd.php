
<?php
try {
    //Connection à la BDD "tpconsolidationprog" avec l'identifiant 'root' et pas de mot de passe.
    $bdd = new PDO('mysql:host=localhost;dbname=tpconsolidationprog', 'root', '');
} catch (PDOException $e) {
    print "Erreur!:" . $e->getMessage() . "<br/>";
    die();
}
?>
