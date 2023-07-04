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
    }
}