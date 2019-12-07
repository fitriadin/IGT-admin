<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Teams extends CI_Model {
	
	public function create_($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function read_teams()
	{
		$query = $this->db->get('team');
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

	public function delete_($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}
