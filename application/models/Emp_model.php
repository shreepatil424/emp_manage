<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Emp_model extends CI_Model {

    //Employee Login 
    public function emp_login($data){
         // $enc_password =  md5($password);
                        
    $this ->db->select('e.emp_id,e.fname,e.lname,e.email,e.designation,e.active_status');
                $this ->db->from('employee e');
                $this ->db->where('email', $data['email']);
                $this ->db->where('password', $data['password']);
                $this ->db->limit(1);
                $query = $this->db->get();
                if ($query->num_rows() == 0)
                {   
                    return false;
                }
                else
                {
                    return $query->result();
                }
    }
    
    // Inserted Employee Data
	public function registration($data)
	{
		return $this->db->insert('employee',$data);
	}	


    public function get_emp_list()
    {
    $this->db->select(['e.emp_id','e.fname','e.lname','e.email','e.mobile','e.designation']);
    $this->db->from('employee e');
           $query = $this->db->get();
           return $query->result();  
     }

    //get emplyee single record emp_id
    public function get_emp_profile($emp_id)
    {
        $this->db->select('*');
        $this->db->from('employee e');
        $this->db->where('e.emp_id',$emp_id);
        $query=$this->db->get();
        if($query->num_rows() > 0){
            return $query->row();
        }
    }

    public function update_emp_profile($emp_id, $data){
        return $this->db->where('emp_id', $emp_id)
                        ->update('employee',$data);
    }   

	public function checkEmail($email)
    {
        $this->db->select("email");
        $this->db->from("employee");
        $this->db->where("email",$email); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
		    return true;
		}else{
     	    return false;
		}
    }

   public function pass_match($password){
        $this->db->select("cpassword");
        $this->db->from("employee");
        $this->db->where("cpassword",$password); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return true;
        }else{
            return false;
        }
   }
  	
}
