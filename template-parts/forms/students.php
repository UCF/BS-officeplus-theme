<div class="content-wrap" style="display: none;" data-wrap="slide-0">

	<div class="float-container">

		<div class="info-block formatted3 left-side pull-left">
			
			<?php if ( get_field( 'students_form_description' ) ) { ?>

				<div class="top-wrap">

					<?php the_field( 'students_form_description' ); ?>
					
				</div>	

			<?php } ?>

			<div class="additional-content formatted4">

				<?php if ( get_field( 'students_pdf_name' ) && get_field( 'students_pdf_document' ) || get_field( 'students_outbound_link' ) ) { ?>

					<div class="document-wrap">
						
						<?php 
							if ( get_field( 'students_pdf_name' ) && get_field( 'students_pdf_document' ) ) {
								$download = get_field( 'students_pdf_document' ); ?>
								<div class="document-file"><?php the_field( 'students_pdf_name' ); ?></div>
								<a href="<?php echo THEME_URL; ?>/download.php?file=<?php echo get_attached_file( $download['ID'] ); ?>" class="download-link" download>Download PDF</a>
							<?php }
						?>

						<div class="clear"></div>
						
						<?php if ( get_field( 'students_outbound_link' ) && get_field( 'students_outbound_link_title' ) ) { ?>
							<a href="<?php the_field( 'students_outbound_link' ); ?>" class="external-link" target="_blank"><?php echo get_field( 'students_outbound_link_title' ); ?></a>
						<?php } ?>

					</div>

				<?php } ?>
				
				<?php if ( get_field( 'students_department_additional_content' ) ) { ?>
					<?php the_field( 'students_department_additional_content' ); ?>
				<?php } ?>

			</div>

		</div>

		<div class="info-block formatted4 right-side pull-right">

			<h2>Student Submission Form</h2>
			
			<?php if ( get_field( 'students_form_description_2' ) ) { ?>

				<div class="upper-description">
					<?php the_field( 'students_form_description_2' ); ?>
				</div>

			<?php } ?>

			<div class="form-wrap">
				<?php gravity_form( 4, FALSE, FALSE, FALSE, NULL, TRUE); ?>
			</div>

		</div>

		<div class="clear"></div>

	</div>

</div>