<?php
require_once("classes/voiture.class.php");
$vehicules = array(
    new Voiture("rouge","Peugeot",200),
);

var_dump($vehicules[0]);
?>