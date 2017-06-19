<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Musercrud extends CI_Model {
    
    function view() {
      $ambil = $this->db->get('user');
      if ($ambil->num_rows() > 0) {
        foreach ($ambil->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
      }
     }
    
    function editUser($id) {
      $d = $this->db->get_where('user', array('idlogin' => $id))->row();
      return $d;
     }
    
    function editProfile($id) {
      $d = $this->db->get_where('profile', array('idlogin' => $id))->row();
      return $d;
     }
    
    function updateUser($id) {
        $fname = $this->input->post('fullname');
        //$uname = $this->input->post('username');
        $email = $this->input->post('email');
        $pword = $this->input->post('password');
		
		$d = $this->db->get_where('user', array('idlogin' => $id))->row();
		if ($pword == ($d->password)) {
			$data = array(
	            'fullname' => $fname,
	            //'username' => $uname,
	            'email' => $email,
	            'password' => $pword,
	        );
		} else {
			$data = array(
	            'fullname' => $fname,
	            //'username' => $uname,
	            'email' => $email,
	            'password' => md5($pword),
	        );
		}
        
        $this->db->where('idlogin', $id);
        $this->db->update('user', $data);
        //$this->db->update('profile', $data);
    }
    
    function updateProfile($id) {
        $dob = $this->input->post('dob');
        $university = $this->input->post('university');
        $stid = $this->input->post('stid');
        $skill = $this->input->post('skill');
        $exp = $this->input->post('exp');
		
        $data = array(
            'dob' => $dob,
            'university' => $university,
            'stid' => $stid,
            'skill' => $skill,
            'exp' => $exp
        );
        
        $this->db->where('idlogin', $id);
        $this->db->update('profile', $data);
    }
    
    /*function get_register_by_idlogin($id)
    {
        $query = $this->db->get_where('register', array('idlogin' => $id));
        return $query->result_array();
    }*/
    
    function get_register_by_idlogin($id)
    {
        $query = $this->db->query('
            SELECT company.cName, internship.iSlug, pName 
            FROM (SELECT pID FROM register WHERE register.idlogin = "'. $id . '") AS temp1 
                NATURAL JOIN internposition 
                NATURAL JOIN internship 
                NATURAL JOIN company
            WHERE internship.iStatus = 1');
        return $query->result_array();
    }
}
?>