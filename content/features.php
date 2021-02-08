<?php
$features_title = cs_get_option( 'features_title' );
$features_content = cs_get_option( 'features_content' );
?>


<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
<section class="section-padding darker-bg">
   <div class="container">
      <div class="row">
         <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
            <div class="intro-title text-center">
               <h2><?php echo $features_title; ?></h2>
               <div class="hidden-xs">
                  <?php echo wpautop( $features_content ); ?>
               </div>
            </div>
         </div>
      </div>
      <div class="row">

         <?php
$args = array( 'posts_per_page' => 3, 'post_type' => 'feature', 'orderby' => 'menu_order', 'order' => 'ASC' );
$feature = new WP_Query( $args );
while ( $feature->have_posts() ): $feature->the_post();?>

	            <!-- single intro -->
	            <div class="col-md-4">
	               <div class="single-intro">
	                  <div style="background-image: url(<?php the_post_thumbnail_url( 'large' );?>);" class="intro-img"></div>
	                  <div class="intro-details text-center">
	                     <h3><?php the_title();?></h3>
	                     <?php the_content();?>
	                  </div>
	               </div>
	            </div>
	            <!-- single intro -->

	         <?php endwhile;
wp_reset_postdata();?>

      </div>
   </div>
</section><!-- intro area end -->