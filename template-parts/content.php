<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12 overflow-hidden rounded-lg shadow-lg bg-white transition-color duration-300 transform hover:bg-slate-100 hover:shadow-xl  p-4 xl:p-8'); ?>>

	<?php if (has_post_thumbnail()): ?>
		<div class="w-full h-48 sm:h-64 md:h-72 overflow-hidden rounded-md">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover hover:opacity-90 transition duration-300 ')); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="py-4">
		<header class="mb-4">
			<?php the_title(sprintf('<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700">
				<?php echo get_the_date(); ?>
			</time>
		</header>

		<div class="entry-summary mb-6">
			<?php the_excerpt(); ?>
		</div>

		<a href="<?php the_permalink(); ?>"
			class="w-full hover:opacity-80 sm:w-auto flex-none bg-green-700 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-green-700 focus:outline-none transition-colors duration-300">
			<?php _e('Leer más', 'tailpress'); ?>
		</a>
	</div>

</article>