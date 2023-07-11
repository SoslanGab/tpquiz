<?php

include 'connexion.php';


if (isset($_POST['nickname'])) {

    $nickname = $_POST['nickname'];
    $query = $bdd->prepare("SELECT * FROM user WHERE nickname = :nickname");
    $query->execute([
        ':nickname' => $nickname
    ]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $insertQuery = $bdd->prepare("INSERT INTO user (nickname) VALUES (:nickname)");
        $insertQuery->execute([':nickname' => $nickname]);
        $userid = $bdd->lastInsertId();
    } else {
        $userid = $user['id'];
    }

    $_SESSION['user_id'] = $userid;
}

header('Location: quizz.php?userid=' . $userid);



