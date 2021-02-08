
<?php 
/*
Template Name: Services Template
*/
get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
   <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
   <section <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" <?php endif; ?> class="page-title">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <!-- breadcrumb content -->
               <div class="page-breadcrumbd">
                  <h2><?php the_title(); ?></h2>
                  <p><a href="<?php echo get_site_url(); ?>">Home</a> / <?php the_title(); ?></p>
               </div><!-- end breadcrumb content -->
            </div>
         </div>
      </div>
   </section><!-- end breadcrumb -->


   <?php get_template_part('content/services'); ?>


   <!-- ::::::::::::::::::::: Block Content :::::::::::::::::::::::::: -->
   <section class="block block2">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="block-text">
                  <?php the_content(); ?>
               </div>
            </div>
            
         </div>
      </div>
   </section><!-- block area end -->


<?php endwhile; ?>

<?php get_footer(); ?>