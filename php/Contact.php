<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/Contact.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YLVEBY20XC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-YLVEBY20XC');
    </script>
</head>

<body>
  <!--début de la navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container-fluid bloc_navbar">
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <img src="../img/logo-mathieu.png" class="logo" alt="">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mx-auto text-center  mb-2">
              <li class="nav-item">
                <a class="nav-link" href="../index.html">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../html/A_propos.html">A Propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../html/Services.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../html/Portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="php/Contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Fin de la navbar-->


      <!--message d'envoie ou d'erreur du mail-->
      <?php
        if(isset($_GET['reg_err']))
        {
          $err = htmlspecialchars($_GET['reg_err']);

          switch($err)
          {
            case 'success' :
                ?>
                <div class="alert alert-success mx-auto col-3">
                    <strong>Succès</strong> message envoyé
                </div>
                <?php
              break;

            case 'email_length' :
                ?>
                <div class="alert alert-danger mx-auto col-3">
                    <strong>Erreur</strong> email trop long
                </div>
              <?php
              break;
          }
        }
      ?>


    <!--titre de la page-->
      <h1 class="titre_page text-center">Me contacter</h1>

    <!--phrase d'information-->
      <div class="container-fluid">
        <p class="texte_info text-white">
          Une idée de site? Un projet? N'hésitez à me demander un <span class="mot_important"> devis gratuit !</span>
        </p>
      </div>


    <!--Début du formulaire-->
      <div class="container-fluid">
        <form class="formulaire" action="../php/mail.php" method="post">
          <div class="debut_formulaire">
            <div class="mb-4 section_nom">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control nom " name="nom" id="nom" placeholder="Entrer votre nom">
            </div>
            <div class="mb-4">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" class="form-control prenom " name="prenom" id="prenom" placeholder="Entrer votre prenom">
            </div>
          </div>

          <div class="mb-4">
            <label for="tel" class="form-label">Télephone</label>
            <input type="tel" class="form-control phone" name="tel" id="tel" placeholder="Entrer votre numéro de telephone">
          </div>

          <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" class="form-control email" name="email" id="email" placeholder="Entrer votre email">
          </div>
          
          <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
            <textarea class="form-control message" name="message" id="message" rows="3"></textarea>
          </div>
          <button type="submit" class="btn">Envoyer</button>
        </form>
      </div>
    <!--Fin du formulaire-->
    

    <!--Début du bloc footer-->
      <footer>
        <div class="footer container-fluid">

        <!--section info footer-->
          <div class="row ">
          <div class="sociaux">
            <a class="icon-sociaux" href="https://www.facebook.com/profile.php?id=100092478684599"><i class="fab fa-facebook-square"></i></a>
            <a class="icon-sociaux" href="http://"><i class="fab fa-instagram-square"></i></a>
            <a class="icon-sociaux" href="http://"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
          <div  class="texte col-12">
            <p class="info-footer col-sm-4">
              <i class="coordonnees fas fa-phone-alt"></i>07-70-03-42-93
            </p>
            <p class="info-footer col-sm-4">DUGUET Mathieu <br>
              <i class="coordonnees fas fa-map-marker-alt"></i>23 Lotissement les longs paquis<br>
              08140 Brévilly
            </p> 
            <p class="info-footer col-sm-4">
              <i class="coordonnees fas fa-envelope"></i>m.duguet808@laposte.net</p>
            </p>
          </div>
        <!--Fin section info footer-->

          <p class="copy text-center">Copyright<i class="far fa-copyright"></i>DUGUET Mathieu-2021</p>
        </div> 
      </footer>
    <!--Fin du bloc footer-->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/Contact.js"></script>
  </body>
</html>