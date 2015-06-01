<?php get_header(); ?>
<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">About</h2>
					<div class="divider-header"></div>
					<p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
        <div class="row">
		
			<div class="col-md-6">
			    <img src="<?php echo  get_stylesheet_directory_uri();?>/img/dummy1.jpg" alt="" class="img-responsive" />
      
           </div>
			
            <div class="col-md-6">		
			<p>Graeco voluptua sed ea, malorum quaeque cotidieque per eu, quo id possit dissentias.</p>			
			<div class="progress progress-striped active">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
				40% - eCommerce
			  </div>
			</div>
			<div class="progress progress-striped active">
			  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
				20% - Ruby
			  </div>
			</div>
			<div class="progress progress-striped active">
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
				60% - User interface
			  </div>
			</div>
			<div class="progress progress-striped active">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
				80% - WordPress
			  </div>
			</div>

            </div>
		

        </div>		
		</div>

	</section>
	<!-- /Section: about -->
	
	
	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Services</h2>
					<div class="divider-header"></div>
					<p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row">
		<?php 
$post_data = query_posts( 'cat=25' );
//echo '<pre>';
$post_dataitem = array_reverse($post_data);

//array_reverse($post_data); 
foreach($post_dataitem as $post_data1)
{

?>

<div class="col-xs-6 col-sm-3 col-md-3">
			
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
					   <span class="fa <?php echo  get_post_meta( $post_data1->ID, 'service-icon-icons', true);?> fa-5x"></span> 
					</div>
					<div class="service-desc">						
						<h5><?php echo  $post_data1->post_title;?></h5>
						<p>
						<?php $content = $post_data1->post_content;
						echo substr($content, 0, 100);
						?>
						</p>
						<a href="<?php echo get_permalink($post_data1->ID); ?>" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
</div>
 
<?php }
?>

            
        </div>		
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Portfolio</h2>
					<div class="divider-header"></div>
					<p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
					</div>
					</div>
				</div>
			</div>

		</div>
	<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.4s">
                    <div id="owl-works" class="owl-carousel">
					<?php

						$post_data = query_posts( 'cat=26' );
						foreach($post_data as $post_data1) {
						
						$post_thumbnail_id  = get_post_thumbnail_id($post_data1->ID);
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
						?>
		
						<div class="item">
						<a href="<?php echo  $post_thumbnail_url;?>" title="<?php echo  $post_data1->title;?>" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo  $post_thumbnail_url;?>">
						<img src="<?php echo  $post_thumbnail_url;?>" class="img-responsive" alt="img"></a>
						
						</div>
						<?php } ?>  
						</div>
					</div>
                </div>
            </div>
		</div>

	</section>
	<!-- /Section: works -->

	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Contact us</h2>
					<div class="divider-header"></div>
					<p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">
			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
				<?php echo do_shortcode( '[contact-form-7 id="65" title="Home page contact us form"]' )?>
		
						<!--<form id="contact-form" class="wow bounceInUp" data-wow-offset="10" data-wow-delay="0.2s">
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" id="name" placeholder="Enter name" required="required" />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg" id="email" placeholder="Enter email" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="subject" placeholder="Subject" required="required" />
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
								</div>						
								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
									Send Message</button>
							</div>
						</div>
						</form>-->
				</div>
			</div>	

		</div>
		</div>
	</section>
	<!-- /Section: contact -->



	<?php /*<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'content', get_post_format() );

			// End the loop.
			//endwhile;

			// Previous/next page navigation.
			//the_posts_pagination( array(
			//	'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				//'next_text'          => __( 'Next page', 'twentyfifteen' ),
				//'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			//) );

		// If no content, include the "No posts found" template.
		//else :
			//get_template_part( 'content', 'none' );

		//endif;
		?>

	<!--</main><!-- .site-main -->
<!--	</div><!-- .content-area -->

<?php get_footer(); ?>
