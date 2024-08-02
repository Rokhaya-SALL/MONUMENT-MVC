<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour formulaire</title>
</head>
<body class="bodyform">
<div class="container">
        <h2>Modifier un monument : </h2>
</div>

<?php 
   if(isset($success)) {
    ?>
        <p style='color:green'><?= $success ?></p>
        <p><a href="?page=monument">Retour à la liste des monuments</a></p>
    <?php
    } else {
        if(isset($error)){
            echo '<p style="color:red">'.$error->getMessage().'</p>';
        }
    ?>
        <h2>Etes-vous sûr de vouloir supprimer <strong><?= $monument->getNom() ?></strong> ?</h2>
        <form method="post">
            <input type="submit" name="confirm" value="OUI">
            <input type="submit" name="confirm" value="NON">
        </form>
    <?php
    }
    ?>


</body>
</html>