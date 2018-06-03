<?php
    $texte = $_POST["texte"] ?? "";
    $chiffre = str_rot13($texte);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>code césar</title>
</head>
<body>
    <form method="POST">
        <label for="texte">texte</label>
        <textarea id="texte" name="texte" cols="40" rows="4"><?= $texte ?></textarea><br>
        <label for="chiffre">chiffre</label>
        <textarea id="chiffre" name="chiffre" cols="40" rows="4"><?= $chiffre ?></textarea>
        <input type="submit" value="OK">
    </form>
</body>
</html>