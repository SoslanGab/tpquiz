<?php
include 'connexion.php';
// tout recuperer dans la table question
    $query = $bdd->prepare("SELECT question, option1, option2, option3, respons FROM quizz");

    $query->execute(array());

    // print_r($query->fetchAll(PDO::FETCH_ASSOC));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/design.css">
    <title>Quizz</title>
</head>
<body>
    <!-- effets arrière plan -->

 <div id="rain-container"></div> 
    <?php
        $quizz = $query->fetch();
        // $answers = [$quizz['respons'],$quizz['option1'], $quizz['option2'], $quizz['option3']];
        $option1 = $quizz['option1'];
        $option2 = $quizz['option2'];
        $option3 = $quizz['option3'];
        $correctAnswer = $quizz['respons'];
    ?>

<section id="s_connexion" class="vh-100 s_connexion">
    <?php $quizz = $query->fetch() ?>
        <div class="container mt-sm-5 my-1">
            <h2 class="text-center" id="question"><?php echo $quizz['question'] ?></h2>
            <div class="choix">
                <?php foreach ([$option1, $option2, $option3, $correctAnswer] as $index => $option) { ?>
                    <input id="guess<?php echo $index; ?>" class="btn" placeholder="<?php echo $option; ?>" onclick="verifierReponse(this.value)">
                <?php } ?>
                <button id="validateBtn" class="btn" style="display: none;" onclick="validateAnswer()">Valider</button>
            </div>
                <div class="d-flex align-items-center pt-3">
                    <div id="prev" class="mr-auto">
                        <a href="#" class="buttonback" onclick="goToPreviousQuestion(event)">
                            <span>Back</span>
                            <div class="liquid"></div>
                        </a>
                    </div>
                    <div id="next">
                        <a href="#" class="buttonnext" onclick="goToNextQuestion(event)">
                            <span>Next</span>
                            <div class="liquid"></div>
                        </a>
                    </div>
                </div>
        </div>
</section>

<script src="js/main.js"></script>

<script>
// la du coup c'est la fonction suivant et precedent j'ai pas eu le choix que de le mettre en JS je te laisse demander a chat de te l'expliquer si tu
    var currentQuestion = 0;
    var questions = <?php echo json_encode($query->fetchAll(PDO::FETCH_ASSOC)); ?>;

    function displayQuestion(index) {
        document.getElementById('question').textContent = questions[index]['question'];
        document.getElementById('guess0').setAttribute('placeholder', questions[index]['option1']);
        document.getElementById('guess1').setAttribute('placeholder', questions[index]['option2']);
        document.getElementById('guess2').setAttribute('placeholder', questions[index]['option3']);
        document.getElementById('guess3').setAttribute('placeholder', questions[index]['respons']);
    }

    function goToPreviousQuestion(event) {
        event.preventDefault();
        if (currentQuestion > 0) {
            currentQuestion--;
            displayQuestion(currentQuestion);
        }
    }

    function goToNextQuestion(event) {
        event.preventDefault();
        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            displayQuestion(currentQuestion);
        }
    }

    displayQuestion(currentQuestion);

    // La c'est juste une petite verif si oui ou non c'est la bonne reponse 
    var selectedAnswer = '';
    function verifierReponse(answer) {
        selectedAnswer = answer;
        document.getElementById('validateBtn').textContent = 'Valider la réponse : ' + selectedAnswer;
        document.getElementById('validateBtn').style.display = 'block';
    }



    function validateAnswer() {
    var correctAnswer = "<?php echo $correctAnswer; ?>";
    var inputs = document.getElementsByClassName('btn');
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value === correctAnswer) {
            inputs[i].classList.add('correct');
            } else {
            inputs[i].classList.add('incorrect');
            }
        }
    }


</script>

</body>
</html>
