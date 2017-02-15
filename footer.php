
	<footer class="primary-footer container group">
		<small>Copyright &copy; iWebSG 2017. All rights reserved.</small>
		<nav class="nav">
			<?php
               wp_nav_menu(
                  array(
                  'theme_location' => 'footer', 
                  'container' => 'false',
                  'menu_class' => '',
                  'fallback_cb' => 'wp_page_menu',
                  'depth' => 2,
                  )
               );
            ?>
		</nav>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>