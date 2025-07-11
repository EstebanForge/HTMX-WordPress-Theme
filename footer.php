<?php
// No direct access
if (!defined('ABSPATH')) exit;
?>

<footer class="container">
	<p><?php
		printf(
			esc_html__('Powered by %s', 'hxtheme'),
			'<a href="https://github.com/EstebanForge/Hypermedia-API-WordPress" target="_blank">' .
			esc_html__('Hypermedia API for WordPress', 'hxtheme') .
			'</a>'
		);
	?></p>
</footer>

<?php wp_footer(); ?>
</body>

</html>
