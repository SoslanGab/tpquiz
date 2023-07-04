<?php
include 'connexion.php';

$nickname = $_POST ['nickname'];
$respons = $_POST ['respons'];

$query = $bdd->prepare("SELECT id FROM user WHERE nickname = :nickname");
$query->execute ([':nickname' => $nickname]);
$user = $query->fetch(PDO::FETCH_ASSOC); 

if ($user){
    $userid = $user ['id'];
} else {

$insertQuery = $bdd->prepare("INSERT INTO user (nickname) values (:nickname)");
$insertQuery->execute([':nickname' => $nickname]);
$userid = $bdd->lastInsertId();
}

header ("location:accueil.php");