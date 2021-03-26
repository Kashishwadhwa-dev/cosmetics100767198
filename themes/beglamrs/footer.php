<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BE_GLAMRS
 */

?>


<?php
	$recipe_args = array(
		'post_type' 		=> 'beglamrs_recipe',
		'posts_per_page' 	=> 3,
	);

	$recipe_query = new WP_Query($recipe_args);

	if($recipe_query->have_posts()){
		while($recipe_query->have_posts()){
			$recipe_query->the_post();
			?>
			<h2><?php the_title(); ?></h2>
			<?php
		}
	}
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'beglamrs' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'beglamrs' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'beglamrs' ), 'beglamrs', '<a href="http://cosmetics100767198.local">Kashish Wadhwa</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
