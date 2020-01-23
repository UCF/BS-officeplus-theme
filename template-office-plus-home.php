<?php /*
Template Name: Office Plus Home*/ ?>

<?php get_header(); ?>

<?php get_template_part( 'section', 'office-plus-menu' ); ?>

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div id="office-plus-wrap">
        <?php /* =- =- =- =- =- =- =- =-

               TOP CTAS

        =- =- =- =- =- =- =- =- =- =- =- */ ?>

        <?php if ( get_field( 'header_image' ) ) { ?>

            <section class="cta">

                <div class="cta-section" style="background: url(<?php echo get_field( 'cta_image' ); ?>) no-repeat; background-position: center; background-size: cover;">

                    <div class="outer">

                        <div class="inner">

                            <div class="inner-cta-container">
                                <div class="center">
                                    <div class="inner-cta-title"><?php the_field( 'cta_title' ); ?></div>
                                    <div class="inner-cta-subtitle"><?php the_field( 'cta_subtitle' ); ?></div>
                                    <a href="<?php the_field( 'cta_link' ); ?>">
                                        <?php the_field( 'cta_text' ); ?>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section><?php /* End Top CTAs Section */ ?>
            <div class="clear"></div>

        <?php } ?>

        <?php /* =- =- =- =- =- =- =- = =-

				BODY SECTION

			=- =- =- =- =- =- =- =- =- =- =- */ ?>

        <?php if (get_field( 'body_section_title' ) && get_field( 'body_section_content_1' ) ) { ?>

            <section class="off-white-section">

                <div class="body-container">

                    <div class="center-pad">
                        <h2 class="section-title"><?php the_field( 'body_section_title' ); ?></h2>
                        <div class="body-content"><?php the_field( 'body_section_content_1' ); ?></div>
                        <div class="body-content"><?php the_field( 'body_section_content_2' ); ?></div>
                        <a href="<?php the_field( 'body_order_link' ); ?>">
                            <?php the_field( 'body_order_text' ); ?>
                        </a>
                    </div>

                </div>

            </section>
            <div class="clear"></div>

        <?php } ?>

    </div>
<?php endwhile; endif; ?>

<?php get_template_part( 'section', 'office-plus-create-account' ); ?>
<?php get_template_part( 'section', 'office-plus-footer' ); ?>
