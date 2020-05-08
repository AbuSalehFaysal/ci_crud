<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}

	public function view()
	{
		echo "View";
	}

	public function edit()
	{
		echo "Edit";
	}

	public function delete()
	{
		echo "Delete";
	}

	public function add_user()
	{
		echo "Add User";
	}
}
