<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ets Strong-UP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('strong_up')?>/assets/img/icon/Logo 4.jpg" rel="icon">
  <link href="<?=base_url('strong_up')?>/assets/img/icon/Icone STRONG UP.PNG" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('strong_up')?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('strong_up')?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('strong_up')?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('strong_up')?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('strong_up')?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url('strong_up')?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('strong_up')?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('strong_up')?>/assets/css/style.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<style>
body
{
  font-family: 'Montserrat';
}
</style>

<body>
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
          <a href="<?=base_url()?>">
            <img src="<?=base_url('strong_up')?>/assets/img/icon/logo.jpg" class="img-fluid" alt=""> <span class="d-none">Strong UP</span> 
          </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="<?=base_url()?>" class="active">ACCEUIL</a></li>

            <li class="dropdown"><a href="#"><span>A PROPOS DE NOUS</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#about">TOUS SUR NOUS</a></li>
                <li><a href="#team">EQUIPES</a></li>
              </ul>
            </li>
            <li><a href="<?=base_url('content/view/')?>testimonials">TEMOIGNAGE</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#portfolio">TRAVAUX</a></li>
            <li><a href="<?=base_url('content/view/')?>contact">CONTACTS</a></li>
            <li><a href="<?=base_url()?>#footer" class="getstarted">Restons en contacts</a></li>
          </ul>
          <i class="bi mobile-nav-toggle bi-list"></i>
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->
<div id="Body">
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 0 -->
          <div class="carousel-item active" style="background-image: url(<?=base_url('strong_up')?>/assets/img/slide/Photo-Accueil1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"> STRONG-UP </h2>
                <h2 class="animate__animated animate__fadeInUp" style="font-size: 30px;">RCCM 22-A-00467</h2>
                <h2 class="animate__animated animate__fadeInUp" style="font-size: 30px;">ID.NAT: 22-M7300-N15432Z</h2>
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">BIENVENUE</a> -->
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil1C.jpg)">
            <div class="carousel-container">
              <div class="container">
                 <!-- <h2 class="animate__animated animate__fadeInDown"> STRONG-UP </h2>
                <h2 class="animate__animated animate__fadeInUp " style="font-size: 30px;">RCCM 22-A-00467</h2>
                <h2 class="animate__animated animate__fadeInUp " style="font-size: 30px;">ID.NAT: 22-M7300-N15432Z</h2> -->
                <a href="#about" class="btn btn bg-white text-danger fs-3 animate__animated animate__fadeInUp scrollto">BIENVENUE</a>
              </div>
            </div>
          </div>

          <!-- Slide 1 -->
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">
                  <span class="text-decoration-none">Arrêtez d’être invisible !</span>
                </h2>
                <!-- <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir Plus</a> -->
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil2C.jpg)">
            <div class="carousel-container">
              <div class="container">
                <!-- <h2 class="animate__animated animate__fadeInDown">
                  <span class="text-decoration-none">Arrêtez d’être invisible !</span>
                </h2> -->
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn btn bg-white text-danger fs-3 animate__animated animate__fadeInUp scrollto">En savoir Plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">
                  <span class="text-decoration-none">Tu peux avoir un meilleur produit mais si tu n’es connu, En bien! Tu n’iras nulle part. </span>
                </h2>
                <!-- <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir Plu</a> -->
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil3C.jpg)">
            <div class="carousel-container">
              <div class="container">
                <!-- <h2 class="animate__animated animate__fadeInDown">
                  <span class="text-decoration-none">Tu peux avoir un meilleur produit mais si tu n’es connu, En bien! Tu n’iras nulle part. </span>
                </h2> -->
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn btn bg-white text-danger fs-3 animate__animated animate__fadeInUp scrollto">En savoir Plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil4.jpg)">
            <div class="carousel-container">
              <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">
                    <span class="text-decoration-none">Votre marque a besoin de plus de visibilité online & offline</span>
                  </h2>
                  <!-- <p class="animate__animated animate__fadeInUp"></p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir Plu</a> -->
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil4C.jpg)">
            <div class="carousel-container">
              <div class="container">
                  <!-- <h2 class="animate__animated animate__fadeInDown">
                    <span class="text-decoration-none">Votre marque a besoin de plus de visibilité online & offline</span>
                  </h2> -->
                  <p class="animate__animated animate__fadeInUp"></p>
                  <a href="#about" class="btn btn bg-white text-danger fs-3 animate__animated animate__fadeInUp scrollto">En savoir Plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil5.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"><span class="text-decoration-none">La solution d’impression numérique pour la promotion de votre organisation</span></h2>
                <!-- <p class="animate__animated animate__fadeInUp">Bienvenu sur notre espace, tout ce que vous devez savoir est ici.</p> -->
                <!-- <a href="#about" class="btn btn bg-white text-danger fs-3 animate__animated animate__fadeInUp scrollto">En savoir Plu</a> -->
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(<?=base_url()?>strong_up/assets/img/slide/Photo-Accueil5C.jpg)">
            <div class="carousel-container">
              <div class="container">
                <!-- <h2 class="animate__animated animate__fadeInDown"><span class="text-decoration-none">La solution d’impression numérique pour la promotion de votre organisation</span></h2> -->
                <!-- <p class="animate__animated animate__fadeInUp">Bienvenu sur notre espace, tout ce que vous devez savoir est ici.</p> -->
                <a href="#about" class="btn btn bg-white text-danger fs-3 animate__animated animate__fadeInUp scrollto">En savoir Plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 5 -->
          <div class="carousel-item" style="background-image: url(<?=base_url('strong_up')?>/assets/img/slide/Photo-Accueil6.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"><span class="text-decoration-none"></span> Vous etez près ?</h2>
                <!-- <p class="animate__animated animate__fadeInUp">Bienvenu sur notre espace, tout ce que vous devez savoir est ici.</p> -->
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir Plus</a> -->
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(<?=base_url('strong_up')?>/assets/img/slide/Photo-Accueil6C.jpg)">
            <div class="carousel-container">
              <div class="container">
                <!-- <h2 class="animate__animated animate__fadeInDown"><span class="text-decoration-none"></span> Vous etez près ?</h2> -->
                <!-- <p class="animate__animated animate__fadeInUp">Bienvenu sur notre espace, tout ce que vous devez savoir est ici.</p> -->
                <a href="#about" class="btn btn bg-white text-danger fs-3 animate__animated animate__fadeInUp scrollto">En savoir Plus</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </section><!-- End Hero -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 bg-danger p-4 rounded-bottom-5"></div>
      </div>
    </div>

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="row content" v-for="Data in listDataAbout" :key="Data.id">
            <div class="col-12">
              <div class="row">
                  <div class="col-8 border-top border-danger border-4 mt-3"></div>
                  <div class="col-4">
                    <h3 class="text-danger fw-bolder text-end  fs-2">
                      A Propos de nous 
                      <!-- <i class='bx bx-book-open text-danger'></i> -->
                    </h3>
                  </div>
              </div>
            </div>
            <!-- <div class="col-md-3">
              <img :src="Data.cover_image" class="img-fluid" width="200" alt="">
            </div> -->
            <div class="col-md-12 text-justify mt-3 pt-lg-0">
              <p>{{Data.description}}</p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row mt-4 content" v-for="Data in listDataMission" :key="Data.id">
            <div class="col-12">
              <div class="row">
                <div class="col-3">
                  <h3 class="text-danger fw-bolder text-start fs-2">
                    <!-- <i class='bx bx-cross'></i>  -->
                    Notre mission 
                  </h3>
                </div>
                <div class="col-9 border-top border-danger border-4 mt-3"></div>
              </div> 
            </div>

            <div class="col-md-2 mt-3">
              <img :src="Data.cover_image" class="img-fluid" width="100" alt="">
            </div>
            <div class="col-md-10 text-justify mt-3">
                <p>{{Data.description}}</p>
            </div>
          </div>
        </div>
        <div class="container-fluid bg-danger mt-4">
          <div class="row content">
            <div class="col-md-12 mt-2 pt-lg-0">
              <div class="text-center">
                <p class="">
                  <h3 class="text-white fw-bolder fs-2">
                    <!-- <i class='bx bxs-objects-vertical-bottom fs-3'></i>  -->
                    Nos valeurs
                  </h3>
                </p>
              </div>
              <div class="row mb-3">
                <div class="col-md-4">
                  <div class="card border-danger border-2  bg-danger p-4 service-card" style="height: auto;">
                    <div class=" text-white">
                      <div class="row text-center ">
                        <strong class="text-white h4 fw-bolder text-uppercase">
                          <img src="<?=base_url('strong_up/assets/img/vector/passion.png')?>" width="200" alt="">
                          <!-- <i class="bx bxs-bulb h3 text-white"></i> -->
                          <br>  
                        </strong>
                      </div>
                    </div>
                    <div class="row text-start text-white p-2 border-top border-white border-4">
                      <p> 
                        <i class='bx bxs-quote-alt-left'></i> 
                          Nous sommes une entreprise avec un amour profond pour ce que nous faisons.  Cette passion se retrouve dans chaque interaction et décision que nous prenons  et nous fessions de notre mieux pour vous offrirez de services/produits de qualité au standard international.
                        <i class='bx bxs-quote-alt-right'></i>
                      </p>
                        
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card border-danger border-2 bg-danger p-4 service-card" style="height: auto;">
                    <div class="text-white">
                      <div class="row text-center ">
                        <strong class="text-white h4 fw-bolder text-uppercase">
                          <img src="<?=base_url('strong_up/assets/img/vector/vision.png')?>" width="200" alt="">
                          <!-- <i class="bx bxs-layer h3 text-white"></i>  -->
                          <br>  
                        </strong>
                      </div>
                    </div>
                    <div class="row text-start text-white p-2 border-top border-white border-4">
                        <p>
                          <i class='bx bxs-quote-alt-left'></i> 
                            Notre vision repose sur une philosophie gagnant-gagnant, nous sommes convaincus qu’en aidant nos clients à réussir, nous réussissions également, chaque victoire pour un client est une grande victoire pour nous.
                          <i class='bx bxs-quote-alt-right'></i>
                        </p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card border-danger border-2 bg-danger p-4 service-card" style="height: auto;">
                    <div class="text-white">
                      <div class="row text-center">
                        <strong class="text-white h4 fw-bolder text-uppercase">
                          <img src="<?=base_url('strong_up/assets/img/vector/innovation.png')?>" width="200" alt="">
                          <!-- <i class="bx bx-pulse h3 text-white"></i>  -->
                          <br> 
                          </strong>
                      </div>
                    </div>
                    <div class="row text-start text-white p-2 border-top border-white border-4">
                      <p>
                        <i class='bx bxs-quote-alt-left'></i> 
                          Avec une approche toujours tournée vers l’avenir, nous développons ainsi nos propres solutions en communication visuelle incarnant ainsi notre dévouement à l’innovation et à la créativité technologique.
                        <i class='bx bxs-quote-alt-right'></i>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="fst-italic"></p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mt-4 content">
            <div class="col-12 text-justify">
                <p>
                  <h3 class="text-danger fw-bolder  fs-2">
                    Pourquoi nous choisir 
                    <i class='bx bx-question-mark h1'></i>
                  </h3>
                </p>
                <p>
                  Fort d’expérience dans le domaines, nous accompagnons nos clients sur leurs projets uniques et forgés minutieusement. Nos solutions marketing reposent sur des techniques intelligentes et appréciée de vos prospectes. Nos services sont deux fois moins chers que la concurrence et permettent une autonomies progressive. 
                </p>
            </div>
            
          </div>
        </div>
      </section><!-- End About Section -->


      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">

          <div class="row p-4">
            <div class="col-md-12 text-center border-bottom border-top border-2 border-dark p-2">
                <h4 class="fw-bolder text-danger h5"><span class="p-4">ILS ONT CONFIANT EN NOUS ET VOUS ?</span></h4>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" v-for="Data in listDataPartners" :key="Data.id">
              <img :src="Data.logo" class="img-fluid" width="400" alt="">
            </div>
          </div>

          <!-- <div class="row">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?=base_url('strong_up')?>/assets/img/partners/innov congo.jpg" width="400" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?=base_url('strong_up')?>/assets/img/partners/Kwata logo 2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?=base_url('strong_up')?>/assets/img/partners/Logo Chris decor.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?=base_url('strong_up')?>/assets/img/partners/Logo ZaliFichier 1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?=base_url('strong_up')?>/assets/img/partners/Vema.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?=base_url('strong_up')?>/assets/img/partners/termiteHUB.png" class="img-fluid" alt="">
            </div>
          </div> -->

        </div>
      </section><!-- End Clients Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="row mt-2">
            <div class="col-md-12 mb-2 text-center">
              <h3 class="fw-bolder fw-bolder text-danger fw-bolder fs-2">SERVICES </h3>
            </div>
            <div class="col-md-6">
              <div class="icon-box bg-danger service-card">
                <!-- <div class="row text-center">
                  <i class="bi bi-droplet-half text-white"></i>
                </div> -->
                <div class="text-center border-bottom border-2">
                  <h4>
                    <a href="#" class="text-white">Design Graphique</a>
                  </h4>
                </div>
                <div class="text-justify text-white fw-bolder mt-2">
                  <ul>
                    <li>Affichage, enseigne, livre</li>
                    <li>Magazine, brochure, dépliant</li>
                    <li>Édition</li>
                    <li>Emballage</li>
                  </ul>
                  <button class="btn text-white fw-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal1">En savoir plus</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box bg-danger service-card">
                <!-- <div class="row text-center">
                  <i class="bi bi-printer-fill text-white"></i>
                </div> -->
                <div class="text-center  border-bottom border-2">
                  <h4><a href="#" class="text-white">Impression numérique </a></h4>
                </div>
                <div class="text-justify text-white fw-bolder mt-2">
                  <ul>
                    <li>Bâche, Roll up, One way, autocollant</li>
                    <li>Carte de service, Brochure, Dépliant</li>
                    <li>T-shirt, Polo, Lacoste, Chemise</li>
                    <li>Impression Grand et Petit format</li>
                  </ul>
                  <button class="btn text-white fw-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal2">En savoir plus</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box bg-danger service-card">
                <!-- <div class="row text-center">
                  <i class="bi bi-file-earmark-image-fill text-white"></i>
                </div> -->
                <div class="text-center border-bottom border-2">
                  <h4><a href="#" class="text-white">Image de marque </a></h4>
                </div>
                <div class="text-justify text-white fw-bolder mt-2">
                  <ul>
                    <li>Identité visuelle (logo) </li>
                    <li>Normes graphiques</li>
                    <li>Couleurs, typographies </li>
                    <li>Signature</li>
                  </ul>
                  <button class="btn text-white fw-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal3">En savoir plus</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box bg-danger service-card">
                <!-- <div class="row text-center">
                  <i class="bi bi-laptop-fill text-white"></i>
                </div> -->
                <div class="text-center border-bottom border-2">
                  <h4>
                    <a href="#" class="text-white">Marketing et Publicité </a>
                  </h4>
                </div>
                <div class="text-justify text-white fw-bolder mt-2">
                  <ul>
                    <li>Médias traditionnels et numériques </li>
                    <li>Campagne via les réseaux sociaux</li>
                    <li>Direction artistique </li>
                    <li>Conception-rédaction</li>
                  </ul>
                  <button class="btn text-white fw-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal4">En savoir plus</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Services Section -->

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1 class="modal-title fs-5" id="exampleModalLabel">DESIGN GRAPHIQUE</h1>
        <p class="text-justify">
          <ul>
            <li>Votre nouveau projet nécessite la création d’une affiche dans le but d’en faire la promotion ?</li>
            <li>Vous devez produire une brochure pour faire connaître votre entreprise ?</li>
            <li>Peut-être avez-vous besoin de mettre en page votre rapport annuel ?</li>
          </ul>
          
          <h5>NOUS MAÎTRISONS L’ART DE SYNTHÉTISER ET D’ORGANISER L’INFORMATION POUR PRÉCISER VOTRE MESSAGE ET DONNER UN MAXIMUM D’IMPACT À VOS COMMUNICATIONS.</h5>
          <p>Qu’il soit imprimé ou numérique, statique ou animé, bidimensionnel ou tridimensionnel, le design graphique englobe toutes les sphères de la mise en forme visuelle de l’information : </p>
            <ol>
              <li>Affiches, </li>
              <li>magazines,</li>
              <li>livres, </li>
              <li>brochures, </li>
              <li>dépliants, </li>
              <li>emballages, </li>
              <li>sites Web, </li>
              <li>animations publicitaires, </li>
              <li>etc.</li>
            </ol> 
          <p>Peu importe la nature du mandat, nous abordons toujours le travail à effectuer de la même manière : nous posons des questions, nous analysons et nous vous proposons des solutions visuelles simples, fonctionnelles et esthétiques, en harmonie avec votre identité de marque.</p>

          <h4>TOUT EST QUESTION DE COHÉRENCE</h4>
          <p>Chaque entreprise est unique en son genre. Par conséquent, l’identité de marque devrait refléter cette unicité. Transmettre la personnalité de votre entreprise à travers votre identité de marque, quelle que soit la plateforme, constitue notre ligne directrice lorsque nous concevons vos outils de communications. C’est pourquoi nous respectons à la lettre les normes graphiques instaurées lors de l’élaboration de votre identité visuelle.
          Le guide des normes graphiques établit les règles qui gouvernent tous les supports de communication de votre marque. L’importance d’en faire bon usage est primordiale pour nous. De la conception à la réalisation, nous veillons à ce que votre image de marque demeure constante à travers tous vos outils et nous nous assurons de la qualité de production de ceux-ci. Bref, la cohérence est essentielle, car elle permet d’accentuer la notoriété de votre entreprise et de confirmer la crédibilité de celle-ci.
          </p>

          <h4>COMMUNICATION VISUELLE</h4>
          <h5>LES BASES</h5>
          <p>Toute création graphique dont l’impact visuel est puissant et évocateur passe par un message clair. Pour organiser l’information de manière optimale, nous nous appuyons sur quelques principes de base comme l’équilibre, la lisibilité, la simplicité et bien sûr, le choix judicieux des éléments graphiques à utiliser (les couleurs, les caractères typographiques, les photographies, les illustrations, les formes, les textures).
          <br>Ainsi, nous prenons bien soin de faire différents essais lorsque nous travaillons la mise en page d’un document, afin que celle-ci soit équilibrée et qu’elle comporte des zones de dégagement pour faciliter la lecture. Une composition claire, simple et épurée attire nettement plus l’attention et favorise davantage la compréhension, comparativement à une autre plus chargée. Quelques secondes à peine suffisent afin de créer une bonne impression. Il en va de l’apparence professionnelle de votre entreprise.
          </p>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-justify">
        <h1 class="modal-title fs-3" id="exampleModalLabel">IMPRESSION NUMERIQUE</h1>
          <urlencode>
            <li>Votre nouveau projet nécessite la création d’une affiche dans le but d’en faire la promotion ? </li>
            <li>Vous devez produire une brochure pour faire connaître votre entreprise ?</li> 
            <li>Peut-être avez-vous besoin de mettre en page votre rapport annuel ?</li>
          </ul>
          <h4>NOUS IMPRIMONS SUR TOUS LES SUPPORTS , L’IMPRESSION NUMÉRIQUE PETIT ET GRAND FORMAT.</h4>

          <p>Notre équipe met à votre disposition son savoir-faire pour vous fournir des imprimés de qualité. Nous sommes dotés d'un équipement à la pointe de la technologie. Petits, moyens ou gros volumes, nous apportons la solution adaptée à vos besoins. De la création au produit fini, Ets Strong-UP est le partenaire idéal pour tous vos imprimés. Étant professionnel de l'imprimerie, nous mettons un point d'honneur à reproduire fidèlement les couleurs car chez <strong>Ets STRONG UP</strong> nous offrons <strong>UN SERVICE DE QUALITE, RAPIDE ET ADAPTE A VOTRE BESOIN.</strong></p>
          
          <h4>PETIT FORMAT</h4>
          <p>Nous imprimons de support de petit format soit une impression numérique inférieure à un format A3+ ; en centimètre 48,3cm sur 32,9cm. Avec de produits comme : 
            carte de visite, 
            carte de service, 
            flyers, 
            badges, 
            carte de vœux, 
            invitation, 
            dépliant et 
            etc. </p>
          <h4>GRAND FORMAT</h4>
          <p>Nous imprimons également sur les supports grand format, sur banderole publicitaire, bâche, autocollant, Roll up, One way, autocollant vitrine, affiche backlight, Nous fessions aussi les impressions sur t-shirt, polo, Lacoste, chemise, stylo, Boite à image , affiche et autres. </p>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-justify">
          <h1 class="modal-title fs-3" id="exampleModalLabel">IMAGE DE MARQUE</h1>
          <ul>
            <li>Votre entreprise est en démarrage ? </li>
            <li>Votre marque a besoin d’être repensée ? </li>
            <li>Peut-être avez-vous simplement besoin de remodeler votre logo ou de trouver une signature ?</li>
          </ul>
          <h4>NOUS BÂTISSONS VOTRE MARQUE EN FONCTION DE VOTRE CIBLE ET DANS LE BUT DE VOUS DÉMARQUER DE LA CONCURRENCE.</h4>
          <p>Le branding permet de reconnaître une marque à travers son langage visuel et écrit. D’une part, il comporte tout ce qui constitue l’identité visuelle (logo, normes graphiques, couleurs, typographies, imagerie, animations, etc.), et d’autre part, tout ce qui constitue la voix de la marque (nom, signature, tonalité des textes, etc.). Une fois que nous avons bien établi ensemble votre identité de marque, nous la développons selon l’ampleur des outils de communication à créer.</p>
          <h4>L’IMPORTANCE DU POSITIONNEMENT</h4>
          <p>Une analyse précise et minutieuse est effectuée en amont du projet afin de bien cibler l’ADN de votre entreprise. Les valeurs, les forces, les perceptions à promouvoir et à éviter, le public cible, la concurrence ainsi que l’aspect technique doivent être passés au peigne fin en vue de clarifier le travail à accomplir. Un résumé de cette analyse vous est soumis aux fins d’approbation. Avant de passer à l’étape de création, nous établissons un échéancier précis afin que vous puissiez suivre toutes les étapes du processus.
          Cette démarche n’est donc pas à prendre à la légère. Afin d’obtenir des résultats satisfaisants, il faut prévoir quelques mois de réflexion et de travail à votre agenda. De toute évidence, une image de marque réfléchie et bien conçue peut crédibiliser rapidement votre projet entrepreneurial.
          </p>
          <h4>UN LOGO QUI ÉMERGE DU LOT</h4>
          <p>Le logo est bien sûr le cœur et l’âme de l’identité visuelle. Un bon logo doit combiner simplicité graphique, clarté et distinction, en plus d’être facilement mémorisable et idéalement, il doit être le plus intemporel possible. Plus votre logo est distinctif, évocateur et collé aux valeurs de votre entreprise, plus grandes sont les chances qu’il transmette parfaitement ce que vous souhaitez communiquer.
          Lorsque nous concevons un logo, nous nous assurons qu’il soit polyvalent, déclinable et aisément adaptable à toutes les plateformes, car il constitue l’élément central sur lequel nous nous appuyons pour déployer votre identité visuelle. C’est d’ailleurs à travers son application (papeterie, brochure, site Web, publicité, etc.), que celle-ci prend tout son sens. La cohérence et la constance visuelle dans toutes vos communications permettent à votre marque d’exister et de rayonner dans l’imaginaire des consommateurs et clients potentiels.</p>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1 class="modal-title fs-3" id="exampleModalLabel">Marketing et Publicité</h1>
        <p class="text-justify">
          Comment vous distinguer de la masse, compte tenu de la prolifération de messages publicitaires auxquels nous sommes exposés chaque jour ? 
          Vous avez une campagne publicitaire à concevoir ?
          <h4>NOUS IMAGINONS DES CONCEPTS QUI INTERPELLENT EN VUE DE CONVAINCRE VOTRE CLIENTÈLE CIBLE À PASSER À L’ACTION.</h4>
          <p>Une campagne publicitaire qui attire l’attention s’appuie sur un concept simple et percutant. Qu’elle soit inventive, humoristique, bouleversante ou déroutante, l’idée véhiculée doit émouvoir la cible, tout en se conformant à l’identité de marque.</p>
          <h4>PAS DE RÉSULTATS SANS BRIEFING PRÉCIS</h4>
          <p>Pour créer des concepts publicitaires qui obtiennent un impact assuré, un brief clair et précis est primordial afin de guider chaque collaborateur dans son travail. Ce précieux document regroupe le maximum d’informations menant à la réalisation du projet : mise en contexte, public cible, concurrence, objectifs et axe de communication, livrables, spécifications techniques, échéancier, etc. Soyez assuré que nous ne commençons aucun travail de création sans avoir parfaitement bien compris le mandat.
          Avec la multitude de plateformes sur lesquelles un concept peut se retrouver, nous veillons à ce qu’il soit déclinable, peu importe le format. Que celui-ci soit diffusé sur les médias traditionnels (télé, radio, affichage, imprimé, etc.) ou interactifs (bannières web, réseaux sociaux, etc.), avant d’aller de l’avant avec un concept et de vous le présenter, nous nous questionnons toujours à savoir s’il répond parfaitement aux critères fixés dans le brief créatif.</p>
          
          <h4>L’ART DU BRAINSTORMING</h4>
          <p>Chaque projet de création publicitaire commence systématiquement par une séance de brainstorming. On définit le brainstorming comme étant une méthode de créativité qui se pratique en groupe, favorisant l’émergence de solutions nouvelles et pertinentes. Cette technique s’appuie sur une hypothèse fort simple :tous ensemble, nous sommes imbattables !
          Pour qu’une session de brainstorming atteigne les objectifs escomptés, nous nous efforçons de réunir les conditions idéales afin de favoriser l’expression de tout un chacun et, contrairement à ce que plusieurs croient, c’est dans la contrainte, plutôt que dans la liberté absolue, que les meilleures idées jaillissent. Une fois les pistes créatives rassemblées, nous poussons plus loin les meilleurs concepts afin d’en clarifier le message et nous laissons tomber les idées superflues qui ne s’alignent pas précisément avec vos objectifs de communication.</p>
        </p>
      </div>
    </div>
  </div>
