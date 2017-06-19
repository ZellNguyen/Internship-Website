<?php
class mreset extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function checkExist($email) {
        $d = $this->db->get_where('user', array('email' => $email))->row();
        if($d) {
            return TRUE;
        } else {
            return FALSE;
        };
    }
    
	function sendResetEmail($to_email)
    {
        $from_email = 'ngkhang.vyco@gmail.com'; //change this to yours
        $subject = 'Reset Your Password';
        $message = 'Dear User,<br /><br />Please click on the below activation link to reset your Password.<br /><br /> http://localhost:8080/kazel/index.php/creset/resetForm/' . md5($to_email) . '<br /><br /><br />Thanks<br />KaZel Team';
        
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'khangnguyen1417'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
		$this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Kazel');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }

	function updatepassID($key)
    {
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|md5');
		
        $data = array('password' => md5($this->input->post('password')));
        $this->db->where('md5(email)', $key);
        return $this->db->update('user', $data);
    }
		
}
?>