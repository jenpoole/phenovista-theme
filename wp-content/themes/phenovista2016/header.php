<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo( 'name' );?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
    
    <link rel="icon" href="favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> > 
    
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">  
          
        <div class="row">
          <div class="social-links pull-right" style="margin-top: 5px;">
            <a href="https://www.facebook.com/PhenoVista-Biosciences-1565884820345796/?ref=hl" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/phenovista/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/phenovista" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/phenovista-biosciences" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          
          <div class="col-md-3 pull-right" style="margin-top: 10px;"><gcse:searchbox-only></gcse:searchbox-only></div>
        </div>  
        
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/10/phenovista_logo.png" alt="Phenovista logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <?php
                $args = array(
                    'menu'          => 'header-menu',
                    'menu_class'    => 'nav navbar-nav navbar-right',
                    'container'     => 'false'
                );
                wp_nav_menu( $args );
            ?>
            
          <!--<ul class="nav navbar-nav navbar-right">-->
          <!--  <li><a href="index.html">Home</a></li>-->
          <!--  <li class="dropdown">-->
          <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>-->
          <!--    <ul class="dropdown-menu dropdown-menu-left">-->
          <!--      <li><a href="services.html">Our Services</a></li>-->
          <!--      <li><a href="human-ipsc-neurons.html">Human iPSC Neuronal Assays</a></li>-->
          <!--      <li><a href="mitohealth.html">Mitochondrial Health</a></li>-->
          <!--      <li><a href="primary-cells.html">Primary Cell Assays</a></li>-->
          <!--      <li><a href="immuno-oncology.html">Immuno-Oncology</a></li>-->
          <!--      <li><a href="uptake-and-subcellular-localization.html">Uptake & Subcellular Localization</a></li>-->
          <!--      <li><a href="custom-assay.html">Custom Assay Development</a></li>-->
          <!--    </ul>-->
          <!--  </li>-->
          <!--  <li class="dropdown">-->
          <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Learn <span class="caret"></span></a>-->
          <!--    <ul class="dropdown-menu dropdown-menu-left">-->
          <!--      <li><a href="learn.html">Compare HCS</a></li>-->
          <!--      <li><a href="learn.html#capabilities">Capabilities vs Other Approaches</a></li>-->
          <!--      <li><a href="phenotypic-drug-discovery.html">Why Use Imaging-based Assays?</a></li>-->
          <!--      <li><a href="acquireimages.html">Five Steps to Phenotypic Data</a></li>-->
          <!--      <li><a href="phenotypic-assay-challenges.html">Challenges & Phenotypic Assays</a></li>-->
          <!--      <li><a href="subpopulation-analysis-cell-vs-well.html">Single Cells & Subpopulations</a></li>-->
          <!--      <li><a href="puncta-formation.html">Aggregation & Puncta Formation</a></li>-->
          <!--      <li><a href="colocalization.html">Colocalization</a></li>-->
          <!--    </ul>-->
          <!--  </li>-->
          <!--  <li><a href="phenovista-technology.html">Technology</a></li>-->
          <!--  <li><a href="about.html">About Us</a></li>-->
          <!--  <li><a href="contact.html">Contact</a></li>-->
          <!--</ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>