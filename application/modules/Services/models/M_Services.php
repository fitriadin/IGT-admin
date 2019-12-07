<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Services extends CI_Model {
	public function get_all_service(){
		$this->db->select('*');
		$this->db->from('service');
		// $this->db->where('id_service',$sid);
		return $query=$this->db->get()->result();
		// return $query;
	} 
	
	public function create_($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function read_services()
	{
		$query = $this->db->get('service');
		return $query ;
	}

	public function edit_($where,$table)
	{
		$query = $this->db->get_where($table,$where);
		return $query;
	}

	public function update_($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
		return true ;

	}

	public function hapus_($id_service){
        $hasil=$this->db->query("DELETE FROM service WHERE id_service='$kid_service'");
        return $hasil;
	
	}
	public function delete_($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}
