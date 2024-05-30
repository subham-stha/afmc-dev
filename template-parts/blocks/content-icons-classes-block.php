<?php 
/**
 * 
 * Icons classes block
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
<section class="iconLinks custom-paddings" style="
--data-pt-desktop: <?php echo $top;?>px;
--data-pb-desktop: <?php echo $bottom;?>px;
--data-pt-mobile: <?php echo $mobileTop; ?>px;
--data-pb-mobile: <?php echo $mobileBottom; ?>px;">
    <div class="container">
        <div class="iconLinks__grid">
            <?php if ( have_rows('icons_classes') ) : ?>
            
                <?php while( have_rows('icons_classes') ) : the_row(); ?>
            
                    <div class="iconLinks__grid--item">
                        <figure>
                            <?php if ( get_sub_field('icon') ) : $image = get_sub_field('icon'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            <?php endif; ?>
                        </figure>
                        <?php if ( get_sub_field('title_class') ) : ?>
                            <p class="title"><?php echo get_sub_field('title_class'); ?></p>
                        <?php endif; ?>
                        <?php 
                        $link = get_sub_field('link_get_started');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn-blueLight" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
            
                <?php endwhile; ?>
            
            <?php endif; ?>
            

        </div>
    </div>
</section>