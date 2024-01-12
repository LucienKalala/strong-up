
<div id="layoutAuthentication">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?=base_url('admin/view/index')?>"><h4 class="text-danger fw-bolder"><?=$title?></h4></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
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
                    <h1 class="mt-4">Log informations</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Vue Global</a></li>
                        <li class="breadcrumb-item active">Données</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Log Data
                        </div>
                        <div class="card-body table-responsive">
                            <!-- <table id="datatablesSimple"> -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Operation</th>
                                        <th>PC Information</th>
                                        <th>IP Address</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Operation</th>
                                        <th>PC Information</th>
                                        <th>IP Address</th>
                                    </tr>
                                </tfoot> -->
                                <tbody>
                                    <tr v-for="Data in listData" :key="Data.id">
                                        <td>{{Data.date}}</td>
                                        <td style="max-width: 180px;">{{Data.operation}}</td>
                                        <td>{{Data.header_info}}</td>
                                        <td>{{Data.ip_address}}</td>
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
        http : 'http://strong-up/',
        listData:null
      }
    },
    mounted() {
        this.HttpGet();
    },
    methods : {
        HttpGet(){
            axios.get(
                this.http+"Admin/listlog"
            ).then((Response) => {
                if (Response.status == 200) {
                    this.listData =  Response.data['data'];
                } 
            }).catch((error)=>alert(error))
        }
    }
    
  }).mount('#layoutAuthentication')
</script>