<!DOCTYPE html>
<html>
	<head>
		<title>AppliFrais</title>
		<meta charset="UTF-8" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo A_CSS; ?>app.css" />
	</head>
	
	<body>
		<div class="container">
			<div class="header">
				<img src="<?php echo A_IMG; ?>logo.jpg" alt="GSB AppliFrais" />
				<h1>Suivi du remboursement des frais</h1>
			</div>
			
			<div class="contentWrap">
				
				<div class="navigation">
					<?php 
						if($this->session->userdata('id')) {
					?>
						<p>
							Visiteur : <br/>
							<?php 
								echo $this->session->userdata('nom').' '.$this->session->userdata('prenom').br(2);
								echo anchor('gererFrais_c','Saisie fiche de frais').br();
								echo anchor('EtatFrais_c','Mes fiches de frais').br();
								echo anchor('Connexion_c/deconnexion','Déconnexion');
							?>
						</p>
					<?php 
						}
					?>
				</div>
				
				<div class="contentPage">