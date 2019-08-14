<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php twentysixteen_post_thumbnail(); ?>
				<div class="container">
					<?php if($post->post_parent) :?>
						<span class="back-btn custom-closing" onclick="goBack()"> 
						<?php $parent_title = get_the_title($post->post_parent);
							echo "Back To ".$parent_title; ?>
						<?php else : 
							echo "Back To ".get_the_title($post->ID); ?>
						</span>
					<?php endif; ?>
					<div class="row">
						<?php the_content(); ?>
					</div>
				</div>

			</article><!-- #post-## -->

		<?php endwhile; ?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
