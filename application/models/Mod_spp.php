<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_spp extends CI_Model {        
    
    function index(){
		$this->db->select('*');
		$this->db->from('siswa');
		// $this->db->join('siswa','siswa.nis=spp.nis','left');
		// $this->db->join('tahun_ajaran','tahun_ajaran.id_ta=spp.id_ta','left');		
		// $this->db->join('bulan','bulan.id_bulan=spp.id_bulan','left');	
        $sql = $this->db->get();
        $result = $sql->result();
        return $result;   
    }	
	
	function bulan(){		
        $sql = $this->db->get('bulan');
        $result = $sql->result();
        return $result;   
    }
	
	function tampil($nis){
        $sql = $this->db->query("SELECT * FROM spp WHERE nis='$nis' ORDER BY tunggakan DESC");
		//$this->db->select('*');	
		//$this->db->from('spp');		
        //$this->db->where('nis',$nis);
        //$sql = $this->db->get();
        $result = $sql->result_object();
        return $result;
    }        
	
    function edit($id_spp){		
        $this->db->select('*');
		$this->db->from('spp');
        $this->db->where('id_spp',$id_spp);
        $sql = $this->db->get();        
		$result = $sql->result_object();
        return $result;
    }
	
	        
    
}