<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <form method="post">
        <label>Nom</label>
        <input type="text" name="nom" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Sujet</label>
        <input type="text" name="sujet" required>
        <label>Message</label>
        <textarea name="message" cols="30" rows="10" required></textarea>
        <input type="submit" value="Envoyer le message">
    </form>
<?php
if (isset($_POST["message"])) {
    $message = "Ce message vous a été envoyé via la page contact du site MD
    Nom : " . $_POST["nom"] . "
    Email : " . $_POST["email"] . "
    Message : " . $_POST["message"];

   $retour = mail("bibi080@live.fr", $_POST["sujet"], $message, "Reply-to:" . $_POST["email"]);
   if ($retour) {
       echo "<p>L'email a bien été envoyé.</p>";
   }
}
   ?>
</body>
</html>

