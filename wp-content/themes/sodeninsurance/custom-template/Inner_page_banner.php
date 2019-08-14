<?php
/*
  Display Template Name: Inner Page Banner
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header-banner" style="background-image:url(<?php $banner_image = get_field( 'page_banner' ); ?> 
					<?php echo $banner_image['url']; ?>);">
                    <div class="shadow"></div>
						<?php $banner_image = get_field( 'page_banner' ); ?> 
						<img src="<?php echo $banner_image['url']; ?>">
                        <div class="v-center">
					<div class="container">	
                    <div class="row">
							<div class="col-md-8">
                    <h1><?php the_field('page_banner_title') ?></h1>
						 <?php the_field('page_banner_content') ?> 
                         </div>
                         </div>
                         </div>
                         </div>
					</header>

					<div class="container">
						<?php if($post->post_parent) :?>
							<span class="back-btn" onclick="goBack()"> 
							<i class="far fa-arrow-alt-circle-left"></i> Back To <?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?>
							</span>
						<?php endif; ?>
			
						<div class="row">

	<?php if(is_page(array('about-us', 'our-team', 'technology', 'personal-insurance-review', 'how-we-are-unique', 'our-companies', 'the-benefits-independent-agent', 'become-better-driver', 'child-passengers', 'teenage-driver-safety-agreement', 'drive-into-another-country', 'coverage', 'is-my-passenger-covered', 'are-my-friends-covered-if-i-let-them-ride', 'who-is-allowed-to-operate-my-boat', 'what-is-the-difference-between-boat-and-yacht-insurance', 'trampoline-safety', 'child-safety', 'home-evacuation', 'slips', 'college', 'boat-education', 'boating-safety-course', 'boating-safety-resources'))) { ?>
                          <div class="col-sm-12"><?php the_content(); ?></div>
                          <?php } else { ?>
							<div class="col-lg-8"><?php the_content(); ?></div>
                           

                           <div class="col-lg-4 insurance-right">
							<?php if (get_field('something_more_title')):?>
								<div class="something_more_title">
									<h4 class="block-tittle"><?php the_field('something_more_title'); ?></h4>
									<p><?php the_field('something_more_content'); ?></p>
									<div class="something_more_button">
										<a href="<?php the_field('something_more_link_page_url'); ?>" class="btn btn-info something_more_link_page_url" role="button">
											<?php the_field('something_more_link_page_title'); ?>
											<i class="right-arrow"></i>
										</a>
										<a href="<?php the_field('something_more_link_page_url1'); ?>" class="btn btn-info something_more_link_page_url1" role="button">
											<?php the_field('something_more_link_page_title1'); ?>
										<i class="right-arrow"></i>
										</a>
									</div>
								</div>
							<?php endif; ?>
							</div>
							<?php } ?>
						
						</div>
						<?php if (is_page('about-us')): ?>
                        <h2>HISTORY</h2> 

								<h6><?php the_field('history_title'); ?></h6>
								<p><?php the_field('history_content'); ?></p>
							<div class="row about-block arrows">
								<div class="col-md-8 col-lg-6 img-part">
									<?php $box1_image = get_field( 'box_1_image' ); ?> 	
									<img src="<?php echo $box1_image['url']; ?>">
								</div>
								<div class="col-md-4 col-lg-6 text-part">
                                <div class="text">
									<?php the_field('box_1_content'); ?>
                                    </div>
								</div>
							</div>	
							<div class="row about-block block2">
									<div class="col-md-4 col-lg-6 text-part">
                                    <div class="text">
									<?php the_field('box_2_content'); ?>
                                    </div>
								</div>	
								<div class="col-md-8 col-lg-6 img-part">
									<?php $box2_image = get_field( 'box_2_image' ); ?> 
									<img src="<?php echo $box2_image['url']; ?>">
								</div>
							</div>
							<div class="row text-center">
                            <div class="col-sm-12">
							<div class="vedio-part">	<?php the_field('history_video'); ?> </div>
                                </div>
							</div>						
						<?php endif ?>

						<?php if( have_rows('our_team') ): ?>
							<div class="row meet-team">
								<?php  while( have_rows('our_team') ): the_row();?>
									<div class="col-lg-3 col-md-6 col-sm-12">
										<?php $team_image = get_sub_field( 'team_member_image' ); ?> 
										<img src="<?php echo $team_image['url']; ?>">
										<h5><?php the_sub_field('team_member_name'); ?></h5>
										<h4><?php the_sub_field('team_member_position'); ?></h4>									
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>

						<?php if( have_rows('company_details') ): ?>
							<div class="row">
								<?php  while( have_rows('company_details') ): the_row();?>
									<div class="col-lg-3 col-md-6 comp-logo">
										<?php $logo_image = get_sub_field( 'company_logo' ); ?> 
										<div class="compny-logo">
											<img src="<?php echo $logo_image['url']; ?>">
										</div>
										<div class="comp-details">
											<ul>
												<li><h4><?php the_sub_field('company_name'); ?></h4></li>
												<li><span><?php the_sub_field('company_number'); ?></span></li>
												<li><span><?php the_sub_field('company_email'); ?></span></li>
												<li><a href="<?php the_sub_field('company_web-site'); ?>"><?php the_sub_field('company_web-site'); ?></a></li>
											</ul>
										</div>									
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>

						<?php if( get_field('bottom_content') ): ?>
							<div class="row">
								<div class="col-sm-12">
									<h2><?php the_field('bottom_content'); ?></h2>
									<h6><?php the_field('bottom_content_sub_title'); ?></h6>
									<p><?php the_field('bottom_content_content'); ?></p>
								</div>
							</div>
						<?php endif; ?>

						<?php if( get_field('bottom_box') ): ?>
						<div class="row bottom-box">
							<div class="col-sm-12">
								<h6><?php the_field('bottom_box'); ?></h6>
	 <?php the_field('bottom_box_content'); ?> 
								<div class="bottom_box_button">
									<a href="<?php the_field('bottom_box_button_left_text_link'); ?>" class="btn btn-info bottom_box_button_left_text_link" role="button">
										<?php the_field('bottom_box_button_left_text'); ?>
										<i class="right-arrow"></i>
									</a>
									<a href="<?php the_field('bottom_box_button_right_text_link'); ?>" class="btn btn-info bottom_box_button_right_text_link" role="button">
										<?php the_field('bottom_box_button_right_text'); ?>
										<i class="right-arrow"></i>
									</a>
								</div>
							</div>
						</div>
						<?php endif; ?>
						  
					</div><!-- .entry-content -->


				</article><!-- #post-## -->
                
                <div class="latest-blog">
             	<div class="container">
			<?php if( get_field('latest_articles') == true ): ?>
				<h4 class="block-tittle"> <?php the_field('latest_articles_title'); ?></h4>
				<div class="row">
					<?php $the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3 )); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : ?>
						<div class="col-lg-4 col-sm-12">

						<?php  $the_query->the_post(); ?>
						<a class="link-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(350));?> </a>

                        <div class="content">
                         
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
						<?php
						echo '<p>' . wp_trim_words( get_the_content(), 20, '...' ) . '</p>'; ?>
						  <a class="btn btn-dotted" href="<?php the_permalink(); ?>">LEARN MORE   </a>
                          <div class="clr"></div>
                        </div>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
          </div>
          </div>
          
			<?php
			// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				//comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->


<?php get_footer(); ?>