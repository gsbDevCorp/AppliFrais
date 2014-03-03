<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controleur des fiches de frais
 * Intègre les fonctions permettant de visualiser les fiches saisies
 * 
 * @author Robin BILLY
 * 
 * @name EtatFrais_c
 * @namespace Controllers
 * 
 */
class EtatFrais_c extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * Fonction index du controller, permet de choisir un mois afin d'en visualiser
	 * les fiches forfait et hors forfait saisies.
	 * 
	 * @return void
	 */
	public function index() {
		$data['content'] = 'etatFrais_v';
		$data['mois_bdd'] = $this->ficheFrais_m->getMoisExistants();
		$data['ficheFrais'] = false;
		$this->generer_affichage($data);
	}
	
	/**
	 * Fonction de gestion de l'affichage des frais du mois choisi.
	 * 
	 * @return void
	 */
	public function afficherMois() {
		
		//-- Initialisation des paramètres nécessaires à la fonction
		$data['mois'] = dateHumanToDB($this->input->post('mois_dropdown'));
		$data['afficherFraisHF'] = false;
		
		//-- Chargement de l'état de la fiche de frais et du montant validé
		$etatFiche = $this->ficheFrais_m->getEtatFiche($data['mois'],$this->session->userdata('id'));
		foreach ($etatFiche->result() as $etat) {
			$data['etatFiche'] = $etat->libelle;
			$data['montantValide'] = $etat->montantValide;
		}
		
		//-- Chargement des frais forfait.
		$frais = $this->ligneFraisForfait_m->getFraisMensuels($data['mois'], $this->session->userdata('id'));
		foreach ($frais->result() as $row) {
			if($row->quantite != 0)
				$data[$row->idFraisForfait] = $row->quantite;
			else 
				$data[$row->idFraisForfait] = 0;
		}
		
		//-- Chargement des frais hors forfait
		$data['nbFraisHF'] = $this->ligneFraisHorsForfait_m->countFraisHorsForfaitMensuels($data['mois'],$this->session->userdata('id'));
		if($data['nbFraisHF'] > 0) {
			$data['fichesFraisHF'] = $this->ligneFraisHorsForfait_m->getFraisHorsForfaitMensuels($data['mois'],$this->session->userdata('id'));
			$data['afficherFraisHF'] = true;
		}
		
		//-- Activation de l'affichage des frais et génération de la vue.
		$data['ficheFrais'] = true;
		$data['content'] = 'etatFrais_v';
		$data['mois_bdd'] = $this->ficheFrais_m->getMoisExistants();
		$this->generer_affichage($data);
	}
}
/* End of file etatFrais_c.php */
/* Location : ./application/controllers/etatFrais_c.php */