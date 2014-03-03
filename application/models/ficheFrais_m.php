<?php

/**
 * Classe d'accès aux données des fiches de frais
*/
class FicheFrais_m extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getMoisExistants($idVisiteur) {
		$this->db->where('idVisiteur',$idVisiteur);
		$this->db->order_by("mois", "desc");
		$this->db->group_by('mois');
		$query = $this->db->get('fichefrais');
		return $query;
	}
	
	public function getEtatFiche($mois,$idVisiteur) {
		$this->db->select('libelle, montantValide');
		$this->db->from('etat');
		$this->db->join('fichefrais', 'fichefrais.idEtat = etat.id');
		$this->db->where('mois',$mois);
		$this->db->where('idVisiteur',$idVisiteur);
		return $this->db->get();
	}
	
	/**
	 * @todo insertion hors forfait
	 */
}