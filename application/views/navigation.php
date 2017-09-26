<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav id="nav" class="p-3">
                <ul class="row justify-content-center">

                    <li class="col-sm-2 hidden-xs <?php if ($page== 'acceuil') {echo 'current';}?>"><a href="<?php echo site_url(); ?>">Acceuil</a></li>
                    <li class="col-sm-2 hidden-xs btn-group <?php if ($page== 'categorie') {echo 'current';}?>" style="cursor: pointer;">
                        
                        <a class="h" data-toggle="dropdown" aria-expanded="false">
                            Catégories 
                        </a>
                        <ul class="dropdown-menu">
                         
                            <!-- pour chaque catégorie -->
                            <?php foreach ($categories as $item): ?>
                            <a class="dropdown-item" href="<?php echo site_url('/categorie/'.$item->Nom); ?>"><?=$item->Nom?> </a>
                            <?php endforeach; ?>
                          
                        </ul>
                    </li>
                    <li class="col-sm-2 hidden-xs <?php if ($page== 'recettes' || $page== 'recette') {echo 'current';}?>" style="white-space: nowrap;"><a href="<?php echo site_url('recettes'); ?>">Recettes</a></li>
                    <li class="col-sm-3 hidden-xs <?php if ($page== 'contact') {echo 'current';}?>" style="white-space: nowrap;"><a href="<?php echo site_url('contact'); ?>">Nous contacter</a></li>
                    <li class="col-sm-2 hidden-xs <?php if ($page== 'apropos') {echo 'current';}?>" style="white-space: nowrap;"><a href="<?php echo site_url('apropos'); ?>">A propos</a></li>
                    
                </ul>
            </nav>
