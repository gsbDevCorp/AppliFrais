<?php

//----- Gestion des dates

	/**
	 * Retourne le mois et l'année en cours
	 * au format mm-aaaa
	 * 
	 * @return String
	 */
	function getMoisAnnee() {
		return mdate("%m-%Y", time());
	}
	
	/**
	 * Retourne une date du format jj/mm/aaaa au format aaaa-mm-jj
	 * 
	 * @param String $date
	 * @return String
	 */
	function dateToUS($date) {
		$dateUS = mbsplit('/', $date);
		return $dateUS[2].'-'.$dateUS[1].'-'.$dateUS[0];
	}
	
	/**
	 * Retourne une date du format aaaamm au format mm/aaaa
	 * 
	 * @param String $date
	 * @return String
	 */
	function dateDBToHuman($date) {
		$annee = substr($date,0,4);
		$mois = substr($date,4);
		return $mois.'/'.$annee;
	}
	
	/**
	 * Retourne le mois et l'année en cours
	 * au format mm/aaaa
	 * 
	 * @return String
	 */
	function dateActuelleToHuman() {
		return mdate("%m/%Y", time());
	}
	
	/**
	 * Retourne une date du format mm/aaaa au format aaaamm
	 * 
	 * @param String date
	 * @return String
	 */
	function dateHumanToDB($date) {
		$annee = substr($date,3,7);
		$mois = substr($date,0,2);
		return $annee.$mois;
	}