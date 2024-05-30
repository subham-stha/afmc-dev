<?php 
/**
 * 
 * Image info content white block
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
<section class="imageWhiteBlock custom-paddings" style="
--data-pt-desktop: <?php echo $top;?>px;
--data-pb-desktop: <?php echo $bottom;?>px;
--data-pt-mobile: <?php echo $mobileTop; ?>px;
--data-pb-mobile: <?php echo $mobileBottom; ?>px;">
    <figure class="imageWhiteBlock__image">
        <?php if ( get_field('image_section') ) : $image = get_field('image_section'); ?>
            <img src="<?php echo $image['sizes']['full_image']; ?>" alt="<?php echo $image['alt']; ?>"/>
        <?php endif; ?>
    </figure>
    <div class="imageWhiteBlock__container container">
        <div class="imageWhiteBlock__container--text">
            <?php if ( get_field('title_content_principal') ) : ?>
                <h2 class="heading medium"><?php echo get_field('title_content_principal'); ?></h2>
            <?php endif; ?>
            <?php if ( get_field('description_content') ) : ?>
                <div class="text"><?php echo get_field('description_content'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>