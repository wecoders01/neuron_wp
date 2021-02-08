<?php
$logos = cs_get_option( 'company_logos' );
$logos_array = explode( ',', $logos );

if ( !empty( $logos ) ):
?>
<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
<section class="client-logo <?php if ( is_page( 10 ) ): ?> darker-bg <?php else: ?> <?php endif;?>">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="all-client-logo">
               <?php foreach ( $logos_array as $logo ): $logo_array = wp_get_attachment_image_src( $logo, 'medium' )?>
	                  <img src="<?php echo $logo_array[0]; ?>" alt="" />
	            <?php endforeach;?>
            </div>
         </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
   </div><!-- /.container -->
</section><!-- end client section -->
<?php endif;?>