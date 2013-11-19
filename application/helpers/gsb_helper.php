<?php

/**
 * Retourne le mois et l'année en cours
 * au format mm-aaaa
 */
function getMoisAnnee() {
	return mdate("%m-%Y", time());
}

/**
 * Retourne une date au format jj/mm/aaaa au format aaaa-mm-jj
 */
function dateToUS($date) {
	$dateUS = mbsplit('/', $date);
	return $dateUS[2].'-'.$dateUS[1].'-'.$dateUS[0];
}