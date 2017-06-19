<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chome extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['nama'] = $session_data['fullname'];
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['idlogin'];
			$data['role'] = $session_data['role'];
			$data['email'] = $session_data['email'];
            $data['pageTitle'] = 'Home';
            
			/*if ( $data['role'] == 'admin'){
				//$this->load->view('vhome_admin', $data);
                $this->load->view('templates/header', $data);
                $this->load->view('pages/home', $data);
                $this->load->view('templates/footer', $data);
			} else {
				//$this->load->view('vhome', $data);
                
                $this->load->view('templates/header', $data);
                $this->load->view('pages/home', $data);
                $this->load->view('templates/footer', $data);
			}*/
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home', $data);
            $this->load->view('templates/footer', $data);            
        } else {
            redirect('welcome', 'refresh');
        }
    }
    
    function dashboard() {
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer', $data);
    }
    
    function about() {
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'About us';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer', $data);
    }
    
    function logout() {
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url('index.php/welcome'), 'refresh');
     }
	
	function user(){
		$crud = new grocery_CRUD(); 
		
		//$crud->set_theme('datatables');
		
		$crud->set_table('user');
		$crud->columns('fullname','username','email','status','role');
		$crud->add_fields('fullname','username','email','status','role');
		$crud->edit_fields('fullname','username','email','status','role');
		
        $output = $crud->render();
 		
	    $this->load->view('vhome_admin.php',$output);
	}
	
	function update($userData=NULL){
		$data['userdata'] = $userData;
		$this->load->view('vupdate', $data);
	}
	
}
/* End of file chome.php */
/* Location: ./application/controllers/chome.php */
