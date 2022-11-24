<?php
include_once("bootstrap.php");
/*session_start();
* $_SESSION['secret'] = 1; //True
* $_SESSION['secret'] = 0; //False
*/
?>
<?php
if(!isset($_SESSION['userInput'])&&isset($_POST['userInput'])){
    $_SESSION['userInput'] = $_POST['userInput'];
}
if((isset($_COOKIE['secret']) && $_COOKIE['secret']===1)||(isset($_POST['mdpInput']) && $_POST['mdpInput']==="0e45786")){
    
    echo "<p class='lead'>
        ".$_SESSION['userInput'].": Le message secret est 'Je sais pas, mets ce que tu veux'
    </p>";
    setcookie("secret",1);
}else{
    setcookie("secret",0);
    header("Location: exo1.php");
}
?>
<a name="btnRetour" id="btnRetour" class="btn btn-primary" href="exo1.php" role="button">Retour</a>