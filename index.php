<?php
    include('php/connexion.php');
    $reponse = $bdd->query('SELECT COUNT(*) AS nb_admis FROM users');
    $donnees = $reponse->fetch();
    if ($donnees['nb_admis'] > 0)
    {
        header ('Location: login.php');
    }
    else{


    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {
        if($_POST['password']==$_POST['password1']){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password=md5($password);
            $req=$bdd->prepare("INSERT INTO `users`(`nom`, `prenom`, `email`, `password`) VALUES (?,?,?,?)");
            $req->execute(array($nom,$prenom,$email,$password));
            header('location:login.php?inscription=1');
        }
        else{
            $non = 1;
        
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
    <title>Inscription</title>
</head>
<body class="container-fluid ">
        
    <nav>
        <div class="row">
            <div class="col-md-3 col-sm-12 h-20">
                <a href="acceuil.php">
                <img src="assets/img/nouveau logo AUF.png" alt="logo" class="logo w-100 "> </a>
            </div>
            <div class="col-md-8 titre col-sm-12">
                GESTIONNAIRE DES ABONNES
            </div>
        </div>
    </nav>
<!-- le corps de la page  --> 
<div class="row justify-content-center body ">    
            <form action='' method='post' id ="form"class="col-md-6 form bg-opacity-75 bg-white pb-3">
                <div class='row'>

                    <div class='col mt-5 text-center text-light mb-3'>
                       <h2 ><span class="p-2 bg-warning titre0">INSCRIPTION</span></h2>
                    </div>
                </div>
                <div class='input-group input-group-sm  mb-3'>
                <span class='input-group-text'  
                    
                    id='inputGroup-sizing-sm'>
                        <span class="material-symbols-outlined">
                            person_filled
                        </span>
                    </span>
                    <input name='nom' type='text', placeholder='NOM'
                    pattern = '[a-zA-Z]{1,20}'
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm  mb-3'>
                    <span class='input-group-text'  
                    
                    id='inputGroup-sizing-sm'>
                        <span class="material-symbols-outlined">
                            person_filled
                        </span>
                    </span>
                    
                    <input name='prenom' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm'
                    placeholder='PRENOMS'
                    pattern = "[a-zA-Z\s]{1,20}" required>
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
                  <div class='input-group input-group-sm  mb-3'>
                  <span class='input-group-text'  
                    
                    id='inputGroup-sizing-sm'>
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                    </span>
                    <input name='password1' type='password'
                    
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' placeholder="repeter le mot de passe" required>
                  </div>
                  <?php
                    if(isset($non)){
                        echo "<div class='alert alert-danger'>
                        <strong>Erreur!</strong> les mots de passe ne sont pas identiques
                        </div>";
                    }
                    ?>
                  <div class='row justify-content-center '>
                      
                        <button  type='submit' name ="inscription"class=' col-6 envoi btn btn-primary' >S'inscrire</button>
                      
                  </div>
            </form>
        </div>

            <footer class="text-center text-text mt-5" style="background-color: #f1f1f1;">
                <div class="text-center text-light p-3" style="background-color:#A90A2F;">
                ?? 2022 Copyright: <AUF></AUF>

                </div>
            </footer> 
    </div>
</body>
<script>
    let form =document.getElementById('form');
    form.addEventListener("submit", function (event) {
        if(form.password.value != form.password1.value){
            alert("les mots de passe ne sont pas identiques");
            form.password.value = "";
            form.password1.value = "";
            event.preventDefault();
            form.password.focus();
        }
    });

</script>                     
</html>
