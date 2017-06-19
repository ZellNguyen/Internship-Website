<?php
class Upload extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('upload_model');
    }
    
    function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }
    
    function do_upload()
    {
        if($this->input->post('upload'))
        {
            $id = $this->input->post('id');
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '3100';
            $config['max_width']  = '0';
            $config['max_height']  = '0';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {
                $error = $this->upload->display_errors();
                $data['error'] = $error;
                $data['id'] = $id;
                $this->load->view('upload_form', $data);
            }
            else
            {
                $data=$this->upload->data();
                $this->thumb($data);
                $file=array(
                    'idlogin' => $id,
                    'img_name'=>$data['raw_name'],
                    'thumb_name'=>$data['raw_name'].'_thumb',
                    'ext'=>$data['file_ext'],
                    'upload_date'=>time()
                );
                $this->upload_model->add_image($file);
                redirect(site_url('account/'.$id));
            }
        }
        else
        {
            redirect(site_url('upload'));
        }
    }
    
    function thumb($data)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] =$data['full_path'];
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 275;
        $config['height'] = 250;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }
    
    function cover_upload()
    {
        if($this->input->post('upload'))
        {
            $id = $this->input->post('id');
            $slug = $this->input->post('slug');
            $config['upload_path'] = './cover/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '5000';
            $config['max_width']  = '0';
            $config['max_height']  = '0';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {                
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error occured! Please try again!!!</div>');
                redirect(site_url('internship/'.$slug));
            }
            else
            {
                $data=$this->upload->data();
                $this->thumb2($data);
                $file=array(
                    'iID' => $id,
                    'iImage_name'=>$data['raw_name'],
                    'iImage_thumbnail'=>$data['raw_name'].'_thumb',
                    'iImage_ext'=>$data['file_ext'],
                );
                $this->upload_model->add_cover($file);
                redirect(site_url('internship/'.$slug));
            }
        }
    }
    
    function thumb2($data)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] =$data['full_path'];
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 480;
        $config['height'] = 270;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }
    
    function company_upload(){
        if($this->input->post('upload'))
        {
            $cId = $this->input->post('cId');
            $cSlug = $this->input->post('cSlug');
            $config['upload_path'] = './company_cover/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '5000';
            $config['max_width']  = '0';
            $config['max_height']  = '0';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {                
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error occured! Please try again!!!</div>');
                redirect(site_url('company/'.$cSlug));
            }
            else
            {
                $data=$this->upload->data();
                $this->thumb2($data);
                $file=array(
                    'cId' => $cId,
                    'cImg'=>$data['raw_name'],
                    'cThumb'=>$data['raw_name'].'_thumb',
                    'cExt'=>$data['file_ext'],
                );
                $this->upload_model->add_company_cover($file);
                redirect(site_url('company/'.$cSlug));
            }
        }
    }
}