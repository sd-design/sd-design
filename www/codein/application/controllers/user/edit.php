<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

public function __construct(){
 parent::__construct();
 			$this-> load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}

/* 
EDIT PART
*/


	public function index()
{
		ob_start();
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$this->load->view('user/edit_view');
		}
		else{redirect('user/panel');}
			ob_end_flush(); 
	
	}
	
	public function posts()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$this->load->database();
		$data['list_posts']  = $this->db->get("sd_post");		
				
		$this->load->view('user/list_posts_view', $data);
		}
		else{redirect('user/panel');}

	
	}
	
	
		public function categories()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$data['list_posts']  = $this->db->get("sd_category");		
				
				
		$this->load->view('user/list_categories_view', $data);
		}
		else{redirect('user/panel');}

	}
	
	
		public function post($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_posts']  = $this->db->query("SELECT * FROM sd_post WHERE id=".$id." LIMIT 1;");	
		$data['list_category']  = $this->db->get("sd_category");			
				
		$this->load->view('user/edit_post_view', $data);
		}
		else{redirect('user/panel');}
							
							}
	
	public function category($id)
	{
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_posts']  = $this->db->query("SELECT * FROM sd_category WHERE id=".$id." LIMIT 1;");	
		$query = $data['edit_posts'];
		$row = $query->row_array();
		$data['owner'] = $row['owner'];
		$data['name_owner']  =$this->db->get("users");	
	
		
		$this->load->view('user/edit_category_view', $data);
		
		}
		else{redirect('user/panel');}
							
							}
							
							
		public function countdowns()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$this->load->database();
		$data['list_posts']  = $this->db->get("sd_countdown");		
				
				
		$this->load->view('user/list_countdowns_view', $data);
		}
		else{redirect('user/panel');}

	
										}	
	
							
	
		public function countdown($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_countdown']  = $this->db->query("SELECT * FROM sd_countdown WHERE id=".$id." LIMIT 1;");	
					
				
		$this->load->view('user/edit_countdown_view', $data);
		}
		else{redirect('user/panel');}
							
							}

							
//END CLASS
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>