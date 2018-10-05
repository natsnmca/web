<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Employee_Model');
		$responseData['data'] = $this->Employee_Model->allEmployee();
		$this->load->view('list', $responseData);
	}

	public function addEmployee()
	{
		$postdata = $_POST['formData'];
		$this->load->model('Employee_Model');
		$responseData = $this->Employee_Model->addEmployee($postdata);
		return $responseData;
		
		//$this->load->view('list');
	}

	public function editEmployee() {

		$postdata = $_POST['formData'];
		$this->load->model('Employee_Model');
		$responseData = $this->Employee_Model->singleEmployee($postdata);
		echo json_encode($responseData);exit;

	}

	public function deleteEmployee() {

		$postdata = $_POST['formData'];
		$this->load->model('Employee_Model');
		$responseData = $this->Employee_Model->deleteEmployee($postdata);
		return $responseData;

	}
}
