<?php

/**
 * Classe d'accès aux données des fiches de frais
*/
class FicheFrais_m extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getMoisExistants() {
		$this->db->order_by("mois", "desc");
		$this->db->group_by('mois');
		$query = $this->db->get('fichefrais');
		return $query;
	}
}