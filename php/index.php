<?php
include('./connexion.php');
try
{   $insert = $bdd->prepare('INSERT INTO abonnes (nom, prenom, date_naiss,debut_ab,numero,email)     VALUES(?, ?, ?, ?, ?,?)');
    $insert->execute(array($_POST['nom'], $_POST['prenom'], $_POST['date_naiss'], $_POST['debut_ab'], $_POST['numero'], $_POST['email']));
    $insert->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
header('Location: ../php/inscription.php#last?ok=1');
?>