<?php
session_start();
if ($_SESSION['login'] !='is_login') {

  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sujet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/tab.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="accueil.php">Gestion des stagiaires</a>
    </div>
    <ul class="nav navbar-nav">
       <li><a href="Etudiant.php">Etudiants</a></li>
      <li><a href="specialite.php">Spécialité </a></li>
      <li><a href="sujet.php">Sujet</a></li>
      <li><a href="affectation.php">Affection des stagiaires</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="Sedeconnecter.php"><span class="glyphicon glyphicon-log-in"></span> Deconnecter</a></li>
    </ul>
  </div>
</nav>

<!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
        <div class="container">
            <div class="row">

                <div> <a href="index.html"><img src="img/img3.png" width="100" height="100"></a></div>
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">Les sujets</h1>
                </div>
            </div>
            <div class="row">
                
                <!-- contact form -->
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                    <form class="shake" role="form" method="post" id="contactForm" name="contact-form"
                        data-toggle="validator" action="ajout_sujet.php">
                        <!-- Name -->
                         <div class="form-group label-floating">
                            <label class="control-label" for="name">Titre de sujet</label>
                            <input class="form-control" id="name" type="text" name="titre" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Département</label>
                            <input class="form-control" id="name" type="text" name="departement" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Description</label>
                            <input class="form-control" id="lastname" type="text" name="description" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="form-group label-floating">
                            <label class="control-label" for="name">Date début</label>
                            <input class="form-control" id="lastname" type="date" name="date_deb" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="form-group label-floating">
                            <label class="control-label" for="name">Date fin</label>
                            <input class="form-control" id="lastname" type="date" name="date_fin" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Form Submit -->
                        <div class="form-submit mt-5">
                            <button class="btn btn-common" type="submit" id="form-submit"><i
                                    class="material-icons mdi mdi-message-outline"></i> Ajouter</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                       
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

<!-- Footer -->
<footer class="page-footer font-small" style="background-color: #212121">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0"></h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Gestion Des stagiaires</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>C'est une application web pour faresmedical</p>

      </div>

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Gestion des stagiaires</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <li><a href="Etudiant.php">Etudiant</a></li>
        </p>
        <p>
          <li><a href="specialite.php">Spécialité </a></li>
        </p>
        <p>
          <li><a href="sujet.php">Sujet</a></li>
        </p>
        <p>
          <li><a href="affectation.php">Affection des stagiaires</a></li>
      
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Tunis, TN</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> FaresMedical@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 216 25879643</p>
        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 
    <a href="https://mdbootstrap.com/"></a>
  </div>
  <!-- Copyright -->

</footer>

</body>

</html>
