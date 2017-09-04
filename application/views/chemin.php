<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
$CI =& get_instance();
?>

<div class="container">
	<div class="row">
		<nav class="breadcrumb col-8">
			<a class="breadcrumb-item" href="<?php echo site_url(); ?>">Acceuil</a>
<?php

$i = $this->uri->total_segments();

$u=site_url();

for ($j=1; $j < $i; $j++) { 
	# code...
	$u=$u.$this->uri->segment($j);
	?>
		<a class="breadcrumb-item" href="<?php echo $u; ?>"> <?php echo $this->uri->segment($j); ?> </a>

<?php	
}

echo "<span class=\"breadcrumb-item active\">".$this->uri->segment($i)."</span>";
?>
		</nav>
	</div>
</div>