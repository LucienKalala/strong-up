
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
                        <h1 class="mt-4">Gallerie</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Vue d'ensemble</a></li>
                            <li class="breadcrumb-item active">Données</li>
                        </ol>

                        <div class="row mb-4">
                            <div class="col-md-4">
                                <form action="" method="post" id="galleryForm" @submit.prevent="HttpPostGallery">
                                    <div class="col-md-12">
                                        <label for="image"> Image</label>
                                        <input type="hidden" value="gallery" name="" id="actionGallery">
                                        <input type="file" class="form-control" id="image" ref="image" @change="onFileChange">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description"> Description</label>
                                        <input type="text" class="form-control" v-model="description" name="" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description"> Categorie</label>
                                        <select name="" id="" class="form-control" v-model="categoryList" required>
                                            <option value="">SELECTIONNER</option>
                                            <option v-for="Data in listDataCategory" :key="Data.id" :value="Data.id" >
                                                {{Data.category}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn btn-secondary w-100"> Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <div class="row mt-2">
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#category"> Categorie</button>
                                    </div>
                                <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header bg-constumer">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Utilisateurs</h5>
                                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form id="categoryForm" @submit.prevent="HttpPostCategory">
                                                            <div class="col-md-12">
                                                                <label for="">Categorie</label>
                                                                <input type="hidden" name="" value="category" class="form-control" id="actionCategory">
                                                                <input type="text" name=""  v-model="category" class="form-control" id="category" required>
                                                            </div>
                                                            <div class="col-md-12 mt-2">
                                                                <button type="submit" class="btn btn-secondary w-100" id="">Enregistrer</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Date</th>
                                                                    <th>Categorie</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr v-for="Data in listDataCategory" :key="Data.id">
                                                                    <td>{{Data.id}}</td>
                                                                    <td>{{Data.added_date}}</td>
                                                                    <td>{{Data.category}}</td>
                                                                    <td>
                                                                        <button class="btn" @click="deleteThis('gallery_category',Data.id)"><i class="fas fa-trash"></i></button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image couverture</th>
                                            <th>Description</th>
                                            <th>Categorie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="Data in listDataGallery" :key="Data.sgID">
                                            <td><img :src="Data.image" alt="" srcset="" width="100"></td>
                                            <td>{{Data.description}}</td>
                                            <td>{{Data.category}}</td>
                                            <td>
                                                <button class="btn" @click="statusUpdate('gallery',Data.sgID)"><i :class="[ (Data.status == '0') ? 'fas fa-eye-slash' : 'fas fa-eye']"></i></button>
                                                <button class="btn" @click="deleteThis('gallery',Data.sgID)"><i class="fas fa-trash"></i></button>
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
        listDataCategory: null,
        listDataGallery:null,
        action: null,
        category: null,
        categoryList: null
      }
    },
    mounted() {
        this.HttpGet('category');
        this.HttpGet('gallery');
    },
    methods : {

        onFileChange(event) {
            this.file = event.target.files[0]
        },

        HttpGet(actionTo = null){
            axios.get(
                API_LINK+"Admin/list"+actionTo
            ).then((Response) => {
                if (Response.status == 200) {
                    switch (actionTo) {
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

        statusUpdate(table,dataID){
            axios.get(
                API_LINK+"Admin/statusUpdate/"+table+"/"+dataID
            ).then((Response) => {
                alert(Response.data.message)
                this.HttpGet('gallery')
            }).catch((error)=>alert(error))
        },

        deleteThis(table,dataID){
            axios.get(
                API_LINK+"Admin/deleteThis/"+table+"/"+dataID
            ).then((Response) => {
                alert(Response.data.message)
                this.HttpGet('gallery') 
                this.HttpGet('category') 
            }).catch((error)=>alert(error))
        },

        HttpPostGallery(event){
            const formData = new FormData()
            formData.append('image', this.file)
            formData.append('description', this.description)
            formData.append('category', this.categoryList)
            this.action = document.getElementById('actionGallery').value
            axios.post(
                API_LINK+"Admin/add"+this.action,
                formData,
                {
                    "Content-Type": "multipart/form-data"
                }
            )
            .then((Response)=>{
                document.getElementById(''+this.action+'Form').reset();
                alert(Response.data.message)
                this.HttpGet('gallery');
            })
            .catch((error)=>alert(error))
        },

        HttpPostCategory(event){
            const formData = new FormData()
            formData.append('category', this.category)
            this.action = document.getElementById('actionCategory').value
            axios.post(
                API_LINK+"Admin/add"+this.action,
                formData
            )
            .then((Response)=>{
                document.getElementById(''+this.action+'Form').reset();
                alert(Response.data.message)
                this.HttpGet('category')
            })
            .catch((error)=>alert(error))
        }
    }
    
  }).mount('#Body')
</script>