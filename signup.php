<?php
require 'config.php';


function insert()
{
    global $connection;
    $name = $_POST["nom_prenom"];
    $email = $_POST["email"];
    $password = $_POST["motdepass"];

    $connection->prepare("INSERT INTO user (`nome`, `email`, `mdp`) VALUES (:name, :email, :password)")
    ->execute([
        'name' => $name,
        'password' => $password,
        'email'=> $email
    ]);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: login.php");
    insert();
}




