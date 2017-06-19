<?php
class cregister extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('mregister');
    }
    
    function index()
    {
        $this->register();
    }

    function register()
    {
        //set validation rules
        $this->form_validation->set_rules('fullname', 'Full Name', 'trim|required|callback_alpha_dash_space|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[3]|max_length[30]|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|md5');

        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('vregister');
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'fullname' => $this->input->post('fullname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            
            // insert form data into database
            if ($this->mregister->insertUser($data))
            {
                // send email
                if ($this->mregister->sendEmail($this->input->post('email')))
                {
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email Address!!!</div>');
                    redirect('cregister/register');
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error with email address.  Please try again later!!!</div>');
                    redirect('cregister/register');
                }
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('cregister/register');
            }
        }
    }
    
    function alpha_dash_space($str)
    {
        return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
    } 
    
    function verify($hash=NULL)
    {
        if ($this->mregister->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('cregister/register');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('cregister/register');
        }
    }
}
?>