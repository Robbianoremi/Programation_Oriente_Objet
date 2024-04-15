<?php

namespace Action;

include '../../vendor/autoload.php';

use Entity\User;

if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password'])) {
    $user = new User();
    $user->setIduser($_POST['iduser']);
    $user->setNom($_POST['nom']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    session_start();
    $_SESSION['user'] = $user;
    header('Location: ../../index.php');
} else {
    echo 'Veuillez renseigner les champs du formulaire';
}