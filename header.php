<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


   <?php
$enable_top_header_area = cs_get_option( 'enable_top_header_area' );
$enable_top_social_area = cs_get_option( 'enable_top_social_area' );
$header_links = cs_get_option( 'header_links' );
$socials = cs_get_option( 'socials' );
wp_head();
?>

	</head>


	<body <?php body_class();?> >

<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
<header>
<?php if ( $enable_top_header_area == true ): ?>
   <!-- start top bar -->
   <div class="header-top-area">
      <div class="container">
         <div class="row">
            <div class="col-sm-8 hidden-xs">
               <div class="contact">
               <?php if(!empty($header_links)): foreach($header_links as $link) : ?>
                  <p>
                     <i class="<?php echo $link['icon'] ?>"></i>
                     <?php if(!empty($link['link'])): ?>
                     <a href="<?php echo $link['link'] ?>" target="<?php echo $link['link_target'] ?>">
                     <?php endif; ?>
                     <?php echo $link['link_text'] ?>
                     </a>
                  </p>
                  <?php endforeach; endif; ?>
               </div><!-- /.contact -->
            </div><!-- /.col-sm-8 -->

            <?php if($enable_top_social_area == true) : ?>
            <div class="col-sm-4">
               <div class="social-icon">
                  <ul>
                  <?php if(!empty($socials)): foreach($socials as $social) : ?>
                     <li><a href="<?php echo $social['link'] ?>" target="<?php echo $social['link_target'] ?>"><i class="<?php echo $social['icon'] ?>"></i></a></li>
                  <?php endforeach; endif; ?>
                  </ul>
               </div><!-- /.social-icon -->
            </div><!-- /.col-sm-4 -->
            <?php endif; ?>
         </div><!-- /.row -->
      </div><!-- /.container -->
   </div><!-- end top bar -->
   <?php endif;?>

   <!-- Start Navigation -->
   <nav class="navbar navbar-default navbar-sticky bootsnav">
      <!-- Start Top Search -->
      <div class="top-search">
            <div class="container">
               <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
               </div>
            </div>
      </div>
      <!-- End Top Search -->

      <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
               <ul>
                  <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                           <i class="fa fa-shopping-bag"></i>
                           <span class="badge">2</span>
                        </a>
                        <ul class="dropdown-menu cart-list">
                           <li>
                              <a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
                              <h2><a href="#">Denim SlimFit Shirt </a></h2>
                              <p>2x - <span class="price">$19.99</span></p>
                           </li>
                           <li>
                              <a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
                              <h2><a href="#">Denim Polo Shirt</a></h2>
                              <p>2x - <span class="price">$12.99</span></p>
                           </li>
                           <li class="total">
                              <span class="pull-right"><strong>Total</strong>: $320.00</span>
                              <a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
                           </li>
                        </ul>
                  </li>
               </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                  <i class="fa fa-bars"></i>
               </button>
               <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

            <?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-1',
        'menu_class'     => 'nav navbar-nav navbar-right',
    )
);
?>

            </div><!-- /.navbar-collapse -->
      </div>
   </nav>
   <!-- End Navigation -->
   <div class="clearfix"></div>
</header> <!-- end header -->