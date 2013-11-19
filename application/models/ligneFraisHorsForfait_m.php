<?php

/**
 * Classe d'accès aux données des frais hors forfaits
 */
class LigneFraisHorsForfait_m extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function ajouteFraisHorsForfait($data) {
		$this->db->insert('lignefraishorsforfait', $data);
	}
}