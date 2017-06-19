<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cusercrud extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
 
     public function index()
     {
          redirect('chome');
     }
     
    function myprofile($id = NULL) 
    {
        if ($id == NULL) {
            redirect('cusercrud');
        } else {
            $us = $this->musercrud->editUser($id);
            $data['uid'] = $id;
            $data['ufullname'] = $us->fullname;
            $data['uusername'] = $us->username;
            $data['uemail'] = $us->email;
            $data['upassword'] = $us->password;
            $data['urole'] = $us->role;
            $data['error'] ='';

            $pf = $this->musercrud->editProfile($id);
            $data['udob'] = $pf->dob;
            $data['uuniversity'] = $pf->university;
            $data['ustid'] = $pf->stid;
            $data['uskill'] = $pf->skill;
            $data['uexp'] = $pf->exp;
            $data['uimg_name'] = $pf->img_name;
            $data['uext'] = $pf->ext;
            
            $data['uregister'] = $this->musercrud->get_register_by_idlogin($id);

            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['idlogin'];
            $data['role'] = $session_data['role'];
            $data['pageTitle'] = $data['ufullname'];
            $this->load->view('templates/header', $data);
            $this->load->view('pages/account', $data);
            $this->load->view('templates/footer', $data);  
        }
    }

    function edit($id = NULL) {
        //$id = $this->uri->segment(3);
        if ($id == NULL) {
        redirect('cusercrud');
        } else {
            $us = $this->musercrud->editUser($id);
            $data['id'] = $id;
            $data['fullname'] = $us->fullname;
            $data['username'] = $us->username;
            $data['email'] = $us->email;
            $data['password'] = $us->password;
            $data['role'] = $us->role;

            $pf = $this->musercrud->editProfile($id);
            $data['dob'] = $pf->dob;
            $data['university'] = $pf->university;
            $data['stid'] = $pf->stid;
            $data['skill'] = $pf->skill;
            $data['exp'] = $pf->exp;
            //$this->load->view('vusercrudedit', $data);
            $data['pageTitle'] = 'Edit-account';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/editaccount', $data);
            $this->load->view('templates/footer', $data);
        }
    }
    
     function update() {
          if ($this->input->post('mit')) {
                $id = $this->input->post('id');
                $this->musercrud->updateUser($id);
                $this->musercrud->updateProfile($id);
              
               redirect('account/' .$id);
          } else{
              redirect('edit/'.$id);
          }
     }
}
 
/* End of file cusercrud.php */
/* Location: ./application/controllers/cusercrud.php */