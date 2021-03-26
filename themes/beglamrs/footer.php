<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShopStory_Theme
 */

?>


<div  class="grid-x grid-margin-x ">
	
	<?php
		$event_args = array(
		'post_type' =>'beglamrs_event',
		'posts_per_page' => 3,
	);
		$event_query = new WP_Query($event_args);
		if(is_front_page()){
		if($event_query->have_posts()){
			while($event_query->have_posts())
				{
				$event_query->the_post();
				?>
				<div class=" cell large-4 medium-4 small-4 ">
					<?php if(has_post_thumbnail()) {  ?>
					<div class="card">
						<img class="query-imgs" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
					</div>
					<div class="card-section">
                        <h4 class="EventHead"><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                        <p><a href="<?php the_permalink(); ?>">Go to Post ></a></p>
                    </div>
					<?php } ?>
				
				</div>
					
				<?php
				};
			}}
			?>
			
</div>

	<footer id="colophon" class="site-footer">
	
	<div class="grid-x grid-margin-x">
		
    <div class="cell large-6 large-offset-5 first ">
		<h4>Find Us On</h4>

	<!-- Social Media Icons -->
		<?php
		$facebook_url=get_theme_mod('facebook_url');
		$twitter_url=get_theme_mod('twitter_url');
		$instagram_url=get_theme_mod('instagram_url');
		
		if($facebook_url){
		?>
		<div class="socialMedia">
		<a class="facebook_link" href=" <?php echo esc_url($facebook_url);?>"><img class="imagefacebook" width="45px" height="50px"  src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fb.png"/> 
		<img src="<?php echo $image_url;?>" />
		</a>
		<?php	
	}
		
		if($twitter_url){
			?>
		<a  class=" twitter_link" href=" <?php echo esc_url($twitter_url);?>"><img class="imagetwitter"  width="45px" height="50px" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/tw.png"/> 
		
		<img src="<?php echo $image_url;?>" />
		</a>
		<?php 
	}
		
		if($instagram_url){
			?>
		<a class="instagram_link" href=" <?php echo esc_url($instagram_url);?>"><img class="imageinstagram"  src="<?php echo get_stylesheet_directory_uri();?>/assets/images/in.png"/>
		<img src="<?php echo $image_url;?>" />	
		</a>
		<?php
	}
		?>
		</div>



		<!-- <div class="site-info">
			<a href=""
			<?php echo esc_url( __( 'https://wordpress.org/', 'beglamrs' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'beglamrs' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'beglamrs' ), 'beglamrs' );
				?>
		</div>.site-info -->
	</div>
	
	<div class="cell large-3 large-offset-1 second" >
	<h5>Quick Links!</h5>
	<?php
			
			if(has_nav_menu('menu-primary')){
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'footer-menu',
				)
			);
		}
			?>
	</div>
	</div>
<div class="grid-x grid-margin-x">
<div class="cell large-12  third">
	<p>©️2021 <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'beglamrs' ) );
				?> 
				<p>All Rights Reserved</p>
	<p class="privacy">Proudly powered by Wordpress <?php echo gmdate("Y");?> </p>
</div>
</div>
		
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>