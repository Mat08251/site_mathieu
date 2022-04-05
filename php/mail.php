<?php
if (!empty($_POST["message"]) AND !empty($_POST["nom"])) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $message = htmlspecialchars($_POST['message']);

    if(strlen($email) <= 100){

            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {

                    $titre = "Ce message vous a été envoyé via la page contact du site MD
                    Nom : " . $_POST["nom"] . "
                    Prenom : " . $_POST["prenom"] . "
                    Email : " . $_POST["email"] . "
                    Tel : " . $_POST["tel"] . "
                    Message : " . $_POST["message"];
                    $sujet = "Salut";

                $retour = mail("bibi080@live.fr", $sujet, $titre, "Reply-to:" . $_POST["email"]);
                if ($retour) {
                    
                    header('location: ../html/Contact.php?reg_err=success');
                }
            }
        }
        else
        {
            header('location: ../html/Contact.php?reg_err=email_length');
        }
}
   ?>


