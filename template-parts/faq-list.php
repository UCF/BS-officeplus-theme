<?php
	$faqList = get_field( 'faq_list' );

	if ( !empty( $faqList ) ) { ?>

		<section class="off-white-section formatted">

			<div class="inner-wrap-container">

				<div class="inner-faq-list-wrap">

					<?php if ( !get_field( 'faqs_title' ) ) { ?>
						<h3>Solicitation FAQs</h3>
					<?php } else { ?>
						<h3><?php the_field( 'faqs_title' ); ?></h3>
					<?php } ?>

					<?php

						$counter = 1;

						foreach ( $faqList as $faq ) {
							if ( $counter & 1 ) {
								$leftColumn[] = $faq;
							} else {
								$rightColumn[] = $faq;
							}

							$counter++;
						}

						if ( !empty( $leftColumn ) ) { ?>

							<ul class="faq-list left-side pull-left">

								<?php foreach ( $leftColumn as $faqPost ) { ?>

									<li>
										<a href="#" class="opener"></a>

										<div class="faq-title"><?php echo $faqPost['title']; ?></div>
										<div class="inner-wrap formatted5 formatted3">
											<?php echo $faqPost['content']; ?>
										</div>

									</li>

								<?php } ?>

							</ul>

						<?php }

							if ( !empty( $rightColumn ) ) { ?>

								<ul class="faq-list right-side pull-left">

									<?php foreach ( $rightColumn as $faqPost ) { ?>

										<li>
											<a href="#" class="opener"></a>

											<div class="faq-title"><?php echo $faqPost['title']; ?></div>
											<div class="inner-wrap formatted5 formatted3">
												<?php echo $faqPost['content']; ?>
											</div>

										</li>

									<?php } ?>

								</ul>

							<?php } ?>

					<div class="clear"></div>

				</div>

			</div>

		</section>

	<?php }
?>
