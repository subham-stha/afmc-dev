<?php 
/**
 * 
 * Block image text option button
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
    <?php $top = '-'; ?>
    <?php $bottom = '-'; ?>
    <?php $mobileTop = '-'; ?>
    <?php $mobileBottom = '-'; ?>
<?php endif; ?>
 <section class="imageTitleText custom-paddings" style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12 col-md-7">
                  <div class="imageTitleText__image js-imageAnimation">
                      <figure class="imageContainer">
                            <?php if ( get_field('square_image') ) : $image = get_field('square_image'); ?>
                                <img class="imageEl" src="<?php echo $image['sizes']['small_square']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            <?php endif; ?>
                      </figure>
                      <figure class="imageContainer grayImage">
                                <img class="imageEl" src="<?php echo get_template_directory_uri(); ?>/src/assets/grayBox.svg" alt="" /> 
                      </figure>
                  </div>
              </div>
              <div class="col-12 col-md-5 col-sm-12">
                  <div class="imageTitleText__text js-titleAnimation">
                    <?php if ( get_field('title_principal_section') ) : ?>
                        <h2 class="heading medium animTitleSm"><?php echo get_field('title_principal_section'); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field('description_section') ) : ?>
                        <div class="text animText"><?php echo get_field('description_section'); ?></div>
                    <?php endif; ?>
                    
                      <?php if ( get_field('active_button') ) : ?>
                            <?php 
                            $link = get_field('button_option');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn-blueMedium" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
</section>