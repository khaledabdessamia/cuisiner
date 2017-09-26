<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('date');
$datestring='d/m/Y';
?>

<div id="main-wrapper" class="row">

<?php

include 'chemin.php';

?>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-xs-12 py-2 px-2">
				<header>
					<h2> <?=$recette->Nom?></h2>
				</header>
				<nav class="nav nav-tabs" id="Tab" role="tablist">
	  				<a class="nav-item nav-link active" id="nav-recette-tab" data-toggle="tab" href="#nav-recette" role="tab" aria-controls="nav-recette" aria-expanded="true">Recette</a>
	  				<a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-expanded="false">Video</a>
				</nav>
				
				<div class="tab-content" id="nav-tabContent">
			  		<div class="tab-pane fade active in show" id="nav-recette" role="tabpanel" aria-labelledby="nav-recette-tab" aria-expanded="true">
			      		<!-- Content -->
						<article class="card box post">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  	<ol class="carousel-indicators">
							    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>						    
							  	</ol>
							  	<div class="carousel-inner">
							    	<div class="carousel-item active">
							      		<img class="d-block w-100 img-fluid" src="<?php echo site_url('images/'.$recette->lien_img);?>" alt="First slide">
							    	</div>
							    	<div class="carousel-item">
							      		<img class="d-block w-100 img-fluid" src="<?php echo site_url('images/'.$recette->lien_img);?>" alt="Second slide">
							    	</div>
							    </div>
							  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    	<span class="sr-only">Previous</span>
							  	</a>
							  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
	   						    </a>
							</div>
							<ul class="post-meta d-flex justify-content-around flex-wrap p-2 my-5">
								<?php
	 							  
    							 	foreach ($categories as $cate) {
										# code...
										if ($cate->ID == $recette->categorie){	?>
								    		<li><span class="badge badge-secondary"><?=$cate->Nom;?></span></li>
									<?php
										break;
										}
									}
    							  
    							?>
								
								<li><?=nice_date($recette->date_publication, $datestring)?></li>
								<li><?=$recette->nb_vue?></li>
							</ul>
													
							<header>
								<h2>Left Sidebar</h2>
								<div class="meta meta-border">
									<p><?=$recette->meta_description?></p>
								</div>
							</header>
							<p>
								<?=$recette->description?>.
							</p>
							<p>
								.
							</p>
							<section>
								<header>
									<h3>Something else</h3>
								</header>
								<p>
									u
								</p>
								<p>
									met nullam consequat feugiat dolore tempus.
								</p>
							</section>
							<section>
								<header>
									<h3> ...</h3>
								</header>
								<p>
									sagittis convallis justo vel mattis.
								</p>
							</section>
						</article>
			      	</div>
			  
			  		<div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab" aria-expanded="false">
			    
			    
			    		<div class="row justify-content-center">
			    			<div class="col-12 p-3">
					  		<div class="embed-responsive embed-responsive-16by9">
				           		 <iframe class="embed-responsive-item" src="<?=$recette->lien_video?>" allowfullscreen=""></iframe>

							</div>
							</div>
				  		</div>
				    </div>
				</div>

				<div>
					<div id="disqus_thread">
						
					</div>
					<script>

						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
						/*
						var disqus_config = function () {
						this.page.url = <?php echo base_url(uri_string());?>;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = ; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};*/

						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://http-localhost-cuisiner.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
				</div>
			</div>

			<div class="col-sm-4 col-xs-12 py-5 px-2">

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