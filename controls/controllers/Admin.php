<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');	
		$this->load->helper('form');
		$this->load->library('session');
        $this->load->model('User');
	}

	private $user_id = 1;
	private $fromEmail = 'contact@strong-up.org';

	public function index(){
		$id = $this->session->userdata('id');
		if(!empty($id)){
			redirect('admin/view/index','admin/view/index');
		}
		$data['title'] = 'Ets STRONG UP';
		$data['page'] = '';
		$data['sideBar'] = $this->sideBar();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/login',$data);
		$this->load->view('admin/footer',$data);
	}

	public function sendMail($from=array(),$to=array(),$subject,$message){
		$this->load->library('email');

		$config = array();

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_user'] = 'murhulakalalalucien14@gmail.com';
		$config['smtp_pass'] = 'mvhvbqnqlegligfx';
		$config['mailtype'] = 'html';
		$config['smtp_port'] = 465;
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from($from['email'], $from['name']);
		$this->email->to($to[0]);
		// $this->email->cc($to[1]);
		// $this->email->bcc($to[2]);

		$this->email->subject($subject);
		$this->email->message($message);

		return $this->email->send();
	}

	public function contact(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$send = @$this->sendMail(array('email'=>$email,'name'=>$name),array($this->fromEmail),$subject,$message);
		if ($send) {
			echo json_encode(array('status'=>'200','message'=>'votre message a été envoyé, vous recevrez une reponse sous peu.'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation, veuiller reessayer.','status'=>'400'));
		}

	}

	public function register(){
		$email = $this->input->post('email');
		if (empty($email) or $email === 'undefined') {
			echo json_encode(array('message'=>'Echec d\'operation, veuillez saisir votre address mail.','status'=>'400'));
			return;
		}

		$row = $this->User->getData('strong_up_client', array('email'=>$email));
		if (count($row) > 0) {
			echo json_encode(array('message'=>'Echec d\'operation, veuillez saisir un autre address mail, car celui-ci existe déjà.','status'=>'400'));
			return;
		}

		$Data = array(
			'email' => $email, 
			'added_date' => date('Y-m-d'),
		);
		
		$insert = $this->User->insertData('strong_up_client',$Data);
		if ($insert) {
			$row = $this->User->getData('strong_up_client', array('email'=>$email));
			if (count($row)) {
				$sujet = 'Validation d\'address mail';
				$message = 
				'	
					<h3>Bonjour,</h3>
					<p>
						J\'espere que ce message vous trouver bien portant nous sommes heureux que vous vous etez inscrit à la liste de nos contacts
						pour recevoir des informations sur nos services et actualites nous concernant veuillez
						Cliquer sur ce lien pour valider votre compte 
						<a href="'.base_url('Admin/valider/').$row[0]->id.'">Valider<a/>
					</p>
					<img src="'.base_url('strong_up/assets/img/icon/Logo STRONG UP.PNG').'" width="200">
					<p>Contact Strong-UP</p>
				';
				$this->sendMail(array('email'=>$this->fromEmail,'name'=>''),array($email),$sujet,$message);

				$this->User->event("INSCRIPTION DE L\'ADDRESS MAIL DE ".$email." ");
				echo json_encode(array('message'=>'Vous venez d\'etre inscrit dans notre base de contacts, connecter vous à votre address mail pour valider votre compte.','status'=>'200'));
			}else{
				$this->User->event("INSCRIPTION DE L\'ADDRESS MAIL DE ".$email." MAIS PAS VERIFIER");
				echo json_encode(array('message'=>'Vous venez d\'etre inscrit dans notre base de contacts.','status'=>'200'));
			}
			
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function view($page = null){
		$id = $this->session->userdata('id');
		if(empty($id)){
			redirect('admin/');
		}
		$page = empty($page) ? 'index' : $page;
		$data['page'] = $page;
 		$data['title'] = 'Ets STRONG UP';
		$data['sideBar'] = $this->sideBar();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/'.$page,$data);
		$this->load->view('admin/footer',$data);
	}

	public function statusUpdate($table,$where){
		
		$row = $this->User->getData('strong_up_'.$table.'', array('id'=>$where));
		if (count($row) <= 0) {
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
			return;
		}

		if (isset($row[0]->status)) {
			$status = ($row[0]->status == 0 ) ? 1 : 0 ;

				$statusText = ($row[0]->status == 0 ) ? 'ACTIVER' : 'DESACTIVER' ;

				$insert = $this->User->updateData('strong_up_'.$table.'',array('status'=>$status), array('id'=>$where));
				if ($insert) {
					$this->User->event("AJOUT ".$table." CHANGER");
					echo json_encode(array('message'=>'Operation executer avec success, status '.$statusText.'','status'=>'200'));
				}else{
					echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
				}
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function deleteThis($table,$where){
		$row = $this->User->getData('strong_up_'.$table.'', array('id'=>$where));
		if (count($row) > 0) {
			if (isset($row[0]->cover_image)) {
				if (!empty($row[0]->cover_image)) {
					@unlink(str_replace("".base_url('strong_up/')."","".FCPATH."/strong_up/",$row[0]->cover_image));
				}
				
			}

			if (isset($row[0]->image)) {
				if(!empty($row[0]->image)){
					@unlink(str_replace("".base_url('strong_up/')."","".FCPATH."/strong_up/",$row[0]->image));
				}
			}

			if (isset($row[0]->logo)) {
				if(!empty($row[0]->logo)){
					unlink(str_replace("".base_url('strong_up/')."","".FCPATH."/strong_up/",$row[0]->logo));
				}
			}
		}

		$delete = $this->User->deleteData('strong_up_'.$table.'', array('id'=>$where));
		
		if ($delete) {
			$this->User->event("SUPPRESSION ".$table." ");
			echo json_encode(array('message'=>'Operation executer avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function addteam(){
		$config['upload_path']          = 'strong_up/assets/img/team/';
		$config['allowed_types']        = 'gif|jpg|png|avif';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo json_encode(array('status'=>'400','message'=>"Fail".$error['error'].""));
			return;
		}
		else
		{
			$dataImage = array('image' => $this->upload->data());
		}

		$noms = $this->input->post('nom');
		$poste = $this->input->post('poste');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$facebook = $this->input->post('facebook');
		$twitter_x = $this->input->post('twitter_x');
		$instagram = $this->input->post('instagram');
		$linkedin = $this->input->post('linkedin');

		$team = array
		(
			'noms' => $noms,
			'poste' => $poste, 
			'facebook' => $facebook, 
			'twitter_x' => $twitter_x, 
			'instagram' => $instagram, 
			'linkedin' => $linkedin,
			'email' => $email, 
			'phone' => $phone,  
			'cover_image' => base_url('strong_up/assets/img/team/').$dataImage['image']['file_name'], 
			'added_date' => date('Y-m-d'), 
			'added_by' => $this->user_id 
		);
		$insert = $this->User->insertData('strong_up_team', $team);
		if ($insert) {
			$this->User->event("AJOUT TEAM");
			echo json_encode(array('message'=>'Membre ajouter avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function addtestimony(){
		if (empty($_FILES['image']['name'])) {
			$profile_image = base_url('strong_up/assets/img/testimonials/default.png');
		}else{
			$config['upload_path']          = 'strong_up/assets/img/testimonials/';
			$config['allowed_types']        = 'gif|jpg|png|avif';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo json_encode(array('status'=>'400','message'=>"Fail"));
				return;
			}
			else
			{
				$dataImage = array('image' => $this->upload->data());
				$profile_image = base_url('strong_up/assets/img/testimonials/').$dataImage['image']['file_name'];
			}
		}

		$names = $this->input->post('names');
		$job = $this->input->post('job');
		$testimony = $this->input->post('testimony');

		$Data = array
		(
			'name' => $names,
			'job' => $job, 
			'testimony' => $testimony,  
			'profile_image' => $profile_image, 
			'added_date' => date('Y-m-d')
		);
		$insert = $this->User->insertData('strong_up_testimony',$Data);
		if ($insert) {
			$this->User->event("AJOUT TEMOIGNAGE DE ".$names."");
			echo json_encode(array('message'=>'Votre temoignage a été envoyé avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function addabout(){
		$config['upload_path']          = 'strong_up/assets/img/vector/';
		$config['allowed_types']        = 'gif|jpg|png|avif';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo json_encode(array('status'=>'400','message'=>"Fail"));
			return;
		}
		else
		{
			$dataImage = array('image' => $this->upload->data());
		}
		$description = $this->input->post('description');

		$about = array
		(
			'description' => $description, 
			'cover_image' => base_url('strong_up/assets/img/vector/').$dataImage['image']['file_name'], 
			'added_date' => date('Y-m-d'), 
			'added_by' => $this->user_id
		);
		$insert = $this->User->insertData('strong_up_about',$about);
		if ($insert) {
			$this->User->event("AJOUT ABOUT");
			echo json_encode(array('message'=>'Utilisateur ajouter avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}

	}

	public function addpartner(){
		$config['upload_path']          = 'strong_up/assets/img/partners/';
		$config['allowed_types']        = 'gif|jpg|png|avif';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo json_encode(array('status'=>'400','message'=>"Fail"));
			return;
		}
		else
		{
			$dataImage = array('image' => $this->upload->data());
		}

		$nom = $this->input->post('nom');

		$mission = array
		(
			'nom' => $nom, 
			'logo' => base_url('strong_up/assets/img/partners/').$dataImage['image']['file_name'], 
			'added_date' => date('Y-m-d'), 
			'added_by' => $this->user_id
		);
		
		$insert = $this->User->insertData('strong_up_partner',$mission);
		if ($insert) {
			$this->User->event("AJOUT MISSION");
			echo json_encode(array('message'=>'Mission ajouter avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}

	}

	public function addmission(){
		$config['upload_path']          = 'strong_up/assets/img/vector/';
		$config['allowed_types']        = 'gif|jpg|png|avif';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo json_encode(array('status'=>'400','message'=>"Echec d\'operation: ".$error['error']));
			return;
		}
		else
		{
			$dataImage = array('image' => $this->upload->data());
		}

		$description = $this->input->post('description');

		$mission = array
		(
			'description' => $description, 
			'cover_image' => base_url('strong_up/assets/img/vector/').$dataImage['image']['file_name'], 
			'added_date' => date('Y-m-d'), 
			'added_by' => $this->user_id
		);

		$insert = $this->User->insertData('strong_up_mission',$mission);
		if ($insert) {
			$this->User->event("AJOUT MISSION");
			echo json_encode(array('message'=>'Mission ajouter avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}

	}

	public function addgallery(){
		$config['upload_path']          = 'strong_up/assets/img/portfolio/';
		$config['allowed_types']        = 'gif|jpg|png|avif';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo json_encode(array('status'=>'400','message'=>"Fail"));
			return;
		}
		else
		{
			$dataImage = array('image' => $this->upload->data());
		}

		$description = $this->input->post('description');
		$category = $this->input->post('category');

		$Data = array
		(
			'description' => $description, 
			'category_id'=> $category,
			'image' => base_url('strong_up/assets/img/portfolio/').$dataImage['image']['file_name'], 
			'added_date' => date('Y-m-d'), 
			'added_by' => $this->user_id
		);

		$insert = $this->User->insertData('strong_up_gallery',$Data);
		if ($insert) {
			$this->User->event("PHOTO GALLERIE DESCRIPTION: ".$description."");
			echo json_encode(array('message'=>'Image ajouter avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}

	}

	public function adduser(){
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email'); 
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender'); 
		$bplace = $this->input->post('bplace');
		$bday = $this->input->post('bday');
		$added_date =date('Y-m-d',time());
		$added_by= $this->user_id;
		$password =md5('1234');
		
		$userData = array
		(
			'fname'=>$fname, 
			'lname'=>$lname, 
			'email'=>$email, 
			'phone'=>$phone, 
			'gender'=>$gender, 
			'bday'=>$bday, 
			'bplace'=>$bplace, 
			'added_date'=>$added_date, 
			'added_by'=>$added_by, 
			'password'=>$password
		);

		$insert = $this->User->insertData('strong_up_user',$userData);
		if ($insert) {
			$this->User->event("AJOUT UTILISATEUR");
			echo json_encode(array('message'=>'Apropos ajouter avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function addcategory(){
		$category = $this->input->post('category');
		$added_date =date('Y-m-d',time());
		$added_by= $this->user_id;
		
		$Data = array
		(
			'category'=>$category,
			'added_date'=>$added_date, 
			'added_by'=>$added_by
		);

		$insert = $this->User->insertData('strong_up_gallery_category',$Data);
		if ($insert) {
			$this->User->event("CATEGORIE GALLERIE ".strtoupper($category)." AJOUTER");
			echo json_encode(array('message'=>'Apropos ajouter avec success','status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listtemoignage(){
		$temoignage = $this->User->getData('strong_up_testimony');
		if (count($temoignage) > 0) {
			echo json_encode(array('data'=>$temoignage,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function temoignage(){
		$temoignage = $this->User->getData('strong_up_testimony',array('status'=>1));
		if (count($temoignage) > 0) {
			echo json_encode(array('data'=>$temoignage,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listcategory(){
		$category = $this->User->getData('strong_up_gallery_category');
		if (count($category) > 0) {
			echo json_encode(array('data'=>$category,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function category(){
		$category = $this->User->getData('strong_up_gallery_category');
		if (count($category) > 0) {
			echo json_encode(array('data'=>$category,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listgallery(){
		$gallery = $this->User->getINNERJOIN(' *, strong_up_gallery.id AS sgID ','strong_up_gallery','strong_up_gallery_category','strong_up_gallery.category_id = strong_up_gallery_category.id');
		if (count($gallery) > 0) {
			echo json_encode(array('data'=>$gallery,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function gallery(){
		$gallery = $this->User->getINNERJOIN(' *, strong_up_gallery.id AS sgID ','strong_up_gallery','strong_up_gallery_category',"strong_up_gallery.category_id = strong_up_gallery_category.id and strong_up_gallery.status='1'");
		if (count($gallery) > 0) {
			echo json_encode(array('data'=>$gallery,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listteam(){
		$team = $this->User->getData('strong_up_team');
		if (count($team) > 0) {
			echo json_encode(array('data'=>$team,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function team(){
		$team = $this->User->getData('strong_up_team',array('status'=>'1'));
		if (count($team) > 0) {
			echo json_encode(array('data'=>$team,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listpartners(){
		$partners = $this->User->getData('strong_up_partner');
		if (count($partners) > 0) {
			echo json_encode(array('data'=>$partners,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function partners(){
		$partners = $this->User->getData('strong_up_partner',array('status'=>'1'));
		if (count($partners) > 0) {
			echo json_encode(array('data'=>$partners,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listmission(){
		$mission = $this->User->getData('strong_up_mission');
		if (count($mission) > 0) {
			echo json_encode(array('data'=>$mission,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function mission(){
		$mission = $this->User->getData('strong_up_mission',array('status'=>'1'));
		if (count($mission) > 0) {
			echo json_encode(array('data'=>$mission,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listabout(){
		$about = $this->User->getData('strong_up_about');
		if (count($about) > 0) {
			echo json_encode(array('data'=>$about,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function about(){
		$about = $this->User->getData('strong_up_about',array('status'=>'1'));
		if (count($about) > 0) {
			echo json_encode(array('data'=>$about,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listuser(){
		$user = $this->User->getData('strong_up_user');
		if (count($user) > 0) {
			echo json_encode(array('data'=>$user,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listclient(){
		$Data = $this->User->getData('strong_up_client');
		if (count($Data) > 0) {
			echo json_encode(array('data'=>$Data,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function listlog(){
		$log = $this->User->getData('strong_up_log');
		if (count($log) > 0) {
			echo json_encode(array('data'=>$log,'status'=>'200'));
		}else{
			echo json_encode(array('message'=>'Echec d\'operation','status'=>'400'));
		}
	}

	public function sideBar() {
		return '
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
					<a class="nav-link" href="'.base_url('admin/view/index').'">
						<div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
						Tableau de Bord
					</a>
					<div class="sb-sidenav-menu-heading">Interface</div>
					<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
						Utilisateurs
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="'.base_url('admin/view/user').'">Liste</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages">
						<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
						Contenu Du siteWeb
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="collapsePages1" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
							<a class="nav-link" href="'.base_url('admin/view/about').'">A Propos</a>
							<a class="nav-link" href="'.base_url('admin/view/mission').'">Mission</a>
							<a class="nav-link" href="'.base_url('admin/view/partenaire').'">Partenaires</a>
							<a class="nav-link" href="'.base_url('admin/view/team').'">Equipes</a>
							<a class="nav-link" href="'.base_url('admin/view/gallery').'"> Gallerie</a>
							<a class="nav-link" href="'.base_url('admin/view/testimony').'"> Temoignages</a>
						</nav>
					</div>
					<div class="sb-sidenav-menu-heading">SYSTEM LOG</div>
						<a class="nav-link" href="'.base_url('admin/view/Log').'">
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Log des Operations
						</a>
					</div>
				</div>
				<div class="sb-sidenav-footer">
					<div class="small"><i class="fa fa-circle text-success"></i> Connecter :</div>
					<span> '.$this->session->userdata("fname").' '.$this->session->userdata("lname").'</span>
				</div>
			</nav>
		</div>';
	}
}
