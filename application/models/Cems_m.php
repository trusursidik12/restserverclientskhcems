<?php

class Cems_m extends CI_Model
{

	// public function get_cems_data($id = FALSE)
	// {
	// 	if($id === FALSE){
	// 		$this->db->select('DISTINCT(waktu), id_stasiun, h2s, cs2, velocity, temperature');
	// 		$this->db->group_by('waktu'); 
	// 		$this->db->order_by('waktu', 'DESC');
	// 		$query = $this->db->get('cems_data');
	// 		return $query->result_array();
	// 	}
	// 	$query = $this->db->get_where('cems_data', array('id' => $id));
	// 	return $query->row_array();
	// }

	public function get_cems_data_home($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$this->db->where('id_stasiun', 'CEMS_RUM');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function add_cems_data()
	{
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'id_stasiun' 		=> 'CEMS_RUM',
			'waktu' 			=> $this->input->post('waktu'),
			'h2s' 				=> $this->input->post('h2s'),
			'cs2' 				=> $this->input->post('cs2'),
			'velocity' 			=> $this->input->post('velocity'),
			'temperature' 		=> $this->input->post('temperature')
		);
		return $this->db->insert('aqm_data', $data);
	}
}