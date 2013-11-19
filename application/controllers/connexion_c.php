<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_c extends MY_Controller{
	
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['content'] = 'connexion_v';
		$this->generer_affichage($data);
	}
	
	/*V�rifie les identifiants*/
	public function connexion(){
		if($this->visiteur_m->getInfosVisiteur($login, $mdp)){
			$this->initialiseSession();
		}
	}
	
	private function initialiseSession(){
		$data = array(
				'idVisiteur' => 'id',
				'nom' => 'nom',
				'prenom' => 'prenom'
		);
		
		$this->session->set_userdata($data);
	}
	
	/**utilise la fonction de destruction de la session active
	 * Location : ./application/helpers/gsb_helper.php
	*/
	public function deconnexion(){
		$this->session->sess_destroy();
		/*redirige vers la page d'accueil*/
		redirect('', 'refresh');
		
	}
}
/* End of file Connexion_c.php */
/* Location: ./application/controllers/Connexion_c.php */
