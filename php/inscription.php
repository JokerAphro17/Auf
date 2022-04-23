<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../assets/bootstrap5/css/bootstrap.min.css'>
    <script src='../assets/bootstrap5/js/bootstrap.bundle.js' defer></script>
    <link rel='stylesheet' href='../styles/index.css'>
    <link rel='stylesheet' href='../styles/ins.css'>
    <title>Enregitrement</title>
</head>
<body class='container-fluid'>
    <nav>
        <div class='row'>
            <div class='col-md-3 col-sm-12'>
                <img src='../assets/img/nouveau logo AUF.png' alt='logo' class='logo w-100 '>
            </div>
            <div class='col-md-8 titre col-sm-12'>
                GESTIONNAIRE DES ABONNES
            </div>
        </div>
    </nav>
<!-- le formulaire ici  -->
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
                <div class='input-group input-group-sm mb-3'>
                    <span  class='input-group-text' id='inputGroup-sizing-sm'>NOM</span>
                    <input name='nom' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>PRENOMS</span>
                    <input name='prenom' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>DATE DE NAISSANCE</span>
                    <input name='date_naiss' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>DEBUT D'ABONNEMENT</span>
                    <input name='debut_ab' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>NUMERO DE TEL</span>
                    <input name='numero' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>EMAIL</span>
                    <input name='email' type='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='row justify-content-center'>
                      
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
                <div class='input-group input-group-sm mb-3'>
                    <span  class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>NOM:
                    <span style='font-weight: bold;'>&nbsp;$resultat[nom]</span></span>
                    
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>PRENOMS:
                    <span style='font-weight: bold;'>&nbsp;$resultat[prenom]</span></span>
                    
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>DATE DE NAISSANCE:
                    <span style='font-weight: bold;'>&nbsp;$resultat[date_naiss]</span></span>
                    
                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>DEBUT D'ABONNEMENT:
                    <span style='font-weight: bold;'>&nbsp;$resultat[debut_ab]</span></span>

                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm' style='width:100%'>NUMERO DE TEL: 
                    <span style='font-weight: bold;'>&nbsp;$resultat[debut_ab]</span></span>

                  </div>
                  <div class='input-group input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>EMAIL : 
                    <span style='font-weight: bold;'>&nbsp;$resultat[email]</span>
                </span>
                    
                  </div>" ?>
                  <div class='row justify-content-center'>
                      
                        <a href='list.php'  class=' col-6 envoi btn btn-warning'>Liste</a>
                      
                        
                  </div>
            </div>

        </div>
    </div>
</div>
<footer class='text-center text-text mt-5' style='background-color: #f1f1f1;'>
    <div class='text-center text-light p-3' style='background-color:#A90A2F;'>
    © 2020 Copyright:

    </div>
    <!-- Copyright -->
</footer> 
</body>
</html>