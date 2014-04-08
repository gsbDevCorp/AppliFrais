<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

/**
 * Controleur de la connexion
 * Intègre les fonctions permettant d'initialiser la connexion, de se connecter et de se deconnecter
 *
 * @author Chafik DAGGAG
 *
 * @name connexion_c
 * @namespace Controllers
 *
 */
class Connexion_c extends MY_Controller {
	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$data ['content'] = 'connexion_v';
		$this->generer_affichage ( $data );
	}
	
	/**
	 * Vérification des identifiants et redirection
	 */
	public function connexion() {
		$login = $this->input->post('login_txt');
		$mdp = $this->input->post('mdp_passwd');
		if ($this->visiteur_m->verifInfosVisiteur($login, $mdp)) {
			$this->initialiseSession($login,$mdp);
		
		/*afin de booter sur une certaine page après connexion*/
		echo '<meta http-equiv="refresh" content="0;URL=../EtatFrais_c">';
		}
		else{
			redirect ( '', 'refresh' );
		}
	}
	/**
	 * Initialise la session
	 * 
	 * @param unknown $login
	 * @param unknown $mdp
	 */
	private function initialiseSession($login,$mdp) {
		$data = $this->visiteur_m->getInfosVisiteur($login,$mdp);
		foreach($data->result() as $row) {
			$this->session->set_userdata('id',$row->id);
			$this->session->set_userdata('nom',$row->nom);
			$this->session->set_userdata('prenom',$row->prenom);
		}
	}
	
	/**
	 * utilise la fonction de destruction de la session active
	 * Location : ../application/helpers/gsb_helper.php
	 */
	public function deconnexion() {
		$this->session->sess_destroy ();
		/* redirige vers la page d'accueil */
		redirect ( '', 'refresh' );
	}
}
/* End of file Connexion_c.php */
/* Location: ./application/controllers/Connexion_c.php */
