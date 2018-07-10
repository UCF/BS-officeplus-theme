<div class="content-wrap" style="display: none;" data-slide="4" data-wrap="slide-4">

	<div class="float-container alternate-widths">

		<div class="info-block formatted4 right-side pull-right">
			
			<div class="fence-block">

				<?php the_field( 'student_form_disclaimer' ); ?>

			</div>

		</div>

		<div class="info-block formatted5 left-side pull-left">
			
			<div class="top-wrap alpha-list">

				<?php the_field( 'student_form_description' ); ?>

			</div>	

		</div>

		<div class="clear"></div>

	</div>
				
	<div class="form-wrap no-padding-bottom">
		<?php gravity_form( 10, FALSE, FALSE, FALSE, NULL, TRUE ); ?>
	</div>

</div>