<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Portfolio extends CI_Model {
	public function get_all_service(){
		$this->db->select('*');
		$this->db->from('portfolio');
		// $this->db->where('id_service',$sid);
		return $query=$this->db->get()->result();
		// return $query;
	} 
	
	public function create_($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function read_portfolio()
	{
		$query = $this->db->get('portfolio');
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
        $hasil=$this->db->query("DELETE FROM portfolio WHERE id_service='$kid_service'");
        return $hasil;
	
	}
	public function delete_($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}
