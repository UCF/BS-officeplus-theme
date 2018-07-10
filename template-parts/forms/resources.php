<div class="content-wrap" style="display: none; padding-bottom: 40px;" data-wrap="slide-2">

	<div class="float-container">

		<div class="info-block formatted3">

			<?php if ( get_field( 'resources_description' ) ) { ?>

				<div class="top-wrap">

					<?php the_field( 'resources_description' ); ?>

				</div>

			<?php } ?>

			<div class="additional-content formatted4">

				<?php if ( get_field( 'resources_pdf_name' ) && get_field( 'resources_pdf_document' ) || get_field( 'resources_outbound_link' ) ) { ?>

					<div class="document-wrap">

						<?php
							if ( get_field( 'resources_pdf_name' ) && get_field( 'resources_pdf_document' ) ) {
								$download = get_field( 'resources_pdf_document' ); ?>
								<div class="document-file"><?php the_field( 'resources_pdf_name' ); ?></div>
								<a href="<?php echo THEME_URL; ?>/download.php?file=<?php echo get_attached_file( $download['ID'] ); ?>" class="download-link" download>Download PDF</a>
							<?php }
						?>

						<div class="clear"></div>

						<?php if ( get_field( 'resources_outbound_link' ) && get_field( 'resources_outbound_link_title' ) ) { ?>
							<a href="<?php the_field( 'resources_outbound_link' ); ?>" class="external-link" target="_blank"><?php echo get_field( 'resources_outbound_link_title' ); ?></a>
						<?php } ?>

					</div>

				<?php } ?>

				<?php if ( get_field( 'resources_additional_content' ) ) { ?>
					<?php the_field( 'resources_additional_content' ); ?>
				<?php } ?>

			</div>

		</div>

		<?php /* <div class="info-block formatted4 right-side pull-right">

			<h2>Design Submission Form</h2>

			<div class="upper-description">
				<p>This form is intended for use by student organizations, departments, schools, colleges and entities related to UCF to submit <strong>PIC good</strong> designs. Designs for sale must be submitted via iCLC per your licensing agreement.</p>
			</div>

			<div class="form-wrap">
				<?php gravity_form( 2, FALSE, FALSE, FALSE, NULL, TRUE); ?>
			</div>

		</div> */ ?>

		<div class="clear"></div>

	</div>

</div>
