<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header">
		<?php echo sterling_get_svg_icon('brush-cleaning', 32); ?>
		<span class="business-branding-bold">
			<a href="<?php echo esc_url(home_url('/')); ?>" style="color: inherit; text-decoration: none;">
				<?php bloginfo('name'); ?>
			</a>
		</span>

		<nav class="header-nav">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => '',
				'fallback_cb' => function () {
					echo '<a href="#about" class="nav-link">About Us</a>';
					echo '<a href="#services" class="nav-link">Services</a>';
					echo '<a href="#industries" class="nav-link">Industries</a>';
				},
				'items_wrap' => '%3$s',
				'link_before' => '',
				'link_after' => '',
				'walker' => new Sterling_Nav_Walker(),
			));
			?>
		</nav>

		<span class="header-menu">
			<button class="header-button body-text-bold">Book Now!</button>

			<span id="menu-icon" style="cursor: pointer;" aria-label="Toggle mobile menu">
				<?php echo sterling_get_svg_icon('menu', 32); ?>
			</span>
		</span>
	</header>

	<!-- Mobile Navigation Menu -->
	<nav class="mobile-nav" id="mobile-nav">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'container' => false,
			'menu_class' => '',
			'fallback_cb' => function () {
				echo '<a href="#about" class="mobile-nav-link">About Us</a>';
				echo '<a href="#services" class="mobile-nav-link">Services</a>';
				echo '<a href="#industries" class="mobile-nav-link">Industries</a>';
			},
			'items_wrap' => '%3$s',
			'link_before' => '',
			'link_after' => '',
			'walker' => new Sterling_Mobile_Nav_Walker(),
		));
		?>
		<button class="mobile-nav-button body-text-bold">Book Now!</button>
	</nav>