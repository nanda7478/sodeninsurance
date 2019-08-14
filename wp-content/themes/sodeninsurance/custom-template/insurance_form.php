<?php
/*
  Display Template Name: Insurance Form
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
                       <div class="get_a_quote">	
						<?php if($post->post_parent) :?>
							<span class="back-btn" onclick="goBack()"> 
							<i class="far fa-arrow-alt-circle-left"></i> Back To <?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?>
							</span>
						<?php endif; ?>

							<a href="https://www.independentagent.com/default.aspx"><?php twentysixteen_post_thumbnail(); ?></a>
							<div class="row">
								<div class="col-sm-12">	
                              
								<?php the_content(); ?> 
                                </div>
							</div>
							<?php if (is_page('get-a-quote')) :?>
								<div class="row">
									<div class="col-lg-12 quote-list">
										<?php
										global $post;
										$parent_id = wp_get_post_parent_id( $post->ID );
										$top_parent = $post->ID;
											while( $parent_id ){
												if( $parent_id > 0 ){
													$top_parent = $parent_id;
												}
												$parent_id = wp_get_post_parent_id( $parent_id );
											}
										$args = array( 
											'sort_column' => 'menu_order', 
											'sort_order' => 'asc',
											'title_li' => '',
											'child_of' => $top_parent,
											'echo' => 1
										);
										$children = wp_list_pages($args);
										?>
									</div>
								</div>
							<?php else : ?>
								<?php $args = array(
								'post_type'      => 'page',
								'posts_per_page' => -1,
								'post_parent'    => $post->ID,
								'order'          => 'ASC',
								'orderby'        => 'menu_order'
								);

								$parent = new WP_Query( $args );
								$cou = 0;
								if ( $parent->have_posts() ) : ?>
									<ul>
										<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
											<li id="parent-<?php the_ID(); ?>" class="parent-page <?php echo $cls = ($cou % 2 == 0) ? left : right ; ?> ">
										 		<a class="quote_li_title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										 	</li>
										<?php $cou++; endwhile; ?>
									</ul>
								<?php endif; wp_reset_postdata(); ?>
							<?php endif; ?>
									<ul>
									<?php  while( have_rows('external_form_link') ): the_row();?>
										<li id="external_form_link-<?php echo $cou; ?>" class="parent-page <?php echo $cls = ($cou % 2 == 0) ? left : right ; ?> ">
										<a class="quote_li_title" href="<?php the_sub_field('page_url'); ?>" title="<?php the_sub_field('page_title'); ?>"><?php the_sub_field('page_title'); ?></a>
										</li>
									<?php $cou++; endwhile; ?>
									</ul>
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
</div>
<?php get_footer(); ?>