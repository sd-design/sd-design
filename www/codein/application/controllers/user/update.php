<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Controller {
public function __construct(){
 parent::__construct();
 			$this-> load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	
	}

/* 


UPDATE CATEGORY
--------------------------->

*/

	public function category()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$category_id = $_POST['category_id'];
		$category_name = $_POST['category_name'];
		$category_descript = $_POST['category_descript'];
		$category_url = $_POST['category_url'];
		$category_owner = $_POST['owner'];
		$data['category_name']=$category_name;
		$this->load->database();
		
		$sql = "UPDATE sd_category SET category_name=".$this->db->escape($category_name).", category_descript=".$this->db->escape($category_descript).", category_url=".$this->db->escape($category_url).", owner=".$this->db->escape($category_owner)." WHERE id=$category_id";	
$this->db->query($sql);	
		$this->load->view('user/update_category_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}
	
	
/*
UPDATE COUNTDOWN
*/

	public function countdown()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	
				if ($check == true){
				
		$countdown_id = $_POST['countdown_id'];
		$countdown_title = $_POST['countdown_title'];
		$countdown_descript = $_POST['countdown_descript'];
		$countdown_day = $_POST['countdown_day'];
		$countdown_month = $_POST['countdown_month'];
		$countdown_year = $_POST['countdown_year'];
		$countdown_hour = $_POST['countdown_hour'];
		$countdown_minute = $_POST['countdown_minute'];
		$countdown_url = $_POST['countdown_url'];
		$data['countdown_title']=$countdown_title;
		$data['countdown_descript']=$countdown_descript;
		
		$coundown_timer = mktime(0, $countdown_minute, $countdown_hour, $countdown_month, $countdown_day, $countdown_year); 
		$this->load->database();
		$sql = "UPDATE sd_countdown SET title=".$this->db->escape($countdown_title).", descript=".$this->db->escape($countdown_descript).", day=".$this->db->escape($countdown_day).", month=".$this->db->escape($countdown_month).", year=".$this->db->escape($countdown_year).", hour=".$this->db->escape($countdown_hour).", minute=".$this->db->escape($countdown_minute).", timer=".$this->db->escape($coundown_timer).", url=".$this->db->escape($countdown_url)." WHERE id=$countdown_id";	
$this->db->query($sql);	
		$this->load->view('user/update_countdown_view', $data);
													
		}
		else{redirect('user/panel');}	
		ob_end_flush(); 
	}

/*
UPDATE POST
*/


	public function post()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
				
		
		$this->load->view('user/update_post_view', $data);
		
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}	
	
	

	//END CLASS
	
	
}

/* End of file create.php */
/* Location: ./application/controllers/create.php */

?>