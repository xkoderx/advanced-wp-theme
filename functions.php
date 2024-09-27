<?php
    //Theme Support
    function adv_theme_support(){
        // Featured Image Support
        add_theme_support('post-thumbnails');
        //nav menus
        register_nav_menus(
            array(
                'primary' => __('Primary Menu'),
                'footer' => __('Footer Menu')
            )
        );
        //post format support
        add_theme_support('post-formats',array('aside','gallery','link','audio','video','chat'));
    }
    //longitud del extracto
    function adv_set_excerpt_length(){
        return 25;
    }
    add_filter('excerpt_length','adv_set_excerpt_length');
    add_action('after_setup_theme','adv_theme_support');
?>