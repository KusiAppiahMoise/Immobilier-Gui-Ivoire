<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '/bat/vendor/phpmailer/phpmailer/src/Exception.php';
require '/bat/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/bat/vendor/phpmailer/phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if(isset($_POST['envoyer'])){
  $prenom = htmlentities($_POST['prenom']);
  $nom = htmlentities($_POST['nom']);
  $email = htmlentities($_POST['email']);
  $numero = htmlentities($_POST['numero']);
  $message = htmlentities($_POST['message']);

  $mail = new PHPMailer(true);
  //Server settings
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'belveder552@gmail.com';                     //SMTP username
  $mail->Password   = 'jxeahjndgaksszwo';                               //SMTP password
  $mail->Port       = 465; 
  $mail->SMTPSecure = 'ssl';

  //Recipients
  $mail->setFrom($email, $nom);
  $mail->addAddress('kusiappiah305@gmail.com', 'Belveder');     //Add a recipient
  $mail->isHTML(true);
  $mail->Subject = $numero;
  $mail->Body = $message;
  $mail->send();
  Header( 'Location: http://localhost/site/index.php?success=1');
}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacts</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="img/GUI-IMMO-2.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-logo"><img src="img/GUI IMMO 2.png" alt="" width="151" height="44" srcset="img/GUI IMMO 2.png"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <header class="section novi-background page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.php"><img src="img/GUI IMMO 2.png" alt="" width="151" height="44" srcset="img/GUI IMMO 2.png"/></a>
                </div>
                <div class="rd-navbar-collapse">
                  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                  <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                      <div class="unit-body">
                        <ul class="list-0">
                          <li><a class="link-default" href="tel:#">+225 07 69 74 02 63</a></li>
                          <li><a class="link-default" href="tel:#">+225 05 74 72 78 59</a></li>
                        </ul>
                      </div>
                    </article>
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="link-default" href="tel:#">09 BP 149 Abidjan 09<br>Adjame, Paillet</a></div>
                    </article><a class="button button-gray-bordered button-winona" href="#">Appelez nous !</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="a-propos.php">A propos</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="services.php">Nos services</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Breadcrumbs -->
      <section class="section novi-background breadcrumbs-custom bg-image context-dark" style="background-image: url(img/pexels-negativespace-33999.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php"></a>Accueil</li>
              <li class="active">Contacts</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section novi-background section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon novi-icon icon-lg mdi mdi-phone text-primary"></div>
                <ul class="list-0">
                  <li><a class="link-default" href="tel:#">+225 07 69 74 02 63</a></li>
                  <li><a class="link-default" href="tel:#">+225 05 74 72 78 59</a></li>
                </ul>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon novi-icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:#">immobilierguiivoire1656@gmail.com</a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon novi-icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">09 BP 149 Abidjan 09, Adjame, Paillet</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section novi-background bg-gray-100">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="text-uppercase wow-outer"><span class="wow slideInDown">Contactez nous</span></h3>
                  <!-- RD Mailform-->
                  <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">Prénom</label>
                          <input class="form-input" id="contact-first-name" type="text" name="prenom" required>
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Nom</label>
                          <input class="form-input" id="contact-last-name" type="text" name="nom" required>
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail</label>
                          <input class="form-input" id="contact-email" type="email" name="email" required>
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Numéro</label>
                          <input class="form-input" id="contact-phone" type="text" name="numero" required>
                        </div>
                      </div>
                      <div class="col-12 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-message">Votre message</label>
                          <textarea class="form-input" id="contact-message" name="message" required></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer"> 
                        <button class="button button-primary button-winona wow slideInRight" type="submit" name="envoyer">Evoyer message</button>
                      </div>
                      <p>ou utiliser</p>
                      <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="#"><span class="icon novi-icon text-primary mdi mdi-facebook-messenger"></span>Messenger</a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5 height-fill wow fadeIn">
            <div class="google-map-container">
              <div id="map"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section novi-background footer-advanced bg-gray-700">
        <div class="footer-advanced-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-sm-5 col-md-7 col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Gallery</h5>
                <div class="row row-x-10" data-lightgallery="group">
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-expect-best-79873-323775.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-expect-best-79873-323775.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-quark-studio-1159039-2506990.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-quark-studio-1159039-2506990.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-hansmiddendorp-2157039.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-hansmiddendorp-2157039.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-itsterrymag-2635038.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-itsterrymag-2635038.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-julia-kuzenkov-442028-1974596.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-julia-kuzenkov-442028-1974596.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-luis-yanez-57302-206172.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-luis-yanez-57302-206172.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"> </div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-pixabay-276593.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-pixabay-276593.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="img/pexels-pixasquare-1115804.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="img/pexels-pixasquare-1115804.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout">
              <div>
                <ul class="list-nav"> 
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="a-propos.php">A propos</a></li>
                  <li><a href="services.php">Nos offres</a></li>
                  <li><a href="index.php #blog">Blog</a></li>
                  <li><a href="contacts.php">Contacts</a></li>
                </ul>
              </div>
              <div>
                <ul class="foter-social-links list-inline list-inline-md">
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout"><a class="brand" href="index.php"><img src="img/GUI IMMO 2.png" alt="" width="115" height="34" srcset="img/GUI IMMO 2.png"/></a>
              <!-- Rights-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function initMap(){
        //options pour la map
        var options = {
          zoom:12,
          center:{lat: 5.376709,lng: -4.013317}
        }
        //nouvelle map
        var map = new google.maps.Map(document.getElementById('map'), options);
        //Ajouter marker
        var marker = new google.maps.Marker({
          position:{lat: 5.376709,lng: -4.013317},
          map:map
        });
        //information sur le marker
        var infowindow = new google.maps.InfoWindow({
          content: '<h5>Immobilier Gui-ivoire</h5>'
        });
        marker.addListener('click', function(){
          infowindow.open(map, marker)
        })
      }
  </script>
  <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhEFBhR1uyy8q3IC5vww9cC8isk9CdWZ0&loading=async&callback=initMap">
  </script>
  </body>
</html>
