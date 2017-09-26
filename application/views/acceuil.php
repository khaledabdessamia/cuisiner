<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$datestring='d/m/Y';// H:i:s
?>
    <!-- Acceuil -->
        <section id="banner" class="row">
            <header class="col-xs-8 justify-content-center">
                <h2>Cuisiner, C'est pas sorcier.</h2>
                <p>Un site internet de cuisine qui permet aux amateurs de cuisine et de gastronomie et aux débutants d’apprendre à cuisiner des plats savoureux et de connaitre de nouvelles recettes.</p>
            </header>
        </section>

        <div id="main-wrapper" class="row">
    <?php

        include 'chemin.php';

    ?>
            <!-- pour chaque catégorie -->
            <?php foreach ($categories as $item): ?>
            <div class="cate px-3">
                <header class="major col-xs-12">
                    <h2><?=$item->Nom?></h2>
                </header>
                    <div class="card-deck col-12">
                    <?php foreach ($recettes[$item->Nom] as $recette): ?>
                    <div class="col-xs-12 col-sm-6 col-md-3 p-3 m-2" >
                            <div class="card" style="z-index: 1900;">
                                <img class="card-img-top" height="200" width="300" src="<?php echo site_url('images/'.$recette->lien_img) ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a class="card-link" href="<?php echo site_url('recette/'.$recette->ID); ?>"><?=$recette->Nom?></a></h4>
                                    <p class="card-text"><?=$recette->meta_description?>.</p>
                                    
                                </div>
                                <div class="card-footer">
                                    <small><?=nice_date($recette->date_publication, $datestring)?> </small>
                                </div>
                            </div>
                    </div>
                   <?php endforeach; ?>
                    <div class="col-xs-12 col-sm-6 col-md-2 p-3 m-2"><a href="<?php echo site_url('categorie/'.$item->Nom); ?>"><i class="fa fa-plus-square fa-6" style="font-size: 20rem;" aria-hidden="true"></i></a></div>
                    
                    </div>
            </div>
            <?php endforeach; ?>
            <!-- fin catégorie --> 
        </div>
