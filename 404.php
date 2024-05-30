<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AFMC_website
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container sectionsContainer">
				<div class="page-content">
					<h2 class="heading">404 <br> Page not found</h2>
					<p class="text">The page you are looking for is no longer available</p>
					<a class="btn-dark" href="<?php echo home_url(); ?>">RETURN TO HOMEPAGE</a>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
