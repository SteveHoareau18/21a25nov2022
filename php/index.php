<!doctype html>
<html lang="fr">

<head>
  <title>Tableau dynamique</title>
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
  <?php
    if(isset($_GET["dynTableau"])){
        $utilisateurs = [];
        $utilisateurs[count($utilisateurs)] = array(
            "nom"=>"Hoareau",
            "prenom"=>"Steve",
            "age"=>20
        );
        $utilisateurs[count($utilisateurs)] = array(
            "nom"=>"Clain",
            "prenom"=>"Maxime",
            "age"=>20
        );
        $utilisateurs[count($utilisateurs)] = array(
            "nom"=>"Ranguin",
            "prenom"=>"Tony",
            "age"=>19
        );
        ?>
        <table class="table table-striped-columns table-bordered border-secondary">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Âge</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    foreach($utilisateurs as $utilisateur){
                        echo "<tr>";
                        foreach($utilisateur as $champ){
                            echo "<td>".$champ."</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <?php
    }else if(isset($_GET['version'])){
        die(phpinfo());
    }
?>
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
