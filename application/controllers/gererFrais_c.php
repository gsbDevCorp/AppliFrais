<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class GererFrais_c extends MY_Controller {
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$data['content'] = 'gererFrais_v';
			$this->generer_affichage($data);
		}
		
		/**
		 * Ajout d'une fiche de frais forfait
		 */
		function ajouteFraisForfait() {
			
		}
		
		/**
		 * Ajout d'une fiche de frais hors forfait
		 */
		function ajouteFraisHorsForfait() {
			
		}
	}
/* End of file gererFrais_c.php */
/* Location : ./application/controllers/gererFrais_c.php */