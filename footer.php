<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AFMC_website
 */

?>

	<footer id="colophon" class="footer">

		<div class="footer__container container">
			<figure class="footer__logo">
				<?php if ( get_field('footer_logo', 'options') ) : $image = get_field('footer_logo', 'options'); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
				<?php endif; ?>
			</figure>

			<div class="footer__links">
				<?php if ( get_field('footer_text', 'options') ) : ?>
					<p><?php echo get_field('footer_text', 'options'); ?></p>
				<?php endif; ?>
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
						'container'		 => 'ul',
					)
				);
				?>

			</div>
		</div>

		
		

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></scrip>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
});

</body>
</html>