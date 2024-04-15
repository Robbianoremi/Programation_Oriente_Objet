<?php
include 'vendor/autoload.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="src/Action/register.php" method="POST" class="p-3">
        <div class="mb-3">
            <label for="iduser" hidden>Id Utilisateur</label>
            <input type="hidden" value="1" name="iduser">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom user:</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    <?php 
        if(isset($_SESSION['user'])) {
            echo "Utilisateur : " . $_SESSION['user']->getNom() . " enregistré avec succès.<br>";
            echo "Utilisateur : " . $_SESSION['user']->getPassword() . " enregistré avec succès.";
        }        
    ?>
</body>
</html>



