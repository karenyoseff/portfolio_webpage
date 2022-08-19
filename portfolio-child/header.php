<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?> </title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
<?php wp_head();  ?>
<!-- this functiub will allow your plugin information, i.e. stylesheets, etc -->
</head>
<body <?php body_class(! is_front_page() ? "inner-page" : "" ); ?>>
    <header> 
        <!-- begin top -->
        <div id="top"> 
            <?php get_search_form(); ?>
        </div>
        <!-- end top -->
        <!-- begin innear header -->

        <div id="inner-header">
            <a href="<?php echo get_home_url() ; ?>">
        <img src="<?php echo get_template_directory_uri() ; ?>/images/krn_logo-02.png" alt="logo" id="logo">
        </a>


         <!--our main nav  -->

         <nav id="site-navigation" class="main-navigation">
            <button class="nav-button">Toggle Navigation</button>
            <?php
            $args_primary = array(
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
            );?>
            <?php wp_nav_menu($args_primary); ?>
        </nav>

        </div>
         <!-- close inner header -->
         <!-- begin hero -->
        
        <!-- end hero -->
    </header> 
