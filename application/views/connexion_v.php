<?php 
	$this->load->helper("form");
?>

<div id="contenu">
      <h2>Identification de l'utilisateur</h2>
</div> 
<?php 
	echo form_open();
	$dataLogin = array(
			'id' => 'login',
			'type' => 'text',
			'size' => "30", 
			'maxlength' => "45"
	);
	echo form_label('Login*', 'login', $dataLogin);
	echo form_input($dataLogin) . br();
	
	$dataMdp = array(
			'id' => 'mdp',
			'type' => 'password',
			'size' => "30",
			'maxlength' => "45"
	);
	echo form_label('Mot de passe*', 'mdp', $dataMdp);
	echo form_input($dataMdp).br();
	
	echo form_submit("subCnx", "Envoyer");
	echo form_reset("restCnx","Annuler").br();
	
	echo form_close();
?>
	
