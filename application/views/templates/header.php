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
					<p>
						Visiteur : <br/>
						<?php echo $this->session->userdata('nom'); ?>
						<br />
						<?php 
							echo anchor('#','Saisie fiche de frais').br();
							echo anchor('EtatFrais_c','Mes fiches de frais').br();
							echo anchor('#','Déconnexion');
						?>
					</p>
				</div>
				
				<div class="contentPage">