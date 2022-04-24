<?php
include('./connexion.php');
try
{   $insert = $bdd->prepare('DELETE FROM abonnes WHERE id=?');
    $insert->execute(array($_GET['id']));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
header('Location: ../php/list.php?supprimer=1');

?>