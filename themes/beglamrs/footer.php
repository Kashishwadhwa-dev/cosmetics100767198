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
		$tutorial_args = array(
		'post_type' =>'beglamrs_tutorial',
		'posts_per_page' => 3,
	);
		$tutorial_query = new WP_Query($tutorial_args);
		if(is_front_page()){
		if($tutorial_query->have_posts()){
			while($tutorial_query->have_posts())
				{
				$tutorial_query->the_post();
				?>
				<div class=" cell small-offset-1 small-10 medium-4 large-offset-0 large-4 tut">
					<?php if(has_post_thumbnail()) {  ?>
					<div class="card">
						<img class="query-imgs" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
					</div>
					<div class="card-section">
                        <h4 class="TutorialHeading"><?php the_title(); ?></h4>
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
		<a class="instagram_link" href=" <?php echo esc_url($instagram_url);?>"><img class="imageinstagram" width="35px" height="40px" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/in.png"/>
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
	
	<!-- <div class="cell large-3 large-offset-1 second" >
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
	</div> -->
	</div>
<div class="grid-x grid-margin-x">
<div class="cell large-12  third">
	<p class="by"><?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'beglamrs' ) );
				?> By Kashish Wadhwa</p>
	<p class="privacy">Proudly powered by Wordpress <?php echo gmdate("Y");?> </p>
</div>
</div>
		
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>