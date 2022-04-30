<?php
    session_start();
    if (!isset($_SESSION['connect']))
    {
        header('location: ../login.php');
        exit();
    }
?>
<?php
include('./connexion.php');
if (isset($_POST['envoi'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date_naiss = $_POST['date_naiss'];
  $debut_ab = $_POST['debut_ab'];
  $numero = $_POST['numero'];
  $email = $_POST['email'];
  $id = $_GET['id'];
  $update = $bdd->prepare('UPDATE abonnes SET nom=?, prenom=?, date_naiss=?, debut_ab=?, numero=?, email=? WHERE id=?');
  $update->execute(array($nom, $prenom, $date_naiss, $debut_ab, $numero, $email, $id));
  $update->closeCursor();
  header('Location: list.php?modif=1');

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css" />
    <script src="../assets/bootstrap5/js/bootstrap.bundle.js" defer></script>
    <link rel="stylesheet" href="../styles/modif.css" />
    <link rel="stylesheet" href="../styles/index.css" />
    <title>Modification</title>
  </head>
  <body class="container-fluid">
    <nav>
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <a href="acceuil.php">
          <img
            src="../assets/img/nouveau logo AUF.png"
            alt="logo"
            class="logo w-100"
          />
          </a>
        </div>
        <div class="col-md-8 titre col-sm-12">GESTIONNAIRE DES ABONNES</div>
      </div>
    </nav>
<?php 


try
{   $insert = $bdd->prepare('SELECT * FROM abonnes WHERE id=?');
    $insert->execute(array($_GET['id']));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$donnes = $insert->fetch();

?>
    <div class="container-fluid corps">
      <div class="row justify-content-center mt-5">
        <div class="col-6 bg-danger text-light text-center">
          <h3>MODIFICATION</h3>
        </div>
      </div>
      <div class="row">
        <form action="" method="post" class="col-md-6 offset-md-3 mt-5">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm" >NOM</span>
            <input
              name="nom"
              type="text"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-sm"
              required
              value="<?php echo "$donnes[nom]"; ?>"
            />
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm"
              >PRENOMS</span
            >
            <input
              name="prenom"
              type="text"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-sm"
              required
              value="<?php echo "$donnes[prenom]"; ?>"
            />
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm" value="
            "
              >DATE DE NAISSANCE</span
            >
            <input
              name="date_naiss"
              type="date"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-sm"
              required
              value="<?php echo "$donnes[date_naiss]"; ?>"
            />
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm"
              >DEBUT D'ABONNEMENT</span
            >
            <input
              name="debut_ab"
              type="date"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-sm"
              required
              value="<?php echo "$donnes[debut_ab]"; ?>"
            />
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm"
              >NUMERO DE TEL</span
            >
            <input
              name="numero"
              type="text"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-sm"
              required
              value="<?php echo "$donnes[numero]"; ?>"
            />
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm"
              >EMAIL</span
            >
            <input
              name="email"
              type="email"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-sm"
              required
              value='<?php echo "$donnes[email]"; 
              $insert->closeCursor();?>'
            />
          </div>
          <div class="row justify-content-around">
            <div class="col-4">
            <a href="list.php" class="btn envoi btn-danger">ANNULER</a>
            </div>
            <div class="col-4">
              <button type="submit" name="envoi" class="envoi btn btn-success">
                Enregitrer
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <footer
      class="text-center text-text mt-5"
      style="background-color: #f1f1f1"
    >
      <div class="text-center text-light p-3" style="background-color: #a90a2f">
        © 2022 Copyright:
      </div>
      <!-- Copyright -->
    </footer>
  </body>
  
</html>

