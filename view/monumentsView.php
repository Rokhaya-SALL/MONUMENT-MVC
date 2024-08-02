<?php
// --------------------------------
// Vue de la liste des monuments
// --------------------------------
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des monuments</title>
</head>
<body>
    <p><a href="?">Revenir à l'accueil</a></p>
    <h1>Liste des monuments</h1>
    <ul>
        <?php foreach( $monuments as $monumentObject ) : ?>
            <li><h2><a href="?page=monument&monument_id=<?=$monumentObject->getId()?>"><?=$monumentObject->getNom()?></a></h2></li>
        <?php endforeach; ?>
    </ul>
    <p><a href="?page=monument&action=create">Ajouter un monument</a></p>
</body>
</html>
