<h2>Éléments forfaitisés :</h2>

<?php

	//----- initialisation des donn�es du formulaire
	$dataForm['forfaitEtape_double'] = array(
			'name' => 'forfaitEtape_double',
			'id' => 'forfaitEtape_double',
			'placeholder' => 'Forfait étape'
	);
	$dataForm['fraisKm_double'] = array(
			'name' => 'fraisKm_double',
			'id' => 'fraisKm_double',
			'placeholder' => 'Frais kilométriques'
	);
	$dataForm['nuitHotel_double'] = array(
			'name' => 'nuitHotel_double',
			'id' => 'nuitHotel_double',
			'placeholder' => 'Nuitée hôtel'
	);
	$dataForm['repasRest_double'] = array(
			'name' => 'repasRest_double',
			'id' => 'repasRest_double',
			'placeholder' => 'Repas restaurant'
	);
	//----- Affichage du formulaire
	echo form_open('GererFrais_c/ajouteFraisForfait');
	echo form_input($dataForm['forfaitEtape_double']).br();
	echo form_input($dataForm['fraisKm_double']).br();
	echo form_input($dataForm['nuitHotel_double']).br();
	echo form_input($dataForm['repasRest_double']).br();
	echo form_submit('subFormFraisForfait','Valider');
	echo form_reset('reset','Effacer');
	echo form_close();
?>