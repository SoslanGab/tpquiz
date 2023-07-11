<?php
session_start();
include '../connexion.php';
var_dump($_GET);

if(isset($_GET['current_score'])){
    $current_score = $_GET['current_score'];

     // Incrémenter le score de 1
     $updatedScore = $currentScore + 1;


    $query = $bdd->prepare("UPDATE score SET scores = :scores WHERE userid = :userid");
    $query->execute([
        ':scores' => $current_score,
        ':userid' => $_SESSION['user_id']
    ]);
    return json_encode([$current_score]);
}


return json_encode(['error']);