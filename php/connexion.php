<?php 
 try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'Jokeru17', 'Kakare45');
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
    
    
    
?>
