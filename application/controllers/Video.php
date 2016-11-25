<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

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
		echo $this->input->post('op');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $res = $this->form_validation->set_rules('username', 'Username', 'required');
        echo "<pre>";
		//$this->input->post('key');
		//print_r($res);
		exit;
		$this->load->view('welcome_message');
	}

	public function test(){
		$arr = [1,34,33];
		print_r($arr);
	}
}