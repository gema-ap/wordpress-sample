<?php
/**
 * Template Name: Front Page
 * Description: Homepage template for Sterling Commercial Solutions
 *
 * @package Sterling
 */

get_header();
?>

<main>
	<!-- Hero Section -->
	<section class="hero">
		<div class="hero-overlay"></div>
		<div class="hero-content">
			<div class="hero-branding">
				<?php echo sterling_get_svg_icon('brush-cleaning', 64); ?>
				<h1 class="business-branding-bold hero-title">
					<?php bloginfo('name'); ?>
				</h1>
			</div>

			<p class="hero-subtitle">
				<?php bloginfo('description'); ?>
			</p>

			<!-- Why Choose Us -->
			<div class="why-choose-us">
				<h2 class="heading-text">Why Choose Us?</h2>
				<div class="features-grid">
					<div class="feature-item">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-icon"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
						<h3 class="body-text-bold">Professional Excellence</h3>
						<p class="body-text">
							Industry-leading standards with certified technicians
						</p>
					</div>
					<div class="feature-item">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-icon"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
						<h3 class="body-text-bold">Reliable Service</h3>
						<p class="body-text">
							On-time, every time with flexible scheduling
						</p>
					</div>
					<div class="feature-item">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-icon"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
						<h3 class="body-text-bold">Eco-Friendly Solutions</h3>
						<p class="body-text">
							Safe, sustainable cleaning products and methods
						</p>
					</div>
				</div>
			</div>

			<!-- Call to Action -->
			<div class="hero-cta">
				<a href="#contact" class="cta-button cta-primary">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					Get a Free Quote
				</a>
				<a href="#services" class="cta-button cta-secondary">
					Our Services
				</a>
			</div>
		</div>
	</section>

	<!-- What Sets Us Apart Section -->
	<section class="sets-apart">
		<div class="sets-apart-container">
			<h2 class="heading-text sets-apart-title">What Sets Us Apart</h2>
			<p class="sets-apart-subtitle body-text">
				Not just another cleaning company
			</p>

			<div class="sets-apart-grid">
				<?php get_template_part('template-parts/content', 'apart-cards'); ?>
			</div>
		</div>
	</section>

	<!-- Core Services Section -->
	<section class="core-services" id="services">
		<div class="core-services-container">
			<h2 class="heading-text core-services-title">Our Core Services</h2>
			<p class="core-services-subtitle body-text">
				Professional cleaning solutions tailored to your industry needs
			</p>

			<div class="services-grid">
				<?php get_template_part('template-parts/content', 'service-cards'); ?>
			</div>
		</div>
	</section>

	<!-- Industry Services Section -->
	<section class="industry-services" id="industries">
		<div class="industry-container">
			<h2 class="heading-text industry-title">Industries We Serve</h2>
			<p class="industry-subtitle body-text">
				Specialized cleaning solutions for every sector
			</p>

			<div class="carousel-wrapper">
				<?php get_template_part('template-parts/content', 'carousel'); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
?>
