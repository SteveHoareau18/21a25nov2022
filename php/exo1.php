<?php
include_once("bootstrap.php");
$titre = "21a25nov2022";
?>
<div class="container">
    <form method="post" action="secret.php">
        <div class="input-group mb-3">
          <label for="userInput" class="input-group-text">Nom d'utilisateur</label>
          <input type="text"
            class="form-control" name="userInput" id="userInput" aria-describedby="helpId" placeholder="Votre nom d'utilisateur...">
        </div>
        <div class="input-group mb-3">
            <label for="mdpInput" class="input-group-text">Mot de passe</label>
            <input
                type="password"
                class="form-control" name="mdpInput" id="mdpInput" placeholder="Mot de passe...">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>