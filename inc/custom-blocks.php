<?php
function hero_banner_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'hero-banner-block',
'title'             => __('Hero banner block'),
'description'       => __('A custom Hero banner block.'),
'render_template'   => 'template-parts/blocks/content-hero-banner-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'hero', 'banner'),
));
}
}
add_action('acf/init', 'hero_banner_block');

function title_text_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'title-text-block',
'title'             => __('Title and text block'),
'description'       => __('A custom Title and text block.'),
'render_template'   => 'template-parts/blocks/content-title-text-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'title', 'text'),
));
}
}
add_action('acf/init', 'title_text_block');

function image_text_option_button_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'image-text-option-button-block',
'title'             => __('image text option button block'),
'description'       => __('A custom image text option button block.'),
'render_template'   => 'template-parts/blocks/content-image-text-option-button-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'image', 'option', 'text', 'button', 'block'),
));
}
}
add_action('acf/init', 'image_text_option_button_block');

function content_option_slider_or_image_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'content-option-slider-or-image-block',
'title'             => __('content option slider or image block'),
'description'       => __('A custom content option slider or image block.'),
'render_template'   => 'template-parts/blocks/content-content-option-slider-or-image-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'content', 'option', 'slider', 'image', 'block'),
));
}
}
add_action('acf/init', 'content_option_slider_or_image_block');

function title_text_info_option_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'title-text-info-option-block',
'title'             => __('title text info option block'),
'description'       => __('A custom title text info option block.'),
'render_template'   => 'template-parts/blocks/content-title-text-info-option-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'title', 'text', 'info', 'option', 'block'),
));
}
}
add_action('acf/init', 'title_text_info_option_block');

function text_option_background_color_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'text-option-background-color-block',
'title'             => __('text option background color block'),
'description'       => __('A custom text option background color block.'),
'render_template'   => 'template-parts/blocks/content-text-option-background-color-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'text', 'background', 'color', 'block'),
));
}
}
add_action('acf/init', 'text_option_background_color_block');

function blue_text_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'blue-text-block',
'title'             => __('blue text block'),
'description'       => __('A custom blue text block.'),
'render_template'   => 'template-parts/blocks/content-blue-text-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'blue', 'text', 'block'),
));
}
}
add_action('acf/init', 'blue_text_block');

function info_text_button_gray_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'info-text-button-gray-block',
'title'             => __('info text button gray block'),
'description'       => __('A custom info text button gray block.'),
'render_template'   => 'template-parts/blocks/content-info-text-button-gray-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'info', 'text', 'button', 'gray', 'block'),
));
}
}
add_action('acf/init', 'info_text_button_gray_block');

function intro_text_section_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'intro-text-section-block',
'title'             => __('intro text section block'),
'description'       => __('A custom intro text section block.'),
'render_template'   => 'template-parts/blocks/content-intro-text-section-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'intro', 'text', 'section', 'block'),
));
}
}
add_action('acf/init', 'intro_text_section_block');

function intro_title_description_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'intro-title-description-block',
'title'             => __('intro title description block'),
'description'       => __('A custom intro title description block.'),
'render_template'   => 'template-parts/blocks/content-intro-title-description-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'intro', 'title', 'description', 'block'),
));
}
}
add_action('acf/init', 'intro_title_description_block');

function only_image_options_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'only-image-options-block',
'title'             => __('only image options block'),
'description'       => __('A custom only image options block.'),
'render_template'   => 'template-parts/blocks/content-only-image-options-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'only', 'image', 'options', 'block'),
));
}
}
add_action('acf/init', 'only_image_options_block');

function image_info_content_white_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'image-info-content-white-block',
'title'             => __('image info content white block'),
'description'       => __('A custom image info content white block.'),
'render_template'   => 'template-parts/blocks/content-image-info-content-white-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'image', 'info', 'content', 'white', 'block'),
));
}
}
add_action('acf/init', 'image_info_content_white_block');

function icons_classes_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'icons-classes-block',
'title'             => __('icons classes block'),
'description'       => __('A custom icons classes block.'),
'render_template'   => 'template-parts/blocks/content-icons-classes-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'classes', 'icons', 'block'),
));
}
}
add_action('acf/init', 'icons_classes_block');

function boxes_courses_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'boxes-courses-block',
'title'             => __('boxes courses block'),
'description'       => __('A custom boxes courses block.'),
'render_template'   => 'template-parts/blocks/content-boxes-courses-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'boxes', 'courses', 'block'),
));
}
}
add_action('acf/init', 'boxes_courses_block');

