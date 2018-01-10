<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leave_con extends CI_Controller 

{

    function __construct(){
     parent::__construct();
     

    }


	public function index()
	{
		//$this->load->view('User/Index');
	    $this->load->view('Login');
	}

   public function regis()
	{
		$this->load->view('Registration');
	}

	public function admin()
	{
		
		$this->load->view('Admin');
	}
    public function form()
	{ 
		$this->load->model('regis');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$insert = $this->regis->insert($name,$email,$password);
		echo 'Insert successfully';
		
	    //$this->load->view('Login');
	}


}
?>