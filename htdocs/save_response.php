<?php
include 'connexion.php';

if (isset($_POST['question']) && isset($_POST['response']) && isset($_POST['responsUser'])) {
    $question = $_POST['question'];
    $response = $_POST['response'];
    $responsUser = $_POST['responsUser'];

    // Enregistrer la réponse de l'utilisateur dans la table responseUser
    $query = $bdd->prepare("INSERT INTO responseUser (userRespons) VALUES (:userRespons)");
    $query->execute([':userRespons' => $response]);

    // Vérifier si la réponse est correcte
    $isCorrect = ($response === $responsUser);

    // Calculer le score
    $score = ($isCorrect) ? 1 : 0;

    // Enregistrer le score dans la table score
    $userId = $_SESSION['user_id']; // Remplace par l'ID de l'utilisateur actuel
    $query = $bdd->prepare("INSERT INTO score (userid, scores) VALUES (:userid, :scores)");
    $query->execute([':userid' => $userId, ':scores' => $score]);

    // Retourner la réponse en JSON
    $responseArray = array('isCorrect' => $isCorrect, 'correctResponse' => $responsUser);
    echo json_encode($responseArray);
}
?>
