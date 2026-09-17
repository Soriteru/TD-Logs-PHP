<?php
    include 'logger.php';

    if (isset($_GET['username'], $_GET['message'])) {
        write_log($_GET['username'], $_GET['message']);
    }

    echo "Message envoyé !"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

    <form action="index.php" method="GET">
        <label for="username">Inscrivez votre nom :</label>
        <input type="text" name="username" id="username">

        <br>

        <label for="message">Laissez-nous un message :</label>
        <textarea name="message" id="message" rows="5" cols="30" placeholder="Laissez un message ici..."></textarea>

        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>