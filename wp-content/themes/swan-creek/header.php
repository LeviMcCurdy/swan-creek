<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
      <?php
        if( ! is_home() ):
          wp_title( '|', true, 'right' );
        endif;
      ?>
    </title>
    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />


    
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/js/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
    
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
    
    <header role="banner">
    
        <div class="wrap topper group">

            <div class="grid-3">
            <img src="http://localhost:8888/swan-creek/wp-content/uploads/2015/03/swanlogo.png" class="logo-img">
            </div>

            <div class="grid-3">

            <div class="container-social">
            <div class="social-icons">
           <a href="https://plus.google.com/+SwanCreekLandscapingPerryville/posts" target="_blank"><i class="fa fa-google-plus"></i> </a>
           <a href="https://www.flickr.com/photos/120006425@N06/" target="_blank"><i class="fa fa-flickr"></i></a> 
           <a href="http://www.houzz.com/pro/swancreeklandscaping/swan-creek-landscaping" target="_blank"><img src="http://localhost:8888/swan-creek/wp-content/uploads/2015/03/houzz.png" class="houzz"> </a>
           <a href="https://www.youtube.com/channel/UCtrD1bz5WFEGrLmSyI-LS9Q/videos" target="_blank"><i class="fa fa-youtube-play"></i> </a>
           <a href="https://twitter.com/swancreekland" target="_blank"><i class="fa fa-twitter"></i> </a>
           <a href="https://www.pinterest.com/swancreekland/" target="_blank"><i class="fa fa-pinterest-p"></i> </a>
           <a href="https://instagram.com/swancreeklandscaping/" target="_blank"><i class="fa fa-instagram"></i> </a>
           <a href="https://www.facebook.com/SCLandscaping" target="_blank"><i class="fa fa-facebook-official"></i> </a>
            </div>
            </div>
            <div class="group"></div>
                <nav class="topnav">
        
                <!-- menu with list elements -->
                <?php /* wp_nav_menu( array( 'theme_location' => 'mainmenu' ) ); */ ?>
                
                <!-- menu without list elements -->
                <?php $defaults = array( 
                'theme_location' => 'topmenu',
                'container'       => 'nav', 
                'container_class' => 'nav', 
                'echo'            => false,
                'fallback_cb'     => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0
                ); 
                echo strip_tags(wp_nav_menu( $defaults ), '<a>');?>

                <a href="#" class="phone-number">410.378.8668</a>
                <p class="mobile-menu-button"><a href="#">MENU</a></p>
            
            </nav>
            

            </div>

        </div>


       
    
    </header>
     <div class="nav-div-main">
        <div class="wrap">
        
<?php wp_nav_menu( array( 'theme_location' => 'mainmenu' ) ); ?>


            </div>
        </div>


