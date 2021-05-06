<?php
//Pour vérifier si $_POST n'est pas vide, utiliser !isset || Pour vérifier si c'est vide alors: isset($_POST)
    // file_put_contents('commentaire.JSON', json_encode($_POST));

    $ressourceFile = fopen('commentaire.txt', 'a'); // récupération (et création si inexistant) du fichier json
    fwrite($ressourceFile, json_encode($_POST).','); // écriture dans le fichier json en format string
    fclose($ressourceFile); // fermeture du fichier json
    header('Location: message.php');
