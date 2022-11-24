<?php
session_start();
if(isset($_POST['inputName'])){
    setcookie("name",$_POST['inputName'], time()+18000000);
}else{
    if(!isset($_COOKIE['name'])) header("Location: index.php");
}
echo "Utilisateur: ".$_COOKIE['name']."<br>";
if(!isset($_SESSION['nombre'])){
    $_SESSION['nombre'] = random_int(1,100);
}
if(isset($_POST['inputEssaie'])){
    $plusOuMoins = "Re-essaie... ";
    if($_POST['inputEssaie']>$_SESSION['nombre']){
        $plusOuMoins .= "c'est moins";
    }else if($_POST['inputEssaie']<$_SESSION['nombre']){
        $plusOuMoins .= "c'est plus";
    }else{
        $plusOuMoins = "C'est gagné !! <a href='scores.php'>Voir les scores</a>";
    }
    if(!isset($_SESSION[$_COOKIE['name']])){
        $_SESSION[$_COOKIE['name']] = 10;
    }else{
        if($_SESSION[$_COOKIE['name']] > 0){
            $_SESSION[$_COOKIE['name']]-=1;
            echo $plusOuMoins;
        }else{
            die("Tu as perdu... <a href='scores.php'>Voir les scores</a>");//TODO lien de la liste des scores
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>ReverseAkinator</title>
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
    <form method="POST" action="essaie.php">
        <div class="mb-3">
          <label for="inputEssaie" class="form-label">Nombre</label>
          <input type="number" min=1 max=100
            class="form-control" name="inputEssaie" id="inputEssaie" placeholder="Votre essaie...">
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Tester</button>
            </div>
        </div>
    </form>
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
var_dump($_SESSION['nombre']);
?>