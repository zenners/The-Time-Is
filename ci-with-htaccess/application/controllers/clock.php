<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NinjaGold extends CI_Controller {

	public function index()
	{
		$this->load->view('gold_index_view');
	}

	public function house()
	{

	}

	public function farm()
	{
		echo "you made it to the farm";
	}
	public function casino()
	{

	}
	public function cave()
	{

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */