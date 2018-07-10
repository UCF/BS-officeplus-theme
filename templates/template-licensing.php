<?php /*
Template Name: Licensing
*/ ?>

<?php get_header(); ?>

	<div class="container">

		<main id="content" class="home">

			<section class="slider-section">

				<div class="container">

					<div class="inner-wrap-container">

						<div class="pagination catering slider-line-pagers">
							<a href="#" class="left-page pull-left"></a>
							<a href="#" class="right-page pull-left"></a>
							<div class="clear"></div>
						</div>

						<ul class="slider-line full-border">

							<li class="pull-left">
								<a href="#" data-wrap="slide-0" data-slide="0">Students</a>
							</li>

							<li class="pull-left">
								<a href="#" data-wrap="slide-1" data-slide="1">Departments</a>
							</li>

							<li class="pull-left">
								<a href="#" data-wrap="slide-2" data-slide="2">Resources</a>
							</li>

							<li class="pull-left active">
								<a href="#" data-wrap="slide-3" data-slide="3">Contact</a>
							</li>

						</ul>

						<div class="clear"></div>

						<div id="slideCount" data-total-slides="3"></div>

						<?php
							get_template_part( 'template-parts/forms/contact' );
							get_template_part( 'template-parts/forms/resources' );
							get_template_part( 'template-parts/forms/departments' );
							get_template_part( 'template-parts/forms/students' );
						?>

					</div>

				</div>

			</section>

		</main>

	</div>

<?php get_footer(); ?>
