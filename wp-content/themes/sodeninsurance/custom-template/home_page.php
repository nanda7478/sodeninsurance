<?php
/*
  Display Template Name: Home Page
*/

get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

           
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              
  
  
              <!-- <ol class="carousel-indicators">
              <?php 
                // $i=0;            
                // while( have_rows('slider') ): the_row();            
                //   if ($i == 0){?>
                //     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                //   <?php //}else{ ?>
                //     <li data-target="#myCarousel" data-slide-to="<?php //echo $i; ?>"></li>
                //   <?php //}  $i++;            
                // endwhile; 
                ?>
              </ol> -->

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php $z = 0;            
                    while( have_rows('slider') ): the_row();            
                      $image = get_sub_field( 'slider_image' ); ?>

                <div class="carousel-item <?php if ($z == 0) { echo 'active';} ?>">
                <div class="shadow"></div>
                  <img src="<?php echo $image['url']; ?>" style="width:100%;">
                  <div class="carousel-caption">
                   <div class="col-md-6">
                    <h3><?php the_sub_field('slider_title');?></h3>
                    <p><?php the_sub_field('slider_content');?></p>
                    </div>
                  </div>
                </div>
                <?php $z++;            
                endwhile; 
                ?>
				 <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
              </div>

            </div>
          
          <div class="container">
          <div class="block-4">
          <h3><?php the_field('insurance_title'); ?></h3>
            <div class="row">
              <?php  while( have_rows('insurance') ): the_row();            
                      $insurance_image = get_sub_field( 'insurance_image' ); ?> 
                      <a href= '<?php the_sub_field('insurance_link') ?>'>
                      <div class="col-md-6 col-lg-3">
                      <div class="iteams">
                      <div class="shadow maroon"> </div>
                          <img src="<?php echo $insurance_image['url']; ?>">
                          <h4 class="v-center"><?php the_sub_field('insurance_title') ?></h4>
                          <a class="dotted" href="<?php the_sub_field('insurance_link') ?>">link</a>
                          </div>
                      </div>
                      </a>
              <?php endwhile; ?>
            </div>
            </div>
            
              <div class="block-4">
            <h3><?php the_field('resources_title'); ?></h3>
            <div class="row">
              <?php  while( have_rows('resources') ): the_row();  ?> 
              	<a href="<?php the_sub_field('resources_link') ?>">
                   <div class="col-md-6 col-lg-3">
                          <div class="iteams">
                          
                        <img src="<?php echo site_url(); ?>/wp-content/themes/sodeninsurance/images/placeholder.jpg" />
                          
                           <h4 class="v-center"><?php the_sub_field('resources_title') ?></h4>
                         <a class="dotted reds" href="<?php the_sub_field('resources_link') ?>">link</a>
                          </div>
                      </div>
                      </a>
              <?php endwhile; ?>
            </div>
            </div>
            
            <div class="col-with-bg"> 
             <div class="row">
              <?php  while( have_rows('home_content_box') ): the_row();  ?> 
                      <div class="col-lg-6">
                      <div class="Welcome-block"> 
                      <div class="content">
                          <h4 class="block-tittle"><?php the_sub_field('box_title') ?></h4>
                          <?php the_sub_field('box_content') ?>
                          </div>
                          <a class="btn btn-dotted" href="<?php the_sub_field('box_link') ?>"><?php the_sub_field('box_link_title') ?></a>
                     <div class="clr"></div>
                      </div>
                      </div>
              <?php endwhile; ?>
            </div>
            </div>
            
            <div class="partner-block">
               <h4 class="block-tittle"> <?php the_field('our_certificationstitle'); ?></h4>
             <ul class="logo-list">
              <?php  while( have_rows('our_certifications') ): the_row(); 
                       $our_certifications = get_sub_field( 'our_certifications_image' ); ?>  
                      <li class="logos"> 
                          <a href="<?php the_sub_field('our_certifications_image_link') ?>"><img src="<?php echo $our_certifications['url']; ?>"></a>
                      </li>
              <?php endwhile; ?>
            </ul>
            </div>
            
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
          </div>
          
      </article>
  </main><!-- .site-main -->

</div><!-- .content-area -->

<?php
get_footer();
?>