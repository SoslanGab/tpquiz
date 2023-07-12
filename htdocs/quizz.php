<?php
include 'connexion.php';
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


<section id="s_connexion" class="vh-100 s_connexion">
    <div class="container mt-sm-5 my-1">
        <div id="question-container" class="question ml-sm-5 pl-sm-5 pt-2"></div>
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



</body>
</html>
