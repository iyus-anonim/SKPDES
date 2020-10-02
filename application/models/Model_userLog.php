<?php
class Model_userLog extends CI_Model{

function login($username,$password){
  $periksa = $this->db->get_where('Slogin',array('Susername'=>$username,'Spassword'=>$password));

  if($periksa->num_rows()>0){
    return 1;
  }else{
    return 0;
  }
}

function role($username,$password){
        $this->db->select('Slogin.Srole');

        $this->db->select('Slogin.id_Slogin');
      
        $this->db->from('Slogin');
        $this->db->where("Susername",$username,"Spassword",$password);
            $periksa=$this->db->get();
       
            return $periksa->result();
}
function id($id){
 
        $this->db->select('Snama_Admin');
        $this->db->select('SJabatan');
        $this->db->from('SAdmin');
        $this->db->where('id_Slogin',$id);
            $periksa=$this->db->get();
       
            return $periksa->result();
}
}
?>