<?php 
/**
 * 
 * Intro text section block
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

<section class="introSection custom-paddings" style="
--data-pt-desktop: <?php if(isset($top)){echo $top;}?>px;
--data-pb-desktop: <?php if(isset($bottom)){echo $bottom;}?>px;
--data-pt-mobile: <?php if(isset($mobileTop)){echo $mobileTop;}?>px;
--data-pb-mobile: <?php if(isset($mobileBottom)){echo $mobileBottom;}?>px;">
    <div class="container">
        <div class="introSection__content js-titleAnimation js-fadeUpAnimation">
            <?php if ( get_field('subtitle') ) : ?>
                <p class="heading uppercase animTitleSm"><?php echo get_field('subtitle'); ?></p>
            <?php endif; ?>
            <?php if ( get_field('title_principal_section') ) : ?>
                <h2 class="heading bigSection animTitle"><?php echo get_field('title_principal_section'); ?></h2>
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
</section>