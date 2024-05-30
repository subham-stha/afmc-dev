<?php 
/**
 * 
 * Contact form block
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

<section class="contactBlock">

    <div class="container">

        <?php if ( get_field('title_principal_section') ) : ?>
            <h2 class="heading big"><?php echo get_field('title_principal_section'); ?></h2>
        <?php endif; ?>

        <div class="contactBlock__container">

            <div class="contactBlock__form">

                <p class="title">Send us a message</p>
                
                <?php if ( get_field('form_selection') ) : ?>
                    <?php $formID=  get_field('form_selection'); ?>

                    <?php 
                        $formCode="[formidable id=\"$formID\"]";
                        echo do_shortcode( $formCode );
                    ?>
                <?php endif; ?>
            </div>

            <div class="contactBlock__info">
                <div class="contactBlock__info--titleText">

                    <?php if ( have_rows('text_content_contact') ) : ?>
            
                        <?php while( have_rows('text_content_contact') ) : the_row(); ?>

                            <?php if ( get_sub_field('title_line') ) : ?>
                                <p class="title"><?php echo get_sub_field('title_line'); ?></p>
                            <?php endif; ?>

                            <?php if ( get_sub_field('small_description') ) : ?>
                                <p class="text"><?php echo get_sub_field('small_description'); ?></p>
                            <?php endif; ?>
                            
                            
                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
                
                <div class="contactBlock__info--mail">

                    <?php if ( get_field('title_get_in_touch') ) : ?>
                        <p class="title"><?php echo get_field('title_get_in_touch'); ?></p>
                    <?php endif; ?>

                    <?php if ( get_field('question_text') ) : ?>
                        <p class="text"><?php echo get_field('question_text'); ?></p>
                    <?php endif; ?>
                    
                    <div class="mail">
                        <?php if ( get_field('icon_mail') ) : $image = get_field('icon_mail'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>

                        <?php
                        $link = get_field('gmail');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>