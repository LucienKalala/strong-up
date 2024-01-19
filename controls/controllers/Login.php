<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('User');
	}

	public function index()
	{
		$all_headers = getallheaders();
die(substr($all_headers['HautaJuwaMaBore'], 0, strlen("Basic")));
		if(substr($all_headers['HautaJuwaMaBore'], 0, strlen("Basic")) === "Basic"){
			$authData = substr($all_headers['HautaJuwaMaBore'], 6, strlen($all_headers['HautaJuwaMaBore']));
			$userData = explode(":", base64_decode($authData));
			$username = $userData[0];
			$password = $userData[1];
			$condition = array(
				'email' => $username,
				'password' => md5($password)
			);
			$row = $this->User->getData('strong_up_user',$condition);
			if (count($row) > 0) {

				$this->load->library('session');
				$this->session->set_userdata('id',$row[0]->id);
				$this->session->set_userdata('fname',$row[0]->fname);
				$this->session->set_userdata('lname',$row[0]->lname);
				$this->session->set_userdata('email',$row[0]->email);
				$this->session->set_userdata('phone',$row[0]->phone);
				$this->session->set_userdata('gender',$row[0]->gender);
				$this->session->set_userdata('bday',$row[0]->bday);
				$this->session->set_userdata('bplace',$row[0]->bplace);
				$this->session->set_userdata('added_date',$row[0]->added_date);

				echo json_encode(array('status'=>'200','sms'=>'La Connexion a été effectuer avec Success'));
			}else{
				echo json_encode(array('status'=>'400','sms'=>'Echec d\'opération, nom d\'utilisateur ou mot de pass incorrect'));
			}
			
		}else{
			echo json_encode(array('status'=>'400','sms'=>'Echec d\'opération'));
		}
	}

    public function confirm()
	{
        echo json_encode(array('sms'=>'success','reponse'=>'You will be redirect in a second.'));
	}
}
