<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../assets/bootstrap5/css/bootstrap.min.css'>
    <script src='../assets/bootstrap5/js/bootstrap.bundle.js' defer></script>
    <link rel='stylesheet' href='../styles/list.css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel='stylesheet' href='../styles/index.css'>
    <title>Liste</title>
</head>
<body class='container-fluid'>
    <nav>
        <div class='row'>
            <div class='col-md-3 col-sm-12'>
                <img src='../assets/img/nouveau logo AUF.png' alt='logo' class='logo w-100 '>
            </div>
            <div class='col-md-8 titre col-sm-12 '>
                GESTIONNAIRE DES ABONNES
            </div>
        </div>
    </nav>

    <div class='container-fluid corps'>
        <div class='row justify-content-start mt-5'>
            <div class='col-md-3 offset-md-2 col-sm-4 ms-1  text-light text-center ali demand'>
               <h1>GESTION</h1>
            </div>
            <div class='col-md-2 offset-md-4 text-center col-sm-4'>
                <div class='rond  bg-warning'>
                    10 <br> ABONNES
                </div>
            </div>
        </div>
        <div class='row '>
            <div class='col table'>
            <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='card'>
                        <div class='card-header'>
                            <h3 class='card-title'>Liste des Abonnés</h3>
                        <div class='table-responsive'>
                            <table class='table no-wrap user-table mb-0'>
                            <thead>
                                <tr>
                                <th scope='col' class='border-0 text-uppercase font-medium pl-4'>#</th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>Nom complet </th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>D_naissance</th>
                                <th scope='col' class='border-0 text-uppercase font-medium text-center'>Email</th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>Numero</th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>D_abon</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                                include('./connexion.php');
                                try
                                {   $reponse = $bdd->query('SELECT * FROM abonnes');
                                    $i=1;
                                    while ($donnees = $reponse->fetch())
                                    { 
                                        echo (" <tr>
                                        <td class='pl-4 '>$i</td>
                                        <td>
                                            <h5 class='font-medium mb-0'>$donnees[nom]   $donnees[prenom]</h5>
                                            <span class='text-muted'></span>
                                        </td>
                                        <td>
                                            <span class='text-muted'>$donnees[date_naiss]</span><br>
                                            <span class='text-muted'></span>
                                        </td>
                                        <td>
                                            <span class='text-muted'>$donnees[email]</span>
                                            <span class='text-muted'></span>
                                        </td>
                                        <td>
                                            <span class='text-muted'>$donnees[numero]</span><br>
                                            <span class='text-muted'></span>
                                        </td>
                                        
                                            <td>
                                                <span class='text-muted'>$donnees[debut_ab]</span><br>
                                                <span class='text-muted'></span>
                                            </td>
                                        
                                        <td>
                                            <a href='supprimer.php?id=$donnees[id]'><button type='button' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-trash'></i> </button></a>
                                            <a href='modif.php?id=$donnees[id]'>
                                            <button type='button' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-edit'></i> </button></a>
                                        </td>
                                        
                                        </tr>");
                                        $i++;
                                    }
                                }
                                catch(Exception $e)
                                {
                                    die('Erreur : '.$e->getMessage());
                                }
                                ?>
                                <?php
                                $reponse->closeCursor();
                                ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
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