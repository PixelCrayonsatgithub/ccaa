<?php
/**
 * Template Name: Landing page
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
		<div class="static-image">
			<?php the_post_thumbnail('full', $postid); ?>
		</div>
		<div class="homepage-effect-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<h4><a href="<?php echo get_permalink($postid);?>"><?php the_field('landing_small_title', $postid); ?></a></h4>
						<h3><a href="<?php echo get_permalink($postid);?>"><?php the_field('after_small_title_landing', $postid); ?></a></h3>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<div class="video_content">
	  <?php query_posts('post_type=video');?> 
	  <?php while ( have_posts() ) : the_post();?>
		<div class="col-md-3 video-cont">
		   <?php the_post_thumbnail('full');?>
		   <div class="video-layer">
			  <div class="col-md-12 text-cont">
				   <h3><?php the_title();?></h3>
					<?php $custom_field_value = get_post_meta( $post->ID,'Video_url', true);?>
					<?php if($custom_field_value !=''){ ?>
						<a href="<?php the_permalink();?>"><span class="play-icon"></span></a>
					<?php } ?>
			   </div>
		   </div>
		</div>
	  <?php endwhile; wp_reset_query();?>
	</div>
	<div class="before-promo">
	<section class="container">
				  <div class="row">
						<div class="col-md-1 col-lg-1">
						</div>
					  <div class="col-md-8 col-lg-8 sec-cont">
						   <?php the_field('before_promo', $postid);?>
					  </div>
					  <div class="col-md-3 col-lg-3">
						</div>
				  </div>
				
		   </section>
		   </div>
	<div class="promo">
				<section class="container">
					<div class="row">	
						<div class="col-md-1"></div>
						<div class="promo-container">
						<?php query_posts('post_type=promo&posts_per_page=3');?> 
	  <?php while ( have_posts() ) : the_post();?>
		   <div class="promo-cont">
						   <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full');?></a>
						   <div class="promo1">
							  <div class="promo_inner">
								   <a class="promo_link" href="<?php the_permalink();?>"><?php the_title();?></a>
								   <?php the_excerpt();?>
							   </div>
							  </div>
							 </div>
	  <?php endwhile; wp_reset_query();?>
						
						</div>
					</div>
					
				</section>
			 </div>
			 <div class="promo-outer">
			 <section class="container">
					<div class="row">	
						<div class="col-md-5 col-lg-5 tall_image">
							<?php $id = 304;?>
							<?php echo get_the_post_thumbnail( $id, 'full' ); ?>
						</div>
						<div class="col-md-7 col-lg-7 right_content1">
							<div class="right_inner">
								 <a class="big-text" href="<?php echo get_the_permalink($id);?>"><?php echo get_the_title($id);?> </a>
								 <p>
								<?php $page = get_post( $id );
								echo $page->post_excerpt; 
								?></p>
								<a class="learn-more" href="<?php echo get_the_permalink($id);?>">learn more</a>
								<div class="clear"></div>
								<?php query_posts( 'post_type=page&showposts=2&post_parent=304' ); ?>
								<?php while (have_posts()) : the_post();?>
								<div class="inner_left">
									<div class="promo_inner2">
									   <a class="promo_link" href="<?php the_permalink();?>"><?php the_title();?></a>
									   <?php the_excerpt();?>
									</div>
								
								</div>
								<?php endwhile; wp_reset_query(); ?> 
								
							</div>
						</div>
					</div>
					
				</section>
	</div>
	
	<div class="content6">
					<section class="container">
						<div class="row ">
							<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 first-cont">
							   <?php the_field('green_text',$postid );?>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
							</div>
						</div>
					</section>
				</div>
				<div class="landing-bottom">
				<section class="container">
				<div class="row">	
					<?php $id2 = 316;?>
							
					<div class="col-md-7 col-lg-7 right_content">
						<div class="right_inner">
							  <a class="big-text" href="<?php echo get_the_permalink($id2);?>"><?php echo get_the_title($id2);?> </a>
							<p>
								<?php $page1 = get_post( $id2 );
								echo $page1->post_excerpt; 
								?></p>
							<div class="content7_inner">
								<h3>Titlign Here Lorem Ipsmd:</h3>
								<ul class="list-unstyled">
								<?php query_posts( 'post_type=page&posts_per_page=6&post_parent=316' ); ?>
								<?php while (have_posts()) : the_post();?>
									<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
								<?php endwhile; wp_reset_query(); ?>									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-5 tall_image">
						<?php echo get_the_post_thumbnail( $id2, 'full' ); ?>
					</div>
				</div>
				
			</section>
			</div>
<?php get_footer(); ?>