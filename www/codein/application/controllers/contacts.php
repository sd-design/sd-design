<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

public function __construct()
	{
	parent::__construct();
	$this->load->database();


	}

	public function index()
	{
		 $this->load->model('Contact');
$data['page_title'] = "Контакты";
$data['list_contacts'] = $this->Contact->get_contacts();

		$this->load->view('template/header_view',$data);
		$this->load->view('template/menu/top_menu_inside',$data);
		$this->load->view('template/contacts_view',$data);
		$this->load->view('template/footer_view',$data);

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>