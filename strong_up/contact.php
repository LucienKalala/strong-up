<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Etablisement Strong UP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('strong_up')?>/assets/img/icon/Logo 4.JPG" rel="icon">
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
        <a href="<?=base_url()?>"><img src="<?=base_url('strong_up')?>/assets/img/icon/logo.JPG" class="img-fluid" alt=""> <span class="d-none">Strong UP</span> </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="<?=base_url()?>" class="logo me-auto"><img src="<?=base_url('strong_up')?>/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?=base_url()?>" class="active">ACCEUIL</a></li>

          <li class="dropdown"><a href="#"><span>A PROPOS DE NOUS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?=base_url()?>#about">TOUS SUR NOUS</a></li>
              <li><a href="<?=base_url()?>#team">EQUIPES</a></li>
            </ul>
          </li>
          <li><a href="<?=base_url('content/view/')?>testimonials">TEMOIGNAGE</a></li>
          <li><a href="<?=base_url()?>#services">SERVICES</a></li>
          <li><a href="<?=base_url()?>#portfolio">TRAVAUX</a></li>
          <li><a href="<?=base_url('content/view/')?>contact">CONTACTS</a></li>
          <li><a href="<?=base_url()?>#footer" class="getstarted">Restons en contacts</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div id="Body">
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="<?=base_url()?>">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Address:</h4>
                <p>RDC , SUD-KIVI , BUKAVU</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@strong-up.org</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+234 970 759 002</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" method="post"  id="contactForm" @submit.prevent="HttpPost" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" v-model="name" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" v-model="email" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" v-model="subject" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" v-model="message" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Encours ...</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyée.</div>
              </div> -->
              <div class="text-center"><button type="submit">Envoyer Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#about">A Propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#portfolio">Gallerie</a></li>
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
              <form action="" method="post" @submit.prevent="HttpPostRegister" id="registerForm">
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Developer par <a href="https://strong-up.org/">Ets Strong UP</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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
        name:'',
        email:'',
        subject:'',
        message:''
      }
    },
    methods : {
      HttpPost(event){
            const formData = new FormData()
            formData.append('name', this.name)
            formData.append('email', this.email)
            formData.append('subject', this.subject)
            formData.append('message', this.message)
            axios.post(
                API_LINK+"admin/contact",
                formData
            )
            .then((Response)=>{
                if (Response.status == 200) {
                    document.getElementById('contactForm').reset();
                } 
                alert(Response.data.message); 
            })
            .catch((error)=>alert(error))
        },
        HttpPostRegister(event){
            const formData = new FormData()
            formData.append('email', this.email)
            axios.post(
                API_LINK+"admin/register",
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