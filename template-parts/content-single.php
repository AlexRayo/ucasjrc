<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<?php if (has_post_thumbnail()): ?>
			<div class="h-72 w-full overflow-hidden rounded-md">
				<?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
			</div>
		<?php endif; ?>

		<?php the_title(sprintf('<h1 class="mt-4 md:mt-8 entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
		<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700">
			<?php echo get_the_date(); ?>
		</time>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
				'after' => '</div>',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'pagelink' => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
				'separator' => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div>

</article>