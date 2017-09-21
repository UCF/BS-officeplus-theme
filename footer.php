</div>	<!-- site wrap -->

<footer id="footer">

    <div class="container"> 

        <div class="footer-copy pull-left"> 

            <a href="<?php echo get_option('siteurl'); ?>" class="logo"></a>
            <?php //site logo here?> 

            <div class="copy-text">
                <p>&copy; <?php echo date('Y'); ?> <!-- SITE NAME AND TAGLINE HERE --> </p> 
                <!--<p>Phone: <a href="tel:">(407) </a> | Fax: <a href="tel:">(407)</a> | 12479 Research Pkwy Ste 600, Orlando, FL 32826</p>--> 
            </div>

        </div> 

        <div class="footer-links pull-right"> 

            <div class="pull right"> 

                <div class="menu-wrap pull-left"> 
                    <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => '') ); ?> 
                </div>

                <a href="#" class="pull-right up-arrow"></a>

                <div class="clear"></div>
            
            </div>

            <div class="clear"></div>

        </div>

        <div class="clear"></div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>