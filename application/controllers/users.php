<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function index()
	{
		//$this->load->view('templates/header');
		$this->load->view('login1');
		//$this->load->view('templates/footer');
	}

	public function login1() 
	{
		// $this->load->view('templates/header');
		$this->load->view('login1');
		// $this->load->view('templates/footer');
	}

	public function categories() 
	{
		// $this->load->view('templates/header');
		$this->load->view('categories');
		// $this->load->view('templates/footer');
	}

	public function register() 
	{
		// $this->load->view('templates/header');
		$this->load->view('signup');
		// $this->load->view('templates/footer');
	}

	public function addUser() 
	{

		$_POST = json_decode(file_get_contents('php://input'),true);
		$data = array (
			'user_username' => $_POST['username'],
			'user_password' => $_POST['password'],
			'user_name' => $_POST['name'],
		);

		 print_r($data);
		$result = $this->user_model->register($data);
		if( $result ) {
			echo 'success';
		} else {
			echo 'fail';
		}
	}

	public function login(){
		$data = array (
			'username'=> $_POST['username'],
			'password'=> $_POST['password']
		);
		$query = $this->user_model->val_login($data);
		//var_dump($query);
		if($query == NULL){
			$this->output
        ->set_status_header(401)
        ->set_content_type('application/json')
        ->set_output(json_encode(array('error' => 'Invalid Username or Password!*')));
		}else{
			$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('success' => base_url('index.php/users/categories'))));
		}
	}

	public function view(){
		$res = $this->db->get('categories')->result();
		$data_arr = array();
		$i=0;
		foreach($res as $r){
			$data_arr[$i]['category_id'] = $r->category_id;
			$data_arr[$i]['category_name'] = $r->category_name;
			$i++;
		}
		echo json_encode($data_arr);
	}

	public function addReminder() 
	{
		$_POST = json_decode(file_get_contents('php://input'),true);
		$data = array (
			'reminder_title' => $_POST['title'],
			'reminder_description' => $_POST['description'],
			'reminder_date' => $_POST['date'],
			'reminder_cat' => $_POST['cat']
		);
		$result = $this->user_model->add_Reminder($data);
		if( $result ) {
			echo 'success';
		} else {
			echo 'fail';
		}
	}
}
