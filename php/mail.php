<?php
if (isset($_POST["message"]) && ($_POST["nom"])) {
    $message = "Ce message vous a été envoyé via la page contact du site MD
    Nom : " . $_POST["nom"] . "
    Prenom : " . $_POST["prenom"] . "
    Email : " . $_POST["email"] . "
    Tel : " . $_POST["tel"] . "
    Message : " . $_POST["message"];
    $sujet = "Salut";

   $retour = mail("bibi080@live.fr", $sujet, $message, "Reply-to:" . $_POST["email"]);
   if ($retour) {
       echo "<p>L'email a bien été envoyé.</p>";
   }
}
   ?>


