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
<section class="onlyImage custom-paddings js-imageAnimation" style="
--data-pt-desktop: <?php echo $top;?>px;
--data-pb-desktop: <?php echo $bottom;?>px;
--data-pt-mobile: <?php echo $mobileTop; ?>px;
--data-pb-mobile: <?php echo $mobileBottom; ?>px;">

    <?php if ( get_field('select_image') == 'full' ) : ?>
        
        <figure class="onlyImage__full imageContainer">
            <?php if ( get_field('full_image') ) : $image = get_field('full_image'); ?>
                <img class="imageEl" src="<?php echo $image['sizes']['full_image']; ?>" alt="<?php echo $image['alt']; ?>"/>
            <?php endif; ?>
        </figure>

    <?php else: ?>

        <div class="container">
            <figure class="onlyImage__contain imageContainer">
                <?php if ( get_field('content_image') ) : $image = get_field('content_image'); ?>
                    <img class="imageEl" src="<?php echo $image['sizes']['container_image']; ?>" alt="<?php echo $image['alt']; ?>"/>
                <?php endif; ?>
            </figure>
        </div>
        
    <?php endif; ?>


   
</section>