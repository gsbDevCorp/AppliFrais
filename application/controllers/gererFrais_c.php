<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class GererFrais_c extends MY_Controller {
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$data['content'] = 'gererFrais_v';
			$data['mois'] = getMoisAnnee();
			$this->generer_affichage($data);
		}
		
		/**
		 * Ajout d'une fiche de frais forfait
		 */
		function ajouteFraisForfait() {
			$this->ligneFraisForfait_m->ajouteFraisForfait($data);
		}
		
		/**
		 * Ajout d'une fiche de frais hors forfait
		 */
		function ajouteFraisHorsForfait() {
			$this->session->set_userdata('idVisiteur','a131');
			$data = array(
					'idVisiteur' => $this->session->userdata('idVisiteur'),
					'mois' => '201311',
					'libelle' => $this->input->post('libelleFraisHF_txt'),
					'date' => dateToUS($this->input->post('dateFraisHF_date')),
					'montant' => $this->input->post('montantFraisHF_double')
			);
			$this->ligneFraisHorsForfait_m->ajouteFraisHorsForfait($data);
		}
	}
/* End of file gererFrais_c.php */
/* Location : ./application/controllers/gererFrais_c.php */