</div>

      <!-- ======= Team Section ======= -->
      <section id="team" class="team ">
        <div class="container">

          <div class="row">
            <div class="col-md-12 text-start">
              <h3 class="fw-bolder text-danger fw-bolder  fs-2"> EQUIPES 
                <!-- <i class='bx bxs-group'></i> -->
              </h3>
            </div>

            <div class="col-lg-6" v-for="Data in listDataTeam" :key="Data.id">
              <div class="member d-flex align-items-start">
                <div class="pic mt-1">
                  <img :src="Data.cover_image" class="img-fluid" alt="">
                </div>
                <div class="member-info mt-4">
                  <h4>{{Data.noms}}</h4>
                  <span>{{Data.poste}}</span>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?=base_url('strong_up')?>/assets/img/team/template_img.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Samuel CHIKALA</h4>
                  <span>Chief Executive Officer</span>
                  <p></p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""><i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?=base_url('strong_up')?>/assets/img/team/template_img.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Lucien MURHULA KALALA</h4>
                  <span>Social media management, IT & webmaster</span>
                  <p></p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?=base_url('strong_up')?>/assets/img/team/template_img.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Lagrise BILOKE</h4>
                  <span>Marketing et communication</span>
                  <p></p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?=base_url('strong_up')?>/assets/img/team/template_img.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Jean NZINE</h4>
                  <span>Photographe & Graphic designer</span>
                  <p></p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div> -->

          </div>

        </div>
      </section><!-- End Team Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" >

          <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-end">
              <h3 class="fw-bolder text-danger fw-bolder"> GALLERIE </h3>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Tous</li>
                <li :data-filter="'.'+Data.category" v-for="Data in listDataCategory" :key="Data.id">
                  {{Data.category}}
                </li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" id="portfolio-container">

              <div :class="'col-lg-4 col-md-6 portfolio-item '+Data.category" v-for="Data in listDataGallery" :key="Data.id">
                <div class="portfolio-wrap">
                  <img :src="Data.image" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{Data.description}}</h4>
                    <p>Ajouter Le {{Data.added_date}}</p>
                    <div class="portfolio-links">
                      <a :href="Data.image" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/innov congo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Logo Chris decor.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Logo Chris decor.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Logo ZaliFichier 1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Logo ZaliFichier 1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/innov congo.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/innov congo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Kwata logo 2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Logo Chris decor.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Logo Chris decor.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/Logo ZaliFichier 1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/Logo ZaliFichier 1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?=base_url('strong_up')?>/assets/img/portfolio/innov congo.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="<?=base_url('strong_up')?>/assets/img/portfolio/innov congo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    
                  </div>
                </div>
              </div>
            </div> -->

          </div>

        </div>
      </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>
                  <img src="<?=base_url('strong_up')?>/assets/img/icon/Logo en bas.png" width="100" alt="">
                </h3>
                <p>
                  Lubumbashi <br>
                  HAUT-KATANGA, RDC<br>
                  Bukavu <br>
                  SUD-KIVU, RDC<br>
                  <strong>Téléphone:</strong> +234 970 759 002<br>
                  <strong>Email:</strong> contact@strong-up.org<br>
                </p>
                <div class="social-links mt-3">
                  <a href="https://twitter.com/ets.strong_up" class="twitter"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://facebook.com/ets.strong_up" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://instagram.com/ets.strong_up" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/ets.strong_up" class="google-plus"><i class="bx bxl-linkedin"></i></a>
                  <a href="#" class="whatsapp"><i class='bx bxl-whatsapp'></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Vue d'ensemble</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>">Acceuil</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">A Propos</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Gallerie</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('content/view/')?>contact">Contacts</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Nos services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#services">Graphique design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#services">Impression numérique</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#services">Image de marque</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#services">Marketing & Publicité</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h3>Restons en contacts</h3>
              <p>Envoyer notre adresse mail pour recevoir de nos nouvelles à chaque fois. Notre équipe est prête à répondre à toutes vos questions et à vous accompagner dans votre démarche au sein de votre entreprise.</p>
              <form action="" method="post" @submit.prevent="HttpPost" id="registerForm">
                <input type="email" name="email" v-model="email" id="email" placeholder="Email"><input type="submit" value="Envoyer">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          &copy; Droit d'auteur <strong><span>2023</span></strong>. <br> 
          Tous les droits reserver
        </div>
        <div class="credits">
          Developer par <a href="https://strong-up.org/">Ets Strong-UP</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </div>
