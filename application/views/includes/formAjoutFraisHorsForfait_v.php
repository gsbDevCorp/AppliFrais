<h2>Descriptif des éléments hors forfait :</h2>

<?php

	//----- initialisation des donn�es du formulaire
	$dataForm['dateFraisHF_date'] = array(
			'name' => 'dateFraisHF_date',
			'id' => 'dateFraisHF_date',
			'placeholder' => 'jj/mm/aaaa'
	);
	$dataForm['libelleFraisHF_txt'] = array(
			'name' => 'libelleFraisHF_txt',
			'id' => 'libelleFraisHF_txt',
			'placeholder' => 'Libellé'
	);
	$dataForm['montantFraisHF_double'] = array(
			'name' => 'montantFraisHF_double',
			'id' => 'montantFraisHF_double',
			'placeholder' => 'Montant'
	);
	//----- Affichage du formulaire
	echo form_open('GererFrais_c/ajouteFraisHorsForfait');
	echo form_input($dataForm['dateFraisHF_date']).br();
	echo form_input($dataForm['libelleFraisHF_txt']).br();
	echo form_input($dataForm['montantFraisHF_double']).br();
	echo form_submit('subFormFraisHorsForfait','Valider');
	echo form_reset('reset','Effacer');
	echo form_close();
?>