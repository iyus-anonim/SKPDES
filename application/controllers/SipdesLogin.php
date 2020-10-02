<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SipdesLogin extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('Model_userLog');
	  }
	public function index()
	{
		
		$this->load->view('Sipdes_login');
		
	}

	function login(){
    if(isset($_POST)){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $berhasil = $this->Model_userLog->login($username,$password);
	  if($berhasil == 1){
		$cekrole = $this->Model_userLog->role($username,$password);
		$cekuser=$this->Model_userLog->id($cekrole[0]->id_Slogin);
		print_r ($cekrole);
		die();
		if($cekrole[0]->Srole=="admin"){
			$data_session = array(
				'username'=>$username,
				'id'=>$cekrole[0]->id_Slogin,
				'nama' => $cekuser[0]->Snama_Admin,
				'jabatan'=>$cekuser[0]->SJabatan,
				'status' => "login"
				
			);
		 
			$this->session->set_userdata($data_session);
			
			redirect('SipdesDashboard/indexSU');
		}else{
			$data_session = array(
				'username'=>$username,
				'id'=>$cekrole[0]->id_Slogin,
				'nama' => $cekuser[0]->Snama_Admin,
				'jabatan'=>$cekuser[0]->SJabatan,
				'status' => "login"
				);
				
				
			$this->session->set_userdata($data_session);
			
			redirect('SipdesDashboard/');
		}
		
      }else{
		echo"<script> alert('Username atau Password salah ');
		window.history.back();</script>";
	die();
        redirect('SipdesLogin');
      }
    }else{
        $this->load->view('Sipdes_login');
    }
  }
  function logout(){
    $this->session->sess_destroy();
	redirect('');
  }
}
