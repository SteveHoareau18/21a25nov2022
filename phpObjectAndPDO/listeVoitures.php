<?php
require_once("connexion.php");
$query = "SELECT * FROM vehicules";
if(isset($_GET['searchInput'])){
    $searchInput = $_GET['searchInput'];
    if($searchInput !== ""){
        $searchInput = "%".$searchInput."%";
    }else{
        if($_GET['ignoreColor'] === "on"){
            $searchInput = "%%";
        }
    }
    $colorInput = $_GET['colorInput'];
    if(isset($_GET['ignoreColor'])){
        $colorInput = "";
    }
    $query.= " WHERE modele LIKE '".$searchInput."' OR (couleur LIKE '".$searchInput."' OR couleur= '".$colorInput."');";
}
$voitures = $pdo->query($query);
$voitures->setFetchMode(PDO::FETCH_ASSOC);
$voitures = $voitures->fetchAll();
?>
<!doctype html>
<html lang="fr">

<head>
  <title>Liste des voitures</title>
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
            <h1>🚗🚙🏎Liste des voitures</h1>
        </div>
        <div class="card-body">
                <form action="" method="get">
                    <div class="mb-3 row">
                          <label for="searchInput" class="form-label">Zone de recherche</label>
                          <div class="col-10">
                          <input type="text"
                            class="form-control" name="searchInput" id="searchInput" placeholder="Essayez un mot !">
                            </div>
                            <div class="col-2">
                          <input type="color"
                            class="form-control form-control-color" name="colorInput" id="colorInput">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="ignoreColor" id="ignoreColor">
                              <label class="form-check-label" for="ignoreColor">
                                Ignorer la couleur
                              </label>
                            </div>
                        </div>
                        </div>
                   
                            <div class="mb-3 row">
                                <div class="offset-sm-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Chercher</button>
                                    <?php
                        if(isset($_GET['searchInput'])){
                            ?>
                                    <a name="btnRevoirLstVehiules" id="btnRevoirLstVehiules" class="btn btn-outline-primary" href="listeVoitures.php" role="button">Voir toutes les voitures</a>
                                    <?php
                        }
                    ?>
                                </div>
                            </div>
                            
                </form>
        <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <?php
                    echo "<tr>";
                    if(!empty($voitures)){
                        foreach($voitures[0] as $key=>$value){
                            echo "<th scope='col'>".$key."</th>";
                        }
                    }else{
                        echo "<th scope='col'>Liste vide... (Aucun résultat pour le modèle ou la couleur: ".$_GET['searchInput'].")</th>"; 
                    }
                    echo "</tr>";
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($voitures)){
                    foreach($voitures as $voiture){
                        echo "<tr>";
                        foreach($voiture as $key=>$value){
                            echo "<td scope='row'>";
                            if($key === "couleur"){
                            echo "<input type='color' title='".$value."' value='".$value."' disabled>";
                            }else{
                                echo $value;
                            }
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
    </div>
        </div>
        <div class="card-footer text-muted">
            GestVoitures © 2022
        </div>
    </div>
    <a name="ajoutVoitureBtn" id="ajoutVoitureBtn" class="btn btn-primary" href="ajoutVoiture.php" role="button">Retour</a>
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