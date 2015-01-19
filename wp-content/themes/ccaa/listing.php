<?php
/**
 * Template Name: Listing
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
<?php $postid = get_the_ID(); ?>
	<div class="homepage-effect">
		<div class="homepage-effect-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink($postid);?>"><?php the_field('listing_small_title', $postid); ?></a></h4>
						<h3><a href="<?php echo get_permalink($postid);?>"><?php the_field('listing_small_title_after_text', $postid); ?></a></h3>
					</div>
				</div>
			</div>			
		</div>
		<div class="static-image">
			<?php the_post_thumbnail('full', $postid);?>
		</div>
	</div>
	<div class="listing">
		<div class="container">
			<div class="row">
				<?php query_posts( 'order=dsec' );?>
				<?php while ( have_posts() ) : the_post();?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-list">
					<div class="listing-image">
						<?php the_post_thumbnail('full');?>
						<a href="<?php the_permalink();?>">read more</a>
					</div>
					<div class="lsiting-right">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
						<?php the_excerpt();?>
						<span class="post-date"><?php the_time('jS F Y') ?></span>
					</div>
				</div>
				<?php endwhile; wp_reset_query();?>
			</div>
		</div>
	</div>
	
	
	
	
	<div class="pattern-bg">
    <div class="container">
	<div class="row">
	 <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
	 </div>
	 <div class="col-lg-10 col-sm-10 col-md-12 col-xs-12">
	 <div class="row">
   <div class="col-lg-3 col-sm-3 col-md-12 col-xs-12 text-center paddng-right0">
   <div class="article-box">
	<div class="image">
		<img alt="" src="<?php bloginfo('template_url'); ?>/images/img3.png">
	</div>
   <h3>Titlign Here Lorem Ipsmd Douleou</h3>
   <p>loer ipuetb etoudosouet woeu ouao ueth agoue tgeout</p>
   </div>
   </div>
   
    <div class="col-lg-3 col-sm-3 col-md-12 col-xs-12 text-center paddng-right0">
	<div class="article-box">
	<div class="image"><div class="image-inner"><img alt="" src="<?php bloginfo('template_url'); ?>/images/hand.png" class="top-spc"></div></div>
    <h3>Titlign Here Lorem Ipsmd Douleou</h3>
	<p>loer ipuetb etoudosouet woeu ouao ueth agoue tgeout</p>
   </div>
   </div>
   
    <div class="col-lg-3 col-sm-3 col-md-12 col-xs-12 text-center paddng-right0">
	<div class="article-box">
	<div class="image"><div class="image-inner"><img alt="" src="<?php bloginfo('template_url'); ?>/images/show-img.png" class="top-spc"></div></div>
     <h3>Titlign Here Lorem Ipsmd Douleou</h3>
	 <p>loer ipuetb etoudosouet woeu ouao ueth agoue tgeout</p>
   </div>
   </div>
   
    <div class="col-lg-3 col-sm-3 col-md-12 col-xs-12 text-center paddng-right0">
	<div class="article-box">
	<div class="image"><div class="image-inner"><img alt="" src="<?php bloginfo('template_url'); ?>/images/monitor.png" class="top-spc"></div></div>
	 <h3>Titlign Here Lorem Ipsmd Douleou</h3>
     <p>loer ipuetb etoudosouet woeu ouao ueth agoue tgeout</p>
   </div>
	</div>
	</div>
	</div>
	</div>	
	</div>
	</div>
<?php get_footer(); ?>