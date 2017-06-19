<?php
class MCompany extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_company()
    {  
  		$query = $this->db->query('SELECT cID, cName, cSlug, cAddress, cTel, cEmail, cWebsite, cDes, cStatus
           	FROM company
            WHERE cStatus <> 2
            ORDER BY cName ASC');
        return $query->result_array();
    }
    
	public function get_random()
	{
		$query = $this->db->query('SELECT cName, cSlug, cAddress, cTel, cEmail, cWebsite, cDes, cStatus
           	FROM company
            WHERE cStatus <> 2
           	ORDER BY RAND()
           	LIMIT 3');
		return $query->result_array();
	}
	
	function add() {
        //$id = $this->input->post('id');
        $fname = $this->input->post('cName');
        $uname = $this->input->post('cAddress');
        $email = $this->input->post('cTel');
        $pword = $this->input->post('cEmail');
        $stt = $this->input->post('cWebsite');
        $role = $this->input->post('cDes');
        $data = array(
            //'idlogin' => $id;
            'cName' => $cName,
            'cAddress' => $cAddress,
            'cTel' => $cTel,
            'cEmail' => $cEmail,
            'cWebsite' => $cWebsite,
            'cDes' => $cDes,
        );
        $this->db->insert('company', $data);        
    }
    
    function get_company_by_slug($slug){
        $query = $this->db->get_where('company', array('cSlug' => $slug));
       
        return $query->row_array();
    }
    
    public function delete_company($slug)
    {
        $this->db->delete('company', array('cSlug' => $slug));
    }
    
    public function update_company($value)
    {
        $this->db->where('cID', $value['cID']);
        $this->db->update('company', $value);
    }
    
    public function visible($slug)
    {
        $value = array(
            'cStatus' => 1
        );
        $this->db->where('cSlug', $slug);
        $this->db->update('company', $value);
    }
    
    public function invisible($slug)
    {
        $value = array(
            'cStatus' => 2
        );
        $this->db->where('cSlug', $slug);
        $this->db->update('company', $value);
    }
    
    public function hidden_company(){
        $query = $this->db->query('
             SELECT cID, cName, cSlug, cTel, cEmail, cWebsite, cDes, cImg, cExt
             FROM company
             WHERE cStatus = 2
        ');
        return $query->result_array();
    }
    
    public function insert_company($value)
    {
        $this->db->insert('company', $value);
        $query = $this->db->insert_id();
        return $query;
    }
	
	function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('cStatus !=', 2);
        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        $query = $this->db->get();
        
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }
}
