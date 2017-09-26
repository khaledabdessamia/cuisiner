<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="icon" type="image/png" href="<?php echo site_url('favicon.png'); ?>">
    
</head>
	
<body style="position: relative;">
    <div class="container" style="max-width: 100%; background-color: white;padding: 0;">
        <!--header-->
        <header id="header-wrapper">

            <div class="row justify-content-center" style="font-family: 'cac_champagneregular';">
                <h1 style="font-size: 150px;" class="col-12 pt-4 "> <a  href="<?php echo site_url(); ?>">Cuisiner</a> </h1>
                <h1 style="font-size: 65px;" class="col-12 pb-4">C'est pas sorcier.</h1>
            </div>

            <?php include 'navigation.php';?>

            <div id="mainSearch" class="mainSearch">
                <fieldset data-forms="search" data-input-id="tbMainSearch" class="row">
                    <div class="col-12 px-4 py-4">
                        <div class="search row" style="display: flex;">
                            <input onkeyup="lookup1(this.value)" id="search1" type="search" id="tbMainSearch" class="col-10 px-2 py-2 autocomplete" autocomplete="off" style="width: 90%;border: none;" placeholder="Chercher : tarte aux fraises, gâteau au chocolat, gratin dauphinois..." >
                            <button class="col-2 px-3 py-3 button big icon-search" type="button" data-submit="" id="bt_Recherche"></button>

                            <div id="suggestions1">
                            <div id="autoSuggestionsList1" class="autocomplete-suggestions" ></div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
          
            <div id="fixedHeader" class="row fixed-top navbar-light bg-light pt-2">
                <div class="col-2 pr-2">
                    <div  class="row justify-content-center p-1">
                        <h3 style="font-family: 'cac_champagneregular'; font-size: 3em;"> <a  href="<?php echo site_url(); ?>">Cuisiner</a> </h3>
                        <h5 style="font-family: 'cac_champagneregular';font-size: 1.5em;">C'est pas sorcier.</h5>
                    </div>
                </div>
                <div class="col-7">

                    <?php include 'navigation.php'; ?>

                </div>
                <div class="col-3 pt-3">
                    <form class="form-inline">
                        <input class="form-control mr-sm-1" id="search" type="text" placeholder="Search" aria-label="Search" onkeyup="lookup(this.value)" autocomplete="off">

                           <div id="suggestions">
                      
                              <div data-toggle="dropdown"  aria-expanded="false" class="dropdown autoSuggestionsList_l" id="autoSuggestionsList"> 

                              </div>
                          </div>

                        <button class="btn align-middle btn-outline-primary my-1 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>     
        
        </header>
        
