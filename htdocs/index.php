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
    <title>Quizz</title>

    <style>
       body,
    html {
        margin: 0px;
        padding: 0px;
        position: relative;
        min-height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    body {
        background-image: url('https://external-preview.redd.it/Tf2MC-orVRAI8OL5tjyF4k4H2Q6QLHTWllekGfqdt3c.png?width=960&crop=smart&auto=webp&s=be4ab9a2fa3ca2f7011799377f118a8dbc64aacb');
        background-size: cover;
    }

    canvas {
        filter: blur(1px);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    #s_connexion {
        position: relative;
        z-index: 1;
    }
    </style>
</head>
<body>
<canvas id="canvas"></canvas>

<section id="s_connexion" class="vh-100 s_connexion">
    <div class="container  h-150">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="traitement.php" method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input name="nickname" type="text" id="form1Example13"
                               class="form-control form-control-lg" />
                        <label class="form-label" for="form1Example13">Login</label>
                    </div>

                    <!-- Submit button -->
                    <button name="connect" type="submit" class="btn btn-primary btn-lg btn-block">Se Connecter
                    </button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">Suivez-nous</p>
                    </div>

                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                       role="button">
                        <i class="fab fa-facebook-f me-2"></i>
                    </a>
                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                       role="button">
                        <i class="fab fa-twitter me-2"></i></a>
                </form>
            </div>
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="image/quizzimg.png"
                     class="img-fluid" alt="image">
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
