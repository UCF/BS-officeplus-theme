<?php /*
Template Name: Catering
*/ ?>

<?php get_header(); ?>

	<div class="container">

		<main id="content" class="catering no-padding-top">

			<section class="cta-section dark-green text-center formatted">

				<div class="background-overlay" style="background: url(<?php bloginfo('template_directory'); ?>/library/images/ctabg1.jpg); background-position: center; background-size: cover;"></div>

				<div class="overlay"></div>

				<div class="inner-wrap larger">

					<?php if ( get_field( 'cta_title' ) ) { ?>
						<h1><?php the_field( 'cta_title' ); ?></h1>
					<?php } ?>

					<?php if ( get_field( 'cta_description' ) ) { ?>
						<?php the_field( 'cta_description' ); ?>
					<?php } ?>

					<?php if( have_rows( 'downloads' ) ): ?>

						<div class="download-link-wrap">

						    <?php while ( have_rows( 'downloads' ) ) : the_row(); ?>

						        <a href="<?php the_sub_field('link_url'); ?>" class="white-btn btn special-dl" target="_blank"><?php the_sub_field('link_text'); ?></a>

						    <?php endwhile; ?>

						    <div class="clear"></div>

					    </div>

					<?php endif; ?>

				</div>

			</section>

			<section class="slider-section has-padding-2">

				<div class="container">

					<div class="inner-wrap-container formatted">

						<div class="pagination catering slider-line-pagers">
							<a href="#" class="left-page pull-left"></a>
							<a href="#" class="right-page pull-left"></a>
							<div class="clear"></div>
						</div>

						<ul class="slider-line full-border">

							<li class="pull-left active">
								<a href="#" data-wrap="slide-0" data-slide="0">On-Campus Partners</a>
							</li>

							<li class="pull-left">
								<a href="#" data-wrap="slide-1" data-slide="1">Off-Campus Caterers</a>
							</li>

						</ul>

						<div class="clear"></div>

					</div>

					<div class="location-blocks">

						<div id="slideCount" data-total-slides="1"></div>

						<div class="content-wrap active" data-wrap="slide-0" data-slide="0">

							<div class="inner-wrap-container formatted">
								<h3>Full Service Caterers</h3>
							</div>

							<?php $full_service_locations = get_field( 'full_services_caterers_location_list' ); ?>

							<ul class="location-list">

								<?php foreach ( $full_service_locations as $location ) { ?>

									<li class="location-item pull-left">

										<?php echo $location['content']; ?>

									</li>

								<?php } ?>

							</ul>

							<div class="inner-wrap-container-2 formatted">
								<h3>Restaurants Approved to Cater</h3>
							</div>

							<div class="clear"></div>

							<?php $full_service_locations_2 = get_field( 'full_services_caterers_location_list_2' ); ?>

							<ul class="location-list">

								<?php foreach ( $full_service_locations_2 as $location ) { ?>

									<li class="location-item pull-left">

										<?php echo $location['content']; ?>

									</li>

								<?php } ?>

							</ul>

							<div class="clear"></div>

						</div>

						<div class="content-wrap" style="display: none;" data-wrap="slide-1" data-slide="1">

							<div class="inner-wrap-container formatted">
								<h3>Full Service Caterers</h3>
							</div>

							<?php $restaurant_service_locations = get_field( 'restaurant_service_locations' ); ?>

							<ul class="location-list">

								<?php foreach ( $restaurant_service_locations as $location ) { ?>

									<li class="location-item pull-left">

										<?php echo $location['content']; ?>

									</li>

								<?php } ?>

							</ul>

							<div class="inner-wrap-container-2 formatted">
								<h3>Other Businesses Approved to Cater</h3>
							</div>

							<div class="clear"></div>

							<?php $restaurant_service_locations_2 = get_field( 'restaurant_service_locations_2' ); ?>

							<ul class="location-list">

								<?php foreach ( $restaurant_service_locations_2 as $location ) { ?>

									<li class="location-item pull-left">

										<?php echo $location['content']; ?>

									</li>

								<?php } ?>

							</ul>

							<div class="clear"></div>

						</div>

					</div>

				</div>

			</section>

		</main>

	</div>

<?php get_footer(); ?>
