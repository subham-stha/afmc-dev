<?php 
/**
 * 
 * Block text option background color
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
<?php if ( get_field('active_class_content') ) : ?>
    <?php $Content_class = 'changeWidth'; ?>
<?php else: ?>
    <?php $Content_class = ' '; ?>
<?php endif; ?>

<section class="titleTextBg custom-paddings <?php echo $Content_class; ?>" style="
        --data-pt-desktop: <?php echo $top;?>px;
        --data-pb-desktop: <?php echo $bottom;?>px;
        --data-pt-mobile: <?php echo $mobileTop; ?>px;
        --data-pb-mobile: <?php echo $mobileBottom; ?>px;  background-color:<?php the_field('option_background_color'); ?>"  >

    <div class="container">
        <div class="titleTextBg__content js-titleAnimation">
            <?php if ( get_field('title_principal_section') ) : ?>
                <h2 class="heading medium animTitleSm"><?php echo get_field('title_principal_section'); ?></h2>
            <?php endif; ?>

            <?php if ( get_field('info_description_section') ) : ?>
                <div class="text animText"><?php echo get_field('info_description_section'); ?></div>
            <?php endif; ?>
        </div>
    </div>

    

</section>