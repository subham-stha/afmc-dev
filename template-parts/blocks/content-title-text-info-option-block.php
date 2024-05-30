<?php 
/**
 * 
 * Block title text info option
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
<?php if ( get_field('active_class_content') ) : ?>
    <?php $Content_class = 'interns'; ?>
<?php else: ?>
    <?php $Content_class = ' '; ?>
<?php endif; ?>

<section class="bigTitleTextButton custom-paddings <?php echo $Content_class; ?>" style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">

    <div class="container mediumContainer">
        <div class="bigTitleTextButton__text js-titleAnimation js-fadeUpAnimation">
            <?php if ( get_field('title_principal_line') ) : ?>
                <h2 class="heading big animTitle"><?php echo get_field('title_principal_line'); ?></h2>
            <?php endif; ?>

            <?php if ( get_field('info_section') ) : ?>
                <div class="text js-fadeUpAnimation-item"><?php echo get_field('info_section'); ?></div>
            <?php endif; ?>
                
            <?php if ( get_field('active_button') ) : ?>
                
                <?php 
                $link = get_field('button_option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn-blueLight" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>

    
    

</section>