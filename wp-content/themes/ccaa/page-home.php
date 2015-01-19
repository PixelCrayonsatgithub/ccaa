<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Ccaa
 * @since Ccaa 1.0
 */

get_header(); ?>

	<div class="homepage-effect">
		<div class="homepage-effect-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink(35);?>"><?php the_field('smaller_title', 35); ?></a></h4>
						<h3><a href="<?php echo get_permalink(35);?>"><?php the_field('after_smaller_title', 35); ?></a></h3>
						<a id="#who-we-are1" href="#who-we-are" class="scroll-down">scroll to learn more</a>
					</div>
				</div>
			</div>			
		</div>
		<div class="static-image">
			<img src="<?php the_field('homepage_static_image', 35); ?>" alt="">
		</div>
		<div id="who-we-are" class="homepage-effect-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink(35);?>"><?php echo get_the_title(35); ?></a></h4>
						<h3><a href="<?php echo get_permalink(35);?>"><?php the_field('variations_of_passages', 35); ?> <img src="<?php bloginfo('template_url');?>/images/right-arrow.png"></a></h3>
					</div>
				</div>
			</div>	
		</div>	
		<img src="<?php the_field('homepage_parallex_image', 35); ?>" alt="" class="parallex-image" style="display:none;">
		<div class="parallex-image horizontalsection parallax-section" id="facts" style="background: url(<?php the_field('homepage_parallex_image', 35); ?>) no-repeat;"></div>		
	</div>
	
	
	<div class="homepage-effect">
		<div class="homepage-effect-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink(54);?>"><?php the_field('smaller_title', 54); ?></a></h4>
						<h3><a href="<?php echo get_permalink(54);?>"><?php the_field('after_smaller_title', 54); ?></a></h3>
						<a href="javascript:void(0);" class="scroll-down watch-video">watch the video</a>
					</div>
				</div>
			</div>			
		</div>
		<div class="static-image">
			<img src="<?php the_field('homepage_static_image', 54); ?>" alt="">
		</div>
		<div class="homepage-effect-bottom pink">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink(54);?>"><?php echo get_the_title(54); ?></a></h4>
						<h3><a href="<?php echo get_permalink(54);?>"><?php the_field('variations_of_passages', 54); ?> <img src="<?php bloginfo('template_url');?>/images/right-arrow.png"></a></h3>
					</div>
				</div>
			</div>	
		</div>	
		<img src="<?php the_field('homepage_parallex_image', 54); ?>" alt="" class="parallex-image" style="display:none;">
		<div class="parallex-image horizontalsection parallax-section" id="facts" style="background: url(<?php the_field('homepage_parallex_image', 54); ?>) no-repeat;"></div>		
	</div>
	
	<div class="homepage-effect">
		<div class="homepage-effect-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink(58);?>"><?php the_field('smaller_title', 58); ?></a></h4>
						<h3><a href="<?php echo get_permalink(58);?>"><?php the_field('after_smaller_title', 58); ?></a></h3>
						<a href="javascript:void(0);" class="scroll-down watch-video">watch the video</a>
					</div>
				</div>
			</div>			
		</div>
		<div class="static-image">
			<img src="<?php the_field('homepage_static_image', 58); ?>" alt="">
		</div>
		<div class="homepage-effect-bottom yellow">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink(58);?>"><?php echo get_the_title(58); ?></a></h4>
						<h3><a href="<?php echo get_permalink(58);?>"><?php the_field('variations_of_passages', 54); ?> <img src="<?php bloginfo('template_url');?>/images/right-arrow.png" class="right-arrow-normal"><img src="<?php bloginfo('template_url');?>/images/right-arrow-hover.png" class="right-arrow-hover"></a></h3>
					</div>
				</div>
			</div>	
		</div>	
		<img src="<?php the_field('homepage_parallex_image', 58); ?>" alt="" class="parallex-image" style="display:none;">
		<div class="parallex-image horizontalsection parallax-section" id="facts" style="background: url(<?php the_field('homepage_parallex_image', 58); ?>) no-repeat;"></div>	
	</div>
	<div class="blue-bg">
		<div class="botom-wht-line">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<?php dynamic_sidebar('blue-secton');?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row-served">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('homepage-statics');?>			
			</div>
		</div>
	</div>
	
	
	<div class="pattern-bg homepattern">
    <div class="container">
	<div class="row">
   <div class="col-lg-4 col-sm-4 col-md-12 col-xs-12">
   <div class="description">
    <?php dynamic_sidebar('homepage-bottom-left');?>
  </div>
   </div>
   
   <div class="col-lg-8 col-sm-8 col-md-12 col-xs-12 text-center">
   
   
	<?php dynamic_sidebar('homepage-bottom-right');?>
   
   
   
   </div>
	
	
	</div>	

	</div>
	</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>