<?php
    // Déclarer les menus de navigation dans l'admin.
    function themetpone_register_menus(){
        register_nav_menus(array(
            'main-menu' => __('Menu principal')
        ));
    }

    add_action('after_setup_theme', 'themetpone_register_menus');

    //Support de thème
    function themetpone_add_theme_support(){
        add_theme_support('post-thumbnails'); //Ajoute les thumbnails dans le thème wordpress.
        add_theme_support('title-tag'); //Change le titre de l'onglet.
    }
    add_action('after_setup_theme', 'themetpone_add_theme_support');
     

?>
