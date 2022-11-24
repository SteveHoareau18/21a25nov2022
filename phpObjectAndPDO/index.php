<!-- <?php
require_once("classes/voiture.class.php");
require_once("classes/utilisateur.class.php");
$vehicules = array(
    new Voiture("rouge","Peugeot",200),
);

var_dump($vehicules[0]);

$pdo = new PDO("mysql:host=127.0.0.1;dbname=cda6","root","");
$req = $pdo->query("SELECT * FROM utilisateur");
$req->setFetchMode(PDO::FETCH_CLASS, Utilisateur::class);
foreach($req->fetchAll() as $utilisateur){
    var_dump((array)$utilisateur);
}
?> -->