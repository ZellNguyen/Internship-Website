<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Creset extends CI_Controller {
    
        function __construct() {
            parent::__construct();
            $this->load->helper(array('form','url'));
            $this->load->library(array('session', 'form_validation', 'email'));
            $this->load->database();
            $this->load->model('mreset');
        }

        function index() {
            $this->reset();
        }

        function reset(){
            $this->form_validation->set_rules('email', 'Email address', 'trim|required|valid_email]');
            if ($this->form_validation->run() == FALSE){
                // fails
                $this->load->view('vreset');
            } else {
                if ($this->mreset->checkExist($this->input->post('email')))
                {
                    // send email
                    if ($this->mreset->sendResetEmail($this->input->post('email')))
                    {
                        // successfully sent mail
                        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">An email to reset password has been sent to your email address!!!</div>');
                        redirect('creset/reset');
                    }
                    else
                    {
                        // error
                        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! We cannot send recovery email to you.  Please try again later!!!</div>');
                        redirect('creset/reset');
                    }
                } else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Your email has not been registered yet.  Please signup!!!</div>');
                    redirect('creset/reset');
                }
            }
        }

    function resetForm($hash=NULL){
    $data['email'] = $hash;
    $this->load->view('vresetform', $data);
    }

    function updatepass($hash=NULL)
    {
    if ($this->mreset->updatepassID($hash))
    {
    $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">You have successfully reset your password! Please login to access your account!</div>');
    redirect('creset/reset');
    }
    else
    {
    $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error changing your password!</div>');
    redirect('creset/reset');
    }
    }
}