<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour formulaire</title>
</head>
<body>
<?php 
    if(isset($success)) {
        echo "<p style='color:green'>$success</p>";
    } else {
        if(isset($error)) {
            echo '<p style="color:red">'.$error->getMessage().'</p>';
        }?>
        <form method="post">
        <!-- pour regrouper plusieurs éléments -->
        <fieldset>
            <legend><b> Modifier un monument </b></legend>
            <table>
                <tr><td>Nom:</td><td><input type="text" name="nom" size="35" maxlength="50" value="<?=htmlentities($_POST['nom']??'')?>"></td>
                <tr><td>Pays:</td><td><input type="text" name="pays" size="35" maxlength="50" value="<?=htmlentities($_POST['pays']??'')?>" ></td>
                <tr><td>Ville:</td><td><input type="text" name="ville" size="35" maxlength="50" value="<?=htmlentities($_POST['ville']??'')?>"></td>
                <tr><td>Nombre de visites annuelles:</td><td><input type="number" name="nb_visites_an" size="35" maxlength="50" value="<?=htmlentities($_POST['nb_visites_an']??'')?>"></td>
                
                <tr><td>
                    <input type="reset" name="effacer" value="Effacer"></td>
                    <td><input type="submit" name="ajouter" value="Ajouter"></td>
                </tr>
    
                </tr>
            </table>
        </fieldset>
        </form><?php
    }
    ?>

        <p><a href="?page=monument">Revenir à la liste des monuments</a></p>
</body>
</html>