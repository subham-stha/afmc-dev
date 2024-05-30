<?php 
/**
 * 
 * Block content option slider or image
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
    <?php $top = '-'; ?>
    <?php $bottom = '-'; ?>
    <?php $mobileTop = '-'; ?>
    <?php $mobileBottom = '-'; ?>
<?php endif; ?>
<?php if ( get_field('active_class') ) : ?>
    
    <?php $class = "fullImageMobile"; ?>

<?php endif; ?>
<section class="titlesImageSlider custom-paddings <?php echo $class; ?>" style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">

    <div class="titlesImageSlider__imageFull">
        <figure>
            <?php if ( get_field('image_full_mobile') ) : $image = get_field('image_full_mobile'); ?>
                <img src="<?php echo $image['sizes']['full_mobile']; ?>" alt="<?php echo $image['alt']; ?>"/>
            <?php endif; ?>
        </figure>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="titlesImageSlider__content js-titleAnimation">
                    <div class="titlesImageSlider__content--title">
                        <?php if ( get_field('small_subtitle') ) : ?>
                            <p class="heading uppercase animTitleSm"><?php echo get_field('small_subtitle'); ?></p>
                        <?php endif; ?>
                        <?php if ( get_field('title_principal_line') ) : ?>
                            <h2 class="heading big animTitle"><?php echo get_field('title_principal_line'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="titlesImageSlider__content--text js-fadeUpAnimation">
                        <div class="title-text">
                            <?php if ( get_field('title_description') ) : ?>
                                <h2 class="heading medium animTitleSm"><?php echo get_field('title_description'); ?></h2>
                            <?php endif; ?>
                            <?php if ( get_field('description_section') ) : ?>
                                <div class="text animText"><?php echo get_field('description_section'); ?></div>
                            <?php endif; ?>
                            <?php if ( get_field('active_button_section') ) : ?>
                
                                <?php 
                                $link = get_field('optional_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn-blueMedium js-fadeUpAnimation-item" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">

                <?php if ( get_field('select_image_or_slider') == 'image' ) : ?>
                    <div class="titlesImageSlider__image">
                        <figure class="imageContainer">
                            <?php if ( get_field('image_section') ) : $image = get_field('image_section'); ?>
                                <img class="imageEl" src="<?php echo $image['sizes']['vertical_image']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            <?php endif; ?>
                        </figure>
                    </div>
                <?php else: ?>
                    <div class="titlesImageSlider__slider">
                        <div class="swiper js-swiperFullWidth">
                            <div class="swiper-wrapper">
                                    <?php if ( have_rows('slider_image') ) : ?>
                                    
                                        <?php while( have_rows('slider_image') ) : the_row(); ?>
                                            <div class="swiper-slide">
                                                <div class="slide-style">
                                                    <figure class="imageContainer">
                                                        <?php if ( get_sub_field('image_slider_section') ) : $image = get_sub_field('image_slider_section'); ?>
                                                            <img class="" src="<?php echo $image['sizes']['vertical_image']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                                        <?php endif; ?>
                                                    </figure>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    
                                    <?php endif; ?>
                            </div>
                        </div>
                        <div class="slide-arrows">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>    
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>