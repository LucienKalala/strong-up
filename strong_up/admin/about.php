
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
                        <h1 class="mt-4">A Propos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Veu Global</a></li>
                            <li class="breadcrumb-item active">Données</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->

                        <div class="row mb-4">
                            <div class="col-md-4" style="height: 350px; overflow: auto;">
                                <form id="FormData" action="" method="post" @submit.prevent="HttpPost">
                                    <div class="col-md-12">
                                        <label for="image"> Image de couverture</label>
                                        <input type="file" class="form-control" id="image" ref="image" @change="onFileChange">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description"> Description</label>
                                        <textarea name="description" class="form-control" v-model="description" id="description" height="200" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn btn-secondary w-100"> Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image couverture</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="Data in listData" :key="Data.id">
                                            <td>
                                                <img :src="Data.cover_image" alt="" srcset="" width="100">
                                            </td>
                                            <td >
                                                <p style="height: 100px; overflow:auto;">
                                                    {{Data.description}}
                                                </p>
                                            </td>
                                            <td>
                                                <button class="btn" @click="statusUpdate('about',Data.id)"><i :class="[ (Data.status == '0') ? 'fas fa-eye-slash' : 'fas fa-eye']"></i></button>
                                                <button class="btn" @click="deleteThis('about',Data.id)"><i class="fas fa-trash"></i></button>
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
                API_LINK+"Admin/listabout"
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
        },
        HttpPost(event){
            const formData = new FormData()
            formData.append('image', this.file)
            formData.append('description', this.description)
            axios.post(
                API_LINK+"Admin/addabout",
                formData,
                {
                    "Content-Type": "multipart/form-data"
                }
            )
            .then((Response)=>{
                alert(Response.data.message)
                if (Response.status == 200) {
                    document.getElementById('FormData').reset();
                    document.getElementById('description').value = '';
                    this.HttpGet()
                }
            })
            .catch((error)=>alert(error))
        }
    }
    
  }).mount('#layoutAuthentication')
</script>