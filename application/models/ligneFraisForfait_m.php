<?php

/**
 * Classe d'accès aux données des frais forfaits
 */
class LigneFraisForfait_m extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function ajouteFraisForfait($data) {
		$this->db->insert('lignefraisforfait', $data); 
	}
}