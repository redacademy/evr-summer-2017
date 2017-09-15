<?php
/**
 * Template Name: Menu
 *
 * @package EVR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero-banner menu-hero-banner container-full">
        <div class="hero-content-container">
          <div class="hero-content container-max1080 container-padding">
						<?php the_title( '<h1 class="hero-content-title">', '</h1>'); ?>
            <a class="hero-button" href="#menu-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>

			<section class="menu-content-container container-full" id="menu-content">
				<div class="menu-content container-full">

					<section class="menu-coffee-container container-full container-separator-top-bottom">
						<div class="menu-coffee-content container-max800 text-center">
							<h2>From the Coffee Bar</h2>
							<div class="menu-line"></div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/chocolate-bar.svg" alt="A Coffer Bar icon">
							<p>Our single-origin drinking chocolates and espresso drinks are made in house with our freshly roasted beans. All espresso bar drinks are made with organic dairy, almond or soy milk.</p>
							
							<!-- Below is coffee bar menu -->
							<div class="menu-evr-menu-container display-flex-wrap">

								<!--Below is menu coffees section-->
								<div class="evr-menu-section evr-menu-coffee display-flex-wrap">
									<h3 class="menu-section-title">Coffees</h3>
									<div class="menu-items-container display-flex-wrap">
										<?php	$coffees = CFS()->get( 'coffees' );
											foreach ( $coffees as $coffee_items ) { ?>
												<p class="menu-items-name"><?php echo $coffee_items['coffee_name']; ?></p>
												<p class="menu-items-price"><?php echo $coffee_items['coffee_price']; ?></p>
										<?php } ?>
									</div>
								</div>

								<!--Below is menu iced drinks section-->
								<div class="evr-menu-section evr-menu-iced-drink display-flex-wrap">
									<h3 class="menu-section-title">Iced Drinks</h3>
									<div class="menu-items-container display-flex-wrap">
										<?php	$iced_drinks = CFS()->get( 'iced_drinks' );
											foreach ( $iced_drinks as $iced_drink_items ) { ?>
												<p class="menu-items-name"><?php echo $iced_drink_items['iced_drink_name']; ?></p>
												<p class="menu-items-price"><?php echo $iced_drink_items['iced_drink_price']; ?></p>
										<?php } ?>
									</div>
								</div>

								<!--Below is menu full leaf tea section-->
								<div class="evr-menu-section evr-menu-full-leaf-tea display-flex-wrap">
									<h3 class="menu-section-title">Full Leaf Teas</h3>
									<div class="menu-items-container display-flex-wrap">
										<div class="menu-items-name-container">
											<?php	$full_leaf_teas = CFS()->get( 'full_leaf_teas' );
												foreach ( $full_leaf_teas as $full_leaf_tea_items ) { ?>
													<p class="menu-items-name"><?php echo $full_leaf_tea_items['full_leaf_tea_name']; ?></p>
											<?php } ?>
										</div>
										<p class="menu-items-price"><?php echo CFS()->get('full_leaf_tea_price'); ?></p>
									</div>
								</div>

								<!--Below is menu drinking chocolates section-->
								<div class="evr-menu-section evr-menu-drinking-chocolate display-flex-wrap">
									<h3 class="menu-section-title">Drinking Chocolates</h3>
									<div class="menu-items-container display-flex-wrap">
										<div class="menu-items-name-container">
										<?php $drinking_chocolates = CFS()->get( 'drinking_chocolates' );
											foreach ( $drinking_chocolates as $drinking_chocolate_items ) { ?>
												<p class="menu-items-name"><?php echo $drinking_chocolate_items['drinking_chocolate_name']; ?></p>
										<?php } ?>
										</div>
										<p class="menu-items-price"><?php echo CFS()->get('drinking_chocolate_price'); ?></p>
									</div>	
									<p class="menu-caption">* (8 oz ‘pay what you can’ origin blend) $2.00 min </p>
								</div>
							</div>

						</div>
					</section><!-- end of .menu-coffee-container -->

					<section class="menu-chocolate-container container-max800 container-full container-separator-top-bottom">
						<div class="menu-chocolate-content text-center">
							<h2>From the Chocolate Lab</h2><div class="menu-line"></div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/chocolate-bar.svg" alt="A Chocolate Bar icon">
							<p>We source and use organic fair-trade and direct-trade cacao beans , processing and handcrafting them in-house to produce finished bars that boast regional flavours from the Dominican Republic, Madagascar and Peru. 
								Learn more about our bean to <span><a href="#">bar chocolate making process.</a></span></p>
						</div>

						<!-- Below is the chocolate lab items -->
						<div class="menu-chocolate-grid display-flex-wrap">
							<?php
								$args = array( 
									'post_type' => 'chocolate', 
									'posts_per_page' => 4, 
									'orderby' => 'date',
									'order' => 'ASC'
									);
								$chocolate_items = get_posts( $args ); // returns an array of posts
							?>

							<?php foreach ( $chocolate_items as $post ) : setup_postdata( $post ); ?>
							<article class="chocolate-items-wrapper">
							<a href="<?php esc_url(  the_permalink() )?>">
								<div class="chocolate-image-wrapper">
									<img class="chocolate-items-image content-image" src="<?php echo CFS()->get( 'chocolate_image' ); ?>">
								</div>
								</a>
								<?php the_title( '<p class="chocolate-name">', '</p>' ); ?>
								<p class="chocolate-price"><?php echo CFS()->get('chocolate_price'); ?></p>
								</article>
							<?php endforeach; wp_reset_postdata(); ?>

						</div>
					</section><!-- end of .menu-chocolate-container -->

				</div>
			</section><!-- end of .menu-content-container -->

			<section class="menu-location container-max800 text-center">
				<p>Our chocolate and coffee beans can also be found at a select few <span><a href="#">locations</a></span> in Vancouver.</p>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
