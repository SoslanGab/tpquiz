<?php 

    try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=tpquizz_2', 'root');
    } catch (Exception $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
