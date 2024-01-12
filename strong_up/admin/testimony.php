
<div id="Body">
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
                        <h1 class="mt-4">Temoignages</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Vue Global</a></li>
                            <li class="breadcrumb-item active">Tables des Temoignages</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="row mb-2">
                            
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tous 
                            </div>
                            <div class="card-body">
                                <!-- <table id="datatablesSimple" class="table"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Profile</th>
                                            <th>Noms</th>
                                            <th>Travail</th>
                                            <th>Temoignages</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Profile</th>
                                            <th>Noms</th>
                                            <th>Travail</th>
                                            <th>Temoignages</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr v-for="Data in listData" :key="Data.id">
                                            <td>{{Data.id}}</td>
                                            <td><img :src="Data.profile_image" class="img-fluid" width="100"> </td>
                                            <td>{{Data.name}}</td>
                                            <td>{{Data.job}}</td>
                                            <td>{{Data.testimony}}</td>
                                            <td>
                                            <button class="btn" @click="statusUpdate('testimony',Data.id)"><i :class="[ (Data.status == '0') ? 'fas fa-eye-slash' : 'fas fa-eye']"></i></button>
                                                <button class="btn" @click="deleteThis('testimony',Data.id)"><i class="fas fa-trash"></i></button>
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
        image:'',
        name:'',
        job:'',
        testimony:'',
        added_date:'',
        status: '',
        listData:null
      }
    },
    mounted() {
        this.HttpGet();
    },
    methods : {
        HttpGet(){
            axios.get(
                API_LINK+"Admin/listtemoignage"
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