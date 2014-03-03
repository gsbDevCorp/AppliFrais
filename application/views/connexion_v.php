<?php
$this->load->helper ( "form" );
?>

<div id="contenu">
	<h2>Identification de l'utilisateur</h2>
</div>
<?php
echo form_open('Connexion_c/connexion');
?><p>Login*</p><?php
$dataLogin = array (
		'id' => 'login_txt',
		'name' => 'login_txt',
		'type' => 'text',
		'size' => "30",
		'maxlength' => "45",
		'placeholder' => "Nom d'utilisateur" 
);
echo form_label( '', 'login_txt', $dataLogin );
echo form_input( $dataLogin ) . br ();
?><p>Mot de passe*</p><?php
$dataMdp = array (
		'id' => 'mdp_passwd',
		'name' => 'mdp_passwd',
		'type' => 'password',
		'size' => "30",
		'maxlength' => "45",
		'placeholder' => "Mot de passe" 
);
echo form_label( '', 'mdp_passwd', $dataMdp );
echo form_input( $dataMdp ) . br ();

echo form_submit( "subForm", "Envoyer" );
echo form_reset( "restForm", "Annuler" ) . br ();

echo form_close();
?>
	
