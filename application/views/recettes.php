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
				
					<!--  filtre et autre chose -->
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-4 align-self-start ">
	  						<span></span>
						</div>
						<div class="col-4 align-self-end ">
	  						<button class="btn btn-primary align-self-end" style="left: 20%;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						    Filter
						  	</button>
						</div>
					</div>	
					<div class="collapse" id="collapseExample">
					  <div class="card card-body">
					    <form method="get" action="" class="row justify-content-center">
					    	<select class="col-11 mx-3 align-center custom-select">
							  	<option selected>Open this select menu</option>
								<?php 
								
								foreach ($categories as $categorie): { ?>
								<option value="<?=$categorie->Nom?>"><?= $categorie->Nom ?></option>
								

								<?php }endforeach; ?>
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
					<a href="<?php echo site_url('/recette/'.$recette->ID); ?>">
					<div  class=" media p-3 m-2">
 							<img class="d-flex mr-3 figure-img img-fluid rounded" width="30%" src="<?=site_url('/images/').$recette->lien_img?>" alt="Generic placeholder image">
  								<div class="media-body">
    								<h5 class="mt-0"><?=$recette->Nom?> 
    									
    										<?php
    										  if($page == 'recettes')
    										  {
    											foreach ($categories as $cate) {
													# code...
													if ($cate->ID == $recette->categorie){	?>
													<span class="badge badge-secondary"><?=$cate->Nom;?></span>
													<?php
														break;
													}
												}
    										  }
    										?>
    									 
    								</h5>

    								<div class="row">
                                        <div class="col-md-12">
                                            <div class="post-meta">
                                                <span><i class="fa fa-calendar"></i> <?=$recette->date_publication?> </span>
                                                <!--span><i class="fa fa-user"></i> Par <a href="#" onclick="return false;"> </a> </span-->
                                                <span class="eye-right"><?=$recette->nb_vue?> <i class="fa fa-eye"></i></span>
                                            </div>
                                        </div>
                                    </div>
    								<p><?=$recette->meta_description?>.</p>
  								</div>
					</div>
					</a>
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

