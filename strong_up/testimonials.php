<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Strong UP</title>
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
              <li><a href="<?=base_url('content/view/')?>testimonials">TEMOIGNAGE</a></li>
            </ul>
          </li>
          
          <li><a href="<?=base_url()?>#services">NOS SERVICES</a></li>
          <li><a href="<?=base_url()?>#portfolio">GALLERIE</a></li>
          <li><a href="<?=base_url('content/view/')?>contact">NOUS CONTACTER</a></li>
          <!-- <li><a href="<?=base_url('content/view/')?>testimonials#footer" class="getstarted">Restons en contacts</a></li> -->
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
          <h2>Temoignages</h2>
          <ol>
            <li><a href="<?=base_url()?>">Acceuil</a></li>
            <li>Temoignages</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-6"  v-for="Data in listData" :key="Data.id">
            <div class="testimonial-item">
              <img :src="Data.profile_image" class="testimonial-img" alt="">
              <h3>{{Data.name}}</h3>
              <h4>{{Data.job}}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{Data.testimony}}.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <!--<div class="col-lg-6">
            <div class="testimonial-item">
              <img src="<?=base_url('strong_up')?>/assets/img/testimonials/5250169.png" class="testimonial-img" alt="">
              <h3>Musombwa Saidi</h3>
              <h4>Medecin</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

           <div class="col-lg-6">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="<?=base_url('strong_up')?>/assets/img/testimonials/5250169.png" class="testimonial-img" alt="">
              <h3>Rosette Mobile</h3>
              <h4>Vendeuse de Pain</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="<?=base_url('strong_up')?>/assets/img/testimonials/5250169.png" class="testimonial-img" alt="">
              <h3>Akitowa Chisholero</h3>
              <h4>Economiste</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="<?=base_url('strong_up')?>/assets/img/testimonials/5250169.png" class="testimonial-img" alt="">
              <h3>Jonathan Malengela</h3>
              <h4>Master En Data structure</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="<?=base_url('strong_up')?>/assets/img/testimonials/5250169.png" class="testimonial-img" alt="">
              <h3>Alain Tambwe</h3>
              <h4>IT</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="<?=base_url('strong_up')?>/assets/img/testimonials/5250169.png" class="testimonial-img" alt="">
              <h3>Jeremy Katanda</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>
                  <img src="<?=base_url('strong_up')?>/assets/img/icon/Logo en bas.png" width="150" alt="">
                </h3>
                <p>
                  Lubumbashi <br>
                  HAUT-KATANGA, RDC<br>
                  <!-- Bukavu <br>
                  SUD-KIVU, RDC<br> -->
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
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#services">Nos Services</a></li>
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
        &copy; Droit d'auteur <strong><span><?=date('Y')?></span></strong>. <br>
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

  <div class="modal fade" id="testimony" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2>Que pensez vous de nos services, aller dite nous! en nous laissant un mots.</h2>
              </div>
              <div class="col-md-12">
                <form action="" method="post" id="testimonyForm" @submit.prevent="HttpPost">
                  <div class="row mt-2">
                      <div class="col-md-12">
                        <input type="file" class="form-control" id="image" ref="image" @change="onFileChange">
                      </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <input type="text" class="form-control" v-model="names" placeholder="Votre noms" required>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <input type="text" class="form-control" v-model="job" placeholder="Que faite vous dans la vie?" required>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <textarea  class="form-control" v-model="testimony" placeholder="Dite nous tout ..." required></textarea>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-danger w-100"> <i class='bx bxs-send'></i> Envoyer</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <script>
      $(document).ready(function(){
        $('#testimony').modal('show')
      });
  </script>
  <script src="<?=base_url('strong_up/admin/js/')?>vue.global.js"></script>
  <script src="<?=base_url('strong_up/admin/js/')?>axios.min.js"></script>
<script>
  const API_LINK = '<?=base_url()?>';
  const { createApp } = Vue

  createApp({
    data() {
      return {
        names:'',
        job:'',
        testimony:'',
        file: null,
        listData: null
      }
    },
    mounted() {
      this.HttpGet('temoignage')
    },
    methods : {
        onFileChange(event) {
            this.file = event.target.files[0]
        },
        HttpGet(API_to){
            axios.get(
                API_LINK+"Admin/"+API_to
            ).then((Response) => {
                if (Response.status == 200) {
                    this.listData =  Response.data['data'];
                } 
            }).catch((error)=>alert(error))
        },
        HttpPost(event){
            const formData = new FormData()
            formData.append('image', this.file)
            formData.append('names', this.names)
            formData.append('job', this.job)
            formData.append('testimony', this.testimony)

            axios.post(
                API_LINK+"Admin/addtestimony",
                formData,
            )
            .then((Response)=>{
                document.getElementById('testimonyForm').reset();
                alert(Response.data.message)
                this.HttpGet('temoignage')
            })
            .catch((error)=>alert(error))
        },
        HttpPostRegister(event){
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