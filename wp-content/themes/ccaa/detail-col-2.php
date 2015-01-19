<?php
/**
 * Template Name: Detail Col 2
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
						<h4><a href="<?php echo get_permalink($postid);?>"><?php the_field('detail_col_2_small_title', $postid); ?></a></h4>
						<h3><a href="<?php echo get_permalink($postid);?>"><?php the_field('detail_col_2_after_small_title', $postid); ?></a></h3>
					</div>
				</div>
			</div>			
		</div>
		<div class="static-image">
			<img src="<?php the_field('detail_col_2_static_image', $postid); ?>" alt="">
		</div>
		<div class="detail-content-2">	
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-7 paddng-left0">
						<?php
							$my_id = $postid;
							$post_id_5369 = get_post($my_id);
							$content = $post_id_5369->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo $content;
						?>
						
						<div class="share-buttons">
							<div class="container">
								<div class="row">
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 paddng-left0">
										<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
									</div>
								</div>
							</div>			
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-md-12 col-xs-12">
						<div class="row">
							<div class="sidebar">
								<div class="sidebar-box">
									<div class="vedio-box">
										<div class="img-bx"><img src="<?php bloginfo('template_url');?>/images/woman-img.jpg" alt="" />
											<a href="#">&nbsp;</a>
										</div>
										<h3>Titling Here Lorem and it Ispm Dolore aoueth</h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some  oeuthou loeuthou</p>				  </div>
								</div> 

								<div class="sidebar-box">
									<div class="list-text">
										<h3>Titling Here Lorem and it Ispm Dolore aoueth</h3>
										<ul>
											<?php query_posts( 'posts_per_page=3' );?>
											<?Php while ( have_posts() ) : the_post();?>
											<li>
												<span><?php the_time('F j, Y');?></span>
												<a href="<?php the_permalink();?>"><?php the_title();?> <i class="vector">&nbsp;</i></a>
											</li>											
											<?php endwhile; wp_reset_query();?>
										</ul>
									</div>
								</div>
								<div class="sidebar-box">
									<h3>Titling Here Lorem and it Ispm Dolore aoueth</h3>
									<ul class="img-text">
										<li>
											<div class="img-b-box"><img src="<?php bloginfo('template_url');?>/images/img.jpg" alt="" /></div>
											<div class="date-text">
												<span>march 1, 2014</span>
												<a href="#">There are many variations of passages </a>
												<a href="#" class="link-arrow">&nbsp;</a>
											</div>
										</li>
										<li class="no-paddding">
											<div class="img-b-box"><img src="<?php bloginfo('template_url');?>/images/img.jpg" alt="" /></div>
											<div class="date-text">
												<span>march 1, 2014</span>
												<a href="#">There are many variations of passages </a>
												<a href="#" class="link-arrow">&nbsp;</a>
											</div>
										</li>
									</ul>
								</div>	
								<div class="sidebar-box no-border-margin">
									<?php echo do_shortcode('[contact-form-7 id="331" title="sidebar form"]');?>
								</div>		 
							</div>

						</div>
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