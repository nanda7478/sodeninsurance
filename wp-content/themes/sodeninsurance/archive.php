<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<?php
					$object = get_queried_object();
					$post_id = $object->taxonomy.'_'.$object->term_id;
				 ?>
	
				<header class="entry-header-banner" style="background-image:url(<?php $banner_image = get_field( 'category_banner' ,  $post_id  ); ?> 
					<?php echo $banner_image['url']; ?>);">
                    <div class="shadow"></div>
						<?php $banner_image = get_field( 'category_banner',  $post_id ); ?> 
						<img src="<?php echo $banner_image['url']; ?>">
                        <div class="v-center">
					<div class="container">	
                    <div class="row">
							<div class="col-md-8">
                    <h1><?php the_field('category_banner_title',  $post_id) ?></h1>
						 <?php the_field('category_banner_content',  $post_id) ?> 
                         </div>
                         </div>
                         </div>
                         </div>
					</header>
			
			<div class="container">
				<div class="row blog-list">  
                
                <div class="col-lg-3 sidebar-m"> 
						<?php get_sidebar(); ?>
					</div>
                     
					<div class="col-lg-9">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="row blog-block">
								<div class="col-md-5">
									<?php twentysixteen_post_thumbnail(); ?>
								</div>
								<div class="col-md-7">
									<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
									<span class="ath"><?php  the_author();?></span>
									<span class="date"> <?php echo get_the_date('M j, Y'); ?></span>
									<?php 
									$categories_list = get_the_category_list(__('  ', 'twentysixteen'));
									if ($categories_list) {
									echo '<span class="categories-links">' . $categories_list . '</span>';
									}?>
									<div class="entry-content">
										<?php $content = get_the_content();
										$trimmed_content = wp_trim_words( $content, 50, '...<a href="'. get_permalink() .'"><br>read more </a>' ); ?>
										<p><?php echo $trimmed_content; ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					 
				</div>
				<div class="nav-links">
				<?php
					echo paginate_links( array(
						'type'      => 'post',
						'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
						'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
					) );
				?>
				</div>
			</div>
	
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
