<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Cuisiner,c'est pas sorcier</title>
	<!-- Bootstrap  -->

    
    <link href="<?php echo site_url('bootstrap-4.0.0-beta/dist/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="<?php echo site_url('css/custom.css'); ?>">

	<link rel="icon" type="image/png" href="<?php echo site_url('favicon.png'); ?>">
</head>
	
<body style="position: relative;">
    <div class="container" style="max-width: 100%; background-color: white;padding: 0;">
        <!--header-->
        <header id="header-wrapper">

            <div class="row justify-content-center">
                <h1 class="col-12 pt-5 pb-3"> <a  href="<?php echo site_url(); ?>">Cuisiner</a> </h1>
                <h2 class="col-12 pb-5">C'est pas sorcier.</h2>
            </div>

            <nav id="nav" >
                <ul class="row justify-content-center">

                    <li class="col-sm-2 hidden-xs <?php if ($page== 'acceuil') {echo 'current';}?>"><a href="<?php echo site_url(); ?>">Acceuil</a></li>
                    <li class="col-sm-2 hidden-xs btn-group <?php if ($page== 'categorie') {echo 'current';}?>" style="cursor: pointer;">
                        
                        <a class="h" data-toggle="dropdown" aria-expanded="false">
                            Catégories 
                        </a>
                        <ul class="dropdown-menu">
                         
                            <!-- pour chaque catégorie -->
                            <?php foreach ($categories as $item): ?>
                            <li class="dropdown-item" ><a href="<?php echo site_url('/categorie/'.$item->Nom); ?>"><?=$item->Nom?></a></li>
                            <?php endforeach; ?>
                          
                        </ul>
                    </li>

                    <li class="col-sm-2 hidden-xs <?php if ($page== 'contact') {echo 'current';}?>" style="white-space: nowrap;"><a href="<?php echo site_url('contact'); ?>">Nous contacter</a></li>
                    <li class="col-sm-2 hidden-xs <?php if ($page== 'apropos') {echo 'current';}?>" style="white-space: nowrap;"><a href="<?php echo site_url('apropos'); ?>">A propos</a></li>
                    
                </ul>
            </nav>

            <div id="mainSearch" class="mainSearch">
                <fieldset data-forms="search" data-input-id="tbMainSearch" class="row">
                    <div class="col-12 px-5 py-5">
                        <div class="search row" style="display: flex;">
                            <input type="search" placeholder="Chercher : tarte aux fraises, gâteau au chocolat, gratin dauphinois..." id="tbMainSearch" class="col-10 px-2 py-2 autocomplete" autocomplete="off" style="width: 90%;border: none;">
                            <button class="col-2 px-3 py-3 button big icon-search" type="button" data-submit="" id="bt_Recherche"></button>
                            <div class="autocomplete-suggestions" style="position: absolute; display: none; width: 978px; max-height: 300px; z-index: 9999;"></div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </header>
        
