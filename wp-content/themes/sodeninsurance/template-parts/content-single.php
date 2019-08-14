<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 single-post">
				<?php twentysixteen_post_thumbnail(); ?>
			 
		 
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<span class="ath"><?php the_author(); ?></span>
				<span class="date"><?php echo get_the_date(); ?></span>
				<div class="social_icon">
					<span>SHARE</span>
					<ul>
						<li><a href="https://twitter.com/intent/tweet?text=<?php the_title() ?>&url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/04/twitter.png"></a></li>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2018/04/fb.png"> </a></li>
						<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2018/04/google-plus.png"> </a></li>
					</ul>
				</div>
				<?php $categories = get_the_category();
				if ( ! empty( $categories ) ) : ?>
					<span class="categories-links">
					<?php foreach ($categories as $value) :?>
					 <?php echo '<a href="' . esc_url( get_category_link( $value->term_id ) ) . '">' . esc_html( $value->name ) . '</a>'; ?>  
					<?php endforeach; ?>
					</span>
				<?php endif;?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
