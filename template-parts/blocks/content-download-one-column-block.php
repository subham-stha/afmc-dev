<?php 
/**
 * 
 * download one column block
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
<section class="downloadOneColumn custom-paddings" style="
--data-pt-desktop: <?php echo $top;?>px;
--data-pb-desktop: <?php echo $bottom;?>px;
--data-pt-mobile: <?php echo $mobileTop; ?>px;
--data-pb-mobile: <?php echo $mobileBottom; ?>px;">

    <div class="container">
        <div class="downloadOneColumn__grid">
            <ul>
                <?php if ( have_rows('download_column') ) : ?>
                
                    <?php while( have_rows('download_column') ) : the_row(); ?>
                
                        <li>
                            <?php $file = get_sub_field('file_download');?>
                            <a  href="<?php if( get_sub_field('file_download') ){ echo $file['url']; } ?>" download>
                                <div class="gridItem__primary">
                                    <?php if ( get_sub_field('text_principal') ) : ?>
                                        <span class="gridItem__primary--label"><?php echo get_sub_field('text_principal'); ?></span>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('text_hover') ) : ?>
                                        <span class="gridItem__primary--hover"><?php echo get_sub_field('text_hover'); ?></span>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                
                    <?php endwhile; ?>
                
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>