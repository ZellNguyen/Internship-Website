<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    
    function add_image($data)
    {
        $id = $data['idlogin'];
        $this->db->where('idlogin', $id);
        $this->db->update('profile', $data);
    }
    
    function add_cover($data)
    {
        $id = $data['iID'];
        $this->db->where('iID', $id);
        $this->db->update('internship', $data);
    }
    
    function add_company_cover($data){
        $id = $data['cId'];
        $this->db->where('cID', $id);
        $this->db->update('company', $data);
    }
}