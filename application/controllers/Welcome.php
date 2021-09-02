<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 	
 	public function __construct() { 
        parent::__construct();   
         $this->logged_in = $this->session->userdata('logged_in'); 
    }

	public function index()
	{
		if($this->logged_in)
	    {  
			$data['title']  = 'Dashboard';
			$data['breadcrumb']  = 'Employee Record';
			$data['emp_data'] = $this->emp_model->get_emp_list(); 
			$this->load->view('include/header',$data);
			$this->load->view('include/sidebar',$data);
	 		$this->load->view('include/footer');
	    }else{ 
	        $data['title']  = 'Login';
	        redirect('login',$data); 
	    } 

	}
}
