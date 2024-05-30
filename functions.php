<?php
/**
 * AFMC website functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AFMC_website
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.4.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function afmc_website_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on AFMC website, use a find and replace
		* to change 'afmc-website' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'afmc-website', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Header general', 'afmc-website' ),
			'menu-2' => esc_html__( 'Footer', 'afmc-website' ),
			'menu-3' => esc_html__( 'Membership Medical coders', 'afmc-website' ),
			'menu-4' => esc_html__( 'Membership Attorneys, Corporations', 'afmc-website' ),
			'menu-5' => esc_html__( 'Certified Forensic Medical Coder', 'afmc-website' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'afmc_website_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'afmc_website_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function afmc_website_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'afmc_website_content_width', 640 );
}
add_action( 'after_setup_theme', 'afmc_website_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function afmc_website_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'afmc-website' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'afmc-website' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'afmc_website_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function afmc_website_scripts() {
	//wp_enqueue_style( 'afmc-website-style', get_stylesheet_uri(), array(), _S_VERSION );


	wp_enqueue_style('afmc-website-bundle-css', get_template_directory_uri() . '/dist//bundle.css', array(), _S_VERSION);
	wp_enqueue_style('afmc-website-fonts', 'https://use.typekit.net/kae6ihb.css', array(), _S_VERSION, false);
	wp_style_add_data( 'afmc-website-style', 'rtl', 'replace' );

	wp_enqueue_script( 'afmc-website-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script('afmc-website-bundle-js', get_template_directory_uri() . '/dist/bundle.js', array(), _S_VERSION, true);



	// wp_style_add_data( 'afmc-website-style', 'rtl', 'replace' );
	// wp_enqueue_style('AFMC-bundle-css', get_template_directory_uri() . '/dist//bundle.css', array(), _S_VERSION);

	// wp_enqueue_script( 'afmc-website-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script('AFMC-bundle-js', get_template_directory_uri() . '/dist/bundle.js', array(), _S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'afmc_website_scripts' );

add_action( 'after_setup_theme', 'AFMC_theme_setup' );
function AFMC_theme_setup() {
add_image_size( 'hd', 1920, 1080, true ); 
add_image_size( 'small_square', 455, 455, true );
add_image_size( 'full_mobile', 390, 540, true );  
add_image_size( 'vertical_image', 480, 670, true );  
add_image_size( 'full_image', 1370, 600, true );
add_image_size( 'container_image', 1200, 550, true );
add_image_size( 'educationg_image', 515, 545, true );
add_image_size( 'rectangular_image', 515, 545, true );
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(	'page_title'=>'Theme General Settings',
	'menu_title'=> 'Theme Settings',
	'menu_slug'=> 'theme-general-settings',
	'capability'=> 'edit_posts',
	'redirect'=> false
	));
	acf_add_options_sub_page(array(
	'page_title'=> 'Theme Header Settings',
	'menu_title'=> 'Header',
	'parent_slug'=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
	'page_title' => 'Theme Footer Settings',
	'menu_title'=> 'Footer',
	'parent_slug'=> 'theme-general-settings',
	));
}

/**
 * Implement the Custom Blockss.
 */
require get_template_directory() . '/inc/custom-blocks.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function AFMC_my_login_footer() { ?>
<div id="etmedia" style="margin: 0 auto; text-align: center">Developed by <a target="_blank" href="https://360pmi.com/">360pmi</a></div>
<?php }
add_action( 'login_footer', 'AFMC_my_login_footer');

function AFMC_my_login_logo() { 
?>
<style type='text/css'> 
#login h1 a, .login h1 a {
background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/AFMC-logo.svg);
background-size: contain;
background-position: center center;
background-color: #ffffff;
padding-bottom: 30px;
width: 100%;
}
body.login {
background: white;
}
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'AFMC_my_login_logo' );

function AFMC_the_admin_logo_url( ) {
return home_url();
}
add_filter( 'login_headerurl', 'AFMC_the_admin_logo_url' );

//Walker menu options
function register_custom_nav_walker(){
	require_once 'custom-class-walker-nav-menu.php';
}
add_action( 'after_setup_theme', 'register_custom_nav_walker' );

//Woocommerce support activation
function afmc_website_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'afmc_website_add_woocommerce_support' );

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

//Add excerpt to pages
add_post_type_support( 'page', 'excerpt' );


/** Network Map **/

// Add the custom tab to the user account page
function custom_user_cv_network_tab( $tabs ) {
	$member_id = af_wum()->get_current_user_member_id();
	$userMembership = get_post_meta($member_id, 'af_member_plan', true);

	if ($userMembership == 716 ) {
		$tabs['cv_network'] = __( 'Network Map', 'custom-user-cv-network' );
	}
	
	return $tabs;

}
add_filter( 'woocommerce_account_menu_items', 'custom_user_cv_network_tab' );


add_action( 'init', 'register_cv_network_endpoint');

/**
 * Register New Endpoint.
 *
 * @return void.
 */
function register_cv_network_endpoint() {
	add_rewrite_endpoint( 'cv_network', EP_ROOT | EP_PAGES );
}


