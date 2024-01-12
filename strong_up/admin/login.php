<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ets STRONG UP</title>
        <link href="<?=base_url('strong_up/admin/')?>/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content" class="bg-danger">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h1 class="text-center font-weight-light my-4 text-danger">Ets STRONG UP</h1>
                                        <h3 class="text-center font-weight-light my-4">CONNEXION</h3>
                                    </div>
                                    <div class="card-body">
                                        <form @submit.prevent="HttpPost">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" v-model="user" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Address mail</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" v-model="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Mot de passe</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Se souvenir de moi</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small text-dark" href="#">Mot de passe oublier ?</a>
                                                <button type="submit" class="btn btn-danger">VALIDER</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Droit d'auteur &copy; Ets STRONG UP 2023</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url('strong_up/admin/js/')?>vue.global.js"></script>
        <script src="<?=base_url('strong_up/admin/js/')?>axios.min.js"></script>

<script>
  const { createApp } = Vue

  createApp({
    data() {
      return {
        user: "",
        password: "",
        http : '<?=base_url()?>'
      }

    },
    methods : {
        AuthEncript(username, passcode){
           return "Basic "+btoa(username+":"+passcode);
        },
        HttpPost(){
            axios.post(
                    this.http+"login","",{
                        headers: {
                            "HautaJuwaMaBore":this.AuthEncript(this.user,this.password)
                        }
                    }
                )
            .then((Response)=>{
                alert(Response.data.sms) 
                if (Response.data.status == 200) {
                    window.location = this.http+"admin/view/index";
                } 
            })
            .catch((error)=>alert(error))
        }
    }
    
  }).mount('#layoutAuthentication')
</script>
    </body>
</html>