<!doctype html>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!-- wordpress head functions -->
        <?php wp_head(); ?>
        <!-- end of wordpress head -->
        <!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
            <!-- media-queries.js (fallback) -->
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!-- html5.js -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
            <!-- respond.js -->
        <!--[if lt IE 9]>
                  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Gilda+Display" type="text/css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Sintony:400,700" type="text/css">
    </head>
    <body <?php body_class(); ?>>
        <header role="banner">
        </header> <!-- end header -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="<?php bloginfo('template_directory'); ?>/images/oaks-hero-unit.jpg" class="oaks-hero-unit">
                    </div>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header navbar-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden-on-non-mobile" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><?php wp_register(); ?></li>
                                <li><?php wp_loginout(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end .navbar -->
