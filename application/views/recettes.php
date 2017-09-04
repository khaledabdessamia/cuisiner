<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<div id="main-wrapper" class="row">

	<?php

		include 'chemin.php';

	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-xs-12 py-2 px-2">
				
											
					
				
					<!--  filtre et autre chose  
					
					

					<div>
						<img class="image" src="favicon.png">
					</div>

				 -->
				<div class="container">
				
					<div class="row justify-content-end mx-5 px-5 py-2 py-2">
  						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					    Filter
					  	</button>
					</div>
					<div class="collapse" id="collapseExample">
					  <div class="card card-body">
					    <form method="post" action="" class="row justify-content-center">
					    	<select class="col-11 mx-3 align-center custom-select">
							  <option selected>Open this select menu</option>
							  <option value="1">catégorie 1</option>
							  <option value="2">catégorie 2</option>
							  <option value="3">catégorie 3</option>
							</select>
							<div class="col-12 mx-3 align-center">
								<input class="col-12 py-3 px-5 m-2 border" type="date" placeholder="Date avant" name="datedebut" >
							</div>
							<div class="col-12 mx-3 align-center">
								<input class="col-12 py-3 px-5 m-2 border" type="date" placeholder="Date après" name="datefin" >
							</div>
 							
 							<input class="btn btn-secondary" type="submit" value="Rechercher">
					    </form>
					  </div>
					</div>	

					<?php foreach ($recettes as $recette): ?>
					<div class=" media p-3 m-2">
 							<img class="d-flex mr-3 figure-img img-fluid rounded" width="30%" src="<?=$recette->lien_img?>" alt="Generic placeholder image">
  								<div class="media-body">
    								<h5 class="mt-0"><?=$recette->Nom?></h5>
    								<?=$recette->meta_description?>.
  								</div>
					</div>
				<?php endforeach;?>



				</div>
				
			</div>
				
			

			<div class="col-sm-4 col-xs-12 py-5 px-2 mt-3">

				<section class="card">
					<a href="#" class="image featured"><img style="max-width: 100%;
						height: auto;padding: 0;" class="col-sm-12" src="images/9.jpg" alt=""></a>
					<header class="py-3 px-3">
						<h3>Sed etiam lorem nulla</h3>
					</header>
					<p class="py-3 px-3">Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
					<footer class="py-3 px-3">
						<a href="#" class="btn btn-dark alt">Magna sed taciti</a>
					</footer>
				</section>
				
					<?php
					include 'autres.php';
					?>
					
			</div>
		</div>
	</div>
</div>

