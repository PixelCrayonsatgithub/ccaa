<?php
/**
 * Template Name: Detail Col 1
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
						<h4><a href="<?php echo get_permalink($postid);?>"><?php the_field('small_title_detail_page', $postid); ?></a></h4>
						<h3><a href="<?php echo get_permalink($postid);?>"><?php the_field('after_small_title_detail_page', $postid); ?></a></h3>
					</div>
				</div>
			</div>			
		</div>
		<div class="static-image">
			<img src="<?php the_field('static_image_detail_page', $postid); ?>" alt="">
		</div>
		<div class="detail-page-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<?php
							$my_id = $postid;
							$post_id_5369 = get_post($my_id);
							$content = $post_id_5369->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo $content;
						?>
					</div>
				</div>
			</div>				
		</div>
		<img src="<?php the_field('parallex_image_for_detail', $postid); ?>" alt="" class="parallex-image" style="display:none;">
		<div class="parallex-image horizontalsection parallax-section" id="facts" style="background: url(<?php the_field('parallex_image_for_detail', $postid); ?>) no-repeat;"></div>
		
		<div class="content-after-parallex">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<?php the_field('content_after_parallex', $postid); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="share-buttons">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
						<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
					</div>
				</div>
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