<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_c extends MY_Controller{
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model("visiteur_m");
	}
	
	public function index(){
		$data['content'] = 'connexion_v';
		$this->generer_affichage($data);
	}
	
	public function valideConnexion(){
	
		$visiteur = $this->visiteur_m->getInfosVisiteur($login, $mdp);
		
		if(!is_array($visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			$data['content'] = 'connexion_v';
			$this->generer_affichage($data);
		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			connecter($id,$nom,$prenom);
			$this->load->view("includes/sommaire");
		}	
	}
	
	public function deconnexion(){
		/**utilise la fonction de destruction de la session active
		 * Location : ./application/helpers/gsb_helper.php
		 */
		$this->gsb->deconnecter();
		
	}
}


/* End of file Connexion_c.php */
/* Location: ./application/controllers/Connexion_c.php */