<?php
session_start();
require 'config.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['nom_prenom'];
    $password = $_POST['motdepass'];

    $stmt = $connection->prepare('SELECT * FROM user WHERE nome = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if ($user) {
        $_SESSION['nom_prenom'] = $user['nome'];
         if(($user['mdp'] == $password)){
            header('location: dashboard.php');

}
else{
    echo 'incorrect password';
}   
        exit();
    }

}

