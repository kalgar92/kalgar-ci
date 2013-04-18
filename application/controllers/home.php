<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index(){

		$this->load->view('template', $data = array('partial' => 'home.index'));

	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */