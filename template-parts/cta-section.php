<?php if ( is_page_template( 'templates/template-catering.php' ) ) { ?>
	<section class="cta-section dark-green text-center formatted">
<?php } else { ?>
	<section class="cta-section text-center formatted">
<?php } ?>

	<div class="background-overlay" style="background: url(<?php bloginfo('template_directory'); ?>/library/images/ctabg1.jpg); background-position: center; background-size: cover;"></div>

	<div class="overlay"></div>

	<?php if ( is_page_template( 'templates/template-contact.php' ) || is_page_template( 'templates/template-catering.php' ) ) { ?>
		<div class="inner-wrap larger">
	<?php } else if ( is_page_template( 'templates/template-home.php' ) ) { ?>
		<div class="inner-wrap">
	<?php } else { ?>
		<div class="inner-wrap largest">
	<?php } ?>

		<?php if ( get_field( 'cta_title' ) ) { ?>
			<h1><?php the_field( 'cta_title' ); ?></h1>
		<?php } ?>

		<?php if ( get_field( 'cta_description' ) ) { ?>
			<?php the_field( 'cta_description' ); ?>
		<?php } ?>

		<?php if ( is_page_template( 'templates/template-home.php' ) ) { ?>
			<a href="<?php the_field( 'cta_link' ); ?>" class="white-btn btn w-arrow"><?php the_field( 'cta_link_text' ); ?></a>
		<?php } else { ?>
			<a href="<?php the_field( 'cta_link' ); ?>" class="white-btn btn work-order"><?php the_field( 'cta_link_text' ); ?></a>
		<?php } ?>

	</div>

</section>
