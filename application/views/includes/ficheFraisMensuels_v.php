<h2>Fiche de frais du mois <?php echo dateDBToHuman($mois);?> :</h2>

<p>
	<span class="info">Etat :</span> <?php echo $etatFiche; ?>
	<br/>
	<span class="info">Montant validé :</span> <?php echo $montantValide; ?> €
</p>

<!-- Elements forfaitisés -->
<h2>Eléments forfaitisés :</h2>
<table>
	<tr>
		<th>Forfait Etape</th>
		<th>Frais Kilométriques</th>
		<th>Nuitée Hôtel</th>
		<th>Repas Restaurant</th>
	</tr>
	<tr>
		<td><?php echo $ETP; ?></td>
		<td><?php echo $KM; ?></td>
		<td><?php echo $NUI; ?></td>
		<td><?php echo $REP; ?></td>
	</tr>
</table>

<!-- Elements hors forfait -->
<h3>Descriptif des éléments hors forfait - <?php echo $nbFraisHF; ?> justificatif(s) reçu(s) -</h3>
<?php if ($afficherFraisHF) {?>
	<table>
		<tr>
			<th>Date</th>
			<th>Libelle</th>
			<th>Montant</th>
		</tr>
		<?php 
			foreach ($fichesFraisHF->result() as $row) {
				?>
				<tr>
					<td><?php echo $row->date; ?></td>
					<td><?php echo $row->libelle; ?></td>
					<td><?php echo $row->montant; ?></td>
				</tr>
				<?php
			}
		?>
	</table>
<?php } ?>