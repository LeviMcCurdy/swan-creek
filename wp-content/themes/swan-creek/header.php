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
    
        <div class="wrap topper">

            <div class="grid-4">
            
            </div>

            <div class="grid-2">
            
            <div class="social-icons"><i class="fa fa-google-plus"></i> <i class="fa fa-flickr"></i> <img src="http://localhost:8888/swan-creek/wp-content/uploads/2015/03/houzz.png" class="houzz"> <i class="fa fa-youtube-play"></i> <i class="fa fa-twitter"></i> <i class="fa fa-pinterest-p"></i> <i class="fa fa-instagram"></i> <i class="fa fa-facebook-official"></i> </div>

            </div>

        </div>
    
    </header>