<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mintern extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_all_intern() 
    {
        $query = $this->db->query('
            SELECT iID, iTitle, iSlug, cName , iDeadline, iRegister, iDes, iDate, iStatus, fullname 
            FROM internship NATURAL JOIN company NATURAL JOIN user
            ORDER BY internship.iDate, iRegister DESC
        ');
        return $query->result_array();
    }
    
    public function get_latest() 
    {
        $query = $this->db->query('
        SELECT iID, iTitle, iSlug, iDeadline, iImage_thumbnail, iImage_ext, iDate, idlogin  
        FROM internship
        WHERE iStatus = 1 and iID NOT IN 
            (SELECT * FROM 
                (SELECT iID  
                    FROM internship
                    WHERE iStatus = 1
                    ORDER BY iDeadline ASC
                    LIMIT 2
                 ) as temp 
             )
        ORDER BY iDate DESC
        LIMIT 2');
        
        return $query->result_array();
    }
    
    public function get_trend() 
    {
        $query = $this->db->query('
        SELECT iID, iTitle, iSlug, iDeadline, iImage_thumbnail, iImage_ext, iDate, iDes, idlogin  
        FROM internship
        WHERE iStatus = 1
        ORDER BY iRegister DESC
        LIMIT 3');

        return $query->result_array();
    }
    
    public function get_near_deadline()
    {
        $query = $this->db->query('
            SELECT iID, iTitle, iSlug, iDeadline, iImage_thumbnail, iImage_ext, iDate, iDes, idlogin  
            FROM internship
            WHERE iStatus = 1
            ORDER BY iDeadline ASC
            LIMIT 2');
        return $query->result_array();
    }
    
    public function get_others($limit, $start)
    {
        $result1 = $this->get_latest();
        $result2 = $this->get_trend();
        $result3 = $this->get_near_deadline();
        
		foreach($result1 as $row1){
			$result4[] = $row1['iID'];
		}
		foreach($result2 as $row2){
			$result4[] = $row2['iID']; 
		}
        foreach($result3 as $row3){
			$result4[] = $row3['iID']; 
		}
       
        $this->db->select('iID, iTitle, iSlug, iDeadline, iImage_thumbnail, iImage_ext, iDate, iDes, idlogin');
        $this->db->from('internship');
        $this->db->where_not_in('iID', $result4);
        $this->db->where_in('iStatus', array('1', '0'));
        $this->db->order_by('iDeadline', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_num_of_others()
    {
        $result1 = $this->get_latest();
        $result2 = $this->get_trend();
        $result3 = $this->get_near_deadline();
        
		foreach($result1 as $row1){
			$result4[] = $row1['iID'];
		}
		foreach($result2 as $row2){
			$result4[] = $row2['iID']; 
		}
        foreach($result3 as $row3){
			$result4[] = $row3['iID']; 
		}
       
        $this->db->select('iID, iTitle, iSlug, iDeadline, iImage_thumbnail, iImage_ext, iDate, iDes, idlogin');
        $this->db->from('internship');
        $this->db->where_not_in('iID', $result4);
        $this->db->where_in('iStatus', array('1', '0'));
        $this->db->order_by('iDeadline', 'desc');
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    function reg_of_intern($slug)
    {
        $query = $this->db->query('
            SELECT fullname, pName, idlogin
            FROM register NATURAL JOIN user NATURAL JOIN internposition
            WHERE register.iID IN 
                (SELECT iID
                 FROM internship
                 WHERE internship.iSlug = "' . $slug . '")');
       return $query->result_array();
    }
    
    function num_by_position($iID)
    {
        $query = $this->db->query('
            SELECT internposition.pName, COUNT(register.idlogin) as numOfReg 
            FROM register NATURAL JOIN internposition
            WHERE pID IN 
                (SELECT pID
                 FROM internposition
                 WHERE iID ="' . $iID .  '")
            GROUP BY pID
        ');
        return $query->result_array();
    }
    
    public function get_iArticle($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('internship', array('iSlug' => $slug));
       
        return $query->row_array();
    }
    
    public function get_iPosition($pos = NULL)
    {
        $query = $this->db->get_where('internposition', array('iID' => $pos));
        return $query->result_array();
    }
    
    public function get_company($com = NULL)
    {
        $query = $this->db->get_where('company', array('cID' => $com));
        return $query->row_array();
    }
    
    public function get_all_company()
    {
        $query = $this->db->get('company');
        return $query->result_array();
    }
    
    public function get_writer($writer = NULL)
    {
        $query = $this->db->get_where('user', array('idlogin' => $writer));
        return $query->row_array();
    }
    
    public function test($k)
    {
        $this->db->insert('test', $k);
        $query = $this->db->insert_id();
        return $query;
    }
    
    public function tPosition($k){
        $this->db->insert('tposition', $k);
    }
    
    public function insert_internship($value)
    {
        $this->db->insert('internship', $value);
        $query = $this->db->insert_id();
        return $query;
    }
    
    public function update_internship($value)
    {
        $id = $value['iID'];
        $this->db->where('iID', $id);
        $this->db->update('internship', $value);
    }
    
    public function delete_intern($slug)
    {
        $this->db->delete('internship', array('iSlug' => $slug));
    }
    
    public function insert_position($value)
    {
        $this->db->insert('internPosition', $value);
    }
    
    public function update_position($value)
    {
        $this->db->insert('internPosition', $value);
    }
    
    public function delete_position($id)
    {
        $this->db->delete('internPosition', array('iID' => $id));
    }
    
    public function visible($slug)
    {
        $value = array(
            'iStatus' => 1
        );
        $this->db->where('iSlug', $slug);
        $this->db->update('internship', $value);
    }
    
    public function invisible($slug)
    {
        $value = array(
            'iStatus' => 2
        );
        $this->db->where('iSlug', $slug);
        $this->db->update('internship', $value);
    }
    
    public function hidden_post()
    {
        $query = $this->db->query('
             SELECT iID, iTitle, iSlug, iDeadline, iImage_thumbnail, iImage_ext, iDate, idlogin  
             FROM internship
             WHERE iStatus = 2
             ORDER BY iDate DESC
        ');
        return $query->result_array();
    }
    
    public function get_register_by_iID($iID)
    {
        $query = $this->db->get_where('register', array('iID' => $iID));
        return $query->result_array();
    }
    
    public function deregister($value)
    {
        $this->db->delete('register', $value);
        return true;
    }
    
    public function register($value)
    {
        if($this->db->insert('register', $value)){
            $query = $this->db->insert_id();
            return $query;
        }
    }
}