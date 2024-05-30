<?php 
/**
 * 
 * Slider view course block
 * 
 */
?>
<?php if (get_field('active_styles')) : ?>
    <?php if (get_field('padding_top')) : ?>
        <?php $top = get_field('padding_top'); ?>
    <?php endif; ?>
    <?php if (get_field('padding_bottom')) : ?>
        <?php $bottom = get_field('padding_bottom'); ?>
    <?php else : ?>
        <?php $bottom = '-'; ?>
    <?php endif; ?>
    <?php if (get_field('padding_top_mobile')) : ?>
        <?php $mobileTop = get_field('padding_top_mobile'); ?>
    <?php else : ?>
        <?php $mobileTop = '-'; ?>
    <?php endif; ?>
    <?php if (get_field('padding_bottom_mobile')) : ?>
        <?php $mobileBottom = get_field('padding_bottom_mobile'); ?>
    <?php else : ?>
        <?php $mobileBottom = '-'; ?>
    <?php endif; ?>
<?php else : ?>
    <?php $top = ''; ?>
    <?php $bottom = ''; ?>
    <?php $mobileTop = ''; ?>
    <?php $mobileBottom = ''; ?>
<?php endif; ?>
<section class="gridSlider custom-paddings" style="
--data-pt-desktop: <?php echo $top;?>px;
--data-pb-desktop: <?php echo $bottom;?>px;
--data-pt-mobile: <?php echo $mobileTop; ?>px;
--data-pb-mobile: <?php echo $mobileBottom; ?>px;">
    <div class="container">
        <div class="gridSlider__grid">

            <div class="swiper js-swiperGridVertical">
                <div class="swiper-wrapper">
                    <?php if ( have_rows('slider_vertical') ) : ?>
                    
                        <?php while( have_rows('slider_vertical') ) : the_row(); ?>
                    
                            <div class="swiper-slide">
                                <div class="gridSlider__grid--item">
                                    <?php if ( get_sub_field('title_slider') ) : ?>
                                        <h2 class="title"><?php echo get_sub_field('title_slider'); ?></h2>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('description_slider') ) : ?>
                                        <p class="text"><?php echo get_sub_field('description_slider'); ?></p>
                                    <?php endif; ?>
                                    <?php 
                                    $link = get_sub_field('link_view_course');
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="btn btn-blueLight" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                    
                        <?php endwhile; ?>
                    
                    <?php endif; ?>
                </div>
            </div>

            <div class="swiper js-swiperGridHorizontal">
                <div class="swiper-wrapper">
                    <?php if ( have_rows('slider_vertical') ) : ?>
                        
                        <?php while( have_rows('slider_vertical') ) : the_row(); ?>
                            <div class="swiper-slide">
                                <div class="gridSlider__grid--item">
                                    <?php if ( get_sub_field('title_slider') ) : ?>
                                        <h2 class="title"><?php echo get_sub_field('title_slider'); ?></h2>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('description_slider') ) : ?>
                                        <p class="text"><?php echo get_sub_field('description_slider'); ?></p>
                                    <?php endif; ?>
                                    <?php 
                                    $link = get_sub_field('link');
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="btn btn-blueLight" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                
                    <?php endif; ?>
                    
                </div>
            </div>

            <div class="gridSlider__grid--arrows ">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>