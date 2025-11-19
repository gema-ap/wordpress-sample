<?php
// Service cards - can be customized via WordPress Customizer or custom post type
$services = array(
	array(
		'title' => 'Hardfloor Maintenance',
		'description' => 'Expert care for tile, vinyl, concrete, and hardwood surfaces with specialized cleaning and sealing',
		'image' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=800&auto=format&fit=crop',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m6.08 9.5-3.5 1.6a1 1 0 0 0 0 1.81l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9a1 1 0 0 0 0-1.83l-3.5-1.59"/><path d="m6.08 14.5-3.5 1.6a1 1 0 0 0 0 1.81l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9a1 1 0 0 0 0-1.83l-3.5-1.59"/></svg>',
	),
	array(
		'title' => 'Carpet & Upholstery',
		'description' => 'Deep steam cleaning and stain removal for carpets, rugs, and fabric furniture',
		'image' => 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=800&auto=format&fit=crop',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
	),
	array(
		'title' => 'Window Cleaning',
		'description' => 'Streak-free interior and exterior window cleaning for buildings of any height',
		'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>',
	),
	array(
		'title' => 'Industrial Deep Clean',
		'description' => 'Heavy-duty cleaning for warehouses, factories, and commercial facilities',
		'image' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=800&auto=format&fit=crop',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>',
	),
);

foreach ($services as $service) : ?>
	<div class="service-card">
		<div class="service-image" style="background-image: url('<?php echo esc_url($service['image']); ?>');">
			<div class="service-overlay"></div>
			<div class="service-icon-wrapper">
				<?php echo $service['icon']; ?>
			</div>
		</div>
		<div class="service-content">
			<h3 class="body-text-bold service-title"><?php echo esc_html($service['title']); ?></h3>
			<p class="body-text service-description"><?php echo esc_html($service['description']); ?></p>
		</div>
	</div>
<?php endforeach; ?>
