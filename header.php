<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="/wp-content/themes/school/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/school/css/animate.css">
    
    <link rel="stylesheet" href="/wp-content/themes/school/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/wp-content/themes/school/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/wp-content/themes/school/css/magnific-popup.css">

    <link rel="stylesheet" href="/wp-content/themes/school/css/aos.css">

    <link rel="stylesheet" href="/wp-content/themes/school/css/ionicons.min.css">

    <link rel="stylesheet" href="/wp-content/themes/school/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/wp-content/themes/school/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/wp-content/themes/school/css/flaticon.css">
    <link rel="stylesheet" href="/wp-content/themes/school/css/icomoon.css">
    <link rel="stylesheet" href="/wp-content/themes/school/css/style.css">
  
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo get_bloginfo('url') ; ?>"><?php bloginfo('name'); ?></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      
	      	
	    
	      <div class="collapse navbar-collapse" id="ftco-nav">    
	      <?php
			    wp_nav_menu( [
					'theme_location' => 'header-menu',
				] );

    		?>
    		</div>
	    </div>
	  </nav>
    <!-- END nav -->
  <ul>

</ul>
