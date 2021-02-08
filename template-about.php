
<?php
/*
Template Name: About Template
 */

$enable_accordion_area = cs_get_option( 'enable_accordion_area' );
$accordion_title = cs_get_option( 'accordion_title' );
$accordion_content = cs_get_option( 'accordion_content' );
$enable_about_client_area = cs_get_option( 'enable_about_client_area' );
$enable_about_services_area = cs_get_option( 'enable_about_services_area' );
$enable_about_content_area = cs_get_option( 'enable_about_content_area' );
$about_content_title = cs_get_option( 'about_content_title' );
$about_content_text = cs_get_option( 'about_content_text' );
$about_content_img = cs_get_option( 'about_content_img' );
$about_content_img_array = wp_get_attachment_image_src( cs_get_option( 'about_content_img' ), 'large' );

if ( !empty( $about_content_img ) ) {
    $about_content_img = $about_content_img_array[0];
} else {
    $about_content_img = '' . get_template_directory_uri() . '/assets/img/about-us-block.jpg';
}

get_header();?>

<?php while ( have_posts() ): the_post();?>

				<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
				<section <?php if ( has_post_thumbnail() ): ?> style="background-image: url(<?php the_post_thumbnail_url( 'large' );?>);" <?php endif;?> class="page-title">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <!-- breadcrumb content -->
            <div class="page-breadcrumbd">
               <h2><?php the_title();?></h2>
               <p><a href="<?php echo get_site_url(); ?>">Home</a> / <?php the_title();?></p>
            </div><!-- end breadcrumb content -->
         </div>
      </div>
   </div>
</section><!-- end breadcrumb -->

<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
<?php if ( $enable_about_content_area == true ): ?>
   <section class="block about-us-block section-padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <!-- block text -->
               <div class="block-text">
                  <h2><?php echo $about_content_title; ?></h2>
                  <?php echo wpautop( $about_content_text ); ?>
               </div>
            </div>
            <div class="col-md-6">
               <!-- block image -->
               <div class="block-img">
                  <img src="<?php echo $about_content_img; ?>" alt="" />
               </div>
            </div>
         </div>
      </div>
   </section><!-- block area end -->
<?php endif;?>

<?php if ( $enable_about_services_area == true ): get_template_part( 'content/features' );endif;?>



<?php if ( $enable_accordion_area == true ): ?>
   <!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
   <section class="accordian-section section-padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="accorian-item">

                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$faq_no = 0;
$faqs = cs_get_option( 'faqs' );
foreach ( $faqs as $faq ):
    $faq_no++;

    if ( $faq_no == 1 ) {
        $aria_expanded = 'true';
        $in_class = 'in';
    } else {
        $aria_expanded = 'false';
        $in_class = '';
    }
    ?>

	               <!-- accordian item-<?php echo $faq_no; ?> -->
	               <div class="panel panel-default">
	                     <div class="panel-heading" role="tab" id="heading-<?php echo $faq_no; ?>">
	                        <h4 class="panel-title">
	                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_no; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse-<?php echo $faq_no; ?>">
	                        <?php echo $faq['faq_title']; ?>
	                        </a>
	                        </h4>
	                     </div>
	                     <div id="collapse-<?php echo $faq_no; ?>" class="panel-collapse collapse <?php echo $in_class; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_no; ?>">
	                        <div class="panel-body">
	                           <?php echo wpautop( $faq['faq_content'] ); ?>
	                        </div>
	                     </div>
	                  </div>
	<?php endforeach;?>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <!-- accordian right text block -->
               <div class="accordian-right-content">
                  <h2><?php echo $accordion_title; ?></h2>
                  <?php echo wpautop( $accordion_content ); ?>
               </div>
            </div>
         </div>
      </div>
   </section><!-- end accordian section -->
   <?php endif;?>


   <?php if ( $enable_about_client_area == true ): get_template_part( 'content/client-logo' );endif;?>



<?php endwhile;?>

<?php get_footer();?>