<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {

	public function index()
	{
		$this->load->view('time_display_view');
	}

	public function main ()
	{
		date_default_timezone_set('America/Los_Angeles');
		$time = array(
			'date' => date("F j, Y, g:i a")
			);
		$this->load->view('time_display_view',$time);


	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */