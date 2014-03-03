<h1>Gérer ma fiche de frais du mois <?php echo $mois; ?></h1>

<?php if ($insertion) { ?>
<div class="success">
	Frais enregistrés avec succès !
</div>
<?php }
if ($erreurInsertion) {?>
<div class="error">
	Erreur lors de l'insertion des frais. Si le problème persiste, contactez le support.
</div>
<?php }?>
<?php 
	$this->load->view('includes/formAjoutFraisForfait_v');
	$this->load->view('includes/formAjoutFraisHorsForfait_v');
?>