<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<!-- main>div.container>(div.numero-$>a)*9   ||  créé automatique une balise main avec à l'intérieur une div avec la classe "container" 
    qui contient 9 div avec la classe "numéro-X" (X s'incrémentant automatique à chaque opération) avec chacune une balise a-->
<body>
    <h1>Livre d'or</h1>
    <form action="ajouteCommentaire.php" method="post">
        <div>
            <label for="Prenom">Prenom</label>
            <input id="Prenom" name="Prenom" type="text">
        </div>
        <div>
            <label for="Message">Message</label>
            <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
        </div>
        <!-- <input name="submit" type="submit" value="Envoyer"> -->
        <button>Submit</button>
    </form>
</body>
</html>