<?php /*
Template Name: Solicitation
*/ ?>

<?php get_header(); ?>

	<div class="container">

		<main id="content" class="solicitaion">

			<section class="slider-section">

				<div class="container">

					<div class="inner-wrap-container">

						<div class="top-wrap formatted">

							<?php if ( get_field( 'middle_section_title' ) ) { ?>
								<h1><?php the_field( 'middle_section_title' ); ?></h1>
							<?php } ?>

							<div class="divider grey-divider"></div>

							<?php if ( get_field( 'middle_section_content' ) ) { ?>
								<?php the_field( 'middle_section_content' ); ?>
							<?php } ?>

							<?php if ( get_field( 'middle_section_link_text' ) && get_field( 'middle_section_link' ) ) { ?>
								<a href="<?php the_field( 'middle_section_link' ); ?>" target="_blank" class="green-btn btn w-arrow spaced"><?php the_field( 'middle_section_link_text' ); ?></a>
							<?php } ?>

						</div>

					</div>

				</div>

			</section>

			<?php get_template_part( 'template-parts/faq-list' ); ?>

			<section class="slider-section has-padding-3">

				<div class="inner-wrap-container">

					<?php if ( get_field( 'form_details' ) ) { ?>

						<div class="top-wrap elite formatted2">
							<?php the_field( 'form_details' ); ?>
						</div>

					<?php } ?>

					<div class="form-wrap no-padding-bottom">

						<?php gravity_form( 5, FALSE, FALSE, FALSE, NULL, TRUE); ?>

					</div>

				</div>

			</section>

			<?php get_template_part( 'template-parts/cta-section' ); ?>

		</main>

	</div>

<?php get_footer(); ?>
