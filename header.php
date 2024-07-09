<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-forest-green text-white antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="absolute flex w-full z-10">

		<div class="mx-auto container">
			<div class="flex justify-between items-center py-6">
				<div class="flex justify-between items-center w-full">
					<div>
						<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
							<img src="<?php echo get_template_directory_uri()?>/resources/images/liquidgreen_header-logo.png" alt="LiquidGreen Logo" class="w-44 lg:w-48">
						</a>
					</div>
					<a href="#colophon" class="btn">Request Quote</a>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex flex-grow min-h-full items-center justify-center" >
		<img src="<?php echo get_template_directory_uri(); ?>/resources/images/grass_background.jpg" alt="grass" class="absolute z-0 w-full h-full object-cover top-0">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			<div class="container mx-auto z-10 w-full flex flex-col items-center">
				<div class="lg:px-24 py-36 my-16 w-full">
                    <div class="mx-auto max-w-screen-md">
                        <h1 class="text-3xl text-[2.8rem] lg:text-6xl font-display mb-6 text-center"><?php bloginfo('description');?></h1>
                    </div>
                </div>
				<?php get_template_part('template-parts/shields'); ?>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>
	</div>