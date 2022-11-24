<?php
session_start();
if(!isset($_SESSION["manager"])){
    $_SESSION["manager"] = new Manager();
}
$manager = $_SESSION["manager"];
class Manager{

    private $utilisateurs;
    public function __construct(){
        $this->utilisateurs = array();
    }
    // public function getLastID(): int{
       
    // }
}
?>