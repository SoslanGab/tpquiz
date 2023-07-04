<?php

include 'connexion.php';


$query = $bdd->prepare("SELECT * FROM user");
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST['connect'])) {
    $nickname = $_POST['nickname'];

    $query = $bdd->prepare("SELECT id FROM user WHERE nickname = :nickname");
    $query->execute([':nickname' => $nickname]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $userid = $user['id'];
    } else {
        $insertQuery = $bdd->prepare("INSERT INTO user (nickname) VALUES (:nickname)");
        $insertQuery->execute([':nickname' => $nickname]);
        $userid = $bdd->lastInsertId();
    }

    header("location: quizz.php");
}



