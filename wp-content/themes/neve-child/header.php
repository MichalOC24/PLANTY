<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <a href="<?php echo home_url( '/' ); ?>">
      <img class=logo src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-planty.png" alt="Logo">
    </a> 

	
	<?php 
	wp_nav_menu( 
        array( 
            'theme_location' => 'main', 
            'container' => 'ul', 
            'menu_class' => 'site__header__menu', 
            
        ) 
    ); 
?> 
</header>