<?php get_header(); ?>
<?php if (is_front_page()) { ?>
	<section class="container my-12 xl:my-20 mx-auto">
		<h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 md:text-center mb-8 mx-auto">Promoviendo el desarrollo
			productivo
			local</h2>
		<div class="mx-auto grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3 xl:gap-8">
			<?php
			$args = array(
				'posts_per_page' => 6,
			);
			$query = new WP_Query($args);

			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					get_template_part('template-parts/content', get_post_format());
				endwhile;
				wp_reset_postdata();
			else:
				echo '<p>No hay posts disponibles.</p>';
			endif;
			?>
		</div>
	</section>

	<!-- Start cafe organico -->
	<?php
	$args = array(
		'category_name' => 'cafe-organico',  // Filtrar por la categoría "cafe-organico"
		'posts_per_page' => 1,  // Mostrar solo un post
	);
	$query = new WP_Query($args);
	if ($query->have_posts()):
		while ($query->have_posts()):
			$query->the_post(); ?>

			<section class="md:container mx-auto w-full grid grid-cols-1 sm:grid-cols-2 md:rounded-md overflow-hidden">
				<div class="w-full h-full">
					<?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover hover:opacity-90 transition duration-300 ')); ?>
				</div>

				<div class="w-full h-full px-4 py-8 md:p-8 bg-slate-900 flex items-center justify-center">
					<div class="">
						<h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-slate-100 mb-6">
							<?php the_title(); ?>
						</h1>
						<p class="text-slate-100 text-xl font-medium mb-6">
							<?php echo get_the_excerpt(); ?>
						</p>
						<a href="<?php the_permalink(); ?>"
							class="w-full hover:opacity-80 sm:w-auto flex-none bg-green-700 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-green-700 focus:outline-none transition-colors duration-200">Ver
							más</a>
					</div>
				</div>
			</section>
		<?php endwhile;
		wp_reset_postdata(); // Restablece los datos del post global
	else: ?>
		<p>No hay posts disponibles en la categoría "cafe-organico".</p>
	<?php endif; ?>
	<!-- End cafe organico -->


	<!-- Start objetivos -->
	<?php if (is_front_page()) { ?>
		<?php
		$args = array(
			'category_name' => 'objetivos',
			'posts_per_page' => 1,
		);

		$query = new WP_Query($args);

		if ($query->have_posts()):
			while ($query->have_posts()):
				$query->the_post(); ?>
				<section class="md:container mx-auto my-8 lg:my-24 w-full min-h-96 items-center flex flex-col lg:flex-row">

					<div class="h-full lg:w-6/12 md:rounded-md overflow-hidden">
						<?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover hover:opacity-90 transition duration-300 ')); ?>
					</div>

					<div class="w-full h-full lg:w-6/12 p-4 md:p-8">
						<h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-slate-900 mb-6">
							<?php the_title(); ?>
						</h1>
						<p class="text-slate-900 text-xl font-medium mb-10">
							<?php echo get_the_excerpt(); ?>
						</p>

						<a href="<?php the_permalink(); ?>"
							class="w-full hover:opacity-80 sm:w-auto flex-none bg-green-700 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-green-700 focus:outline-none transition-colors duration-200">Ver
							más</a>
					</div>

				</section>
			<?php endwhile;
			wp_reset_postdata(); // Restablece los datos del post global
		else: ?>
			<p>No hay posts disponibles en la categoría "objetivos".</p>
		<?php endif; ?>
	<?php } ?>
	<!-- End objetivos -->
<?php } ?>

<?php get_footer(); ?>