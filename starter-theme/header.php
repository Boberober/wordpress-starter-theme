<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php ini_set('display_errors','off'); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png?v=1.1" type="image/png" />
        <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" /> -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/icon" />


        <!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/rws-apple-touch-icon-72.png"/> -->

        <!-- **normal** (iPhone/iPod **retina** display) -->
        <!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/rws-apple-touch-icon-72.png" sizes="72x72"/> -->

        <!-- and **iPad** version -->
        <link rel="apple-touch-icon" href="rws-apple-touch-icon-114.png" sizes="114x114"/>
            
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <!--[if lte IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
<body>
   
<div class="wrapper">

<header class="main-header">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
                </div>
                <div class="right hidden-mobile">
                    <div class="menu">
                        
                        <div class="visible-xs visible-sm">
                            <?php 

                            wp_nav_menu( array(
                                'menu'  => 'Header Menu',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'nav',
                                'walker' => new wp_bootstrap_navwalker()
                            ) );
                            ?>
                        </div>
                        <div class="hidden-xs hidden-sm">
                            <?php
                            wp_nav_menu( array(
                                'menu'  => 'Header Menu'                           
                            ) ) ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

           </div>
       </div>
   </div>
</header>