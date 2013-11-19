<?php
	$this->load->view('templates/header');
	$this->load->view('templates/navigation');
?>

<div id="content">
	<?php  $this->load->view($content); ?>
</div>

<?php 
	$this->load->view('templates/footer');
?>