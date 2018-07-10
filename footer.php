</div>	<!-- site wrap -->

<footer id="footer">

	<div class="container">

		<div class="copy-container pull-left">

			<a href="<?php echo get_option('siteurl'); ?>" class="logo"></a>
			<?php /* spry dev id <a href="<?php echo get_permalink( 2 ); ?>" class="logo"></a> */ ?>

			<div class="copy-text">
				<p>&copy; <?php echo date('Y'); ?> UCF Business Services, a unit of the Division of Administration and Finance</p>
				<p>Phone: <a href="tel:4078232624">(407) 823-2624</a> | Fax: <a href="tel:4078820175">(407) 882-0175</a> | 12479 Research Pkwy Ste 600, Orlando, FL 32826</p>
			</div>
			
		</div>

		<div class="link-container pull-right">

			<div class="pull-right">
			
				<div class="menu-wrap pull-left">
					<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => '' ) ); ?>
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