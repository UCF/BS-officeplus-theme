<?php get_header(); ?>

	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
		<div class="container">

			<main id="content">

				<section class="slider-section">

					<div class="container page-container always-pad">
						
						<?php the_content(); ?>

					</div>

				</section>
			
			</main>

		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>