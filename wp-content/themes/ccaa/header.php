<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Ccaa
 * @since Ccaa 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css" type="text/css">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/easy-responsive-tabs.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom-style.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/stylish-select.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/css3.css" type="text/css">	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/fonts.css" type="text/css">	
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/fonts/styles.css" type="text/css">
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="sticky-form">
			<a href="#" class="child-search">child care search<i class="child-arrow">&nbsp;</i></a>
			<div class="accordian-form">
				<div class="child-care">
					<h4>child care search <a href="#">Close</a></h4>
					<div class="accordian">
						<i class="child-arrow">&nbsp;</i>
						<?php dynamic_sidebar('float-child-care');?>
					</div>		
				</div>
			</div>
		</div>
		<header id="masthead" class="site-header" role="banner">
		
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
				<div class="header_left">
				<span class="menu">Menu</span>
<div class="menu-body">
<div class="menu-left">
<div class="child-care">
<h4>child care search</h4>

<div class="accordian">
<div class="acordiandiv">
<span class="plus-icon item">Search By Zip Code</span>

<div class="item-data">
	<form>
		<ul>
			<li><input class="txtbx" type="text" name="" value="Zip Code..." /></li>
		   <li><button>search</button></li>
		</ul>
	</form>
</div>

</div>

<div class="acordiandiv">
<span class="plus-icon item">Search By Country & State</span>
<div class="item-data">
			<form>
				<ul>
				   <li><input class="txtbx" type="text" name="" value="Enter County..." /></li>
				   <li><input class="txtbx" type="text" name="" value="Enter State.." /></li>
				   <li><button>search</button></li>
				</ul>
			</form>
		</div>
</div>

<div class="acordiandiv">

<span class="minus-icon item">Search By City & State</span>
<div class="item-data">
			<form>
				<ul>
				   <li><input class="txtbx" type="text" name="" value="Enter City..." /></li>
				   <li><input class="txtbx" type="text" name="" value="Enter State..." /></li>
				   <li><button>search</button></li>
				</ul>
			</form>
		</div>


</div>

<div class="acordiandiv none-border">
<span class="plus-icon item">Search By Physical Address</span>
<div class="item-data">
			<form>
				<ul>
				   <li><input class="txtbx" type="text" name="" value="Address..." /></li>
				   <li><input class="txtbx" type="text" name="" value="State..." /></li>
				   <li><input class="txtbx" type="text" name="" value="City..." /></li>
				   <li><input class="txtbx" type="text" name="" value="Zip Code..." /></li>
				   <li><button>search</button></li>
				</ul>
			</form>
		</div>
</div>


</div>

</div>

<div class="newsletter">
<?php dynamic_sidebar('newsletter');?>

</div>
<?php dynamic_sidebar('about-menu');?>



<div class="social-icon">
	<?php dynamic_sidebar('m-social-links');?>
</div>

</div>

<div class="menu-right">
	<div class="family-list-box">
		<div class="family-list">
			<?php dynamic_sidebar('family-menu');?>
		</div>
	</div>
	<div class="business-resource">
		<div class="family-list">
			<?php dynamic_sidebar('start-menu');?>
		</div>
		<div class="family-list">
			<?php dynamic_sidebar('business-resources');?>
		</div>
	</div>
</div>

</div>
				
				<a class="home-link" href="<?php echo esc_url( home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>
			<div class="header_right">
				<div id="navbar" class="navbar">
					<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Menu', 'ccaa' ); ?></button>
						<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'ccaa' ); ?>"><?php _e( 'Skip to content', 'ccaa' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu' => 'main-menu' ) ); ?>
						
					</nav><!-- #site-navigation -->
				</div><!-- #navbar -->
				<?php get_search_form(); ?>
			</div>
			</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
		<?php if(is_front_page() || is_page_template('landing-page.php')){?>
		
		<?php } else { ?>
		<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<?php if(function_exists('bcn_display'))
						{
							bcn_display();
						}?>
					</div>
				</div>
			</div>			
		</div>
		<?php } ?>
