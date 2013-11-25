<h2>Mois à séléctionner :</h2>

<?php

	//----- initialisation des donn�es du formulaire
	$dataForm['mois_dropdown'] = array(
			'name' => 'mois_dropdown',
			'id' => 'mois_dropdown'
	);
	foreach ($mois_bdd->result() as $row) {
		$options[] = array(dateDBToHuman($row->mois) => dateDBToHuman($row->mois));
	}
	//----- Affichage du formulaire
	echo form_open('EtatFrais_c/afficherMois');
	echo form_dropdown("mois_dropdown",$options);
	echo form_submit('subFormChoixMois','Valider');
	echo form_reset('reset','Effacer');
	echo form_close();
?>