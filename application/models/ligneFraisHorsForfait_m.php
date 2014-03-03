<?php

/**
 * Classe d'acc�s aux donn�es des frais hors forfaits
 */
class LigneFraisHorsForfait_m extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function ajouteFraisHorsForfait($data) {
		$this->db->insert('lignefraishorsforfait', $data);
	}
	
	public function countFraisHorsForfaitMensuels($mois,$idVisiteur) {
		$this->db->where('mois',$mois);
		$this->db->where('idVisiteur',$idVisiteur);
		return $this->db->count_all_results('lignefraishorsforfait');
		
	}
	public function getFraisHorsForfaitMensuels($mois,$idVisiteur) {
		$this->db->where('mois',$mois);
		$this->db->where('idVisiteur',$idVisiteur);
		return $this->db->get('lignefraishorsforfait');
	}
}