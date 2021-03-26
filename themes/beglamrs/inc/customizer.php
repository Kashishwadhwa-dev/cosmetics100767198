<?php
/**
 * BE GLAMRS Theme Customizer
 *
 * @package BE_GLAMRS
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function beglamrs_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'beglamrs_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'beglamrs_customize_partial_blogdescription',
			)
		);
	}

	
$wp_customize->add_section( 
	'Social_Media',
	array(
    'title'       => 'Social Media Links',
	// 'panel'		=>'social_media',
	) 
);

//facebook control
$wp_customize->add_setting( 
	'facebook_url',
);
$wp_customize->add_control( 
	'facebook_url',
	array(
		'label'=>'Facebook URL',
		'setting'=>'facebook_url',
		'section'=>'Social_Media',
	)
);

//twitter control
$wp_customize->add_setting( 
	'twitter_url',
);
$wp_customize->add_control( 
	'twitter_url',
	array(
		'label'=>'Twitter',
		'setting'=>'twitter_url',
		'section'=>'Social_Media',
	)
);

//instagram control
$wp_customize->add_setting( 
	'instagram_url',
);
$wp_customize->add_control( 
	'instagram_url',
	array(
		'label'=>'Instagram',
		'setting'=>'instagram_url',
		'section'=>'Social_Media',
	)
);

}
add_action( 'customize_register', 'beglamrs_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function beglamrs_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function beglamrs_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function beglamrs_customize_preview_js() {
	wp_enqueue_script( 'beglamrs-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'beglamrs_customize_preview_js' );
