<div id="office-plus-menu">

    <div id="desktop-menu">
        <div class="logo-container">
            <a href="<?php echo get_bloginfo ( 'url' ); ?>" class=""office-plus-logo"></a>
        </div>

        <div class="right-container">

            <div class="outer">

                <div class="inner">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'office-plus-nav',
                            'container' => '',
                            'menu_id' => 'office-plus-nav'
                        ));
                    ?>

                    <a href="https://www.staplesadvantage.com/shop/sahome?storeId=10101" class="menu-red-btn">Order Now</a>
                </div>

            </div>

        </div>

        <div class="clear"></div>

    </div>

    <div id="mobile-menu">

        <div class="menu-background"></div>

        <div class="outer">

            <div class="inner">

                <div class="icon-wrap">

                    <div class="logo-container">
                        <a href="<?php echo get_bloginfo( 'url'); ?>" class="office-plus-logo"></a>
                    </div>

                    <div class="divider"></div>

                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'office-plus-mobile-nav',
                            'container' => '',
                            'menu_id' => 'office-plus-mobile-nav'
                        ));
                    ?>

                </div>

            </div>

        </div>

    </div>

</div>