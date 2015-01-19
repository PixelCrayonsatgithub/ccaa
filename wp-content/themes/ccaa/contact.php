<?php
/**
 * Template Name: Contact Page
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

	
	<div class="contact-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
			</div>
				<div class="col-lg-10 col-sm-10 col-md-10 col-xs-12">
				<?php while ( have_posts() ) : the_post();?>
					<h4><a href="<?php echo esc_url( home_url('/')); ?>"><?php the_field('homepage_link_text');?></a></h4>
					<h3><a href="#"><?php the_field('sub_page_link_text');?></a></h3>
				<?php endwhile; wp_reset_query();?>
				</div> 
			</div>
		</div>
	</div>
		<div class="featured-image">
			<?php while ( have_posts() ) : the_post();?>
				<?php the_post_thumbnail('full')?>
			<?php endwhile; wp_reset_query();?>
		</div>

		<div class="contact-pattern">
			<div class="container">
			<div class="row">
			<div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
			</div>
				<div class="col-lg-10 col-sm-10 col-md-10 col-xs-12">
					
						<?php the_field('conact_details');?>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="contact-form">
			<div class="container">
				<div class="row">
					<?php while ( have_posts() ) : the_post();?>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<?php the_content();?>
						</div>
					<?php endwhile; wp_reset_query();?>
				</div>
			</div>
		</div>
	<div class="google-map">
		<?php while ( have_posts() ) : the_post();?>
			<div class="row-map">	
				<div class="container">
					<div class="">
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
						</div>
						<div class="green-left-box">
							<div class="green-left-box-test">&nbsp;</div>
							<div class="green-box-text">
								<?php the_field('map_address');?>							
							</div>
						</div>
					</div>
				</div>
			</div>
			<iframe src="<?php the_field('google_map_url');?>" width="600" height="342" frameborder="0" style="border:0"></iframe>
		<?php endwhile; wp_reset_query();?>
	</div>
<?php get_footer(); ?>