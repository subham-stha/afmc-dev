<?php 
/**
 * 
 * Video options block
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
<section class="videoBlock custom-paddings" style="
    --data-pt-desktop: <?php echo $top;?>px;
    --data-pb-desktop: <?php echo $bottom;?>px;
    --data-pt-mobile: <?php echo $mobileTop; ?>px;
    --data-pb-mobile: <?php echo $mobileBottom; ?>px;">
    <div class="container">
        <div class="videoBlock__video js-videoPlay">
            <?php if ( get_field('select_video') == 'video' ) : ?>

                <?php if ( get_field('video_poster_image')  ) : 
                $image = get_field('video_poster_image'); ?>
                <?php endif; ?>

                <video id="videoBlock" preload muted loop playsinline src="<?php echo get_field('video_banner'); ?> " poster="<?php echo $image['url']; ?>"></video>
                
                <div class="videoBlock__button" id="videoBlock__button">
                    <figure class="playButton">
                        <img src="<?php echo get_template_directory_uri();?>/src/assets/playButton.svg" alt="" /> 
                    </figure>
                </div>

            <?php else: ?>

                <div class="videoBlock__video--vimeo js-iframe-video plyr__video-embed player" id="player">
                    <iframe id="vimeo"
                        src="https://player.vimeo.com/video/<?php echo get_field('vimeo_channel_id'); ?>?h=<?php echo get_field('vimeo_id'); ?>"
                        allowfullscreen
                        allowtransparency>
                    </iframe>
                    <a class="imageVideoVimeo"href="https://player.vimeo.com/video/<?php echo get_field('vimeo_channel_id'); ?>?h=<?php echo get_field('vimeo_id'); ?>">
                        <?php if ( get_field('video_poster_vimeo') ) : $image = get_field('video_poster_vimeo'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>
                    </a>
                </div>
                
            <?php endif; ?>
        </div>
    </div>
</section>


<link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
<script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
<script>
    class VideoApp {
        constructor() {
            this.vimeoVideo = document.querySelectorAll(".player");
            this.start();
        }
        start() {
            if (this.vimeoVideo) {
                const videoHome = new Plyr(this.vimeoVideo, {
                    autoplay: false,
                    controls: [],
                    controls: ['play'],
                    clickToPlay: true,
                    loop: { active: true },
                });
                videoHome.muted = false;
                videoHome.autoplay = false;

            }
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        var video = new VideoApp();
    });
</script>