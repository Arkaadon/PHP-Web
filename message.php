<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Merci monsieur</h1>
    <h2>Les messages des autres monsieurs</h2>
    <?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
    if (is_string(file_get_contents('commentaire.txt'))) {
        // on casse la chaîne de caractères à chaque occurence d'une autre chaine, explode nous retourne ainsi
        // un tableau plus exploitable
        $datas = explode('},', file_get_contents('commentaire.txt'));
        foreach ($datas as $data) {
            if ($data !== '') {
                // On rajoute le caractère manquant à notre string afin d'avoir un JSON fonctionnel
                $data .= '}'; // $data = $data . '}'
                // On décole le JSON afin de récupérer une donnée plus exploitable, ici un objet de type stdClass
                $dataArray = json_decode($data);
                // A l'aide des propriétés de l'objet dataArray on affiche le prénom et le message
                echo filter_var($dataArray->Prenom, FILTER_SANITIZE_FULL_SPECIAL_CHARS).' a dit que: '.filter_var($dataArray->Message, FILTER_SANITIZE_FULL_SPECIAL_CHARS).'<br>';
            };
        };
    }
    else {
        echo '<h3>Aucun commentaire n\'a été soumi</h3>';
    };
        
    ?>
</body>
</html>