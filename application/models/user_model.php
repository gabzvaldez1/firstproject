<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function register($data) {
		$query = $this->db->insert('users', $data);

		return $query;
	}

	public function val_login($data){
		$this->db->select('*');
		$this->db->where('user_username', $data['username']);
		$this->db->where('user_password', $data['password']);
		$query = $this->db->get('users'); 
		$row = $query->row();
		return $row;
	}

	public function add_Reminder($data) {
		$query = $this->db->insert('reminder', $data);
		return $query;
	}

}