// Display the content of the custom tab
function custom_user_cv_network_tab_content() {
    $user_id = get_current_user_id();
    ?>
    <h2><?php _e( 'Network Map', 'custom-user-cv-network' ); ?></h2>
    <p><?php _e( 'Upload your Network Map information below:', 'custom-user-cv-network' ); ?></p>

    <form action="" method="post" id="cv-form" enctype="multipart/form-data">
        <p>
            <label for="cv_network_state"><?php _e( 'Network Map State', 'custom-user-cv-network' ); ?></label><br />
			<select name="cv_network_state">
				<option value="">--Please choose an option--</option>
				<option value="Alabama">Alabama</option>
				<option value="Alaska">Alaska</option>
				<option value="Arizona">Arizona</option>
				<option value="Arkansas">Arkansas</option>
				<option value="California">California</option>
				<option value="Colorado">Colorado</option>
				<option value="Connecticut">Connecticut</option>
				<option value="Delaware">Delaware</option>
				<option value="Florida">Florida</option>
				<option value="Georgia">Georgia</option>
				<option value="Hawaii">Hawaii</option>
				<option value="Idaho">Idaho</option>
				<option value="Illinois">Illinois</option>
				<option value="Indiana">Indiana</option>
				<option value="Iowa">Iowa</option>
				<option value="Kansas">Kansas</option>
				<option value="Kentucky">Kentucky</option>
				<option value="Louisiana">Louisiana</option>
				<option value="Maine">Maine</option>
				<option value="Maryland">Maryland</option>
				<option value="Massachusetts">Massachusetts</option>
				<option value="Michigan">Michigan</option>
				<option value="Minnesota">Minnesota</option>
				<option value="Mississippi">Mississippi</option>
				<option value="Missouri">Missouri</option>
				<option value="Montana">Montana</option>
				<option value="Nebraska">Nebraska</option>
				<option value="Nevada">Nevada</option>
				<option value="New Hampshire">New Hampshire</option>
				<option value="New Jersey">New Jersey</option>
				<option value="New Mexico">New Mexico</option>
				<option value="New York">New York</option>
				<option value="North Carolina">North Carolina</option>
				<option value="North Dakota">North Dakota</option>
				<option value="Ohio">Ohio</option>
				<option value="Oklahoma">Oklahoma</option>
				<option value="Oregon">Oregon</option>
				<option value="Pennsylvania">Pennsylvania</option>
				<option value="Rhode Island">Rhode Island</option>
				<option value="South Carolina">South Carolina</option>
				<option value="South Dakota">South Dakota</option>
				<option value="Tennessee">Tennessee</option>
				<option value="Texas">Texas</option>
				<option value="Utah">Utah</option>
				<option value="Vermont">Vermont</option>
				<option value="Virginia">Virginia</option>
				<option value="Washington">Washington</option>
				<option value="West Virginia">West Virginia</option>
				<option value="Wisconsin">Wisconsin</option>
				<option value="Wyoming">Wyoming</option>
			</select>
        </p>
        <p>
            <label for="cv_network_pdf"><?php _e( 'Network Map PDF', 'custom-user-cv-network' ); ?></label><br />
            <input type="file" name="cv_network_pdf" accept="application/pdf" id="cv_network_pdf" />
        </p>
        <?php wp_nonce_field( 'custom_user_cv_network_nonce', 'custom_user_cv_network_nonce' ); ?>
        <p>
            <input type="submit" name="submit_cv_network" value="<?php _e( 'Save', 'custom-user-cv-network' ); ?>" />
        </p>
    </form>

	<h2>Network Map information:</h2>

	<p>Network Map state: <?php echo esc_attr( get_user_meta( $user_id, 'cv_network_state', true ) ); ?></p>
	<p>Network Map file: <?php echo ( get_user_meta( $user_id, 'cv_network_pdf', true ) ); ?></p>
    <?php
}
add_action( 'woocommerce_account_cv_network_endpoint', 'custom_user_cv_network_tab_content' );

// Save the form data
function custom_user_cv_network_save_data() {
    if ( isset( $_POST['submit_cv_network'] ) && wp_verify_nonce( $_POST['custom_user_cv_network_nonce'], 'custom_user_cv_network_nonce' ) ) {
        $user_id = get_current_user_id();
		$member_id = af_wum()->get_current_user_member_id();

        // Save Network Map State
        if ( isset( $_POST['cv_network_state'] ) ) {
            update_user_meta( $user_id, 'cv_network_state', sanitize_text_field( $_POST['cv_network_state'] ) );
			update_post_meta($member_id, 'cv_network_state', $_POST['cv_network_state']);
        }

        // Save Network Map PDF
		if ( isset( $_FILES['cv_network_pdf'] ) ) {
			require_once( ABSPATH . 'wp-admin/includes/image.php' );
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
			require_once( ABSPATH . 'wp-admin/includes/media.php' );
			$attachment_id = media_handle_upload( 'cv_network_pdf', 0 );
			$attachment_url = wp_get_attachment_url($attachment_id);
			if ( is_wp_error( $attachment_id ) ) {
			   update_user_meta( $user_id, 'cv_network_pdf', $_FILES['cv_network_pdf'] . ": " . $attachment_id->get_error_message() );
			} else {
			   update_user_meta( $user_id, 'cv_network_pdf', $attachment_url );
			   update_post_meta($member_id, 'cv_network_pdf', $attachment_url);
			}
		 }
    }
}
add_action( 'init', 'custom_user_cv_network_save_data' );

