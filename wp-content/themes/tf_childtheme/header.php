<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<title>
	
	<?php if ( is_front_page() ) { ?>
       <?php the_title(); ?>
     <?php } else { ?>
       <?php the_title(); ?>
    <?php } ?>

</title>
	<link href="<?php echo  get_stylesheet_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo  get_stylesheet_directory_uri() ;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo  get_stylesheet_directory_uri() ;?>/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="<?php echo  get_stylesheet_directory_uri() ;?>/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo  get_stylesheet_directory_uri() ;?>/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?php echo  get_stylesheet_directory_uri() ;?>/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="<?php echo  get_stylesheet_directory_uri() ;?>/css/flexslider.css" rel="stylesheet" />
	<link href="<?php echo  get_stylesheet_directory_uri() ;?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo  get_stylesheet_directory_uri() ;?>/css/style.css" rel="stylesheet">
	<link href="<?php echo  get_stylesheet_directory_uri() ;?>/color/default.css" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
	<section id="intro" class="home-slide text-light">

		<!-- Carousel -->
    	<?php  if(is_front_page()) { ?>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="<?php echo  get_stylesheet_directory_uri();?>/img/1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Welcome to Shuffle</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn btn-theme btn-sm btn-min-block" href="#about">About us</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">Our works</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="<?php echo  get_stylesheet_directory_uri();?>/img/2.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Awesome Bootstrap template</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn btn-theme btn-sm btn-min-block" href="#about">About us</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">Our works</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="<?php echo  get_stylesheet_directory_uri();?>/img/3.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Use without any charge</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#about">About us</a><a class="btn btn-theme btn-sm btn-min-block" href="#works">Our works</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
      <?php } ?>
	</section>
	<!-- /Section: intro -->
	
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">Shuffle</a>
                                                    </div>
                                          </div>
                                          

                                          <div class="col-md-10">
                         
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#intro">Home</a></li>
                                                                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About Us</a></li>
																   <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#service">Services</a></li>
                                                                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#works">Works</a></li>				                                                                  
                                                                  
                                                                  <li><a href="#contact">Contact</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  

	

	
<?php /*<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">