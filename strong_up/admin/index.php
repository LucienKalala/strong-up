
<div id="Body">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?=base_url('admin/view/index')?>">
                <h4 class="text-danger fw-bolder"><?=$title?></h4>
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=base_url('admin/view/settings')?>">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?=base_url('logout')?>">Deconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">

            <?=$sideBar?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">CONTENU</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Veu d'ensemble</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Utilisateurs</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Partenaires</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Images Gallerie</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Equipes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Compte Inscrit Pour Actualite
                            </div>
                            <div class="card-body">
                                <!-- <table id="datatablesSimple"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Address Mail</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Address Mail</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr v-for="Data in listData" :key="Data.id">
                                            <td>{{Data.id}}</td>
                                            <td>{{Data.added_date}}</td>
                                            <td>{{Data.email}}</td>
                                            <td>
                                                <button class="btn" @click="statusUpdate('client',Data.id)"><i :class="[ (Data.status == '0') ? 'fas fa-eye-slash' : 'fas fa-eye']"></i></button>
                                                <button class="btn" @click="deleteThis('client',Data.id)"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ets Strong UP 2023</div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
</div>

<script src="<?=base_url('strong_up/admin/js/')?>vue.global.js"></script>
<script src="<?=base_url('strong_up/admin/js/')?>axios.min.js"></script>
<script>
  const { createApp } = Vue

  createApp({
    data() {
      return {
        description:'',
        file: null,
        listData: null
      }
    },
    mounted() {
        this.HttpGet();
    },
    methods : {
        onFileChange(event) {
            this.file = event.target.files[0]
        },
        HttpGet(){
            axios.get(
                API_LINK+"Admin/listclient"
            ).then((Response) => {
                if (Response.status == 200) {
                    this.listData =  Response.data['data'];
                } 
            }).catch((error)=>alert(error))
        },
        statusUpdate(table,dataID){
            axios.get(
                API_LINK+"Admin/statusUpdate/"+table+"/"+dataID
            ).then((Response) => {
                alert(Response.data.message)
                this.HttpGet()
            }).catch((error)=>alert(error))
        },
        deleteThis(table,dataID){
            axios.get(
                API_LINK+"Admin/deleteThis/"+table+"/"+dataID
            ).then((Response) => {
                alert(Response.data.message)
                this.HttpGet() 
            }).catch((error)=>alert(error))
        }
    }
    
  }).mount('#Body')
</script>
