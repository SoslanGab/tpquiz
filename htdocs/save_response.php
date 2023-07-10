<?php
include 'connexion.php';

if (isset($_POST['question']) && isset($_POST['response'])) {
    $question = $_POST['question'];
    $response = $_POST['response'];

    // Récupérer la réponse prédéfinie pour la question depuis la base de données
    $query = $bdd->prepare("SELECT respons FROM quizz WHERE question = :question");
    $query->execute([':question' => $question]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $responsUser = $row['respons'];

    // Vérifier si la réponse est correcte
    $isCorrect = ($response === $responsUser);

    // Attribuer un point à l'utilisateur si la réponse est correcte
    if ($isCorrect) {
        $userId = $_SESSION['user_id']; // Assumant que $_SESSION['user_id'] contient l'ID de l'utilisateur actuel
        $query = $bdd->prepare("INSERT INTO score (userid, scores) VALUES (:userid, 1)");
        $query->execute([':userid' => $userId]);
    }

    // Retourner la réponse en JSON
    $responseArray = array('isCorrect' => $isCorrect, 'correctResponse' => $responsUser);
    echo json_encode($responseArray);
}
?>
