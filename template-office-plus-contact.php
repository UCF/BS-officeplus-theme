<?php /*
Template Name: Office Plus Contact
*/ ?>

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

                <div class="left-container blue-section">

                    <div class="center-pad">

                        <h2 class="off-white"><?php the_field ( 'faq_title' ); ?></h2>

                        <ul class="faq-list">

                            <?php

                                $faq_cats = get_terms( 'faq_category' );

                                foreach ( $faq_cats as $faq_cat ) { ?>
                                <li>

                                    <?php
                                        /* FAQ Arguments */
                                        $faq_args = array(
                                            'post_type' => 'ucf_faqs',
                                            'posts_per_page' => -1,
                                            'order' => 'ASC',
                                            'orderby' => 'ID',
                                            'post_status' => 'publish',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'faq_category',
                                                    'field'    => 'term_id',
                                                    'terms'    => $faq_cat->term_id
                                                )
                                            )
                                        );

                                        $faqs = get_posts( $faq_args );
                                        $faq_counter = 1;
                                        $total_faqs = wp_count_posts( 'ucf_faqs' ); ?>

                                        <ul>
                                            <?php foreach ( $faqs as $faq ) { ?>
                                                <li>
                                                    <a class="faq-link" href="#" data-faq-num="<?php echo $faq->ID; ?>"><?php echo $faq->post_title; ?></a>

                                                    <div class="faq-info"><?php echo wpautop( $faq->post_content ); ?></div>
                                                </li>
                                            <?php } ?>
                                        </ul>

                                    </li>
                                 <?php } ?>
                        </ul>

                        <div class="clear"></div>

                    </div>

                    </div>

                <div class="right-container">

                    <div class="center-pad">

                        <div class="contact-form-block">

                            <h2 class="contact-title"><?php the_field ( 'contact_form_title' ); ?></h2>

                            <div class="contact-g-form-container">
                                <?php gravity_form( 1, false, true, false, null, true, null ); ?>
                            </div>

                            <div class="clear"></div>

                        </div>

                    </div>

                </div>

            </div>


        </section>
        <div class="clear"></div>

        <?php } ?>

        <?php get_template_part( 'section', 'office-plus-create-account' ); ?>

    </div>

    <?php get_template_part( 'section', 'office-plus-footer' ); ?>