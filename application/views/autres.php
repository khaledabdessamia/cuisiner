<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('date');
?>
<section class="card mt-5 p-1">
                                    <header>
                                        <h2>Autre recettes</h2>
                                    </header>
                                    <ul class="dates">
                                    <?php
                                    foreach ($autres as $recette): {?>
                                        

                                    
                                        <li>
                                            <span class="date">
                                            
                                            <?=nice_date($recette->date_publication,'M')?> 
                                            
                                            <strong>
                                            
                                            <?=nice_date($recette->date_publication,'d')?>
                                                
                                            </strong>
                                            </span>
                                            
                                            <h3><a href="<?php echo site_url('recette/'.$recette->ID); ?>"><?=$recette->Nom?></a></h3>
                                            <p><?=$recette->meta_description?>.</p>
                                        </li>
                                       <?php }endforeach; ?>
                                    </ul>
</section>