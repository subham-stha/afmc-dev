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

<section class="membershipBlocks custom-paddings" style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">
    <div class="container mediumContainer">
        <div class="membershipBlocks__grid">

            <?php if ( have_rows('membership_plans') ) : ?>
            
                <?php while( have_rows('membership_plans') ) : the_row(); ?>
            
                    <div class="membershipBlocks__grid--item">
                        <?php if ( get_sub_field('price_plan') ) : ?>
                            <p class="price"><?php echo get_sub_field('price_plan'); ?></p>
                        <?php endif; ?>
                        <?php if ( get_sub_field('name_plan') ) : ?>
                            <p class="name"><?php echo get_sub_field('name_plan'); ?></p>
                        <?php endif; ?>
                        <div class="description">
                            <?php if ( get_sub_field('small_description_plan') ) : ?>
                                <p class="text"><?php echo get_sub_field('small_description_plan'); ?></p>
                            <?php endif; ?>
                            <ul>
                                <?php if ( have_rows('list_plan') ) : ?>
                                
                                    <?php while( have_rows('list_plan') ) : the_row(); ?>
                                
                                        <?php if ( get_sub_field('item_list') ) : ?>
                                            <li class="text"><?php echo get_sub_field('item_list'); ?></li>
                                        <?php endif; ?>
                                
                                    <?php endwhile; ?>
                                
                                <?php endif; ?>
                            </ul>
                            <?php 
                            $link = get_sub_field('link_plan');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
            
                <?php endwhile; ?>
            
            <?php endif; ?>

        </div>
    </div>
</section>