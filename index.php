<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/
if(isset($_POST['error']) && $_POST['error'] === '1') { ?>
    <div>erreur dans les parametres</div> <?php
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form alea</title>
</head>
<body>
    <form method="post" action="alea.php">
        <div>
            <label for="nbr1">nombre 1</label>
            <input type="number" name="x" id="nbr1">
        </div>
        <div>
            <label for="nbr2">nombre 2</label>
            <input type="number" name="y" id="nbr2">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>
</html>
