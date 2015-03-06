<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Read extends CI_Controller {

public function __construct()
	{
	parent::__construct();

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
	
		public function catalog($id)
	{
	if(!isset($id)){show_404();}
	$this->load->database();
$sql = "SELECT id, category_name, category_descript FROM sd_category WHERE category_url = ?";
$query = $this->db->query($sql, array($id));
$error = $this->db->_error_message();
$error_id = $query->num_rows();
if ($error_id == 0){show_404();}
foreach ($query->result_array() as $row)
{
    $data['category_name'] = $row['category_name'];
    $data['category_descript'] = $row['category_descript'];

}

		$this->load->view('category_view',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>