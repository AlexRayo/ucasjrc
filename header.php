<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>

			<div class="mx-auto container">
				<div class="lg:flex lg:justify-between lg:items-center border-b md:py-2">
					<div class="flex justify-between items-center">
						<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path
												d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id' => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 rounded-md mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class' => 'lg:flex lg:-mx-2',
							'theme_location' => 'primary',
							'li_class' => 'my-4 lg:my-0 lg:mx-2',
							'fallback_cb' => false,
						)
					);
					?>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<!-- Start introduction -->
			<?php if (is_front_page()) { ?>
				<?php
				$args = array(
					'category_name' => 'quienes-somos',  // Filtrar por la categoría "quienes-somos"
					'posts_per_page' => 1,  // Mostrar solo un post
				);

				$query = new WP_Query($args);

				if ($query->have_posts()):
					while ($query->have_posts()):
						$query->the_post(); ?>
						<section class="relative overflow-hidden">
							<div class="container mx-auto py-16">

								<div
									class="mx-auto max-w-screen-md my-12 py-12 px-8 rounded-md bg-slate-100 min-h-96 bg-opacity-85 backdrop-blur-[2px]">
									<h1 class="text-4xl md:text-5xl lg:text-6xl tracking-tight font-extrabold text-slate-900 mb-6">
										<?php the_title(); ?>
									</h1>
									<p class="text-gray-600 text-xl font-medium mb-10">
										<?php echo get_the_excerpt(); ?>
									</p>
									<a href="<?php the_permalink(); ?>"
										class="w-full hover:opacity-80 sm:w-auto flex-none bg-green-700 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-green-700 focus:outline-none transition-colors duration-200">Quiénes
										somos</a>
								</div>

								<div class="absolute w-full h-full border top-0 left-0 -z-10 bg-fixed"
									style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
							</div>

						</section>
					<?php endwhile;
					wp_reset_postdata(); // Restablece los datos del post global
				else: ?>
					<p>No hay posts disponibles en la categoría "quienes-somos".</p>
				<?php endif; ?>
			<?php } ?>
			<!-- End introduction -->

			<?php do_action('tailpress_content_start'); ?>

			<main>