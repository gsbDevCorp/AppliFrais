<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Controleur des fiches de frais
 * Intègre les fonctions permettant de visualiser les fiches saisies
 *
 * @author Chafik DAGGAG
 * @author Robin BILLY
 *
 * @name EtatFrais_c
 * @namespace Controllers
 *
 */

	class GererFrais_c extends MY_Controller {
		public function __construct() {
			parent::__construct();
			parent::checkSession();
		}
		
		public function index() {
			$data['insertion'] = false;
			$data['erreurInsertion'] = false;
			$data['content'] = 'gererFrais_v';
			$data['mois'] = getMoisAnnee();
			$this->generer_affichage($data);
		}
		
		/**
		 * Ajout d'une fiche de frais forfait
		 */
		public function ajouteFraisForfait() {
			//-- Définition des attributs utilies à la méthodes
			$data['insertion'] = false;
			$data['erreurInsertion'] = false;
				
			//-- Insertion des frais
			try {
				$this->insertionFraisForfait();
				$data['insertion'] = true;
			}
			catch(Exception $e) {
				echo $e;
				$data['erreurInsertion'] = true;
			}
				
			//-- Génération de l'affichage
			$data['content'] = 'gererFrais_v';
			$data['mois'] = getMoisAnnee();
			$this->generer_affichage($data);
		}
		
		/**
		 * Fonction d'insertion des données forfait dans la base
		 */
		private function insertionFraisForfait() {
			//-- Préparation des données de la requête
			$insertETP = array(
					'idVisiteur' => $this->session->userdata('id'),
					'mois' => dateHumanToDB(dateActuelleToHuman()),
					'idFraisForfait' => 'ETP',
					'quantite' => $this->input->post('forfaitEtape_double')
			);
			$insertKM = array(
					'idVisiteur' => $this->session->userdata('id'),
					'mois' => dateHumanToDB(dateActuelleToHuman()),
					'idFraisForfait' => 'KM',
					'quantite' => $this->input->post('fraisKm_double')
			);
			$insertNUI = array(
					'idVisiteur' => $this->session->userdata('id'),
					'mois' => dateHumanToDB(dateActuelleToHuman()),
					'idFraisForfait' => 'NUI',
					'quantite' => $this->input->post('nuitHotel_double')
			);
			$insertREP = array(
					'idVisiteur' => $this->session->userdata('id'),
					'mois' => dateHumanToDB(dateActuelleToHuman()),
					'idFraisForfait' => 'REP',
					'quantite' => $this->input->post('repasRest_double')
			);
				
			//--Traitement de la transaction
			try {
				$this->ligneFraisForfait_m->ajouteFraisForfait($insertETP);
				$this->ligneFraisForfait_m->ajouteFraisForfait($insertKM);
				$this->ligneFraisForfait_m->ajouteFraisForfait($insertNUI);
				$this->ligneFraisForfait_m->ajouteFraisForfait($insertREP);
			}
			catch(Exception $e) {
				echo $e;
			}
		}
		
		/**
		 * Ajout d'une fiche de frais hors forfait
		 */
		public function ajouteFraisHorsForfait() {
			//-- Définition des attributs utilies à la méthodes
			$data['insertion'] = false;
			$data['erreurInsertion'] = false;
			
			//-- Insertion des frais
			try {
				$this->insertionFraisHorsForfait();
				$data['insertion'] = true;
			}
			catch(Exception $e) {
				echo $e;
				$data['erreurInsertion'] = true;
			}
			
			//-- Génération de l'affichage
			$data['content'] = 'gererFrais_v';
			$data['mois'] = getMoisAnnee();
			$this->generer_affichage($data);
		}
		
		/**
		 * Fonction d'insertion des données hors forfait dans la base
		 */
		private function insertionFraisHorsForfait() {
			//-- Préparation des données de la requête
			$data = array(
					'idVisiteur' => $this->session->userdata('id'),
					'mois' => dateHumanToDB(dateActuelleToHuman()),
					'libelle' => $this->input->post('libelleFraisHF_txt'),
					'date' => dateToUS($this->input->post('dateFraisHF_date')),
					'montant' => $this->input->post('montantFraisHF_double')
			);
			
			//--Traitement de la transaction
			try {
				$this->ligneFraisHorsForfait_m->ajouteFraisHorsForfait($data);
			}
			catch(Exception $e) {
				echo $e;
			}
		}
	}
/* End of file gererFrais_c.php */
/* Location : ./application/controllers/gererFrais_c.php */