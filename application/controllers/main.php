<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
		$data["MyFname"] = "Vikas";
		$data["MyLname"] = " Grover";
		$this->load->view('MyView', $data);
	}
	
	public function about()
	{
		$data["MyFname"] = "Vikas";
		$data["MyLname"] = " Grover";
		$this->load->view('About', $data);
	}
	
	function showmachines()
	{
		$this->load->model('site_model');		
		$data['records'] = $this->site_model->getAll();
		$this->load->view('AllRecords', $data);
	}
function showmachinesByQuery()
	{
		$this->load->model('data_model');		
		$data['records'] = $this->data_model->getAll();
		$this->load->view('AllRecords', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */