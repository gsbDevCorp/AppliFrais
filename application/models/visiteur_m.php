<?php

/**
 * Classe d'acc�s aux donn�es visiteurs.
 */
class Visiteur_m extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * Retourne les informations d'un visiteur
	
	 * @param $login
	 * @param $mdp
	 * @return l'id, le nom et le pr�nom sous la forme d'un tableau associatif
	 */
	public function getInfosVisiteur($login, $mdp) {
		$this->db->select('id, nom, prenom');
		$this->db->where('login', $login);
		$this->db->where('mdp', $mdp);
		$query = $this->db->get('visiteur');
		return $query->result_array();
	}
}