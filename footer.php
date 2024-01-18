</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">
	<div class="container mx-auto flex-col flex md:flex-row justify-between gap-8">
		<?php
		if (is_active_sidebar('footer-1')) {
			dynamic_sidebar('footer-1');
		}
		?>

	</div>
	<?php do_action('tailpress_footer'); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy;
		<?php echo date_i18n('Y'); ?> -
		<?php echo get_bloginfo('name'); ?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>