<?php
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $nom = htmlspecialchars($_POST('nom'));
        $prenom = htmlspecialchars($_POST('prenom'));
        $tel = htmlspecialchars($_POST('tel'));
        $email = htmlspecialchars($_POST('email'));
        $message = htmlspecialchars($_POST('message'));

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        }else{
            echo "Email non valide";
        }

    }else{
        header('Loction:Contact.html');
    }