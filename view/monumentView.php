<?php
// --------------------------------
// Vue d'un seul monument
// --------------------------------
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=htmlentities($monument->getNom())?></title>
</head>
<body>
    <p><a href="?page=monument">Revenir à la liste des monuments</a></p>
    <h1><?=htmlentities($monument->getNom())?></h1>
    <p><b>Pays</b> : <?=htmlentities($monument->getPays())?></p>
    <p><b>Ville</b> : <?=htmlentities($monument->getVille())?></p>
    <p><b>Nombre de visites par an</b> : <?= $monument->getNbVisitesAn() / 1000000 ?> millions </p>
    <p><a href="?page=monument&action=update&monument_id=<?=$monument->getId()?>">Modifier le monument</a></p>
    <a href="?page=monument&action=delete&monument_id=<?=$monument->getID()?>">Supprimer l'utilisateur</a>

</body>
</html>
