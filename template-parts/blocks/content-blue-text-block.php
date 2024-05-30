<?php 
/**
 * 
 * Blue text block
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

<section class="blueBlock">
    <?php if ( get_field('select_video_or_animation') == 'animation' ) : ?>
        <!-- start animation cursor  -->
        <div class="page-wrapper js-animation">
            <div class="panel-wrapper">
                <div class="blur"></div>
                <div class="js-panel">
                    <div class="js-panel">
                        <div class="js-panel">
                            <div class="js-panel">
                                <div class="js-panel">
                                    <div class="js-panel">
                                        <div class="js-panel">
                                            <div class="js-panel">
                                                <div class="js-panel">
                                                    <div class="js-panel"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end animation cursor  -->
    <?php else: ?>
        <!-- start animation video  -->
        <div class="blueBlock__videoBg">
            <?php if ( get_field('video_poster_image')  ) : 
                $image = get_field('video_poster_image'); ?>
            <?php endif; ?>

            <video playsinline inline loop muted autoplay>
                <source src="<?php echo get_field('video_banner'); ?>" type="video/mp4"/>
            </video> 
        </div>
        
        <!-- end animation video  -->
    <?php endif; ?>

    <div class="container">
        <div class="blueBlock__content js-titleAnimation">
            <?php if ( get_field('small_subtitle') ) : ?>
                <p class="heading uppercase animTitleSm"><?php echo get_field('small_subtitle'); ?></p>
            <?php endif; ?>
            <?php 
            $link = get_field('link_text');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="heading big animTitle" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">        
                    <?php if ( get_field('title_principal_section') ) : ?>
                        <span>The starting</span><br>
                        <span>point begins</span><br>
                        <span>today!</span>
                    <?php endif; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>