<?php
class Ccompany extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mcompany');
        $this->load->helper('url_helper');
		$this->load->library('Ajax_pagination');
		$this->perPage = 3;
    }

    public function index()
    {
    	/*** AJAX PAGINATION ***/
    	$totalRec = count($this->mcompany->getRows());
		
    	$config['first_link']  = 'First';
        $config['div']         = 'companyList'; //parent div tag id
        $config['base_url']    = site_url('ccompany/ajaxPaginationData');
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
		$config["uri_segment"] = 3;
		
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		
		$this->ajax_pagination->initialize($config);
		
		$data["links"] = $this->ajax_pagination->create_links();
		
        $data['company'] = $this->mcompany->getRows(array('limit'=>$this->perPage));
		$data['ranCompany'] = $this->mcompany->get_random();
		$session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Company';

        $this->load->view('templates/header', $data);
        $this->load->view('company/index', $data);
        $this->load->view('templates/footer');
    }
	
	function ajaxPaginationData()
    {
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->mcompany->getRows());
        
        //pagination configuration
        $config['first_link']  = 'First';
        $config['div']         = 'companyList'; //parent div tag id
        $config['base_url']    = site_url('ccompany/ajaxPaginationData');
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
		
		$config["uri_segment"] = 3;
		
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		
        
        $this->ajax_pagination->initialize($config);
		
		$data["links"] = $this->ajax_pagination->create_links();
        
        //get the posts data
        $data['company'] = $this->mcompany->getRows(array('start'=>$offset,'limit'=>$this->perPage));
		
		$data['ranCompany'] = $this->mcompany->get_random();
		$session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Company';

        $this->load->view('company/ajax-pagination-data', $data, false);
        
	}

    
	
	public function showDB()
    {
        $data['data_get'] = $this->mcompany->get_company();
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = ' Company Database';
        
        $this->load->view('templates/header', $data);
        $this->load->view('company/companydb', $data);
        $this->load->view('templates/footer', $data);
    }

	public function create() {
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Add new company';
        
        $this->load->view('templates/header', $data);
        $this->load->view('company/create', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug=NULL){
        $data['company'] = $this->mcompany->get_company_by_slug($slug);
        /*if (empty($data['intern']))
        {
            show_404();
        }*/
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = $data['company']['cName'];

        $this->load->view('templates/header', $data);
        $this->load->view('company/view', $data);
        $this->load->view('templates/footer');
    }
	
	function save() {
        $data = $this->input->post(NULL, TRUE);
        $slug_temp = url_title($data['cName'], 'dash', TRUE);
        $slug = $slug_temp. '-' . now();
        
        $value1 = array(
            'cName' => $data['cName'],
            'cSlug' => $slug,
            'cDes' => $data['cDes'],
            'cAddress' => $data['cAddress'],
            'cTel' => $data['cTel'],
            'cEmail' => $data['cEmail'],
            'cWebsite' => $data['cWebsite']
        );
        $value2 = $this->mcompany->insert_company($value1);  

        echo json_encode(['results' => "success"]);
     }
	
	public function edit($slug=NULL){
		$data['company'] = $this->mcompany->get_company_by_slug($slug);
        /*if (empty($data['intern']))
        {
            show_404();
        }*/
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = $data['company']['cName'];

        $this->load->view('templates/header', $data);
        $this->load->view('company/edit', $data);
        $this->load->view('templates/footer');
	}
    
    public function update(){
        $data = $this->input->post(NULL, TRUE);
        $slug_temp = url_title($data['cName'], 'dash', TRUE);
        $slug = $slug_temp. '-' . now();
        $value1 = array(
            'cID' => $data['cID'],
            'cName' => $data['cName'],
            'cSlug' => $slug,
            'cAddress' =>$data['cAddress'],
            'cDes' => $data['cDes'],
            'cTel' => $data['cTel'],
            'cEmail' => $data['cEmail'],
            'cWebsite' => $data['cWebsite']
        );
        $this->mcompany->update_company($value1);
       
        echo json_encode(['results' => "success"]);
    }
    
    function delete($slug=NULL)
    {
        if($slug !== NULL)
        {
            $this->mcompany->delete_company($slug);
            redirect('company');
        }
    }
    
    public function visible($slug)
    {
        if($slug !== NULL)
        {
            $this->mcompany->visible($slug);
            redirect('company');
        }
    }
    
    public function invisible($slug)
    {
        if($slug !== NULL)
        {
            $this->mcompany->invisible($slug);
            redirect('company/hidden');
        }
    }
    
    public function hidden()
    {
        $data['hidden'] = $this->mcompany->hidden_company();
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Hidden Companies';

        $this->load->view('templates/header', $data);
        $this->load->view('company/hidden', $data);
        $this->load->view('templates/footer');
    }
}