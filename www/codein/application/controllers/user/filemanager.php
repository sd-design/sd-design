<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Filemanager extends CI_Controller {
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
ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
				
		
		$this->load->view('user/filemanager_view');
		
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}	
	


	

			
	

	//END CLASS
	
	
}

/* End of file create.php */
/* Location: ./application/controllers/create.php */

?>