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
<div class="row justify-content-center container2 mt-5 ">
        

                
            <form action='index.php' method='post' class="col-md-6 form bg-opacity-75 bg-white pb-3">
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
                      
                        <button  type='submit' class=' col-6 envoi btn btn-primary'>Se connecter </button>
                      
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
</html>
