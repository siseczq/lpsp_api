<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		//echo 'sss';exit;
			$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

            $data['title'] = "My Real Title";
            $data['heading'] = "My Real Heading";

            $this->load->view('welcome_message', $data);
		//$this->load->view('welcome_message');
	}

	public function test()
	{	
		print_r($_POST);
		echo $a."<br>";
		echo $b;
		echo "ss";exit;
		$arr = [1,34,33];
		print_r($arr);
	}
}
