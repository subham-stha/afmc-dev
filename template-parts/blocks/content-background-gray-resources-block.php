<?php 
/**
 * 
 * Background gray resources block
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
<section class="textButtonGrayBlock">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5">
                <div class="textButtonGrayBlock__text js-titleAnimation">
                    <?php if ( get_field('title_principal_line') ) : ?>
                        <h2 class="heading medium animTitleSm"><?php echo get_field('title_principal_line'); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field('description_section') ) : ?>
                        <div class="text animText"><?php echo get_field('description_section'); ?></div>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('link_join_now');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn-blueMedium" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-md-7 js-imageAnimation">
                <figure class="textButtonGrayBlock__image imageContainer">
                    <?php if ( get_field('image_section_rectangular') ) : $image = get_field('image_section_rectangular'); ?>
                        <img class="imageEl" src="<?php echo $image['sizes']['rectangular_image']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                </figure>
            </div>
        </div>
    </div>
</section>