add_action( 'show_user_profile', 'cssigniter_show_extra_account_details', 15 );
add_action( 'edit_user_profile', 'cssigniter_show_extra_account_details', 15 );
function cssigniter_show_extra_account_details( $user ) {
	$cvState = get_user_meta( $user->ID, 'cv_network_state', true );
	$cvPDF = get_user_meta( $user->ID, 'cv_network_pdf', true);

	if ( empty( $cvState ) ) {
		return;
	}

	?>
	<h3><?php esc_html_e( 'Extra account details', 'your-text-domain' ); ?></h3>
	<table class="form-table">
	<tr>
		<th><?php esc_html_e( 'CV state', 'your-text-domain' ); ?></label></th>
		<td>
			<p><?php echo esc_html( $cvState ); ?></p>
		</td>
	</tr>
				
	<tr>
		<th><?php esc_html_e( 'CV PDF file', 'your-text-domain' ); ?></label></th>
		<td>
			<p><?php print_r($cvPDF); ?></p>
		</td>
	</tr>
	</table>
<?php
}

/** CEU monitor */
/*
// Add a new endpoint to My Account page
function custom_woocommerce_my_account_endpoint() {
    add_rewrite_endpoint( 'ceu', EP_ROOT | EP_PAGES );
}
add_action( 'init', 'custom_woocommerce_my_account_endpoint' );

// Add the new tab title to My Account navigation
function custom_woocommerce_account_menu_items( $items ) {
	$member_id = af_wum()->get_current_user_member_id();
	$userMembership = get_post_meta($member_id, 'af_member_plan', true);

	if ($userMembership == 716) {
		$items['ceu'] = 'CEU';
	}

	return $items;
	
}
add_filter( 'woocommerce_account_menu_items', 'custom_woocommerce_account_menu_items' );

// Include the new tab content
function custom_woocommerce_account_ceu_content() {
	$current_user_id = get_current_user_id();
	$ceu_data = get_user_meta( $current_user_id, 'ceu_data', true );
	?>
	<div class="ceuBlock">
		<h2>CEU</h2>
		<p>Ten (10) CEUs are required annually upon FMC renewal. These can be obtained through AAPC, AHIMA, AMBA, HCCA, or AFMC, which periodically offers Forensic CEU topics. Keep an eye on our emails for upcoming opportunities throughout the year.</p>

    	<p><?php _e( 'Add your CEU information:', 'text-domain' ); ?></p>

		<?php echo do_shortcode('[formidable id=3]') ?>

		<form method="post" style="display: none;">
			<p>
				<label for="certification_title"><?php _e( 'Certification Title', 'text-domain' ); ?></label>
				<input type="text" name="certification_title" id="certification_title" required>
			</p>
			<p>
				<label for="certification_date"><?php _e( 'Certification Date', 'text-domain' ); ?></label>
				<input type="date" name="certification_date" id="certification_date" required>
			</p>
			<p>
				<label for="certification_organization"><?php _e( 'Certification Organization', 'text-domain' ); ?></label>
				<input type="text" name="certification_organization" id="certification_organization" required>
			</p>
			<p>
				<label for="certification_hours"><?php _e( 'Certification Hours', 'text-domain' ); ?></label>
				<input type="number" name="certification_hours" id="certification_hours" required>
			</p>

			<?php wp_nonce_field( 'ceu_action', 'ceu_nonce' ); ?>
			<input type="submit" name="submit_ceu" value="<?php _e( 'Submit', 'text-domain' ); ?>">
		</form>
		
		<?php

		// Display existing certifications
		$certifications = get_user_meta(get_current_user_id(), 'ceu_data', true);
		//echo '<pre>'; print_r($certifications); echo '</pre>';
		if ($certifications) { ?>
		<?php /*  echo '<ul>';

			$keys = array_keys($certifications);
			for($i = 0; $i < count($certifications); $i++) {
				echo $keys[$i] . "{<br>";
				foreach($certifications[$keys[$i]] as $key => $value) {
					echo $key . " : " . $value . "<br>";
				}
				echo "}<br>";
			}
			echo '</ul>';
			*/
			/*
			$value=0;
			for($i = 0; $i < count($certifications); $i++) {
				$value+= $certifications[$i]['certification_hours'];
			}

		
		?>  
	</div>
	<div class="svg_ceu js-ceuData" style="display: none;">
			
			<p class="valueData" id="<?php echo $value; ?>"></p>

			<svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.4 56.41">
				<defs>
					<style>
						.cls-1,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9,.cls-10,.cls-11,.cls-12,.cls-13{fill:none;}.cls-2{clip-path:url(#clippath-8);}.cls-3{clip-path:url(#clippath-7);}.cls-4{clip-path:url(#clippath-6);}.cls-5{clip-path:url(#clippath-9);}.cls-6{clip-path:url(#clippath-5);}.cls-7{clip-path:url(#clippath-3);}.cls-8{clip-path:url(#clippath-4);}.cls-9{clip-path:url(#clippath-2);}.cls-10{clip-path:url(#clippath-1);}.cls-14{fill:#d3d9d9;}.cls-15{fill:#4a6577;}.cls-16{fill:#627784;}.cls-17{fill:#778188;}.cls-11{clip-path:url(#clippath-10);}.cls-12{clip-path:url(#clippath);}.cls-13{stroke:#778188;stroke-miterlimit:10;stroke-width:.5px;}
					</style>
					<clipPath id="clippath">
						<rect class="cls-1" x="18.32" y="42.38" width="423.77" height="3.58"/>
					</clipPath>
					<clipPath id="clippath-1">
						<path class="cls-1" d="m18.5,0h423.9C452.34,0,460.4,8.07,460.4,18v1c0,9.93-8.07,18-18,18H18.5C8.29,37,0,28.71,0,18.5H0C0,8.29,8.29,0,18.5,0Z"/>
					</clipPath>
					<clipPath id="clippath-2">
						<path class="cls-1" d="m18.74,0h371.86v37H18.74C8.53,37,.24,28.71.24,18.5H.24C.24,8.29,8.53,0,18.74,0Z"/>
					</clipPath>
					<clipPath id="clippath-3">
						<path class="cls-1" d="m18.96,0h324.64v37H18.96C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
					<clipPath id="clippath-4">
						<path class="cls-1" d="m18.96,0h278.64v37H18.96C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
					<clipPath id="clippath-5">
						<path class="cls-1" d="m18.96,0h232.64v37H18.96C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
					<clipPath id="clippath-6">
						<path class="cls-1" d="m18.96,0h186.64v37H18.96C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
					<clipPath id="clippath-7">
						<path class="cls-1" d="m18.96,0h140.64v37H18.96C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
					<clipPath id="clippath-8">
						<path class="cls-1" d="m18.96,0h94.64v37H18.96C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
					<clipPath id="clippath-9">
						<path class="cls-1" d="m18.96,0h47.64v37H18.96C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
					<clipPath id="clippath-10">
						<path class="cls-1" d="m18.96,0h1.64v37h-1.64C8.75,37,.46,28.71.46,18.5H.46C.46,8.29,8.75,0,18.96,0Z"/>
					</clipPath>
				</defs>
				<g id="ceu_bar">
					<g id="Rate"> 
						<g class="cls-12"> 
							<g id="_Grid_Repeat_">
								<line class="cls-13" x1="20.64" y1="42.38" x2="20.64" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-2">
								<line class="cls-13" x1="66.87" y1="42.38" x2="66.87" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-3">
								<line class="cls-13" x1="113.11" y1="42.38" x2="113.11" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-4">
								<line class="cls-13" x1="159.35" y1="42.38" x2="159.35" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-5">
								<line class="cls-13" x1="205.59" y1="42.38" x2="205.59" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-6">
								<line class="cls-13" x1="251.83" y1="42.38" x2="251.83" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-7">
								<line class="cls-13" x1="298.07" y1="42.38" x2="298.07" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-8">
								<line class="cls-13" x1="344.31" y1="42.38" x2="344.31" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-9">
								<line class="cls-13" x1="390.55" y1="42.38" x2="390.55" y2="77.85"/>
							</g>
							<g id="_Grid_Repeat_-10">
								<line class="cls-13" x1="436.79" y1="42.38" x2="436.79" y2="77.85"/>
							</g>
						</g>
						<path class="cls-17" d="m22.02,55.01v.48h-2.49v-.48h.99v-2.33s-.11.1-.19.15c-.09.05-.19.1-.29.15-.11.05-.22.08-.34.12-.12.03-.22.05-.31.05v-.5c.1,0,.21-.02.34-.07s.24-.11.36-.17c.11-.07.21-.13.29-.19.08-.06.13-.1.14-.13h.62v2.93h.88Z"/>
						<path class="cls-17" d="m65.14,55.49c0-.16.02-.31.04-.45.03-.14.09-.27.17-.4.08-.13.2-.25.34-.36.15-.12.34-.23.57-.35.14-.06.28-.13.42-.19.14-.06.27-.13.39-.2.12-.07.21-.14.29-.22.08-.08.11-.17.11-.28,0-.07-.02-.14-.06-.2s-.09-.13-.16-.18-.16-.09-.26-.13c-.1-.03-.22-.05-.36-.05s-.27.02-.38.05-.21.08-.3.13-.16.1-.23.16c-.06.06-.12.11-.16.15l-.4-.38s.1-.08.19-.15c.09-.06.2-.12.33-.19.13-.06.29-.12.46-.16s.37-.07.59-.07.4.02.58.07c.17.05.32.12.43.21.12.09.21.19.27.31.06.12.1.24.1.37,0,.16-.04.29-.12.41-.08.12-.17.22-.29.3-.11.09-.23.16-.36.22-.13.06-.25.11-.35.16s-.22.1-.34.16c-.13.06-.25.13-.36.21-.12.08-.22.16-.3.26-.09.1-.14.2-.16.31h2.37v.48h-3.09Z"/>
						<path class="cls-17" d="m113.96,54.08c.3.04.53.16.7.35s.26.43.26.71c0,.18-.04.35-.12.5s-.19.28-.34.39c-.15.11-.32.19-.52.25-.2.06-.43.09-.68.09-.35,0-.66-.06-.93-.17-.27-.11-.47-.27-.62-.48l.41-.35c.11.16.25.29.43.39.18.09.42.14.71.14.32,0,.57-.06.75-.19.18-.12.27-.31.27-.56s-.1-.45-.29-.6c-.2-.15-.48-.22-.86-.22h-.18v-.44h.19c.33,0,.59-.07.77-.21.18-.14.27-.31.27-.52s-.09-.37-.26-.47c-.17-.1-.39-.16-.65-.16s-.48.05-.67.14-.34.22-.45.39l-.37-.33c.06-.1.14-.19.25-.27.1-.08.22-.15.36-.21.14-.06.28-.11.44-.14.16-.03.33-.05.5-.05.22,0,.42.03.6.08.18.05.34.12.47.21s.23.2.31.33c.07.13.11.28.11.44,0,.12-.02.23-.06.34-.04.11-.1.21-.17.29-.08.09-.17.16-.28.22-.11.06-.23.1-.36.12Z"/>
						<path class="cls-17" d="m160.23,56.25v-1.01h-2.23v-.47l2.42-2.69h.42v2.68h.61v.48h-.61v1.01h-.61Zm-1.6-1.49h1.66v-1.87l-1.66,1.87Z"/>
						<path class="cls-17" d="m205.79,53.61c.23,0,.44.03.63.1.2.07.37.16.51.28.14.12.26.26.34.43.08.17.12.35.12.55,0,.21-.04.4-.13.58-.09.17-.21.32-.37.45s-.34.22-.56.29-.44.1-.68.1c-.35,0-.67-.07-.95-.21-.28-.14-.5-.33-.64-.57l.38-.29c.13.18.3.33.52.44s.45.17.7.17c.16,0,.3-.02.44-.07.14-.05.25-.11.35-.19.1-.08.18-.18.23-.3.06-.12.08-.24.08-.38,0-.13-.03-.25-.08-.36-.06-.11-.13-.21-.23-.29s-.21-.14-.34-.19c-.13-.04-.27-.07-.42-.07-.2,0-.38.04-.56.11s-.32.18-.43.32h-.55s.02-.07.03-.15.04-.18.07-.3c.03-.12.06-.25.09-.39.03-.14.06-.29.1-.44.08-.34.17-.73.26-1.15h2.39v.48h-1.94l-.3,1.35c.1-.09.23-.16.38-.22.15-.05.33-.08.52-.08Z"/>
						<path class="cls-17" d="m253.74,54.09c0,.2-.04.39-.13.57s-.21.33-.38.47c-.16.13-.35.24-.56.31s-.44.11-.69.11c-.26,0-.51-.04-.72-.13-.22-.08-.41-.2-.57-.36s-.28-.35-.36-.57c-.09-.23-.13-.48-.13-.77,0-.42.04-.78.13-1.1.09-.31.21-.57.38-.78.16-.21.36-.37.58-.47s.48-.16.76-.16c.32,0,.61.07.87.2.26.13.47.32.61.56l-.37.32c-.1-.19-.25-.34-.45-.45-.2-.11-.42-.16-.67-.16-.19,0-.36.04-.51.11s-.28.18-.4.33-.2.32-.26.52c-.06.21-.09.44-.1.7.1-.21.27-.37.49-.5s.49-.19.78-.19c.24,0,.46.04.67.11s.39.18.54.3.27.28.36.45.13.36.13.56Zm-1.75,1.01c.16,0,.31-.03.45-.08s.27-.13.37-.22c.11-.09.19-.2.25-.32s.09-.25.09-.39-.03-.26-.09-.39-.15-.23-.25-.32c-.11-.09-.23-.16-.37-.21s-.29-.08-.45-.08-.31.03-.45.08c-.14.05-.27.13-.37.21-.11.09-.19.2-.25.32s-.09.25-.09.39.03.27.09.39.15.23.25.32c.11.09.23.16.37.22.14.05.29.08.45.08Z"/>
						<path class="cls-17" d="m298.56,52.49h-2.53v-.48h3.5l-2.48,4.24h-.69l2.21-3.76Z"/>
						<path class="cls-17" d="m346.25,54.29c0,.19-.05.36-.14.52s-.22.28-.38.39c-.16.11-.34.19-.56.25-.21.06-.43.09-.67.09s-.47-.03-.68-.1c-.21-.07-.39-.16-.54-.27-.15-.11-.27-.25-.36-.4s-.13-.32-.13-.5c0-.13.03-.25.08-.36s.13-.21.21-.3c.08-.09.18-.16.29-.23.11-.07.22-.12.33-.15-.1-.04-.2-.08-.29-.14-.09-.06-.17-.12-.24-.2s-.12-.15-.16-.24c-.04-.09-.06-.18-.06-.28,0-.18.05-.34.14-.48.09-.14.22-.25.37-.35.15-.1.32-.17.5-.21.18-.05.37-.07.55-.07s.37.02.56.07c.19.05.36.12.51.21.15.09.27.21.37.35.09.14.14.3.14.48,0,.2-.08.37-.23.53-.15.15-.33.27-.54.34.12.04.24.1.36.17.11.07.21.15.29.24.08.09.15.19.2.3s.08.23.08.36Zm-.62-.04c0-.13-.03-.24-.1-.34-.07-.1-.15-.19-.26-.26s-.23-.12-.36-.16c-.13-.04-.27-.05-.4-.05s-.27.02-.41.06-.25.09-.35.16c-.1.07-.19.16-.25.26s-.09.21-.09.34.03.24.1.34c.07.1.15.18.26.25.11.07.23.12.36.16s.26.06.4.06.27-.02.41-.06c.13-.04.25-.1.35-.17s.19-.16.25-.26c.07-.1.1-.21.1-.33Zm-2.07-1.88c0,.11.03.2.09.28.06.08.13.15.23.21.09.06.19.1.31.13s.22.04.33.04.22-.02.33-.04.21-.07.31-.13c.09-.06.17-.13.22-.21.06-.08.09-.18.09-.29,0-.1-.03-.19-.08-.27-.05-.08-.12-.15-.21-.2-.09-.06-.19-.1-.31-.13-.12-.03-.24-.04-.36-.04s-.24.02-.36.04-.21.07-.3.13c-.09.06-.16.13-.21.21-.05.08-.08.17-.08.27Z"/>
						<path class="cls-17" d="m389.09,53.54c0-.2.04-.39.13-.57s.21-.33.38-.47c.16-.13.35-.24.56-.31.21-.08.44-.11.69-.11.26,0,.5.04.72.13.22.08.41.2.57.36s.28.35.36.57c.09.23.13.48.13.77,0,.42-.04.78-.13,1.1-.09.31-.21.57-.38.78-.16.21-.36.37-.58.47s-.48.16-.76.16c-.32,0-.61-.07-.87-.2-.26-.13-.47-.32-.61-.56l.37-.32c.1.19.25.34.45.45.2.11.42.16.67.16.38,0,.68-.15.91-.44s.34-.7.35-1.23c-.1.21-.27.37-.49.5s-.49.19-.78.19c-.24,0-.46-.04-.67-.11s-.39-.17-.54-.3-.27-.28-.36-.45-.13-.36-.13-.56Zm1.75-1.01c-.16,0-.31.03-.45.08-.14.05-.27.13-.37.22-.11.09-.19.2-.25.32s-.09.25-.09.39.03.27.09.39.15.23.25.32c.11.09.23.16.37.21.14.05.29.08.45.08s.31-.03.45-.08c.14-.05.26-.13.37-.21.11-.09.19-.2.25-.32s.09-.25.09-.39-.03-.27-.09-.39c-.06-.12-.15-.23-.25-.32-.11-.09-.23-.16-.37-.22-.14-.05-.29-.08-.45-.08Z"/>
						<path class="cls-17" d="m435.8,55.01v.48h-2.49v-.48h.99v-2.33s-.11.1-.19.15c-.09.05-.19.1-.29.15-.11.05-.22.08-.34.12-.12.03-.22.05-.3.05v-.5c.1,0,.21-.02.34-.07s.24-.11.36-.17c.11-.07.21-.13.29-.19.08-.06.13-.1.14-.13h.62v2.93h.88Z"/>
						<path class="cls-17" d="m439.85,53.74c0,.26-.04.5-.13.73-.09.22-.21.41-.37.57-.16.16-.34.29-.56.38s-.45.13-.7.13-.49-.04-.7-.13c-.22-.09-.4-.21-.56-.38-.15-.16-.28-.35-.36-.57-.09-.22-.13-.46-.13-.73s.04-.5.13-.73.21-.41.36-.57c.16-.16.34-.29.56-.38.21-.09.45-.14.7-.14s.48.05.7.14.4.22.56.38.28.35.37.57.13.46.13.73Zm-.62,0c0-.2-.03-.37-.08-.54-.06-.16-.13-.3-.24-.42-.1-.12-.22-.21-.36-.27-.14-.06-.29-.1-.46-.1s-.33.03-.47.1c-.14.06-.26.15-.36.27-.1.12-.18.26-.23.42-.06.16-.08.34-.08.54s.03.38.08.54.13.3.23.42c.1.12.22.21.36.27.14.06.3.1.47.1s.32-.03.46-.1c.14-.06.26-.15.36-.27.1-.12.18-.25.24-.42s.08-.34.08-.54Z"/>
					</g>
					<g id="Guide">
						<rect class="cls-14" x=".2" y="0" width="460" height="37" rx="18.5" ry="18.5"/>
					</g>
					<g class="hide" id="10">
						<g class="cls-10">
							<rect class="cls-15" x=".2" y="0" width="460" height="37" rx="18.5" ry="18.5"/>
							<rect class="cls-16" x="-80.04" y="13.04" width="126.57" height="10" transform="translate(-17.66 -6.56) rotate(-45)"/>
							<rect class="cls-16" x="-53.04" y="13.04" width="126.57" height="10" transform="translate(-9.75 12.53) rotate(-45)"/>
							<rect class="cls-16" x="-26.04" y="13.04" width="126.57" height="10" transform="translate(-1.84 31.62) rotate(-45)"/>
							<rect class="cls-16" x=".96" y="13.04" width="126.57" height="10" transform="translate(6.06 50.72) rotate(-45)"/>
							<rect class="cls-16" x="27.96" y="13.04" width="126.57" height="10" transform="translate(13.97 69.81) rotate(-45)"/>
							<rect class="cls-16" x="54.96" y="13.04" width="126.57" height="10" transform="translate(21.88 88.9) rotate(-45)"/>
							<rect class="cls-16" x="81.96" y="13.04" width="126.57" height="10" transform="translate(29.79 108) rotate(-45)"/>
							<rect class="cls-16" x="108.96" y="13.04" width="126.57" height="10" transform="translate(37.7 127.09) rotate(-45)"/>
							<rect class="cls-16" x="135.96" y="13.04" width="126.57" height="10" transform="translate(45.61 146.18) rotate(-45)"/>
							<rect class="cls-16" x="162.96" y="13.04" width="126.57" height="10" transform="translate(53.52 165.27) rotate(-45)"/>
							<rect class="cls-16" x="189.96" y="13.04" width="126.57" height="10" transform="translate(61.42 184.36) rotate(-45)"/>
							<rect class="cls-16" x="216.96" y="13.04" width="126.57" height="10" transform="translate(69.33 203.45) rotate(-45)"/>
							<rect class="cls-16" x="243.96" y="13.04" width="126.57" height="10" transform="translate(77.24 222.54) rotate(-45)"/>
							<rect class="cls-16" x="270.96" y="13.04" width="126.57" height="10" transform="translate(85.14 241.63) rotate(-45)"/>
							<rect class="cls-16" x="297.96" y="13.04" width="126.57" height="10" transform="translate(93.05 260.73) rotate(-45)"/>
							<rect class="cls-16" x="324.96" y="13.04" width="126.57" height="10" transform="translate(100.96 279.82) rotate(-45)"/>
							<rect class="cls-16" x="351.96" y="13.04" width="126.57" height="10" transform="translate(108.87 298.91) rotate(-45)"/>
							<rect class="cls-16" x="378.96" y="13.04" width="126.57" height="10" transform="translate(116.78 318) rotate(-45)"/>
							<rect class="cls-16" x="405.96" y="13.04" width="126.57" height="10" transform="translate(124.68 337.09) rotate(-45)"/>
						</g> 
					</g>
					<g class="hide" id="9">
						<g class="cls-9">
							<path class="cls-15" d="m390.6,37H18.94c-10.22,0-18.5-8.28-18.5-18.5H.44C.44,8.28,8.73,0,18.94,0h371.66v37Z"/><rect class="cls-16" x="-79.8" y="13.04" width="126.57" height="10" transform="translate(-17.59 -6.39) rotate(-45)"/>
							<rect class="cls-16" x="-52.8" y="13.04" width="126.57" height="10" transform="translate(-9.68 12.7) rotate(-45)"/><rect class="cls-16" x="-25.8" y="13.04" width="126.57" height="10" transform="translate(-1.77 31.79) rotate(-45)"/><rect class="cls-16" x="1.2" y="13.04" width="126.57" height="10" transform="translate(6.14 50.89) rotate(-45)"/><rect class="cls-16" x="28.2" y="13.04" width="126.57" height="10" transform="translate(14.04 69.98) rotate(-45)"/><rect class="cls-16" x="55.2" y="13.04" width="126.57" height="10" transform="translate(21.95 89.07) rotate(-45)"/><rect class="cls-16" x="82.2" y="13.04" width="126.57" height="10" transform="translate(29.86 108.17) rotate(-45)"/><rect class="cls-16" x="109.2" y="13.04" width="126.57" height="10" transform="translate(37.77 127.26) rotate(-45)"/>
							<rect class="cls-16" x="136.2" y="13.04" width="126.57" height="10" transform="translate(45.68 146.35) rotate(-45)"/><rect class="cls-16" x="163.2" y="13.04" width="126.57" height="10" transform="translate(53.59 165.44) rotate(-45)"/><rect class="cls-16" x="190.2" y="13.04" width="126.57" height="10" transform="translate(61.49 184.53) rotate(-45)"/><rect class="cls-16" x="217.2" y="13.04" width="126.57" height="10" transform="translate(69.4 203.62) rotate(-45)"/><rect class="cls-16" x="244.2" y="13.04" width="126.57" height="10" transform="translate(77.31 222.71) rotate(-45)"/><rect class="cls-16" x="271.2" y="13.04" width="126.57" height="10" transform="translate(85.21 241.8) rotate(-45)"/><rect class="cls-16" x="298.2" y="13.04" width="126.57" height="10" transform="translate(93.12 260.9) rotate(-45)"/><rect class="cls-16" x="325.2" y="13.04" width="126.57" height="10" transform="translate(101.03 279.99) rotate(-45)"/><rect class="cls-16" x="352.2" y="13.04" width="126.57" height="10" transform="translate(108.94 299.08) rotate(-45)"/><rect class="cls-16" x="379.2" y="13.04" width="126.57" height="10" transform="translate(116.85 318.17) rotate(-45)"/><rect class="cls-16" x="406.2" y="13.04" width="126.57" height="10" transform="translate(124.75 337.26) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="8">
						<g class="cls-7">
							<path class="cls-15" d="m343.6,37H19.14c-10.22,0-18.5-8.28-18.5-18.5h0C.64,8.28,8.92,0,19.14,0h324.47v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="7">
						<g class="cls-8">
							<path class="cls-15" d="m297.6,37H19.11c-10.22,0-18.5-8.28-18.5-18.5h0C.61,8.28,8.89,0,19.11,0h278.49v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="6">
						<g class="cls-6">
							<path class="cls-15" d="m251.6,37H19.09c-10.22,0-18.5-8.28-18.5-18.5h0C.59,8.28,8.87,0,19.09,0h232.51v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="5">
						<g class="cls-4">
							<path class="cls-15" d="m205.6,37H19.06c-10.22,0-18.5-8.28-18.5-18.5h0C.56,8.28,8.85,0,19.06,0h186.54v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="4">
						<g class="cls-3">
							<path class="cls-15" d="m159.6,37H19.04c-10.22,0-18.5-8.28-18.5-18.5h0C.54,8.28,8.82,0,19.04,0h140.56v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="3">
						<g class="cls-2">
							<path class="cls-15" d="m113.6,37H19.02c-10.22,0-18.5-8.28-18.5-18.5h0C.52,8.28,8.8,0,19.02,0h94.58v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="2">
						<g class="cls-5">
							<path class="cls-15" d="m66.6,37H18.99c-10.22,0-18.5-8.28-18.5-18.5H.49C.49,8.28,8.77,0,18.99,0h47.61v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
					<g class="hide" id="1">
						<g class="cls-11">
							<path class="cls-15" d="m20.6,37h-1.63c-10.22,0-18.5-8.28-18.5-18.5H.47C.47,8.28,8.75,0,18.97,0h1.63v37Z"/><rect class="cls-16" x="-79.58" y="13.04" width="126.57" height="10" transform="translate(-17.53 -6.24) rotate(-45)"/><rect class="cls-16" x="-52.58" y="13.04" width="126.57" height="10" transform="translate(-9.62 12.86) rotate(-45)"/><rect class="cls-16" x="-25.58" y="13.04" width="126.57" height="10" transform="translate(-1.71 31.95) rotate(-45)"/><rect class="cls-16" x="1.42" y="13.04" width="126.57" height="10" transform="translate(6.2 51.04) rotate(-45)"/><rect class="cls-16" x="28.42" y="13.04" width="126.57" height="10" transform="translate(14.11 70.13) rotate(-45)"/><rect class="cls-16" x="55.42" y="13.04" width="126.57" height="10" transform="translate(22.02 89.23) rotate(-45)"/><rect class="cls-16" x="82.42" y="13.04" width="126.57" height="10" transform="translate(29.93 108.32) rotate(-45)"/><rect class="cls-16" x="109.42" y="13.04" width="126.57" height="10" transform="translate(37.84 127.41) rotate(-45)"/><rect class="cls-16" x="136.42" y="13.04" width="126.57" height="10" transform="translate(45.75 146.51) rotate(-45)"/><rect class="cls-16" x="163.42" y="13.04" width="126.57" height="10" transform="translate(53.65 165.6) rotate(-45)"/><rect class="cls-16" x="190.42" y="13.04" width="126.57" height="10" transform="translate(61.55 184.68) rotate(-45)"/><rect class="cls-16" x="217.42" y="13.04" width="126.57" height="10" transform="translate(69.46 203.77) rotate(-45)"/><rect class="cls-16" x="244.42" y="13.04" width="126.57" height="10" transform="translate(77.37 222.86) rotate(-45)"/><rect class="cls-16" x="271.42" y="13.04" width="126.57" height="10" transform="translate(85.28 241.96) rotate(-45)"/><rect class="cls-16" x="298.42" y="13.04" width="126.57" height="10" transform="translate(93.19 261.05) rotate(-45)"/><rect class="cls-16" x="325.42" y="13.04" width="126.57" height="10" transform="translate(101.09 280.14) rotate(-45)"/><rect class="cls-16" x="352.42" y="13.04" width="126.57" height="10" transform="translate(109 299.23) rotate(-45)"/><rect class="cls-16" x="379.42" y="13.04" width="126.57" height="10" transform="translate(116.91 318.32) rotate(-45)"/><rect class="cls-16" x="406.42" y="13.04" width="126.57" height="10" transform="translate(124.82 337.42) rotate(-45)"/>
						</g>
					</g>
				</g>
			</svg>
		</div>
	</div>

	<?php 
    }else{
		echo '<p>Not certifications found</p>';
	}
}
add_action( 'woocommerce_account_ceu_endpoint', 'custom_woocommerce_account_ceu_content' );

// Save CEU data on form submission
function save_ceu_data() {
    if ( isset( $_POST['submit_ceu'] ) && wp_verify_nonce( $_POST['ceu_nonce'], 'ceu_action' ) ) {
        $current_user_id = get_current_user_id();
        $certification_title = sanitize_text_field( $_POST['certification_title'] );
        $certification_date = sanitize_text_field( $_POST['certification_date'] );
        $certification_organization = sanitize_text_field( $_POST['certification_organization'] );
        $certification_hours = absint( $_POST['certification_hours'] );

        $ceu_data = get_user_meta( $current_user_id, 'ceu_data', true );

        // If no existing data, initialize an empty array
        if ( empty( $ceu_data ) || ! is_array( $ceu_data ) ) {
            $ceu_data = array();
        }

        // Add the new entry to the array
        $ceu_data[] = array(
            'certification_title' => $certification_title,
            'certification_date' => $certification_date,
            'certification_organization' => $certification_organization,
            'certification_hours' => $certification_hours,
        );

        // Update the user meta with the new array of CEU data
        update_user_meta( $current_user_id, 'ceu_data', $ceu_data );

        // Optionally, you can redirect the user after the form submission
        wp_safe_redirect( wc_get_account_endpoint_url( 'ceu' ) );
        exit;
    }
}
add_action( 'init', 'save_ceu_data' );
*/

/** Display fields in user profile */
/*
add_action( 'show_user_profile', 'ceumonitor_show_extra_account_details', 15 );
add_action( 'edit_user_profile', 'ceumonitor_show_extra_account_details', 15 );
function ceumonitor_show_extra_account_details( $user ) {
	$certs = get_user_meta($user->ID, 'ceu_data', true);
	
	if ( empty( $certs ) ) {
		return;
	} else{ ?>

		<h3><?php esc_html_e( 'CEU details', 'your-text-domain' ); ?></h3>
		<table class="form-table">
			<tr>
				<th><?php esc_html_e( 'CEU information', 'your-text-domain' ); ?></label></th>
				<?php 
				$keys = array_keys($certs);
				for($i = 0; $i < count($certs); $i++) { ?>
					<td>
						<?php foreach($certs[$keys[$i]] as $key => $value) { ?>
							
							<span><?php echo $key . " : " . $value . "<br>"; ?></span>
							
						<?php } ?>
					</td>
				<?php } ?>
			</tr>
		</table>
	
<?php
	}
}
*/