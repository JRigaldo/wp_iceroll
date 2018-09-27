
<footer>
	<section class="footer">
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

	<div class="menu-test">
		<?php 

		$args = array(
			'theme_location' => 'footer'
		);
	?>

	<?php wp_nav_menu($args); ?>
	</div>
	<?php wp_footer(); ?>
	</section>
</footer>

</body>
</html>