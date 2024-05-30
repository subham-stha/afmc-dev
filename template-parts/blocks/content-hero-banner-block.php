<?php 
/**
 * 
 *  Hero banner blok
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

<section class="heroHome" style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">

    <div class="heroHome__imageVideo">

        <?php if ( get_field('select_banner_file') == 'video' ) : ?>

            <?php if ( get_field('video_poster_image') ) : ?>
                <?php $posterImg= get_field('video_poster_image'); ?>
            <?php endif; ?>
            

            <video class="h-video mobile-video" poster="<?php echo $posterImg['sizes']['hd']; ?>" id="player-background" playsinline inline loop muted autoplay>
                <source src="<?php echo get_field('banner_video_file'); ?>" type="video/mp4" />
            </video>
        <?php else: ?>
            
            <?php if ( get_field('banner_image_file') ) : $image = get_field('banner_image_file'); ?>

                <img src="<?php echo $image['sizes']['hd']; ?>" alt="<?php echo $image['alt']; ?>"/>
            
            <?php endif; ?>
            
        <?php endif; ?>

    </div>
    
    <div class="heroHome__text js-titleAnimation">
        <?php if ( get_field('subtitle_line') ) : ?>
            <p class="heading uppercase animTitleSm"><?php echo get_field('subtitle_line'); ?></p>
        <?php endif; ?>

        <?php if ( get_field('title_line') ) : ?>
            <h1 class="heroHome__text--heading animTitle"><?php echo get_field('title_line'); ?></h1>
        <?php endif; ?>
        
        <?php if ( get_field('paragraph_text_line') ) : ?>
            <div class="text color-white"><?php echo get_field('paragraph_text_line'); ?></div>
        <?php endif; ?>
        
        <?php 
        $link = get_field('section_button_link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn-blueMedium" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

    </div>
    
    
    

    

</section>