<?php
/*
  Display Template Name: Insurance Inner Pages
*/

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if (get_field( 'page_banner_title' )): ?>
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
					<?php endif; ?>

					<div class="container">
						<?php if($post->post_parent) :?>
							<span class="back-btn" onclick="goBack()"> 
							<i class="far fa-arrow-alt-circle-left"></i> Back To <?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?>
							</span>
						<?php endif; ?>
						<div class="row">
							<div class="col-lg-8 ins-ser-list"> 

						<div class="row">
							<?php if (get_field('child_pages')):?>
								<?php while( have_rows('child_pages') ): the_row(); ?>
									<div class="col-md-6">
									<h4 class="block-tittle"> <?php the_sub_field('block_title') ?></h4>
											<ul>
												<?php while( have_rows('page_block') ): the_row(); ?>
												<li><a href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('page_title'); ?></a></li>
												<?php endwhile; ?>
											</ul>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
								
								
							</div>
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
						</div>
						
						<?php $cc = get_the_content(); ?>
						<?php if($cc != ''): ?>
							<div class="row">
								<div class="col-sm-12"><?php the_content(); ?></div>
							</div>
						<?php endif; ?>

						  <div class="latest-blog">
             
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
					</div><!-- .entry-content -->

				</article><!-- #post-## -->
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


<?php
get_footer();
?>