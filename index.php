<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="lib/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="lib/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style/css/index.css">
    <script src="lib/js/jquery-3.6.0.min.js"></script>
    <script src="lib/js/popper/popper.min.js"></script>
    <script src="lib/js/bootstrap/bootstarp.min.js"></script>
    <script src="lib/js/owl.carousel.min.js"></script>
    <script src="style/js/index.js"></script>
    <title>Accueil</title>
</head>

<body>
    <!------------------------- NavBar ------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-md">
            <a class="navbar-brand" href="#page-top"><img src="res/images/logo.jpg" alt="Logo" /><span>Paradize Agency</span></a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-lg-0">
                    <li class="nav-item text-center"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item text-center"><a class="nav-link" href="pages/services.php">Services</a></li>
                    <!-- <li class="nav-item text-center"><a class="nav-link" href="">Offres</a></li> -->
                    <li class="nav-item text-center"><a class="nav-link" href="pages/about.php">A-propos</a></li>
                    <!-- <li class="nav-item text-center"><a class="nav-link" href="connexion.php">Connexion</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!------------------------- Presentation ------------------------->
    <header class="masthead">
        <div class="container containerPres js-slidein align-middle">
            <div class="masthead-subheading">Bienvenue chez <span>Paradize Agency</span></div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btnCustom btn-primary btn-lg text-uppercase" href="#slider">Demarrer</a>
        </div>
    </header>

    <!------------------------- Nos offres du moment ------------------------->
    <section id="slider nos-offres" class="pt-2">
      <div class="container2">
        <div class="text-center titre-section">
          <h2 class="section-heading text-uppercase">Nos offres du moment</h2>
          <h3 class="section-subheading text-muted">Nous vous presentons nos offres promotionelle ou les plus prisées</h3>
        </div>
          <div class="slider">
                <div class="owl-carousel">
                    <div class="text-center">
                      <div class="slider-card">
                          <div class="d-flex justify-content-center align-items-center mb-2">
                              <img src="res/images/accueil_index/nos-offres st valentin.jpeg" alt="" >
                          </div>
                          <h5 class="mb-0 text-center p-1"><b>Special Saint-Valentin</b></h5>
                          <p class="text-center px-4 py-2">Voyager en compagnie de son partenaire permet de resserrer les liens et raviver les flammes de l'amour. Où de mieux pour voyager avec votre partenaire de vie que Dubaï, l'une des villes les plus modernes et les plus belles du monde?.</p>
                          <a class="btn btn-light btn-xl text-uppercase mb-2" href="#">Voir plus</a>
                      </div>
                    </div>
                    <div class="text-center">
                      <div class="slider-card">
                          <div class="d-flex justify-content-center align-items-center mb-2">
                              <img src="res/images/accueil_index/nos-offres special noel.jpg" alt="">
                          </div>
                          <h5 class="mb-0 text-center p-1"><b>Special Noel</b></h5>
                          <p class="text-center px-4 py-2">C'est Noel! Alors venez vivre la magie de noel avec nous, en solo, en couple ou meme en famille, n'hesitez pas et venez chez nous. Au programme une multitude de d'activés, des lieux plus magique les uns que les autres.🎄</p>
                          <a class="btn btn-light btn-xl text-uppercase mb-2" href="#">Voir plus</a>
                      </div>
                    </div>
                    <div class="text-center">
                      <div class="slider-card">
                          <div class="d-flex justify-content-center align-items-center mb-2">
                              <img src="res/images/accueil_index/nos-offres lune de miel.jpg" alt="">
                          </div>
                          <h5 class="mb-0 text-center p-1"><b>Lune de miel</b></h5>
                          <p class="text-center px-4 py-2">Vous cherchez une destination de reve de votre mariage? Vous etes au bon endroit. Avec nous et grace a notre programme, vous verez votre lune de miel devenir magique en un claquement de doigt.</p>
                          <a class="btn btn-light btn-xl text-uppercase mb-2" href="#">Voir plus</a>
                      </div>
                    </div>
                    <div class="text-center">
                      <div class="slider-card">
                          <div class="d-flex justify-content-center align-items-center mb-2">
                              <img src="res/images/accueil_index/nos-offres pack vacances.jpg" alt="">
                          </div>
                          <h5 class="mb-0 text-center p-1"><b>Pack vacances</b></h5>
                          <p class="text-center px-4 py-2">Vous desirez un endroit inedit pour vos vacances? Dubai est la solution. N'hesitez pas et evadez vous dans un endroit nouveau grace a nous.</p>
                          <a class="btn btn-light btn-xl text-uppercase mb-2" href="#">Voir plus</a>
                      </div>
                    </div>
              </div>
            </div>
      </div>
    </section>
  
    <!------------------------- Services ------------------------->
    <section class="page-section js-slidein" id="services">
      <div class="container2">
          <div class="text-center titre-section">
              <h2 class="section-heading text-uppercase">Services</h2>
              <h3 class="section-subheading text-muted">Nous vous presentons nos services</h3>
          </div>
          <div class="row text-center">
            <div class="services_col col-sm-6 col-md-4 mx-auto">
                <span class="fa-stack fa-3x">
                    <i class="fas fasCustom fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fasCustom fa-solid fa-passport fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">VISA SERVICES</h4>
                <p class="text-muted">Nous simplifions vos démarches administratives auprès des autorités de Dubai pour l'obtention de vos visas de 14 jours, 30 jours ou 90 jours.</p>
                <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir plus</a>
            </div>
            <div class="services_col col-sm-6 col-md-4 mx-auto">
                <span class="fa-stack fa-3x">
                    <i class="fas fasCustom fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fasCustom fa-ticket-simple fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">AIR TICKETING</h4>
                <p class="text-muted">Nous vous proposons de comparer le prix des billets d'avions parmi plusieurs compagnies pour réserver un vol au tarif le plus intéressant.</p>
                <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir plus</a>
            </div>
            <div class="services_col col-sm-6 col-md-4 mx-auto">
                <span class="fa-stack fa-3x">
                    <i class="fas fasCustom fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fasCustom fa-sharp fa-solid fa-map fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">TOUR PACKAGES</h4>
                <p class="text-muted">Nous vous proposons egalement une selections de lieu a visitez pour optimiser le plus possible votre sejour et vous rendre agreable le sejour</p>
                <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir plus</a>
            </div>
          </div>
          <div class="d-grid gap-2 col-lg-4 col-sm-5 mx-auto mb-4">
            <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir tous les services</a>
          </div>
        </div>
    </section>

    <!------------------------- images ------------------------->
    <section class="page-section js-slidein" id="dubai-images" data-effect="slide-left">
        <div class="text-center titre-section">
            <h2 class="section-heading text-uppercase">DUBAI</h2>
            <h3 class="section-subheading text-muted">Venez visiter des beaux lieux</h3>
        </div>
        <div class="gallery-image">
            <div class="img-box">
                <img src="res/images/accueil_index/Dubai-burj-khalifa.jpg" alt="" />
                <div class="transparent-box">
                    <div class="caption">
                    <p>Burj Khalifa</p>
                    <p class="opacity-low">Hotel de luxe 7 etoiles ⭐</p>
                    </div>
                </div> 
            </div>
            <div class="img-box">
                <img src="res/images/accueil_index/dubail-dubai-mall.jpg" alt="" />
                <div class="transparent-box">
                    <div class="caption">
                    <p>Dubai Mall</p>
                    <p class="opacity-low">Le plus grand centre comercial de Dubai</p>
                    </div>
                </div>
            </div>
            <div class="img-box">
                <img src="res/images/accueil_index/dubai-ski.jpg" alt="" />
                <div class="transparent-box">
                    <div class="caption">
                    <p>Ski Dubaï</p>
                    <p class="opacity-low">Du ski meme en plein été</p>
                    </div>
                </div>
            </div>
            <div class="img-box">
                <img src="res/images/accueil_index/dubai-safari.jpg" alt="" />
                <div class="transparent-box">
                    <div class="caption">
                    <p>Dubai Safari Park</p>
                    <p class="opacity-low">Safari, désert, zoo et vie sauvage</p>
                    </div>
                </div> 
            </div>
            <div class="img-box">
                <img src="res/images/accueil_index/dubai-illusion.jpg" alt="" />
                <div class="transparent-box">
                    <div class="caption">
                    <p>Museum Of Illusions</p>
                    <p class="opacity-low">Salles des miroirs, casse-tête, expos originales</p>
                    </div>
                </div> 
            </div>
            <div class="img-box">
                <img src="res/images/accueil_index/dubai-beach.jpg" alt="" />
                <div class="transparent-box">
                    <div class="caption">
                    <p>Marina Beach</p>
                    <p class="opacity-low">Site animé avec sports nautiques et vue</p>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <!------------------------- SELECTION (Hotels images and cars) ------------------------->
    <section class="page-section bg-light images-hotel" id="selection">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nos propositions</h2>
                <h3 class="section-subheading text-muted">Un echantillons des hotels que nous vous proposons</h3>
            </div>
            <div class="row px-3">
                <div class="col-lg-4 col-sm-6 mb-2 p-1">
                    <!-- Selection item 1-->
                    <div class="selection-item">
                        <a class="selection-link" href="https://www.burjkhalifa.ae/en/index.aspx#">
                            <div class="selection-hover">
                                <div class="selection-hover-content"><i class="fas fa-search fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="res/images/accueil_index/Dubai-burj-khalifa.jpg" alt="..." />
                        </a>
                        <div class="selection-caption">
                            <div class="selection-caption-heading">Burj Khalifa</div>
                            <div class="selection-caption-subheading text-muted">Hotel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2 p-1">
                    <!-- Selection item 2-->
                    <div class="selection-item">
                        <a class="selection-link" href="https://www.hyatt.com/fr-FR/hotel/united-arab-emirates/grand-hyatt-dubai/dxbgh">
                            <div class="selection-hover">
                                <div class="selection-hover-content"><i class="fas fa-search fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="res/images/accueil_index/dubai-Hyatt Regency Dubai.jpg" alt="..." />
                        </a>
                        <div class="selection-caption">
                            <div class="selection-caption-heading">Hyatt Regency Dubai</div>
                            <div class="selection-caption-subheading text-muted">Hotel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2 p-1">
                    <!-- Selection item 3-->
                    <div class="selection-item">
                        <a class="selection-link" href="https://www.dubai.crowneplaza.com/">
                            <div class="selection-hover">
                                <div class="selection-hover-content"><i class="fas fa-search fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="res/images/accueil_index/dubai-Crowne Plaza Dubai.jpg" alt="..." />
                        </a>
                        <div class="selection-caption">
                            <div class="selection-caption-heading">Crowne Plaza Dubai</div>
                            <div class="selection-caption-subheading text-muted">Hotel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2 p-1">
                    <!-- Selection item 4-->
                    <div class="selection-item">
                        <a class="selection-link" href="https://www.marriott.com/en-us/hotels/dxbdf-four-points-by-sheraton-downtown-dubai/overview/?scid=f2ae0541-1279-4f24-b197-a979c79310b0">
                            <div class="selection-hover">
                                <div class="selection-hover-content"><i class="fas fa-search fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="res/images/accueil_index/item 4 sheraton.jpg" alt="..." />
                        </a>
                        <div class="selection-caption">
                            <div class="selection-caption-heading">Four Points by Sheraton Downtown Dubai</div>
                            <div class="selection-caption-subheading text-muted">Hotel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2 p-1">
                    <!-- Selection item 5-->
                    <div class="selection-item">
                        <a class="selection-link" href="https://www.fairmont.com/dubai/?goto=fiche_hotel&code_hotel=A5F0&merchantid=seo-maps-AE-A5F0&sourceid=aw-cen&utm_medium=seo+maps&utm_source=google+Maps&utm_campaign=seo+maps&y_source=1_MTIzNjE0MjctNzE1LWxvY2F0aW9uLndlYnNpdGU%3D">
                            <div class="selection-hover">
                                <div class="selection-hover-content"><i class="fas fa-search fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="res/images/accueil_index/item 5 fairmont.jpg" alt="..." />
                        </a>
                        <div class="selection-caption">
                            <div class="selection-caption-heading">Fairmont Dubai</div>
                            <div class="selection-caption-subheading text-muted">Hotel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-2 p-1">
                    <!-- Selection item 6-->
                    <div class="selection-item">
                        <a class="selection-link" href="https://khamashospitality.com/royalascot/">
                            <div class="selection-hover">
                                <div class="selection-hover-content"><i class="fas fa-search fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="res/images/accueil_index/item 6 Royal Ascot Hotel.jpeg" alt="..." />
                        </a>
                        <div class="selection-caption">
                            <div class="selection-caption-heading">Royal Ascot Hotel</div>
                            <div class="selection-caption-subheading text-muted">Hotel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------- TEAM ------------------------->
    <section class="page-section bg-light js-slidein" id="team">
        <div class="container">
            <div class="text-center titre-section">
                <h2 class="section-heading text-uppercase">L'equipe</h2>
                <h3 class="section-subheading text-muted">Les membres principaux notre equipe</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="res/images/logo.jpg" alt="..." />
                        <h4>Barack Obama</h4>
                        <p class="text-muted">Directeur</p>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Instagram Profile"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="res/images/logo.jpg" alt="..." />
                        <h4>Issiaka Soumaoro</h4>
                        <p class="text-muted">Directeur adjoint</p>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Instagram Profile"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------- newsletter ------------------------->
    <section class="newsletter js-slidein">
        <form action="">
            <div class="container">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Souscrivez a notre Newsletter</h2>
                        <h3 class="section-subheading text-muted">Ne ratez plus aucune offres ou promptions en souscrivant a notre newsletter</h3>
                    </div>
                </div>
            </div>
            <div class="container" style="background-color:white">
                <input type="text" placeholder="Nom" name="nom" required>
                <input type="text" placeholder="Addresse E-mail" name="email" required>
            </div>

            <div class="container">
                <input type="submit" value="Souscrire">
            </div>
        </form>
    </section>
    
    <!------------------------- FOOTER -------------------------->
    
    <footer class="ben-footer">
      <div class="footer-row">
          <div class="footer-col">
              <img src="res/images/logo.png" class="logo" >
          </div>
          <div class="footer-col">
              <h3>Office <div class="footer-underline"><span></span></div></h3>
              <p><b>Siège:</b></p>
              <p>Heirs Abdullah Al Sheik Rashed</p>
              <p>Al Madani M04</p>
              <p>Noik police station Deira, Dubai, UAE</p>
              <p class="email-id">paradizeagency21@gmail.com</p>
              <h4>+971-52-453-6892</h4>
          </div>
          <div class="footer-col">
              <h3>Links <div class="footer-underline"><span></span></div></h3>
              <ul>
                  <li><a href="#">Accueil</a></li>
                  <li><a href="pages/services.php">Services</a></li>
                  <li><a href="pages/about.php">A-propos</a></li>
                  <!-- <li><a href="">Contact</a></li> -->
              </ul>
          </div>
          <div class="footer-col">
              <h3>Newsletter <div class="footer-underline"><span></span></div></h3>
              <form>
                <i class="far fa-envelope"></i>
                  <input type="email" placeholder="Enter your email">
                  <button type="submit"><i class="fas fa-arrow-right"></i></button>
              </form>
              <div class="form-social-icons">
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-facebook"></i>
                  <i class="fab fa-whatsapp"></i>
              </div>
          </div>
      </div>
      <hr>
      <p class="copyright">MLSCRIPT 2022 ALL RIGHT RESERVED</p>
    </footer>

</body>

</html>