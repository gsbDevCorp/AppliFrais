<?php

/**
 * Classe d'accès aux données des frais forfaits
 */
class LigneFraisForfait_m extends CI_Model {
	
	//-- Attributs
	private $dbPath = 'lignefraisforfait';
	
	public function __construct() {
		parent::__construct();
	}
	
	public function ajouteFraisForfait($data) {
		/*$this->db->insert($this->dbPath, $data); */
		$this->db->update($this->dbPath, $data);
	}
	
	public function getFraisMensuels($mois,$idVisiteur) {
		try {
			$this->db->where('idVisiteur',$idVisiteur);
			$this->db->where('mois',$mois);
		}
		catch (Exception $e) {
			echo $e;
		}
		return $this->db->get($this->dbPath);
	}
}