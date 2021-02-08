
<?php get_header();?>

   <!-- ::::::::::::::::::::: Page title:::::::::::::::::::::::::: -->
   <section class="page-title">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <!-- breadcrumb content -->
               <div class="page-breadcrumbd">
                  <h2>Press &amp; News</h2>
                  <p><a href="<?php echo get_site_url(); ?>">Home</a> / Blog</p>
               </div><!-- end breadcrumb content -->
            </div>
         </div>
      </div>
   </section><!-- end breadcrumb -->


   <!-- ::::::::::::::::::::: Blog Section:::::::::::::::::::::::::: -->
   <section class="blog section-padding">
      <div class="container">
         <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
               <!-- blog title -->
               <div class="template-title text-center">
                  <h2>News Blog</h2>
                  <p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
               </div>
            </div>
         </div>

         <div class="row">

            <?php if ( have_posts() ): while ( have_posts() ): the_post();?>

		            <!-- single blog item -->
		            <div class="col-sm-6 col-md-4">
		               <div class="blog-item">
		                  <!-- blog thumbnail -->
		                  <div class="blog-thumb">
		                     <?php the_post_thumbnail( 'neuron_blog_thumb' ); ?>
		                  </div>
		                  <div class="blog-content">
		                     <!-- blog title -->
		                     <header class="blog-header">
		                        <div class="tag">
		                           <?php neuron_entry_footer(); ?>
		                        </div>
		                        <div class="blog-title">
		                           <h2 class="entry-title"><a href="<?php the_permalink();?> "><?php the_title();?></a></h2>
		                        </div>
		                     </header>

		                     <!-- blog content -->
		                     <div class="entry-content">
		                        <?php echo get_excerpt(100);?>
		                        <a href="<?php the_permalink();?>">Read More</a>
		                     </div>
		                  </div>
		               </div>
		            </div>
		            <!-- single blog item -->

		      <?php endwhile;else: ?>

            <div class="col-md-12">
               <h3>Post is Not Found</h3>
            </div>

         <?php endif;?>

         </div>
      </div>
   </section><!-- end blog section -->

<?php get_footer();?>