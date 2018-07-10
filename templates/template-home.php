<?php /*
Template Name: Home
*/ ?>

<?php get_header(); ?>

	<div class="container">

		<main id="content" class="home">

			<section class="slider-section">

				<div class="container">

					<div class="inner-wrap-container">

						<div class="top-wrap formatted">

							<h1><?php the_field( 'slide_section_title' ); ?></h1>

							<div class="divider grey-divider"></div>

							<?php the_field( 'slide_section_description' ); ?>

							<div class="pagination slider-line-pagers">
								<a href="#" class="left-page pull-left"></a>
								<a href="#" class="right-page pull-left"></a>
								<div class="clear"></div>
							</div>

						</div>

						<?php $slides = get_field( 'slides' ); $totalSlides = count( $slides ); ?>

						<ul class="slider-line">

							<?php foreach ( $slides as $key => $slide ) { ?>

								<li class="pull-left<?php if ( $key == 0 ) { ?> active<?php } ?>">
									<a href="#" data-wrap="slide-<?php echo $key; ?>" data-slide="<?php echo $key; ?>"><?php echo $slide['title']; ?></a>
								</li>

							<?php } ?>

						</ul>

						<div class="clear"></div>

						<div id="slideCount" data-total-slides="<?php echo $totalSlides - 1; ?>"></div>

						<?php foreach ( $slides as $key => $slide ) { ?>

							<div class="content-wrap<?php if ( $key == 0 ) { ?> active<?php } ?>"<?php if ( $key != 0 ) { ?> style="display: none;" <?php } ?>data-wrap="slide-<?php echo $key; ?>" data-slide="<?php echo $key; ?>">

								<div class="image-container formatted">

									<div class="pull-right image-side">

										<div class="image-frame">
											<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
										</div>

									</div>

									<div class="pull-left text-side">

										<?php echo $slide['content']; ?>

										<a href="<?php echo $slide['link']; ?>" class="green-btn btn w-arrow"><?php echo $slide['link_text']; ?></a>

									</div>

									<div class="clear"></div>

								</div>

							</div>

						<?php } ?>

					</div>

				</div>

			</section>

			<?php get_template_part( 'template-parts/cta-section' ); ?>
			<?php get_template_part( 'template-parts/partners' ); ?>

		</main>

	</div>

<?php get_footer(); ?>