</body>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('strong_up')?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('strong_up')?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url('strong_up')?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('strong_up')?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url('strong_up')?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?=base_url('strong_up')?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url('strong_up')?>/assets/vendor/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('strong_up')?>/assets/js/main.js"></script>

  <script src="<?=base_url('strong_up/admin/js/')?>vue.global.js"></script>
  <script src="<?=base_url('strong_up/admin/js/')?>axios.min.js"></script>

<script>
  const API_LINK = '<?=base_url()?>';
  const { createApp } = Vue

  createApp({
    data() {
      return {
        email:'',
        listData: null,
        listDataAbout:null,
        listDataMission:null,
        listDataPartners:null,
        listDataTeam:null,
        listDataCategory:null,
        listDataGallery:null
      }
    },
    mounted() {
        this.HttpGet('about');
        this.HttpGet('mission');
        this.HttpGet('partners');
        this.HttpGet('team');
        this.HttpGet('category');
        this.HttpGet('gallery');
        
    },
    methods : {
        HttpGet(API_to){
            axios.get(
                API_LINK+"Admin/"+API_to
            ).then((Response) => {
                if (Response.status == 200) {
                    switch (API_to) {
                      case 'about':
                        this.listDataAbout =  Response.data['data'];
                        break;
                      case 'mission':
                        this.listDataMission =  Response.data['data'];
                        break;
                      case 'partners':
                        this.listDataPartners =  Response.data['data'];
                        break;
                      case 'team':
                        this.listDataTeam =  Response.data['data'];
                        break;
                      case 'category':
                        this.listDataCategory =  Response.data['data'];
                        break;
                      case 'gallery':
                        this.listDataGallery =  Response.data['data'];
                        break;
                    
                      default:
                        break;
                    }
                    
                } 
            }).catch((error)=>alert(error))
        },
        HttpPost(event){
            const formData = new FormData()
            formData.append('email', this.email)
            axios.post(
                API_LINK+"Admin/register",
                formData,
            )
            .then((Response)=>{
                document.getElementById('registerForm').reset();
                alert(Response.data.message)
            })
            .catch((error)=>alert(error))
        }
    }
    
  }).mount('#Body')
</script>


</html>