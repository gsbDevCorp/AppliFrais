<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_ADMIN_Controller extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		 $this->load->library('session');
		 
		 /*Vérifie si les informations saisies sont correctes*/
		 if($this->input->post('identifiant', TRUE) && $this->input->post('password', TRUE)) {
		 	$id = $this->input->post('identifiant');
		 	$pass = $this->input->post('password');
		 	
		 	if($this->user_model->validate($id,$pass))
		 		$this->session->set_userdata('user',$id);
		 	else {
		 		if(!$this->session->userdata('user'))
		 				redirect("connexion_c/connexion");
		 		}
		 }
		 else{
		 	if(!$this->session->userdata('user'))
		 		redirect("connexion_c/connexion");
		 }
	}
}
/* End of file MY_ADMIN_Controller.php */
/* Location : ./application/core/MY_ADMIN_Controller.php */