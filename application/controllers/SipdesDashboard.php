<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SipdesDashboard extends CI_Controller {

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
	
		if($this->session->userdata('status') != "login"){
			redirect('SipdesLogin');
		
		$this->load->model('Model_master');
	}
}

	//user 
	public function index()
	{
		$this->load->model('Model_master');
		$data= $this->Model_master->readinbox();
		$data2= $this->Model_master->readoutbox();
		
		$isi['isi'] = array(
			$data,
			$data2
		);
			// print_r ($isi);
			// 	die();

		
		$this->load->view('template/header');
		$this->load->view('coba',$isi);
		$this->load->view('template/footer');
	}

	public function inputpenduduk(){
		$this->load->view('template/header');
		$this->load->view('Sipdes_input_penduduk');
		$this->load->view('template/footer');
	}

	public function showdata(){
		$this->load->model('Model_master');
		$data ['hsl'] = $this->Model_master->Read();
		$this->load->view('template/header');
		$this->load->view('Sipdes_Showdata',$data);
		$this->load->view('template/footer');
	}
	public function showdataall(){
		$this->load->model('Model_master');
		$data ['hsl'] = $this->Model_master->Readall();
		// print_r ($data);
		// die();
		$this->load->view('template/header');
		$this->load->view('Sipdes_Showdata',$data);
		$this->load->view('template/footer');

		
	}
	public function showpengumuman(){
		$this->load->model('Model_master');
		$data ['hsl'] = $this->Model_master->Readpengumuman();
		$data2=$this->session->userdata("role");
		// print_r ($data);
		// die();
		if($data2=="admin"){
			$this->load->view('template_SU/header');
		$this->load->view('Sipdes_LihatPengumuman',$data);
		$this->load->view('template/footer');
		}else{
		$this->load->view('template/header');
		$this->load->view('Sipdes_LihatPengumuman',$data);
		$this->load->view('template/footer');
		}
	}
	public function showinbox(){
		$this->load->model('Model_master');
		$data ['hsl'] = $this->Model_master->isipesan();
		
		
		$this->load->view('template/header');
		$this->load->view('Sipdes_Inbox',$data);
		$this->load->view('template/footer');
		
	}
	public function print($id){
		$where = array('idnew_table' => $id);
		$this->load->model('Model_master');
		$data ['hsl'] = $this->Model_master->cetak($where);
		$this->load->view('print',$data);

	}



	public function input_pengumuman(){
		$this->load->model('Model_master');
		
		$this->load->view('template/header');
		$this->load->view('Sipdes_Outbox');
		$this->load->view('template/footer');
	}

	public function Editdata($id){
		$this->load->model('Model_master');
		$data ['hsl'] = $this->Model_master->Read($id);
		// print_r ($data);
		// die();
		$this->load->view('template/header');
		$this->load->view('Sipdes_Update',$data);
		$this->load->view('template/footer');
	}
	public function Profil(){
		$data=$this->session->userdata("jabatan");
		// print_r ($data);
		// die();
		if($data=="KEPALA DESA"){
			$this->load->view('template_SU/header');
			$this->load->view('profil');
			$this->load->view('template/footer');
		}else{
			$this->load->view('template/header');
			$this->load->view('profil');
			$this->load->view('template/footer');
		}
		
		
	}

	//super user

	public function indexSU()
	{
		$this->load->model('Model_master');
		$isi['isi']= $this->Model_master->Readusr();
		
		
		// print_r ($isi);
		// die();
		
		
		$this->load->view('template_SU/header');
		$this->load->view('dashboardSU',$isi);
		$this->load->view('template/footer');
	}
	public function input_pengumumanSU(){
		$this->load->model('Model_master');
		
		$this->load->view('template_SU/header');
		$this->load->view('Sipdes_Outbox');
		$this->load->view('template/footer');
	}
	public function Edituser(){
		$data=$this->session->userdata("jabatan");
		// print_r ($data);
		// die();
		if($data=="KEPALA DESA"){
			$this->load->view('template_SU/header');
			$this->load->view('edituser');
			$this->load->view('template/footer');
		}else{
		$this->load->view('template/header');
		$this->load->view('edituser');
		$this->load->view('template/footer');
		}
	}
	public function Viewuser(){
		$this->load->model('Model_master');

	
		$isi['isi']= $this->Model_master->ReadLog();
		
		
		// 	print_r ($isi);
		// die();
		$this->load->view('template_SU/header');
		$this->load->view('viewuser',$isi);
		$this->load->view('template/footer');
	}
}
