<?php
    session_start();
    if (!isset($_SESSION['connect']))
    {
        header('location: ../login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../assets/bootstrap5/css/bootstrap.min.css'>
    <script src='../assets/bootstrap5/js/bootstrap.bundle.js' defer></script>
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel='stylesheet' href='../styles/index.css'>
    <link rel='stylesheet' href='../styles/ins.css'>
    <title>Enregitrement</title>
</head>
<body class='container-fluid'>
    <nav>
        <div class='row'>
            <div class='col-md-2 col-sm-12'>
                <a href='acceuil.php'>
                <img src='../assets/img/nouveau logo AUF.png' alt='logo' class='logo w-100 '>
                </a>
            </div>
            <div class='col-md-8 titre col-sm-12'>
                GESTIONNAIRE DES ABONNES
            </div>
            <div class="col-md-1 titre">
                <a href="../login.php">
                    <button type="button" class="btn btn-outline-danger ">
                    <span class="material-symbols-outlined">
                            logout
                    </span>
                    </button>
                </a>
        </div>
        </div>
    </nav>

<!-- le formulaire ici  -->

<?php 
if (isset($_GET['ok'])) {
    echo "<div class='alert  alert-success text-light text-center bg-success' id='alert'><h5>Enregistrement effectué avec succès</h5></div>";
}
?>
<div class='container-fluid corps'>
    <div class='row'>
        <div class='col-md-6 offset-md-3 col-sm-12 mt-5 text-light text-center demand'>
           <h3> ENREGISTREMENT D'UN NOUVEL ABONNE</h3>
        </div>
    </div>
    <div class='row container-fluid justify-content-evenly'>
        <div class='col-md-4 col-sm-12 offset-1'>
            <form action='../php/index.php' method='post'>
                <div class='row'>
                    <div class='col mt-5 text-center bg-warning text-light mb-3'>
                       <h4> NOUVEAU ABONNE</h4>
                    </div>
                </div>
                <div class='input-group input-group-sm c1 mb-3'>
                    <span  class='input-group-text' id='inputGroup-sizing-sm'>NOM</span>
                    <input name='nom' type='text' 
                    pattern = '[a-zA-Z]{1,20}'
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' 
                    
                    id='inputGroup-sizing-sm'>PRENOMS</span>
                    
                    <input name='prenom' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm'
                    pattern = "[a-zA-Z\s]{1,20}" required>
                  </div>
                  <div class='input-group input-group-sm c1 mb-3'>
                    <span class='input-group-text'id='inputGroup-sizing-sm'>DATE DE NAISSANCE</span>
                    <input name='date_naiss' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>DEBUT D'ABONNEMENT</span>
                    <input name='debut_ab' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c1 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>NUMERO DE TEL</span>
                    <input name='numero' type='number'
                    pattern = "[0-9]{8,10}"
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>EMAIL</span>
                    <input name='email' type='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='row justify-content-center '>
                      
                        <button  type='submit' class=' col-6 envoi btn btn-primary'> Enregitrer</button>
                      
                  </div>
            </form>
        </div>
        <?php
        include('./connexion.php');
        
        try
        {   $select = $bdd->prepare('SELECT * FROM abonnes ORDER BY id DESC LIMIT 1');
            $select->execute();
            $resultat = $select->fetch();
            $select->closeCursor();
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        echo "
        <div class='col-md-4 col-sm-12 offset-1'>
            <div>
                <div class='row'>
                    <div class='col mt-5 text-center bg-success text-light mb-3'>
                       <h4> DERNIER ENREGISTREMENT</h4>
                    </div>
                </div>
                <div class=' inpu2 input-group-sm mb-3'>
                    <span  class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>NOM:
                    <span style='font-weight: bold;'>&nbsp;$resultat[nom]</span></span>
                    
                  </div>
                  <div class=' inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>PRENOMS:
                    <span style='font-weight: bold;'>&nbsp;$resultat[prenom]</span></span>
                    
                  </div>
                  <div class=' inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>DATE DE NAISSANCE:
                    <span style='font-weight: bold;'>&nbsp;$resultat[date_naiss]</span></span>
                    
                  </div>
                  <div class='inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>DEBUT D'ABONNEMENT:
                    <span style='font-weight: bold;'>&nbsp;$resultat[debut_ab]</span></span>

                  </div>
                  <div class='inpu2 input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm' style='width:100%'>NUMERO DE TEL: 
                    <span style='font-weight: bold;'>&nbsp;$resultat[debut_ab]</span></span>

                  </div>
                  <div class='inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>EMAIL : 
                    <span style='font-weight: bold; font-size:100%'>&nbsp;$resultat[email]</span>
                </span>
                    
                  </div>" ?>
                  <div class='row justify-content-center mt-5' >
                      
                        <a href='list.php'  class=' col-6 envoi btn btn-warning'>Liste</a>
                      
                        
                  </div>
            </div>

        </div>
    </div>
</div>
<footer class='text-center text-text mt-5' style='background-color: #f1f1f1;'>
    <div class='text-center text-light p-3' style='background-color:#A90A2F;'>
    © 2022 Copyright:

    </div>
    <!-- Copyright -->
</footer> 
</body>
<script>
 document.getElementById('alert') && setTimeout(()=>{ document.getElementById('alert').style.display = 'none';
  },3000)

</script>
</html>