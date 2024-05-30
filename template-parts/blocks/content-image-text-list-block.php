<?php 
/**
 * 
 * Image text list block
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
<section class="imageTextGrayBlock custom-paddings" style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">

    <div class="imageTextGrayBlock__container container">
        <div class="row align-items-center">
            <div class="col-12 col-md-7 js-imageAnimation">
                <figure class="imageTextGrayBlock__image imageContainer">
                    <?php if ( get_field('image_section') ) : $image = get_field('image_section'); ?>
                        <img class="imageEl" src="<?php echo $image['sizes']['educationg_image']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </figure>
            </div>
            <div class="col-12 col-md-5">
                <div class="imageTextGrayBlock__list js-titleAnimation">
                    <?php if ( get_field('title_principal_section') ) : ?>
                        <h2 class="heading medium animTitleSm"><?php echo get_field('title_principal_section'); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field('text_list') ) : ?>
                        <div class="text animText"><?php echo get_field('text_list'); ?></div>
                    <?php endif; ?>
                </div>


            </div>
        </div>

    </div>
</section>