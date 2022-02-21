<?php
//Déclarer les menu de navigation
function simplenews_register_menus(){

    register_nav_menus(array(
        'main-menu' => __('Menu principal') //Localisation __ 
    ));

}
add_action('after_setup_theme', 'simplenews_register_menus');
?>