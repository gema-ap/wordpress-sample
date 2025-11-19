<footer class="site-footer">
	<div class="footer-top">
		<?php if (is_active_sidebar('footer-1')) : ?>
			<?php dynamic_sidebar('footer-1'); ?>
		<?php else : ?>
			<div class="footer-col">
				<div class="footer-header" data-footer-toggle>
					<h4 class="heading-text">Our Story</h4>
					<?php echo sterling_get_svg_icon('chevron-down', 20); ?>
				</div>
				<ul class="footer-content">
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
		<?php endif; ?>

		<?php if (is_active_sidebar('footer-2')) : ?>
			<?php dynamic_sidebar('footer-2'); ?>
		<?php else : ?>
			<div class="footer-col">
				<div class="footer-header" data-footer-toggle>
					<h4 class="heading-text">Services</h4>
					<?php echo sterling_get_svg_icon('chevron-down', 20); ?>
				</div>
				<ul class="footer-content">
					<li><a href="#">Industrial</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Sanitation</a></li>
				</ul>
			</div>
		<?php endif; ?>

		<?php if (is_active_sidebar('footer-3')) : ?>
			<?php dynamic_sidebar('footer-3'); ?>
		<?php else : ?>
			<div class="footer-col">
				<div class="footer-header" data-footer-toggle>
					<h4 class="heading-text">Contact</h4>
					<?php echo sterling_get_svg_icon('chevron-down', 20); ?>
				</div>
				<ul class="footer-content">
					<li><a href="#">Address</a></li>
					<li><a href="#">Phone</a></li>
					<li><a href="#">Email</a></li>
				</ul>
			</div>
		<?php endif; ?>
	</div>

	<div class="footer-middle">
		<div class="socials">
			<h5 class="heading-text">Follow us on social media</h5>
			<div class="social-icons">
				<a href="#" aria-label="Visit our Facebook page" style="cursor: pointer;">
					<?php echo sterling_get_svg_icon('facebook'); ?>
				</a>
				<a href="#" aria-label="Visit our Instagram page" style="cursor: pointer;">
					<?php echo sterling_get_svg_icon('instagram'); ?>
				</a>
				<a href="#" aria-label="Visit our Twitter page" style="cursor: pointer;">
					<?php echo sterling_get_svg_icon('twitter'); ?>
				</a>
				<a href="#" aria-label="Visit our YouTube channel" style="cursor: pointer;">
					<?php echo sterling_get_svg_icon('youtube'); ?>
				</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
