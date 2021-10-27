</main>

<?php do_action('khodok_theme_content_end'); ?>

</div>

<?php do_action('khodok_theme_content_after'); ?>

<footer id="colophon" class="site-footer bg-white dark:bg-gray-800 dark:text-gray-100 py-12" role="contentinfo">
	<?php do_action('khodok_theme_footer'); ?>

	<div class="container mx-auto text-center text-gray-200">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>
