<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SipdesMaster extends CI_Controller {

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
		$this->load->model('Model_master');
	  }
      public function index()
      {
        $this->load->view('template/header');
		$this->load->view('Sipdes_input_penduduk');
		$this->load->view('template/footer');
      }

	function inputdatapenduduk(){
    if(isset($_POST)){
		$data=array(
    	$nama = $this->input->post('nama'),
      	$nohp = $this->input->post('Nohp'),
      	$ket = $this->input->post('Jabatan'),
		);
    

    $berhasil=$this->Model_master->insert1($nama,$nohp,$ket);
   
	
	 
		$this->session->set_userdata($data_session);
        redirect('SipdesDashboard/showdataall');
    
    }
  }

  function Pengumuman(){
    if(isset($_POST)){
   
    	$no = $this->input->post('nomor');
      	$perihal = $this->input->post('hal');
      	$sifat = $this->input->post('sifat');
      	$isi = $this->input->post('isi');
      	$tempat = $this->input->post('tempat');
      	$tanggal = $this->input->post('tanggal');
		  $pengirim = $this->input->post('pembuat');
		  $penerima = $this->input->post('penerima');
		  
		  $tgl=date("d/m/Y",strtotime($tanggal));
		  $msg="diharap kehadirannya pada $tgl dalam kegiatan $isi di $tempat";
		  if(strlen($msg)> 160){
			  echo"<script> alert('pesan terlalu panjang mohon edit isi atau tempat');
			  window.history.back();</script>";
		  die();
			}
		  
    
	
  	$berhasil=$this->Model_master->insertbackup($no,$perihal,$sifat,$isi,$tempat,$tanggal,$pengirim,$penerima);
	$kirim=$this->Model_master->hitungnomor($penerima);
	  
	
	for($i=0; $i<$kirim; $i++){
		$nomor=$berhasil[$i]->SNomor_Hp;
		
	  $cek=$this->Model_master->sendoutbox($msg,$nomor);
	}
		
		echo"<script> alert('Pengumuman Terkirim');
		window.history.back();</script>";
		  die();
		  $data=$this->session->userdata("jabatan");
		  // print_r ($data);
		  // die();
		  if($data=="KEPALA DESA"){
			redirect('SipdesDashboard/indexSU');
			}else{
			redirect('SipdesDashboard/index');
		}
    
    }
  }

  function deletedatainbox($id){
	
	$where = array('ID' => $id);
	$this->Model_master->delete($where,'inbox');

	redirect('SipdesDashboard/showinbox');
   }
   function deletedata($id){
	
	$where = array('idSData_penduduk' => $id);
	$this->Model_master->delete($where,'SData_penduduk');
	redirect('SipdesDashboard/showdataall');
   }
   function deletepengumuman($id){
	
	$where = array('idnew_table' => $id);
	$this->Model_master->delete($where,'SBackup');
	redirect('SipdesDashboard/showpengumuman');
   }
   function deleteuser($id){
	
	$where = array('id_Slogin' => $id);
	$this->Model_master->delete($where,'Slogin');
	$this->Model_master->delete($where,'SAdmin');
	redirect('SipdesDashboard/Viewuser');
   }

   public function Edit_Penduduk(){
	$id=$this->input->post('id');

		$data=array(
    	'SNama_Penduduk' => $this->input->post('nama'),
      	'SNomor_Hp'=> $this->input->post('Nohp'),
      	'SJabatan' => $this->input->post('Jabatan')
		);
		$where = array('idSData_penduduk' => $id);
		$cek=$this->Model_master->update($where,$data);
// 		// print_r ($data);
// die();
		redirect('SipdesDashboard/showdataall');
   }
   public function Editdata(){

$id=$this->input->post('id');
// print_r ($id);
// die();

	   $Update = array(
	
		
			'Snama_Admin' => $this->input->post('nama'),
			'id_Slogin' => $this->input->post('id'),
			'SJabatan' => $this->input->post('Jabatan')
	   );
	   $update_login=array(
		
		'Susername'=> $this->input->post('username'),
		'Spassword'=> $this->input->post('password')
	   );
	   $where = array('id_Slogin' => $id);
	   $cek=$this->Model_master->lihatdatauser($id,$where);
	   if($cek==0){
		$this->Model_master->adddetailuser($Update);
	   }
		$this->Model_master->Updateuser($where,$Update);
		$this->Model_master->Updatelog($where,$update_login);
	   
		$data=$this->session->userdata("jabatan");
		// print_r ($data);
		// die();
		if($data=="KEPALA DESA"){
	redirect('SipdesDashboard/indexSU');
	}else{
		redirect('SipdesDashboard/');
	}
}
function adduser(){

		$username = "root";
      	$password = "user";
		$role="user";
	
		
	
		  
	$this->Model_master->adduser($username,$password,$role);


	redirect('SipdesDashboard/indexSU');
}

public function upload()
{
	// Load plugin PHPExcel nya
	include APPPATH.'third_party/PHPExcel/PHPExcel.php';

	$config['upload_path'] = realpath('excel');
	$config['allowed_types'] = 'xlsx|xls|csv';
	$config['max_size'] = '10000';
	$config['encrypt_name'] = true;

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload()) {

		//upload gagal
		$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
		//redirect halaman
		redirect('import/');

	} else {

		$data_upload = $this->upload->data();

		$excelreader     = new PHPExcel_Reader_Excel2007();
		$loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
		$sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

		$data = array();

		$numrow = 1;
		foreach($sheet as $row){
						if($numrow > 1){
							array_push($data, array(
								'SNama_Penduduk' => $row['B'],
								'SNomor_Hp'      => $row['C'],
								'SJabatan'      => $row['D'],
							));
				}
			$numrow++;
		}
		$this->db->insert_batch('SData_penduduk', $data);
		//delete file from server
		unlink(realpath('excel/'.$data_upload['file_name']));

		//upload success
		$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
		//redirect halaman
		redirect('SipdesDashboard/showdataall');

	}
}
public function search(){
	$cari=$this->input->post('cari');
	$data ['hsl'] = $this->Model_master->cari_penduduk($cari);
		$this->load->view('template/header');
		$this->load->view('Sipdes_Showdata',$data);
		$this->load->view('template/footer');
// 		print_r ($data);
// die();

}
public function searchpegawai(){
	$cari=$this->input->post('cari');
	$hasil= $this->Model_master->cari_pegawai($cari);
	// print_r ($hasil);
	// die();
	

	
if(empty($hasil)){
	echo"<script> alert('Tidak ada data di temukan');
	window.history.go(-2);</script>";
die();
}else{
	$data ['isi'] =$this->Model_master->ReadLogid($hasil[0]->id_Slogin); 
		$this->load->view('template_SU/header');
		$this->load->view('viewuser',$data);
		$this->load->view('template/footer');
}

}
public function searchpengumuman(){
	$cari=$this->input->post('cari');
	$hasil['hsl']= $this->Model_master->cari_pengumuman($cari);
	$this->load->view('template/header');
		$this->load->view('Sipdes_LihatPengumuman',$hasil);
		$this->load->view('template/footer');
}

}
