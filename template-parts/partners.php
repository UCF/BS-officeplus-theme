<?php
	$partners = get_field( 'partners' );

	if ( !empty( $partners ) ) { ?>

		<section class="slider-section has-padding">

			<div class="container">

				<div class="inner-wrap-container">

					<div class="top-wrap formatted">

						<h1><?php the_field( 'partners_title' ); ?></h1>

						<div class="divider grey-divider"></div>

						<?php the_field( 'partners_description' ); ?>

						<div class="pagination services-pagination">
							<a href="#" class="left-page pull-left"></a>
							<a href="#" class="right-page pull-left"></a>
							<div class="clear"></div>
						</div>

					</div>

					<?php
						$totalSlides = ceil( count( $partners ) / 2 );
						$leftSlides = array();
						$rightSlides = array();
						$leftCounter = 0;
						$rightCounter = 0;

						foreach ( $partners as $key => $partner ) {
							if ( $key & 1 ) {
								$leftSlides[ $leftCounter ] = $partner;
								$leftCounter++;
							} else {
								$rightSlides[ $rightCounter ] = $partner;
								$rightCounter++;
							}
						}
					?>

					<div class="services-ctas formatted" data-total-slides="<?php echo $totalSlides; ?>">

						<div class="left-cta pull-left">
							<?php
								foreach ( $leftSlides as $key => $slide ) { ?>

									<div data-client-slide="<?php echo $key; ?>" class="client-wrap<?php if ( $key == 0 ) { ?> active<?php } ?>"<?php if ( $key != 0 ) { ?> style="display: none;"<?php } ?>>

										<img alt="UCF Partner" src="<?php echo $slide['image']; ?>" />

										<?php echo $slide['content']; ?>

										<?php if ( $slide['link'] && $slide['link_text'] ) { ?>
											<a href="<?php echo $slide['link']; ?>" class="go-link"><?php echo $slide['link_text']; ?></a>
										<?php } ?>

									</div>

								<?php }
							?>
						</div>

						<div class="right-cta pull-right">
							<?php
								foreach ( $rightSlides as $key => $slide ) { ?>

									<div data-client-slide="<?php echo $key; ?>" class="client-wrap<?php if ( $key == 0 ) { ?> active<?php } ?>"<?php if ( $key != 0 ) { ?> style="display: none;"<?php } ?>>

										<img alt="UCF Partner" src="<?php echo $slide['image']; ?>" />

										<?php echo $slide['content']; ?>

										<?php if ( $slide['link'] && $slide['link_text'] ) { ?>
											<a href="<?php echo $slide['link']; ?>" class="go-link"><?php echo $slide['link_text']; ?></a>
										<?php } ?>

									</div>

								<?php }
							?>
						</div>

						<div class="clear"></div>

					</div>

				</div>

			</div>

		</section>

	<?php }
