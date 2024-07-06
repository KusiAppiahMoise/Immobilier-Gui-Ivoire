<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Immobilier Gui-Ivoire</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="img/GUI-IMMO-2.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <link rel="stylesheet" href="css/sweetalert-toast.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <!--Toast for email sent-->
    <?php
      if( isset($_GET['success']) && $_GET['success'] == 1 )
      {
          ?>
              <script>
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  iconColor: 'white',
                  customClass: {
                  popup: 'colored-toast',
                  },
                  showConfirmButton: false,
                  timer: 3800,
                  timerProgressBar: true,
                })
                Toast.fire({
                  icon: 'success',
                  title: 'Email envoyé !',
                })
              </script>
          <?php
      }
    ?>
    <!--Preloader-->
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
                    </article><a class="button button-gray-bordered button-winona" href="contacts.php">Appelez nous !</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Accueil</a>
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
      <section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide_video" data-slide-bg="img/houses.jpg">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Variété</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">immobilière</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Immobilier Gui-Ivoire vous propose de nombreuses propriétés intéressantes à travers la Cote d'Ivoire afin que vous puissiez facilement choisir la propriété de vos rêves.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">Voir les propriétés</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="img/pexels-marketingtuig-87223.jpg">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Simplicité</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">de location et de vente</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Avec l’aide de nos services et de nos solutions de gestion immobilière, vous pouvez louer ou vendre n’importe quelle maison ou appartement.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">Voir les propriétés</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="img/pexels-pixabay-209266.jpg">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Une équipe</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">d'expert digne de confiance</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Avec un bon nombre d'années d'expérience, notre entreprise est une équipe singulière d’experts en gestion immobilière et en immobilier de renom toujours prêts à vous aider.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">Voir les propriétés</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-outer container">
          <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
        </div>
      </section>
      
      <!-- Services-->
      <section class="section novi-background section-lg text-center">
        <div class="container">
          <h3 class="text-uppercase">Nos services</h3>
          <p><span class="text-width-1">Dans notre agence, nous offrons différents services immobiliers. Vous pouvez en savoir plus sur nos prestations en naviguant sur notre site Web.</span></p>
          <div class="row row-35 row-xxl-70 offset-top-2">
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="img/pexels-wdnet-101808.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Achat et vente de biens immobiliers</a></h4>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="img/pexels-olly-3791617.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Location</a></h4>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="img/pexels-pavel-danilyuk-7937315.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Conceptions architecturaux</a></h4>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="img/pexels-pixabay-534220.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Construction</a></h4>
              </article>
            </div>
            <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="services.php">voir plus</a></div>
          </div>
        </div>
      </section>
      <section class="section novi-background section-lg text-center bg-gray-100">
        <div class="container">
          <h3 class="text-uppercase wow-outer"><span class="wow slideInUp">Notre équipe</span></h3>
          <div class="row row-lg-50 row-35 row-xxl-70 justify-content-center justify-content-lg-start">
            <div class="col-md-10 col-lg-6 wow-outer">
              <!-- Profile Creative-->
              <article class="profile-creative wow slideInLeft">
                <figure class="profile-creative-figure"><img class="profile-creative-image" src="images/team-1-270x273.jpg" alt="" width="270" height="273"/>
                </figure>
                <div class="profile-creative-main">
                  <h5 class="profile-creative-title"><a href="#">Bah Amadou Korka</a></h5>
                  <div class="profile-creative-contacts">
                    <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a href="tel:#">+225 07 69 74 02 63</a></div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer">
              <!-- Profile Creative-->
              <article class="profile-creative wow slideInLeft" data-wow-delay=".2s">
                <figure class="profile-creative-figure"><img class="profile-creative-image" src="images/team-4-270x273.jpg" alt="" width="270" height="273"/>
                </figure>
                <div class="profile-creative-main">
                  <h5 class="profile-creative-title"><a href="#">Bah Thierno</a></h5>
                  <div class="profile-creative-contacts">
                    <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a href="tel:#">+225 07 08 53 19 95</a></div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <section class="section novi-background section-lg text-center">
        <div id="blog" class="container">
          <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Témoignages</span></h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731" data-autoplay-timeout="4268" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Kouadio Frederic</cite>
                  <p class="quote-classic-caption">Client</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>Je viens d’acheter une maison grâce à vous et à vos courtiers. Tout s’est bien passé, le prix était assez abordable et je suis sûr que je ferai à nouveau appel à vos services à l’avenir.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Abdoul Ben Malick</cite>
                  <p class="quote-classic-caption">Client</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>J’ai récemment vendu ma propriété locative à un particulier via votre platforme. Tout dans la vente a été rendu transparent par votre équipe. Vous m’avez donné d’excellents conseils sur ce qui était nécessaire pour accélérer la vente.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Coulibaly Traoré</cite>
                  <p class="quote-classic-caption">Client</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>J’apprécie vraiment votre temps et votre expertise pour m’aider à trouver et à acheter ma maison actuelle à koumassi. J’espère que nous pourrons faire des affaires à nouveau à l’avenir et je vous recommanderai à ma famille et à mes amis.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Jean Desahi</cite>
                  <p class="quote-classic-caption">Client</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>Je viens de vendre un bien immobilier avec Immobilier Gui-Ivoire et je ne les remercierai jamais assez. Leur équipe a de grandes compétences en communication et ils ont régulièrement communiqué avec moi tout au long du processus.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Keita salif</cite>
                  <p class="quote-classic-caption">Client</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>Votre équipe qualifiée m’a aidé à réaliser mon rêve de construire ma propriété. La réalisation des plans ainsi que l'architecture de la maison étainent de qualité en témoigne le resultat qui est une maison belle et sure.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Bla Simeon</cite>
                  <p class="quote-classic-caption">Client</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>J'ai récemment eu recour aux service de Immobilier Gui-Ivoire pour la mise en plans des plans en vue de la construction d'un immeuble pour la location et je dois avouer que je n'es pas été déçu.</p>
              </div>
            </blockquote>
          </div>
        </div>
      </section>
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
                  <li><a href="#blog">Blog</a></li>
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
  </body>
</html>