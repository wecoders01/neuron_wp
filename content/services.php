<?php
$services_title = cs_get_option( 'services_title' );
$services_content = cs_get_option( 'services_content' );
?>


<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
<section class="section-padding <?php if ( !is_page( 12 ) ): ?> darker-bg <?php endif;?>">
   <div class="container">
      <div class="row">
         <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="template-title text-center">
               <h2><?php echo $services_title; ?></h2>
               <p> <?php echo $services_content; ?> </p>
            </div>
         </div>
      </div>

      <div class="row">

         <?php
$args = array( 'posts_per_page' => 6, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );
$service = new WP_Query( $args );
while ( $service->have_posts() ) {
    $service->the_post();
    ?>

            <!-- single service -->
            <div class="col-sm-6 col-md-4">
               <div class="services-tiem">
                  <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'hvr-buzz-out' ) );?>
                  <h3><a href="<?php echo get_post_meta( get_the_ID(), 'link', true ) ?>"><?php the_title();?></a></h3>
                  <?php the_content();?>
               </div>
            </div>
            <!-- single service -->

         <?php
}
wp_reset_postdata();
?>

      </div>
   </div>
</section><!-- end services section -->