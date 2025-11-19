<?php
/**
 * The main template file
 *
 * This is the fallback template for WordPress
 *
 * @package Sterling
 */

get_header();
?>

<main>
	<div class="container" style="max-width: 1200px; margin: 0 auto; padding: 3rem 1rem;">
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
				<?php
			endwhile;
		else :
			?>
			<p><?php esc_html_e('No content found.', 'sterling'); ?></p>
			<?php
		endif;
		?>
	</div>
</main>

<?php
get_footer();
?>
