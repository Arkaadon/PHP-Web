<?php
//Pour vérifier si $_POST n'est pas vide, utiliser !isset || Pour vérifier si c'est vide alors: isset($_POST)
    // file_put_contents('commentaire.JSON', json_encode($_POST));

    // $ressourceFile = fopen('commentaire.txt', 'a'); // récupération (et création si inexistant) du fichier json
    // fwrite($ressourceFile, json_encode($_POST).','); // écriture dans le fichier json en format string
    // fclose($ressourceFile); // fermeture du fichier json
    // header('Location: message.php');

    // On crée un objet PDO, qui nous permettra de faire le lien entre le code fonctionnel de php et la BDD
    // Le Dsn est un ensemble de paramètres séparés par des ';' qui représente le chemin d'accès à notre BDD, le username et le pwd ne sont rien
    // d'autre que les identifiants de connection
    

    // try {
    //     $pdo = new PDO('mysql:host=localhost;dbname=livre_dor;port=3306','root',''
    //     ,[
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    //     ]);
    // } catch (PDOException $e) {
    //     echo "Une erreur est survenue lors de la connexion à la base de donnée. Voici ce qu'elle retourne: ".$e->getMessage();
    //     die();
    // };

    include_once __DIR__.'/db.php';
    $pdo = getPDO();
    
    // On écris la requête SQL
    $sql = "INSERT INTO commentaires(prenom, message) VALUES(:Prenom, :Message)";
    // On prépare la requête
    $req = $pdo->prepare($sql);

    // On l'éxécute à l'aide d'un tableau
    $req-> execute([
        ':Prenom' => $_POST['Prenom'],
        ':Message' => $_POST['Message']
    ]);

    header('Location: message.php');

    // Exemple de séléction depuis la base de données
    // $select = $pdo->prepare("SELECT * FROM commentaires");
    // $select->execute();
    // $test = $select->fetchAll();

    // $Prenom = $_POST['Prenom'];
    // $Message = $_POST['Message'];
    // $pdo->exec("INSERT INTO commentaires VALUES('$Prenom', '$Message')");

    // $pdo->exec("INSERT INTO commentaires VALUES('$_POST[Prenom]', '$_POST[Message]')");

    // $pdo->exec("SELECT * FROM commentaires");
    // $pdo->exec("INSERT INTO commentaires VALUES('Miguel', 'Kenneth ye vé fair oune burnoute')");
    // $pdo->exec("INSERT INTO commentaires ('prenom') VALUES('Kenneth')");