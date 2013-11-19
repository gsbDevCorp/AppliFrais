<?php

/**
 * Retourne le mois et l'année en cours
 * au format mm-aaaa
 */
function getMoisAnnee() {
	return mdate("%m-%Y", time());
}