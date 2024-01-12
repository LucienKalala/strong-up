
    <div id="layoutAuthentication">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?=base_url('admin/view/index')?>"><h4 class="text-danger fw-bolder"><?=$title?></h4></a>
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
                        <li><a class="dropdown-item" href="<?=base_url('Logout')?>">Deconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <?=$sideBar?>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Utilisateurs</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Vue Global</a></li>
                            <li class="breadcrumb-item active">Tables des Utilisateurs</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="row mb-2">
                            <div class="align-center mb-2">
                                <button type="buttom" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#user"> <i class="fas fa-plus"></i> Ajouter Utilisateurs</button>
                            </div>
                            <div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-header bg-constumer">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Utilisateurs</h5>
                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form id="UserForm" @submit.prevent="HttpPost">
                                                    <div class="col-md-12">
                                                        <label for="">Nom</label>
                                                        <input type="text" name=""  v-model="fname" class="form-control" id="fname">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="">Post Nom</label>
                                                        <input type="text" name="" v-model="lname" class="form-control" id="lname">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="">Address mail</label>
                                                        <input type="email" name="" v-model="email" class="form-control" id="email">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="">Telephone</label>
                                                        <input type="text" name="" v-model="phone" class="form-control" id="phone">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="">Genre</label>
                                                        <select name="gender" v-model="gender" class="form-control" id="gender">
                                                            <option value="">Genre</option>
                                                            <option value="Homme">Homme</option>
                                                            <option value="Femme">Femme</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="">Lieu de Naissance</label>
                                                        <input type="text" name="" v-model="bplace" class="form-control" id="bplace">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="">Date de Naissance</label>
                                                        <input type="date" name="" v-model="bday" class="form-control" id="bday">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <button type="submit" class="btn btn-secondary w-100" id="">Enregistrer</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tous 
                            </div>
                            <div class="card-body table-responsive">
                                <!-- <table id="datatablesSimple" class="table"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Post Nom</th>
                                            <th>Address Mail</th>
                                            <th>Telephone</th>
                                            <th>Genre</th>
                                            <th>Lieu Naissance</th>
                                            <th>Date Naissance</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Post Nom</th>
                                            <th>Address Mail</th>
                                            <th>Telephone</th>
                                            <th>Genre</th>
                                            <th>Lieu Naissance</th>
                                            <th>Date Naissance</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr v-for="Data in listData" :key="Data.id">
                                            <td>{{Data.id}}</td>
                                            <td>{{Data.fname}}</td>
                                            <td>{{Data.lname}}</td>
                                            <td>{{Data.email}}</td>
                                            <td>{{Data.phone}}</td>
                                            <td>{{Data.gender}}</td>
                                            <td>{{Data.bplace}}</td>
                                            <td>{{Data.bday}}</td>
                                            <td>
                                                <button class="btn" @click="deleteThis('user',Data.id)"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
        fname:'',
        lname:'',
        email:'',
        phone:'',
        gender:'',
        bplace: '',
        bday: '',
        listData:null
      }
    },
    mounted() {
        this.HttpGet();
    },
    methods : {
        HttpGet(){
            axios.get(
                API_LINK+"Admin/listuser"
            ).then((Response) => {
                if (Response.status == 200) {
                    this.listData =  Response.data['data'];
                } 
            }).catch((error)=>alert(error))
        },
        deleteThis(table,dataID){
            axios.get(
                API_LINK+"Admin/deleteThis/"+table+"/"+dataID
            ).then((Response) => {
                alert(Response.data.message)
                this.HttpGet() 
            }).catch((error)=>alert(error))
        },
        HttpPost(event){
            const formData = new FormData()
            formData.append('fname', this.fname)
            formData.append('lname', this.lname)
            formData.append('email', this.email)
            formData.append('phone', this.phone)
            formData.append('gender', this.gender)
            formData.append('bplace', this.bplace)
            formData.append('bday', this.bday)
            axios.post(
                API_LINK+"Admin/adduser",
                formData
            )
            .then((Response)=>{
                if (Response.status == 200) {
                    document.getElementById('UserForm').reset();
                    //this.HttpGet();
                } 
                alert(Response.message); 
            })
            .catch((error)=>alert(error))
        }
    }
    
  }).mount('#layoutAuthentication')
</script>