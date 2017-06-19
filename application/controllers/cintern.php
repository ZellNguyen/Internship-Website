<?php
class Cintern extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mintern');
        $this->load->helper('url_helper');
        $this->load->helper('date');
        $this->load->library('pagination');
    }
    
    public function index()
    {
        $data['latest'] = $this->mintern->get_latest();
        $data['trend'] = $this->mintern->get_trend();
        $data['near_deadline'] = $this->mintern->get_near_deadline(); 
        $numRows = $this->mintern->get_num_of_others();
        
        //pagination settings
        $config['base_url'] = site_url('cintern/index');
        $config['total_rows'] = $numRows;
        $config['per_page'] = "4";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        
        //config for bootstrap pagination class integration
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
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        
        //call the model function to get the data
        $data['others'] = $this->mintern->get_others($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Internship';
        
        $this->load->view('templates/header', $data);
        $this->load->view('internship/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function showDB()
    {
        $data['intern'] = $this->mintern->get_all_intern();
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Internship';
        
        $this->load->view('templates/header', $data);
        $this->load->view('internship/interndb', $data);
        $this->load->view('templates/footer', $data);
    }
    
    public function view($slug = NULL)
    {
        $data['intern'] = $this->mintern->get_iArticle($slug);
        $data['position'] = $this->mintern->get_iPosition($data['intern']['iID']);
        $data['register'] = $this->mintern->get_register_by_iID($data['intern']['iID']);
        $data['company'] = $this->mintern->get_company($data['intern']['cID']);
        $data['writer'] = $this->mintern->get_writer($data['intern']['idlogin']);
        
        /*if (empty($data['intern']))
        {
            show_404();
        }*/
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = $data['intern']['iTitle'];

        $this->load->view('templates/header', $data);
        $this->load->view('internship/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create() {
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Create new internship';
        $data['company'] = $this->mintern->get_all_company();
        
        $this->load->view('templates/header', $data);
        $this->load->view('internship/create', $data);
        $this->load->view('templates/footer');
    }
    
    public function save() 
    {
        $data = $this->input->post(NULL, TRUE);
        $slug_temp = url_title($data['iTitle'], 'dash', TRUE);
        $slug = $slug_temp. '-' . now();
        
        $value1 = array(
            'iTitle' => $data['iTitle'],
            'iSlug' => $slug,
            'iDes' => $data['iDes'],
            'cID' => $data['cID'],
            'iDeadline' => $data['iDeadline'],
            'iDate' => date('Y-m-d H:i:s'),
            'idlogin' => $data['idlogin']
        );
        $value2 = $this->mintern->insert_internship($value1);
        
        foreach ($data['pName'] as $row){
            $value3 = array(
                'iID' => $value2,
                'pName' => $row
            );
            $this->mintern->insert_position($value3);
        }   

        echo json_encode(['results' => "success"]);
    }
    
    public function edit($slug = NULL)
    {
        $data['intern'] = $this->mintern->get_iArticle($slug);
        $data['position'] = $this->mintern->get_iPosition($data['intern']['iID']);
        $data['company'] = $this->mintern->get_company($data['intern']['cID']);
        $data['writer'] = $this->mintern->get_writer($data['intern']['idlogin']);
        $data['companyList'] = $this->mintern->get_all_company();
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = $data['intern']['iTitle'];

        $this->load->view('templates/header', $data);
        $this->load->view('internship/edit', $data);
        $this->load->view('templates/footer');
    }
    
    public function update()
    {
        $data = $this->input->post(NULL, TRUE);
        $slug_temp = url_title($data['iTitle'], 'dash', TRUE);
        $slug = $slug_temp. '-' . now();
        $value1 = array(
            'iID' => $data['iID'],
            'iTitle' => $data['iTitle'],
            'iSlug' => $slug,
            'iDes' => $data['iDes'],
            'cID' => $data['cID'],
            'iDeadline' => $data['iDeadline'],
            //'iDate' => time()
            'iDate' => date('Y-m-d H:i:s')
        );
        $this->mintern->update_internship($value1);
        $this->mintern->delete_position($data['iID']);
        foreach ($data['pName'] as $row){
            $value3 = array(
                'iID' => $data['iID'],
                'pName' => $row
            );
            $this->mintern->update_position($value3);
        }   
        
        echo json_encode(['results' => "success"]);
    }
    
    public function delete($slug = NULL)
    {
        if($slug !== NULL)
        {
            $this->mintern->delete_intern($slug);
            redirect('internship');
        }
    }
    
    public function reg_of_intern($slug = NULL)
    {
        if($slug !== NULL)
        {
            $data['intern'] = $this->mintern->get_iArticle($slug);
            $data['reg'] = $this->mintern->reg_of_intern($slug);
            $data['position'] = $this->mintern->num_by_position($data['intern']['iID']);
            
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['idlogin'];
            $data['role'] = $session_data['role'];
            $data['pageTitle'] = 'Reg of' . $slug;

            $this->load->view('templates/header', $data);
            $this->load->view('internship/reg_of_intern', $data);
            $this->load->view('templates/footer');
        }
    }
    
    public function visible($slug)
    {
        if($slug !== NULL)
        {
            $this->mintern->visible($slug);
            redirect('internship');
        }
    }
    
    public function invisible($slug)
    {
        if($slug !== NULL)
        {
            $this->mintern->invisible($slug);
            redirect('internship/hidden');
        }
    }
    
    public function hidden()
    {
        $data['hidden'] = $this->mintern->hidden_post();
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Hidden Posts';

        $this->load->view('templates/header', $data);
        $this->load->view('internship/hiddenpost', $data);
        $this->load->view('templates/footer');
    }
    
    public function deregister($iSlug = NULL, $iID = NULL, $pID = NULL, $id = NULL)
    {
        $value = array(
            'iID' => $iID,
            'pID' => $pID,
            'idlogin' => $id
        );
        if($this->mintern->deregister($value)){
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Successfully deregistered.</div>');
        }
        redirect('internship/'.$iSlug);
    }
    
    public function register($iSlug = NULL, $iID = NULL, $pID = NULL, $id = NULL)
    {
        $value = array(
            'iID' => $iID,
            'pID' => $pID,
            'idlogin' => $id
        );
        $result = $this->mintern->register($value);
        if(!$result) {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry!!! Failed to register.  You may reach your maximum number of registrations. Please check and try again.</div>');
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Successfully registered.</div>');
        }
        redirect('internship/'.$iSlug);
    }
    
    public function test()
    {
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['idlogin'];
        $data['role'] = $session_data['role'];
        $data['pageTitle'] = 'Test Editor';
        $this->load->view('templates/header', $data);
        $this->load->view('internship/test', $data);
        $this->load->view('templates/footer');
    }
}
