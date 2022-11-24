<!doctype html>
<html lang="fr">

<head>
  <title>Ajouter une voiture</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div class="container">
      <div class="card">
        <div class="card-header">
          <h1>🚗 Ajouter une voiture</h1>
        </div>
        <div class="card-body">
        <form method="get" action="">
            
            <div class="mb-3">
                <label for="inputCouleur" class="col-4 col-form-label">Couleur</label>
                <div class="col-8">
                    <input type="color" class="form-control form-control-color" name="inputCouleur" id="inputCouleur" placeholder="Couleur...">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputModele" class="col-4 col-form-label">Modèle</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputModele" id="inputModele" placeholder="Modèle...">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputPuissance" class="col-4 col-form-label">Puissance</label>
                <div class="col-8">
                    <input type="number" min=1 max=500 class="form-control" name="inputPuissance" id="inputPuissance" placeholder="Puissance...">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="reset" class="btn btn-secondary">Réinitialiser</button>
                <a name="lstVoituresBtn" id="lstVoituresBtn" class="btn btn-outline-primary" href="listeVoitures.php" role="button">Voir les voitures</a>
                </div>    
            </div>
        </form>
        </div>
        <div class="card-footer text-muted">
          GestVoitures © 2022
        </div>
      </div>
    </div>
    
        
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
<?php
require_once("connexion.php");
if(isset($_GET['inputCouleur']) && isset($_GET['inputModele']) && isset($_GET['inputPuissance'])){
    $voiture = new Voiture($_GET['inputCouleur'], $_GET['inputModele'], $_GET['inputPuissance']);
    $req = $pdo->prepare("INSERT INTO vehicules VALUES (:couleur,:modele,:puissance)");
    $req->execute(array(
        "couleur"=>$voiture->getCouleur(), 
        "modele"=>$voiture->getModele(),
        "puissance"=>$voiture->getPuissance()
    ));
    echo "Véhicule ajouté...";
}
?>