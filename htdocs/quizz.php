<?php
session_start();
include 'connexion.php';
include 'save_response.php';


// Récupérer les questions depuis la base de données
$query = "SELECT question, respons, option1, option2, option3 FROM quizz";
$result = $bdd->query($query);

// Stocker les questions et les options de réponse dans des tableaux
$questions = array();
$options = array();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $questions[] = $row['question'];
    $options[] = array(
        'respons' => $row['respons'],
        'options' => array(
            $row['option1'],
            $row['option2'],
            $row['option3'],
            $row['respons']
        )
    );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/design.css">
    <title>Quizz</title>
</head>
<body>
<!-- effets arrière plan -->
    <!-- <canvas id="canvas"></canvas> -->
<!-- effets arrière plan -->

<section class="s_connexion">
    <div class="container mt-sm-5 my-1">
        <div id="question-container" class="question ml-sm-5 pl-sm-5 pt-2"></div>
        <div class="d-flex align-items-center pt-3">
            <div id="prev" class="mr-auto">
                <a href="#" class="buttonback">
                    <span>Back</span>
                    <div class="liquid"></div>
                </a>

    <!-- <canvas id="canvas"></canvas> -->
<!-- effets arrière plan -->

    <section class="s_connexion">
        <div class="container mt-sm-5 my-1">
            <div id="question-container" class="question ml-sm-5 pl-sm-5 pt-2"></div>
                <div class="d-flex align-items-center pt-3">
                    <div id="prev">
                        <button id="" class="btn btn-primary">Précédent</button>
                    </div>
                    <div class="ml-auto mr-sm-5">
                        <button id="next" class="btn btn-success">Suivant</button>
                </div>
            </div>
            <div id="next">
                <a href="#" class="buttonnext">
                    <span>Next</span>
                    <div class="liquid"></div>
                </a>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
<script>

    $(document).ready(function() {
        var questions = <?php echo json_encode($questions); ?>;
        var options = <?php echo json_encode($options); ?>;
        var currentQuestion = 0;
        var userResponses = {};

        // Afficher la première question
        displayQuestion();

        // Fonction pour afficher la question actuelle
        function displayQuestion() {
            var questionContainer = $("#question-container");
            questionContainer.html('<div class="py-2 h5"><b>Question ' + (currentQuestion + 1) + ': ' + questions[currentQuestion] + '</b></div>');

            // Récupérer les options de réponse pour la question actuelle
            var currentOptions = options[currentQuestion].options;

            // Afficher les options de réponse dans le formulaire
            var optionsContainer = $('<div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"></div>');
            for (var i = 0; i < currentOptions.length; i++) {
                var option = currentOptions[i];
                var label = $('<label class="options">' + option + '<input type="radio" name="radio" value="' + option + '"><span class="checkmark"></span></label>');
                optionsContainer.append(label);
            }
            questionContainer.append(optionsContainer);

            questionContainer.append('<input type="hidden" id="selected-option" value=""/>');
        }

        // Événement lors du clic sur le bouton "Suivant"
        $("#next").click(function() {
            var selectedOption = $("input[name=radio]:checked").val();

            // Valider la réponse sélectionnée
            if (selectedOption) {
                // Enregistrer la réponse de l'utilisateur
                var question = questions[currentQuestion];
                var responsUser = options[currentQuestion].respons;
                var isCorrect = (selectedOption === responsUser);
                userResponses[question] = {
                    selectedOption: selectedOption,
                    isCorrect: isCorrect
                };

                // Appliquer les classes CSS aux options de réponse
                $("input[name=radio]").each(function() {
                    var option = $(this).val();
                    if (option === responsUser) {
                        $(this).parent().addClass("correct");
                    } else {
                        $(this).parent().addClass("incorrect");
                    }
                });
            }

            // Passer à la question suivante
            currentQuestion++;

            // Vérifier s'il y a encore des questions à afficher
            if (currentQuestion < questions.length) {
                displayQuestion();
            } else {
                // Afficher un message de fin du quizz ou rediriger vers une autre page
                $("#question-container").html("Quizz terminé !");
            }

            // Désactiver les options de réponse après avoir choisi une réponse
            $("#options input").attr("disabled", true);
        });

        // Événement lors du clic sur le bouton "Précédent"
        $("#prev").click(function() {
            // Passer à la question précédente
            currentQuestion--;

            // Vérifier si la question actuelle est inférieure à zéro
            if (currentQuestion < 0) {
                // Si la question actuelle est inférieure à zéro, la remettre à zéro
                currentQuestion = 0;
            }

            // Afficher la question précédente
            displayQuestion();
        });
    });


    </script>

</body>
</html>
