<div class="content-wrap active" data-wrap="slide-3">
	
	<?php if ( get_field( 'contact_form_description' ) ) { ?>

		<div class="info-block formatted2">
			
			<div class="top-wrap">
				<?php the_field( 'contact_form_description' ); ?>
			</div>	

		</div>

	<?php } ?>

	<div class="form-wrap">
		<?php gravity_form( 1, FALSE, FALSE, FALSE, NULL, TRUE); ?>
	</div>

</div>