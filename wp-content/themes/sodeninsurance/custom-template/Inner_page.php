<?php
/*
  Display Template Name: Inner Page
*/

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
					<div class="container"> <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> </div>
					</header><!-- .entry-header -->

					<div class="container contact-page">

						<?php if($post->post_parent) :?>
							<span class="back-btn" onclick="goBack()"> 
							<i class="far fa-arrow-alt-circle-left"></i> Back To <?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?>
							</span>
						<?php endif; ?>

						<?php if (is_page( 'contact-us' )) : ?>
						<div class="row">
							<div class="col-lg-6">
								<?php the_field('form'); ?>
							</div>
							<div class="col-lg-6 maps">
								<?php $location = get_field('map');
								if( !empty($location) ): ?>
								<div class="acf-map">
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>
								<?php endif; ?>
								<iframe src="http://maps.google.com/maps?q=<?php echo $location['lat']; ?>, <?php echo $location['lng']; ?>&z=16&output=embed" width="100%" height="400" frameborder="0" style="border:0"></iframe>
							<div class="address">	 <?php the_field('address'); ?>  </div>
							</div>
						</div>
						<?php else: ?>
							<a href="https://www.independentagent.com/default.aspx"><?php twentysixteen_post_thumbnail(); ?></a>
							<div class="row">
								<div class="col-sm-12">		<?php the_content(); ?> </div>
							</div>
						<?php endif ?>
					
							<?php if (get_field('child_pages')):?>
								<div class="row">
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