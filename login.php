<?php
    session_start();
    include('php/connexion.php');
    $reponse = $bdd->query('SELECT COUNT(*) AS nb_admis FROM users');
    $donnees = $reponse->fetch();
    
    if ($donnees['nb_admis'] > 0)
    {
        $nb_admis = $donnees['nb_admis'];
    }
    if (isset($_POST['connect']))
    {
        if (empty($_POST['email']) || empty($_POST['password']))
        {
            
            echo "<script>alert('Veuillez remplir tous les champs !');</script>";
        }
        else
        {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
        $req = $bdd->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $req->execute(array(
            'email' => $email,
            'password' => $password
        ));
        $resultat = $req->fetch();
        if (!$resultat)
        {
            echo '<div class="alert alert-danger" role="alert">
            <strong>Erreur!</strong> Email ou mot de passe incorrect.
            </div>';
        }
        else
        {
            $_SESSION['nom'] = $resultat['nom'];

            $_SESSION['connect'] = 1;
            header('location: php/acceuil.php?connect=1');
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/inscription.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="assets/bootstrap5/js/bootstrap.bundle.js" defer></script>
    <title>Connexion</title>
</head>
<body class="container-fluid ">
        
    <nav>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a href="acceuil.php">
                <img src="assets/img/nouveau logo AUF.png" alt="logo" class="logo w-100 ">
            </div></a>
            <div class="col-md-8 titre col-sm-12">
                GESTIONNAIRE DES ABONNES
            </div>
        </div>
    </nav>
<!-- le corps de la page  --> 
<?php
if (isset($_GET['inscription']))
{
        echo '<div class="alert alert-success text-center " role="alert">
        <strong>Félicitation!</strong> Vous êtes inscrit.
        </div>';
}
?>
<div class="row justify-content-center container2 mt-5 ">
        

                
            <form action='' method='post' class="col-md-6 form bg-opacity-75 bg-white pb-3">
                <div class='row'>
            
                    <div class='col mt-5 text-center text-light mb-3'>
                       <h2 ><span class="p-2 bg-warning titre0">CONNEXION</span></h2>
                    </div>
                
                </div>
                  <div class='input-group input-group-sm  mb-3'>
                  <span class='input-group-text'  
                    
                    id='inputGroup-sizing-sm'>
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                    </span>
                    <input name='email' type='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm'placeholder="votre email" required
                     >
                  </div>
                  <div class='input-group input-group-sm  mb-3'>
                  <span class='input-group-text'  
                    
                    id='inputGroup-sizing-sm'>
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                    </span>
                    <input name='password' type='password' class='form-control' aria-label='Sizing example input' placeholder="Creer un mot de passe"  aria-describedby='inputGroup-sizing-sm'  required>
                  </div>
                  <div class='row justify-content-center '>
                      
                        <input  type='submit'name="connect" class=' col-4 envoi btn bg-primary text-light'  value="Se connecter">
                        <a class="col-4 envoi ms-2  btn btn-warning" href="index.php " id="inscription" >S'incription </a>
                  </div>
            </form>
        
    </div>

            <footer class="text-center text-text foo" style="background-color: #f1f1f1;">
                <div class="text-center text-light p-3" style="background-color:#A90A2F;">
                © 2022 Copyright: AUF
                </div>
            </footer> 
    </div>
</body>
<?php

if( isset($nb_admis) && $nb_admis > 0)
{
    echo '<script>
      let buton = document.getElementById("inscription");
        buton.style.display = "none";
    </script>';
}
?>
</html>
