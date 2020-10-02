<?php
class Model_master extends CI_Model{

    function insert1($nama,$nohp,$ket){
        $data1 = array(
            'SNama_Penduduk'=>$nama,
            'SNomor_Hp'=>$nohp,
            'SJabatan'=>$ket
        );
        $input=$this->db->insert('SData_penduduk',$data1);
     
      
    }
  function adduser($username,$password,$role){
      $add=array(
            'Susername'=>$username,
            'Spassword'=>$password,
            'Srole'=>$role
      );
      
      $input=$this->db->insert('Slogin',$add);
    
     
  }
  
    function Read($id){
       
        $this->db->select('SData_penduduk.*');
      
        $this->db->from('SData_penduduk');
        $this->db->where("idSData_penduduk",$id);
            $periksa=$this->db->get();
       
            return $periksa->result();
    }
    function Readall(){
       
        $this->db->select('idSData_penduduk');
        $this->db->select('SNama_Penduduk');
        $this->db->select('SNomor_Hp');
        $this->db->select('SJabatan');
        $this->db->from('SData_penduduk');
            $periksa=$this->db->get();
       
            return $periksa->result();
    }
    function Readuser(){
       
        $this->db->select('Sid_Admin');
        $this->db->select('Snama_Admin');
        $this->db->select('SJabatan');
        $this->db->from('SAdmin');
            $periksa=$this->db->get();
       
            return $periksa->result();
    }
    function ReadLog(){
        $this->db->select('Slogin.*');
        $this->db->from('Slogin');
     
        $periksa=$this->db->get();
       
        return $periksa->result();

    }
    function Readusr(){
        $this->db->select('Slogin.*');
        $this->db->from('Slogin');
     
        $periksa=$this->db->get();
        $show=$periksa->num_rows();
        return $show;

    }
    function ReadLogid($id){
        $this->db->select('Slogin.*');
        $this->db->from('Slogin');
        $this->db->where('id_Slogin',$id);
        $periksa=$this->db->get();
            // print_r ($periksa);
            // die();
        return $periksa->result();

    }
    function delete($where,$table){
        $this->db->where($where);
	    $this->db->delete($table);
    }
    function lihatdatauser($id,$where){
        $this->db->select('SAdmin.*');
        $this->db->from('SAdmin');
        $this->db->where($where);
        $periksa=$this->db->get();

        $show=$periksa->num_rows();
        if($periksa->num_rows()>0){
            return 1;
          }else{
            return 0;
          }
       
    }
    function adddetailuser($data){
        $this->db->insert('SAdmin',$data);
    }
    function updateuser($where,$Update){
        $this->db->update('SAdmin', $Update,$where);
    
    }
    function updatelog($where,$Update){
        $this->db->update('Slogin', $Update,$where);
    
    }
    function update($where,$data){
        $this->db->update('SData_penduduk', $data,$where);
    //  print_r ($where);
    //     die();
     
    }
    function readinbox(){
        $this->db->select('inbox.*');
        $this->db->from('inbox');

        $periksa=$this->db->get();
        $show=$periksa->num_rows();
       
       
        return $show;
    }
    
    function readoutbox(){
        $this->db->select('sentitems.*');
        $this->db->from('sentitems');

        $periksa=$this->db->get();
        $show=$periksa->num_rows();
       
       
        return $show;
    }
    function insertbackup($no,$perihal,$sifat,$isi,$tempat,$tanggal,$pengirim,$penerima){
        $databackup = array(
            'SNoSurat'=>$no,
            'Ssifat'=>$sifat,
            'SHal'=>$perihal,
            'SisiSurat'=>$isi,
            'STempat'=>$tempat,
            'STanggal'=>$tanggal,
            'SPengirim'=>$pengirim,
            'SPenerima'=>$penerima
        );
        $input=$this->db->insert('SBackup',$databackup);
        $periksa= array(
        $this->db->select('SData_penduduk.SNomor_Hp'),
        $this->db->from('SData_penduduk'),
        $this->db->where("SJabatan",$penerima)
        );
        $periksa=$this->db->get();
        return $periksa->result();
        // print_r ($periksa);
        // die();
     
      
    }
    function hitungnomor($penerima){
        $periksa= array(
            $this->db->select('SData_penduduk.SNomor_Hp'),
            $this->db->from('SData_penduduk'),
            $this->db->where("SJabatan",$penerima)
            );
            $periksa=$this->db->get();
            $show=$periksa->num_rows();
           
           
            return $show; 
    }
    function sendoutbox($msg,$nomor){
      $pesan = array(
      'DestinationNumber'=>$nomor,
      'TextDecoded'=>$msg,
      'CreatorID'=>"KantorDesaSukajaya"
      );
        
      $input=$this->db->insert('outbox',$pesan);
      
    }

    function Readpengumuman(){
       
        $this->db->select('idnew_table');
        $this->db->select('SNoSurat');
        $this->db->select('Ssifat');
        $this->db->select('SHal');
        $this->db->select('SisiSurat');
        $this->db->select('STempat');
        $this->db->select('STanggal');
        $this->db->select('SPengirim');
        $this->db->select('SPenerima');
        $this->db->from('SBackup');

            $periksa=$this->db->get();
       
            return $periksa->result();
}function cetak($id){
    $this->db->select('idnew_table');
    $this->db->select('SNoSurat');
    $this->db->select('Ssifat');
    $this->db->select('SHal');
    $this->db->select('SisiSurat');
    $this->db->select('STempat');
    $this->db->select('STanggal');
    $this->db->select('SPengirim');
    $this->db->select('SPenerima');
    $this->db->from('SBackup');
    $this->db->where($id);
            
    $periksa=$this->db->get();
   
        return $periksa->result();
    }
    function isipesan(){
        $this->db->select('inbox.ID');
             $this->db->select('inbox.TextDecoded');
        $this->db->select('inbox.SenderNumber');
   
        $this->db->from('inbox');

        $periksa=$this->db->get();
   
        return $periksa->result();
    }
    function cari_penduduk($cari){
        $this->db->select('SData_penduduk.*');
   
        $this->db->from('SData_penduduk');
        $this->db->where('SNama_Penduduk',$cari);

        $periksa=$this->db->get();
   
        return $periksa->result();
        // print_r ($periksa);
        // die();
    }
    function cari_pegawai($cari){
        $this->db->select('SAdmin.id_Slogin');
   
        $this->db->from('SAdmin');
        $this->db->where('Snama_Admin',$cari);

        $periksa=$this->db->get();
   
        return $periksa->result();
        // print_r ($periksa);
        // die();
    }
    function cari_pengumuman($cari){
        $this->db->select('SBackup.*');
   
        $this->db->from('SBackup');
        $this->db->where('SNoSurat',$cari);

        $periksa=$this->db->get();
   
        return $periksa->result();  
        // print_r ($periksa);
        // die();
    }


}
?>