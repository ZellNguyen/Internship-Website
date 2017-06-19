<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Ccrud extends CI_Controller {
 
    public function index()
    {
        $data['data_get'] = $this->mcrud->view();
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'User-Database';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/userdb', $data);
        $this->load->view('templates/footer', $data);
    }
    
    function add() {
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Add-new-user';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/adduser', $data);
        $this->load->view('templates/footer', $data);
    }
    
    function edit() {
        $kd = $this->uri->segment(3);
        if ($kd == NULL) {
        redirect('ccrud');
        } else {
            
            $dt = $this->mcrud->edit($kd);
            $data['uid'] = $kd;
            $data['ufullname'] = $dt->fullname;
            $data['uusername'] = $dt->username;
            $data['uemail'] = $dt->email;
            $data['upassword'] = $dt->password;
            $data['ustatus'] = $dt->status;
            $data['urole'] = $dt->role;
            //$this->load->view('vcrudedit', $data);
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['idlogin'];
            $data['role'] = $session_data['role'];
            $data['pageTitle'] = 'Edit-user-info';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/edituser', $data);
            $this->load->view('templates/footer', $data);
        }
    }
    
     function delete() {
          $u = $this->uri->segment(3);
          $this->mcrud->delete($u);
          redirect('ccrud');
     }
     function save() {
        //set validation rules
        $this->form_validation->set_rules('fullname', 'Full Name', 'trim|required|callback_alpha_dash_space|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[3]|max_length[30]|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|md5');
        
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('vcrudnew');
        }
        else
        {
          if ($this->input->post('mit')) {
               $this->mcrud->add();
               redirect('ccrud');
          } else{
               redirect('ccrud/tambah');
          }
        }
     }
    
     function update() {        
          if ($this->input->post('mit')) {
               $id = $this->input->post('uid');
               $this->mcrud->update($id);
               redirect('ccrud');
          } else{
              redirect('ccrud/edit/'.$id);
          }
     }
}
 
/* End of file ccrud.php */
/* Location: ./application/controllers/ccrud.php */