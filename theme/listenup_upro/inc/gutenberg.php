<?php 
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'my_hero',
            'title'             => __('Hero (Custom)'),
            'description'       => __('Add Hero'),
            'render_template'   => 'parts/blocks/hero.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_we_do',
            'title'             => __('We do (Custom)'),
            'description'       => __('Add We do'),
            'render_template'   => 'parts/blocks/we_do.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_about',
            'title'             => __('About (Custom)'),
            'description'       => __('Add About'),
            'render_template'   => 'parts/blocks/about.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_socials',
            'title'             => __('Socials (Custom)'),
            'description'       => __('Add Socials'),
            'render_template'   => 'parts/blocks/socials.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_publications',
            'title'             => __('Publications (Custom)'),
            'description'       => __('Add Publications'),
            'render_template'   => 'parts/blocks/publications.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_partners',
            'title'             => __('Partners (Custom)'),
            'description'       => __('Add Partners'),
            'render_template'   => 'parts/blocks/partners.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_testimonials',
            'title'             => __('Testimonials (Custom)'),
            'description'       => __('Add Testimonials'),
            'render_template'   => 'parts/blocks/testimonials.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_video',
            'title'             => __('Video (Custom)'),
            'description'       => __('Add Video'),
            'render_template'   => 'parts/blocks/video.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_video',
            'title'             => __('Video (Custom)'),
            'description'       => __('Add Video'),
            'render_template'   => 'parts/blocks/video.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_meet',
            'title'             => __('Meet (Custom)'),
            'description'       => __('Add Meet'),
            'render_template'   => 'parts/blocks/meet.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_vision',
            'title'             => __('Vision (Custom)'),
            'description'       => __('Add Vision'),
            'render_template'   => 'parts/blocks/vision.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_pages',
            'title'             => __('Pages (Custom)'),
            'description'       => __('Add Pages'),
            'render_template'   => 'parts/blocks/pages.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_tagline',
            'title'             => __('Tagline (Custom)'),
            'description'       => __('Add Tagline'),
            'render_template'   => 'parts/blocks/tagline.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_cta',
            'title'             => __('CTA (Custom)'),
            'description'       => __('Add CTA'),
            'render_template'   => 'parts/blocks/cta.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_text',
            'title'             => __('Text (Custom)'),
            'description'       => __('Add Text'),
            'render_template'   => 'parts/blocks/text.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_resources',
            'title'             => __('Resources (Custom)'),
            'description'       => __('Add Resources'),
            'render_template'   => 'parts/blocks/resources.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_quote',
            'title'             => __('Quote (Custom)'),
            'description'       => __('Add Quote'),
            'render_template'   => 'parts/blocks/quote.php',
            'category'          => 'common',
            'post_types'        => array('page'),
        ));
    }
}