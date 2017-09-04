<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
                            <div class="col-md-8 " id="contactUs">
                                <div class="py-1 px-3 m-3 border-right" >

                                    <h4>Nous contacter</h4>

                                    <!-- Form Contact -->
                                    <form action="https://gen-42.com/contact" class="form-contact" method="post" name="contact-form" novalidate="novalidate">
                                        <div><input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom*"></div>
                                        <div><input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom*"></div>
                                        <div><input type="text" class="form-control" name="email" id="email" placeholder="Votre adresse email*"></div>
                                        <div>
                                         <input type="text" class="form-control" name="tel" id="tel" placeholder="Votre N° Téléphone*">
                                        </div>
                                        <div>
                                        <input type="text" id="sujet" name="sujet" class="form-control" placeholder="Sujet">
                                       </div>
                                       <div><textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message (min : 10 caractères)"></textarea></div>
                                       <input type="hidden" name="type" id="type" value="Contact">
                                       <button type="submit" class="btn btn-primary red-send">Envoyer</button>
                                       <div id="msg_contact"></div>
                                    </form>
                                    <!-- End Form Contact -->                                
                                </div>

                            </div>
                            <div class="col-md-4 pt-md-5 " id="aboutUs">
                                <section >
                                    <header>
                                        <h2>Qui sommes nous?</h2>
                                    </header>
                                    <a href="#" class="image featured"><img height="200" width="300" src="https://gen-42.com/assets/img/gen42.svg" alt=""></a>
                                    <p><strong>Nous sommes&nbsp;Gen42&nbsp;</strong>et notre mission est de mettre votre communication virtuelle au service du développement bien réel de votre entreprise. De la construction de votre site web au déploiement de vos troupes sur les réseaux sociaux, vous bénéficierez de notre expertise pour optimiser votre visibilité sur internet et adopter la stratégie qui vous permettra de conquérir le Web.</p>
                                    <footer>
                                        <a href="https://gen-42.com/" class="button">Plus d'informations</a>
                                    </footer>
                                </section>
                            </div>
                        </div>



                        <div class="col-md-3 sidebars contact-sidebar border-right">

                                        <aside>
                                            <h4 itemprop="name">GEN 42</h4>
                                            <address>
                                                <strong>Occupy The Web</strong><br>
                                                <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                                    <i class="fa fa-map-marker"></i><strong>Adresse: </strong><span itemprop="streetAddress">GEN 42, Cité Sonelgaz 205 Logements, n°15, Ben Aknoun, Alger, Algérie</span><br>
                                                    <i class="fa fa-thumb-tack"></i><strong>Ville: </strong><span itemprop="addressLocality">Alger</span>, <span itemprop="postalCode">16306</span><br>
                                                    <i class="fa fa-phone"></i> <abbr title="Phone">Tèl:</abbr> <span itemprop="telephone">+213 23 384 421</span><br>
                                                    <i class="fa fa-fax"></i> <abbr title="Phone">Fax:</abbr> +213 23 384 421                            
                                                </span>
                                            </address>

                                            <address>
                                                  <strong>Contactez nous</strong><br>
                                                  <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:contact@gen-42.com"> <span itemprop="email">contact@gen-42.com</span></a><br>
                                                  <i class="fa fa-headphones"></i><strong>Support:</strong><a href="mailto:contact@gen-42.com"> contact@gen-42.com</a>
                                            </address>
                                                
                                        </aside>
                                        <hr class="tall">
                                    </div>