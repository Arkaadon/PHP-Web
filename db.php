<?php
    function getPDO(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=livre_dor;port=3306','root',''
            ,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            echo "Une erreur est survenue lors de la connexion à la base de donnée. Voici ce qu'elle retourne: ".$e->getMessage();
            die();
        };
        return $pdo;
    };
    