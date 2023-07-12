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
<div id="rain-container"></div> 

<section id="s_connexion" class="vh-100 s_connexion">
    <div class="container  h-150">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form id="login-form" action="traitement.php" method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input name="nickname" type="text" id="form1Example13" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form1Example13">Login</label>
                        
                    <button type="submit" class="buttonplay custom">
                        <span>Play</span> 
                    <div class="liquid">
                    </div>
                 </div>

                    <!-- Submit button -->
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">Suivez-nous</p>
                    </div>

                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                        <i class="fab fa-facebook-f me-2"></i>
                    </a>
                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
                        <i class="fab fa-twitter me-2"></i>
                    </a>
                </form>
            </div>

            <div class="col-md-8 col-lg-5 col-xl-6">
                <img src="image/quizfilm.jpg" class="img-fluid" alt="image">
            </div>        
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
<script src="particles.js-master/particles.js"></script>
</body>
</html>