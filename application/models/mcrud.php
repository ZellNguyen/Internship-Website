<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mcrud extends CI_Model {
    function add() {
        //$id = $this->input->post('id');
        $fname = $this->input->post('fullname');
        $uname = $this->input->post('username');
        $email = $this->input->post('email');
        $pword = $this->input->post('password');
        $stt = $this->input->post('ustatus');
        $role = $this->input->post('role');
        $data = array(
            //'idlogin' => $id;
            'fullname' => $fname,
            'username' => $uname,
            'email' => $email,
            'password' => md5($pword),
            'status' => $stt,
            'role' => $role,
        );
        $this->db->insert('user', $data);        
    }
    
    function view() {
      $ambil = $this->db->get('user');
      if ($ambil->num_rows() > 0) {
        foreach ($ambil->result() as $data) {
            $hasil[] = $data;
        }
        return $hasil;
      }
     }
    
    function edit($id) {
      $d = $this->db->get_where('user', array('idlogin' => $id))->row();
      return $d;
     }
    
    function delete($id) {
      $this->db->delete('user', array('idlogin' => $id));
      return;
     }
    
    function update($id) {
        $fname = $this->input->post('ufullname');
        $uname = $this->input->post('uusername');
        $email = $this->input->post('uemail');
        $pword = $this->input->post('upassword');
        $stt = $this->input->post('ustatus');
        $role = $this->input->post('urole');
		
		$d = $this->db->get_where('user', array('idlogin' => $id))->row();
		if ($pword == ($d->password)) {
			$data = array(
	            'fullname' => $fname,
	            'username' => $uname,
	            'email' => $email,
	            'password' => $pword,
	            'status' => $stt,
	            'role' => $role,
	        );
		} else {
			$data = array(
	            'fullname' => $fname,
	            'username' => $uname,
	            'email' => $email,
	            'password' => md5($pword),
	            'status' => $stt,
	            'role' => $role,
	        );
		}
        
        $this->db->where('idlogin', $id);
        $this->db->update('user', $data);
    }
    
}
?>