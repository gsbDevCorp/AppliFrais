<?php

/**
 * Retourne le mois et l'ann�e en cours
 * au format mm-aaaa
 */
function getMoisAnnee() {
	return mdate("%m-%Y", time());
}