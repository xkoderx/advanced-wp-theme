<?php
//Theme Support
function adv_theme_support(){
    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}
add_action('after_setup_theme','adv_theme_support');
?>