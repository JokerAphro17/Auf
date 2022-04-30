<?php
    session_start();
    if (($_SESSION['connect']!=1))
    {
        header('location: ../login.php');
        exit();
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="../assets/bootstrap5/js/bootstrap.bundle.js" defer></script>
    <title>Acceuil</title>
</head>
<body class="container-fluid ">

    <nav>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a href="acceuil.php">
                <img src="../assets/img/nouveau logo AUF.png" alt="logo" class="logo w-100 ">
            </div></a>
            <div class="col-md-8 titre col-sm-12">
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
    </nav>
    <?php
        if (isset($_GET['connect']))
        {
            echo "<div class='alert alert-success text-center text-light bg-success' id='alert'><h5>Vous êtes connecté</h5></div>";
        }
    ?>
<!-- le corps de la page  -->
        <div class="row b1">
            <div class="col-md-6  offset-md-3 col-sm-12 mt-5 text-light text-center demand">
                QUE VOULEZ-VOUS FAIRE ?
            </div>
        </div>
            <div class="container mt-5 bg-image">
                <div class="row justify-content-evenly ">
                    <div class="col-md-3 col-lg-4 ">
                        <div class="card bg-warning w-100 c1">
                            <a href="inscription.php">
                                <img class="card-img-top " src="../assets/img/inscrip.webp" alt="Card image cap">
                            <div class="card-body text-center text-light">
                                <h5 class="card-title">AJOUTER UN ABONNES</h5>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 ">
                        <div class="card bg-primary w-100 c2">
                            <a href="list.php">
                                <img class="card-img-top" src="../assets/img/liste.webp" alt="Card image cap" >
                            <div class="card-body text-center text-light">
                                <h5 class="card-title">GERER LES ABONNES</h5>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="text-center text-text mt-5" style="background-color: #f1f1f1;">
                <div class="text-center text-light p-3" style="background-color:#A90A2F;">
                © 2022 Copyright:

                </div>
            </footer>
    </div>
</body>
<script>
            document.getElementById('alert') && setTimeout(()=>{ document.getElementById('alert').style.display = 'none';
            },3000);

</script>            
</html>
