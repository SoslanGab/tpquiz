<?php 

    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=tpquizz', 'root');
    } catch (Exception $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
