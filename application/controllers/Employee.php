<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct() { 
        parent::__construct();   
         $this->logged_in = $this->session->userdata('logged_in'); 
    }
 
    public function index()
    { 
	    if($this->logged_in)
	    { 
	        $data['title']='dashboard';
 	        redirect('welcome',$data); 
	    }else{ 
	        $data['title']  = 'Login';
	        redirect('login',$data); 
	    } 
    }
      
 	//Login 
 	public function login()
	{  		
		if($this->logged_in)
	    { 
	        $data['title']='dashboard';
	        redirect('welcome',$data); 
	    }else{ 
	        $data['title']  = 'Login';
			$this->load->view('emp/login',$data); 
	    }  
	}

	// user login  
	public function emp_login()
	{  		
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
         
        if($this->form_validation->run() == FALSE)
        {	 
        	$this->session->set_flashdata('error_msg','Some problems occured, please try again.');
             redirect('login');

        }else{ 
        	
        	$data['email'] = strtolower($this->security->xss_clean($this->input->post('email')));
            $data['password'] = md5($this->input->post('password')); 
            $password = md5($this->input->post('password')); 
             
            $pass = $this->emp_model->pass_match($password);
            if($pass)
	        { 
	        	$userdata = $this->emp_model->emp_login($data);

	            if ($userdata)
	            { 
	                $session_data = array(
	                'emp_id'     => $userdata[0]->emp_id,
	                'email' => $userdata[0]->email,
	                'fname' => $userdata[0]->fname,
	                'lname' => $userdata[0]->lname,
	                'designation' => $userdata[0]->designation,
	                'active_status' => $userdata[0]->active_status,
	                'logged_in' => TRUE,
	               );
	 	 		
	                $this->session->set_userdata($session_data);
	                $emp_id = $this->session->userdata('emp_id');    
	                $fname = $this->session->userdata('fname');    
	            	 
	                if($session_data['active_status'] == 1) 
	                {
	                    $this->session->set_flashdata('success_msg','Hi &nbsp;'.$session_data['fname'].'&nbsp;'.$session_data['lname'].' welcome to dashboard ');
	                    redirect('welcome');
	                }else{
	                	$this->session->set_flashdata('error_msg','Some problems occured, please try again.');
	                    redirect('login');                	
	                }    
	        	}else{
	        			$this->session->set_flashdata('error_msg','incorrect username and password.');
	                    redirect('login');
	        	} 
	        }else{
	        	$this->session->set_flashdata('error_msg','password does not match.');
	                    redirect('login');
	        } 
		}
	}


 
	//load register form  
	public function register()
	{  		
		 if($this->logged_in)
	    { 
	        $data['title']='dashboard';
 	        redirect('welcome',$data); 
	    }else{ 
	        
		$data['title']  = 'Registration';
		$this->load->view('emp/register',$data);	    } 
	    
	}
 
 	//insertion data of employee 
	public function	registration()
	{  		 
		$email = $this->input->post('email');
		// $mobile = $this->input->post('mobile');  
		if($email){
            $result = $this->emp_model->checkEmail($email);
            if($result)
	        { 
	        	$this->session->set_flashdata('success_msg','Email alredy exist please register with another email');	
	        	return redirect('register');
	        }else{  

				$config = [ 'upload_path'=>'./uploads', 'allowed_types'=>'jpg|png'];

				$this->load->library('upload', $config);

				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('designation', 'Designation', 'required');
		   	    $this->form_validation->set_rules('birthdate', 'Date of Birth', 'required');
 		   	    $this->form_validation->set_rules('email', 'Email', 'required'); 
		   	    $this->form_validation->set_rules('mobile', 'Mobile Number', 'required'); 
		   	    $this->form_validation->set_rules('password', 'Password', 'required'); 
		   	    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required'); 

				if ( $this->form_validation->run() && $this->upload->do_upload('avatar'))
				{	

					$fname = $this->security->xss_clean($this->input->post('fname'));
					$lname = $this->security->xss_clean($this->input->post('lname'));
					$designation = $this->security->xss_clean($this->input->post('designation'));
					$birthdate = $this->security->xss_clean($this->input->post('birthdate'));
					$age = $this->security->xss_clean($this->input->post('age'));
	                $email = $this->security->xss_clean($this->input->post('email'));
	                $mobile = $this->security->xss_clean($this->input->post('mobile'));
	                $password = $this->input->post('password');
	                $cpassword = $this->input->post('cpassword');
					
	                $data = array(
	                		'fname'=>$fname, 
	                		'lname'=>$lname, 
	                		'designation'=>$designation, 
	                		'birthdate'=>$birthdate, 
	                		'age'=>$age, 
	                		'email'=>$email, 
	                		'mobile'=>$mobile, 
	                		'password'=>md5($password), 
	                		'cpassword'=>md5($cpassword) 
	                		); 
					// $data = $this->input->post();

		 			$upload_info = $this->upload->data();
					
					//set path for images store 
					$path = base_url("uploads/".$upload_info['raw_name'].$upload_info['file_ext']);

					$data['avatar'] = $path; 

					if($this->emp_model->registration($data))
					{ 
						$this->session->set_flashdata('success_msg','Employee Added Successfully');	
						return redirect('welcome');
					}
					else
					{
						$this->session->set_flashdata('error_msg','Failed to Added Employee ');
						return redirect('register');
					}
				}else
				{
					$upload_error = $this->upload->display_errors();
		 			echo validation_errors();
				}
	        } 
        } 
  	}// registration

 	public function get_emp_profile($emp_id){

 		$data['title']='Update Profile'; 
 		$data['emp_data'] = $this->emp_model->get_emp_profile($emp_id); 

  		$this->load->view('include/header',$data); 
  		$this->load->view('emp/emp_profile',$data); 
  		$this->load->view('include/footer'); 

 	}


 	public function update_emp_profile($emp_id)
 	{
 		$emp_id = $this->session->userdata('emp_id');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required'); 
		$this->form_validation->set_rules('address', 'Address', 'required'); 
		$this->form_validation->set_rules('city', 'City', 'required'); 
		$this->form_validation->set_rules('country', 'Country', 'required'); 
		$this->form_validation->set_rules('zipcode', 'Zipcode', 'required'); 

				if ($this->form_validation->run() == TRUE)
				{	
 					$fname = $this->security->xss_clean($this->input->post('fname'));
					$lname = $this->security->xss_clean($this->input->post('lname'));
					$email = $this->security->xss_clean($this->input->post('email'));
					$mobile = $this->security->xss_clean($this->input->post('mobile'));
	                $address = $this->security->xss_clean($this->input->post('address'));
	                $city = $this->security->xss_clean($this->input->post('city'));
	                $country = $this->security->xss_clean($this->input->post('country'));
	                $zipcode = $this->security->xss_clean($this->input->post('zipcode'));
	                
	                $data = array(
	                		'fname'=>$fname, 
	                		'lname'=>$lname, 
	                		'email'=>$email, 
	                		'mobile'=>$mobile, 
	                		'address'=>$address, 
	                		'city'=>$city, 
	                		'country'=>$country, 
	                		'zipcode'=>$zipcode
	                		);  
					
					$data['emp_data'] = $this->emp_model->update_emp_profile($emp_id,$data);
					
					if($data)
					{ 
						$this->session->set_flashdata('success_msg','Profile has been updated.');	
						return redirect('welcome');
					}
					else
					{
						$this->session->set_flashdata('error_msg','Failed to update the profile.');
						return redirect(get_emp_profile($emp_id));
					}
				}else
				{
					$upload_error = $this->upload->display_errors();
		 			echo validation_errors();
				}
   		}











  	public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('emp_id'); 
        $this->session->sess_destroy(); 
        redirect('login'); 
    } 


 }
