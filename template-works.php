
<?php 
/*
Template Name: Works Template
*/
get_header(); ?>

<?php while(have_posts()) : the_post();?>
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

   <!-- ::::::::::::::::::::: start portfolio section:::::::::::::::::::::::::: -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<!-- portfolio title -->
					<div class="template-title text-center">
						<h2>Check Otut Our Latest portfolios</h2>
						<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
					</div>
				</div>
			</div>
		
			<div class="row">

            <?php
            $args = array( 'posts_per_page' => 6, 'post_type'=> 'work', 'orderby' => 'menu_order', 'order' => 'ASC' );
            $work = new WP_Query($args);
            while ($work -> have_posts()) :
               $work -> the_post();
            ?>
   
            <!-- portfolio item -->
            <div class="col-sm-6 col-md-4">
               <div class="portfolio-item">
                  <?php the_post_thumbnail('large'); ?>
                  <div class="portfolio-details">
                     <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                     <?php
                     $work_meta = get_post_meta(get_the_ID(), 'neuron_work_meta', true);
                     echo $work_meta['sub_title'];
                     ?>
                  </div><!-- /.portfolio-details -->
               </div><!-- /.portfolio-item -->
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
				
			</div>
		</div>
   </section>
   
	
	<!-- ::::::::::::::::::::: testimonial section:::::::::::::::::::::::::: -->
	<section class="testimonial text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h3>“Best customer support in Trendy Theme. Fast, took care of all my issues, and went the extra miles for me. The theme is very good and versatile.”</h3>
					<h4><a href="#">Lewis Parsons</a></h4>
					<span>CEO, Fintech</span>
				</div>
			</div>
		</div>
	</section><!-- ./end testimonial section -->


<?php endwhile; ?>

<?php get_footer(); ?>