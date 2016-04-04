<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

public function __construct()
	{
	
	parent::__construct();
		$this->load->database();
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
$data['page_title'] = "Все разделы новостей";
$current_key = "anons";
$data['list_category'] = $this->db->query("SELECT * FROM sd_reviews WHERE sd_reviews.key = '$current_key'");

		$this->load->view('template/header_view',$data);
		$this->load->view('template/menu/top_menu_inside',$data);
		$this->load->view('template/list_review_view',$data);
		$this->load->view('template/footer_view',$data);

	}
	
		public function review_read($id)
	{
	if(!isset($id)){show_404();}

$sql = "SELECT * FROM sd_reviews WHERE review_url = ?";
$query = $this->db->query($sql, array($id));
$error = $this->db->_error_message();
$error_id = $query->num_rows();
if ($error_id == 0){show_404();}
foreach ($query->result_array() as $row)
{
    $data['review_title'] = $row['review_title'];
    $data['review_anons'] = $row['review_anons'];
    $data['review_link'] = $row['review_link'];
    $data['review_body'] = $row['review_body'];
    $data['review_time'] = $row['review_time']; 
    $data['review_image'] = $row['review_image'];  

}


		$this->load->view('template/header_view',$data);
		$this->load->view('template/menu/top_menu_inside',$data);
		$this->load->view('template/review_view',$data);
		$this->load->view('template/footer_view',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>