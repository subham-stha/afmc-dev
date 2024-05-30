<?php 
/**
 * 
 * Info text button gray block
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

<section class="joinGrayBlock"  style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">
    <div class="container">
        <div class="joinGrayBlock__content js-titleAnimation">
            <?php if ( get_field('title_principal_line') ) : ?>
                <h2 class="heading big animTitle"><?php echo get_field('title_principal_line'); ?></h2>
            <?php endif; ?>
            <?php if ( get_field('info_text_section') ) : ?>
                <div class="text animText"><?php echo get_field('info_text_section'); ?></div>
            <?php endif; ?>
            <?php 
            $link = get_field('link_join_today');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn-blueMedium" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>