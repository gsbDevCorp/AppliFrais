<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function generer_affichage($data) {
		$this->load->view('templates/template',$data);
	}
	
	function checkSession() {
		if(!$this->session->userdata('id'))
			redirect("connexion_c");
	}
}
/* End of file MY_Controller.php */
/* Location : ./application/core/MY_Controller.php */