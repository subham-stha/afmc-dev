<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AFMC_website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="google-site-verification" content="zvZXVzXim_IpmLkMnosQcitk_H7N1K27DVFtdsjzusU" />
	<?php 
	if ( get_field('gtm_code', 'options') ) : ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','<?php echo get_field('gtm_code', 'options'); ?>');</script>
	<!-- End Google Tag Manager -->
	<?php endif; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php 
if ( get_field('gtm_code', 'options') ) : ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_field('gtm_code', 'options'); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'afmc-website' ); ?></a>

	<?php if ( get_field('active_white_header') ) : ?>
		<?php $extra_class= "whiteBg"; ?>
		<?php else: ?>
		<?php $extra_class= "blueBg"; ?>
	<?php endif; ?>

	<?php 
		$member_id = af_wum()->get_current_user_member_id();
		$userMembership = get_post_meta($member_id, 'af_member_plan', true);
	?>

	<header id="header" class="header js-entryAnimation js-header <?php echo $extra_class; ?>">

		<div class="header__container container">
			<div class="header__logoMenu">
				<div class="header__logoMenu--logo js-logo">
					<?php if ( get_field('header_logo', 'options') ) : $image = get_field('header_logo', 'options'); ?>
						<a class="logo-white" href="<?php echo home_url(); ?>" aria-label="Go to homepage">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						</a>
					<?php endif; ?>
						
					<?php if ( get_field('header_logo_blue', 'options') ) : $image = get_field('header_logo_blue', 'options'); ?>
						<a class="logo-blue" href="<?php echo home_url(); ?>" aria-label="Go to homepage">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						</a>
					<?php endif; ?>
					
				</div>
				
				<div class="header__logoMenu--menu js-nav">
					<nav id="site-navigation" class="nav-bar">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'afmc-website' ); ?></button> -->

						
						<?php 
						switch ($userMembership) {
							case '630':
								$menuLocation = 'menu-3';
								break;

							case '709':
								$menuLocation = 'menu-4';
								break;
							
							case '716':
								$menuLocation = 'menu-5';
								break;
						
							default:
								$menuLocation = 'menu-1';
								break;
						}
						?>


						<?php
						wp_nav_menu(
							array(
								'theme_location' => $menuLocation,
								'menu_id'        => 'primary-menu',
								'container'		 => 'ul',
								'menu_class'	 => 'header__nav--menu',
								'walker' 		 => new Custom_Walker_Nav_Menu
							)
						);
						?>
					</nav><!-- #site-navigation -->

					<div class="mobile__signIn">
						<div>
							
							<?php 
							$link = get_field('link_sing_up', 'options');
							if( $link ): 
								$link_url = $link['url'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<?php
								if ( is_user_logged_in() ) {
									echo get_field('title_my_account_link', 'options');
								} if ( ! is_user_logged_in() ) {
									$field_value = get_field('title_sing_up_link', 'options');
									echo $field_value;
								}

								?>
								</a>
							<?php endif; ?>

						</div>
						<?php 
						$link = get_field('login_mobile_menu', 'options');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			
			<div class="header__signHamburguer">
				<div class="header__signIn">
					<figure class="icon icon-white">
						<?php if ( get_field('icon_sing_up', 'options') ) : $image = get_field('icon_sing_up', 'options'); ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						<?php endif; ?>
					</figure>

					<figure class="icon icon-blue">
						<?php if ( get_field('icon_sing_up_blue', 'options') ) : $image = get_field('icon_sing_up_blue', 'options'); ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						<?php endif; ?>
					</figure>

					<!-- header bag, back number on span -->
					<?php 
					$cart_page_id = wc_get_page_id( 'cart' );
					?>
					
					<a class="header__bag--white" href="<?php echo get_the_permalink( $cart_page_id )?>">
						<span><?php echo count( WC()->cart->get_cart() ) ?></span>
						<figure class="icon icon-white">
								<img src="<?php echo get_template_directory_uri(); ?>/src/assets/bag-white.svg" alt="" />
						</figure>
					</a>

					<a class="header__bag--blue" href="<?php echo get_the_permalink( $cart_page_id )?>">
						<span><?php echo count( WC()->cart->get_cart() ) ?></span>
						<figure class="icon icon-blue">
								<img src="<?php echo get_template_directory_uri(); ?>/src/assets/bag-blue.svg" alt="" />
						</figure>
					</a>
					
					<?php 
					$link = get_field('link_sing_up', 'options');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php
						if ( is_user_logged_in() ) {
							echo get_field('title_my_account_link', 'options');
						} if ( ! is_user_logged_in() ) {
							$field_value = get_field('title_sing_up_link', 'options');
							echo $field_value;
						}

						?>
						
						</a>
					<?php endif; ?>
				</div>

				<button class="header__hamburger js-hamburger">
					<span class="header__hamburger-box">
						<span class="inner-box js-inner">
						</span>
					</span>
				</button>
			</div>

			
		</div>

	
		
		

		
	</header><!-- #masthead -->
