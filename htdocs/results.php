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
    <link rel="stylesheet" href="animate.css">
    <title>Resultats</title>
<style>
 body,
    html {
        margin: 0px;
        padding: 0px;
        position: relative;
        min-height: 100%;
        display: flex;
        justify-content: center;
    }

    body {
        background-image: url('image/foretsombre.jpeg');
        background-size: cover;
    }

    canvas {
        filter: blur(2px);
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>