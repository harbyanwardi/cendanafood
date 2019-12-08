<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function showdata($table){
		
	    $this->db->order_by('id', 'desc');
		$data = $this->db->get($table);
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function GetData($tableName,$where="")
	{
		$data = $this->db->query('select * from '.$tableName.$where);
		return $data->result_array();
	}
	public function GetData2($tableName,$where="")
	{
		$data = $this->db->query('select * from '.$tableName.$where);
		return $data;
		
	}
    public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}
public function joinmakanan() {
		 $this->db->select('makanan.id,makanan.id_layanan,makanan.id_menu_layanan,makanan.nama_makanan,layanan.jenis_layanan,menu_layanan.id_layanan,menu_layanan.jenis_menu');
		 $this->db->from('layanan');
		 $this->db->join('makanan','makanan.id_layanan=layanan.id');
		  $this->db->join('menu_layanan','menu_layanan.id=makanan.id_menu_layanan');
		 $query = $this->db->get();
		 return $query->result_array();
		}
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
	
	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}

	

}
