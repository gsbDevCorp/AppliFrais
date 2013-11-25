<h1>Mes fiches de frais</h1>
<?php
	$this->load->view('includes/formChoixMois_v');
	if ($ficheFrais == true)
		$this->load->view('includes/ficheFraisMensuels_v');
?>