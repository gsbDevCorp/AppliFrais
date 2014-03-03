<?php
	$this->load->view('templates/header');
?>

<div id="content">
	<?php  $this->load->view($content); ?>
</div>

<?php 
	$this->load->view('templates/footer');
?>