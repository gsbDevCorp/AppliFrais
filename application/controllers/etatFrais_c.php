<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class EtatFrais_c extends MY_Controller {
		public function __construct() {
			parent::__construct();
		}
		
		public function index() {
			$data['content'] = 'etatFrais_v';
			$data['mois_bdd'] = $this->ficheFrais_m->getMoisExistants();
			$data['ficheFrais'] = false;
			$this->generer_affichage($data);
		}
		
		public function afficherMois() {
			$data['mois'] = '201311';
			echo $this->input->post('mois_dropdown');
			$data['content'] = 'etatFrais_v';
			$data['mois_bdd'] = $this->ficheFrais_m->getMoisExistants();
			$data['ficheFrais'] = true;
			$this->generer_affichage($data);
		}
	}
/* End of file etatFrais_c.php */
/* Location : ./application/controllers/etatFrais_c.php */