function slider_view_course_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'slider-view-course-block',
'title'             => __('slider view course block'),
'description'       => __('A custom slider view course block.'),
'render_template'   => 'template-parts/blocks/content-slider-view-course-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'slider', 'vire', 'course', 'block'),
));
}
}
add_action('acf/init', 'slider_view_course_block');

function quote_text_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'quote-text-block',
'title'             => __('quote text block'),
'description'       => __('A custom quote text block.'),
'render_template'   => 'template-parts/blocks/content-quote-text-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'quote', 'text', 'block'),
));
}
}
add_action('acf/init', 'quote_text_block');

function download_one_column_block() {
// check function exists
if( function_exists('acf_register_block') ) {
// register block
acf_register_block(array(
'name'              => 'download-one-column-block',
'title'             => __('dowload one column block'),
'description'       => __('A custom dowload one column block.'),
'render_template'   => 'template-parts/blocks/content-download-one-column-block.php',
'category'          => 'formatting',
'icon'              => 'admin-comments',
'mode'              => 'preview',
'keywords'          => array( 'download', 'column', 'one', 'block'),
));
}
}
add_action('acf/init', 'download_one_column_block');

function download_two_columns_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'download-two-columns-block',
    'title'             => __('dowload two columns block'),
    'description'       => __('A custom dowload two columns block.'),
    'render_template'   => 'template-parts/blocks/content-download-two-columns-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'download', 'columns', 'two', 'block'),
    ));
    }
    }
    add_action('acf/init', 'download_two_columns_block');

    function image_text_list_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'image-text-list-block',
    'title'             => __('image text list block'),
    'description'       => __('A custom image text list block.'),
    'render_template'   => 'template-parts/blocks/content-image-text-list-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'image', 'text', 'list', 'block'),
    ));
    }
    }
    add_action('acf/init', 'image_text_list_block');

    function background_gray_resources_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'background-gray-resources-block',
    'title'             => __('background gray resources block'),
    'description'       => __('A custom background gray resources block.'),
    'render_template'   => 'template-parts/blocks/content-background-gray-resources-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'background', 'resources', 'gray', 'block'),
    ));
    }
    }
    add_action('acf/init', 'background_gray_resources_block');

    function contact_form_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'contact-form-block',
    'title'             => __('contact form block'),
    'description'       => __('A custom contact form block.'),
    'render_template'   => 'template-parts/blocks/content-contact-form-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'contact', 'form', 'block'),
    ));
    }
    }
    add_action('acf/init', 'contact_form_block');

    function form_upload_ceu_monitor_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'form-upload-ceu-monitor-block',
    'title'             => __('form upload ceu monitor block'),
    'description'       => __('A custom form upload ceu monitor block.'),
    'render_template'   => 'template-parts/blocks/content-form-upload-ceu-monitor-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'upload', 'form', 'ceu', 'block', 'monitor'),
    ));
    }
    }
    add_action('acf/init', 'form_upload_ceu_monitor_block');

    function form_upload_submission_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'form-upload-submission-block',
    'title'             => __('form upload submission block'),
    'description'       => __('A custom form upload submission block.'),
    'render_template'   => 'template-parts/blocks/content-form-upload-submission-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'upload', 'form', 'submission', 'block'),
    ));
    }
    }
    add_action('acf/init', 'form_upload_submission_block');

    function video_options_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'video-options-block',
    'title'             => __('video options block'),
    'description'       => __('A custom video options block.'),
    'render_template'   => 'template-parts/blocks/content-video-options-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'video', 'options', 'block'),
    ));
    }
    }
    add_action('acf/init', 'video_options_block');

    function map_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'map-block',
    'title'             => __('map block'),
    'description'       => __('A custom map block.'),
    'render_template'   => 'template-parts/blocks/content-map-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'map', 'block'),
    ));
    }
    }
    add_action('acf/init', 'map_block');

    function membership_free_plans_block() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // register block
    acf_register_block(array(
    'name'              => 'membership-free-plans-block',
    'title'             => __('membership free plans block'),
    'description'       => __('A custom membership free plans block.'),
    'render_template'   => 'template-parts/blocks/content-membership-free-plans-block.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'mode'              => 'preview',
    'keywords'          => array( 'membership', 'free', 'plans', 'block'),
    ));
    }
    }
    add_action('acf/init', 'membership_free_plans_block');