<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Action hook : Placeholder pour le code de wordpress -->
    <?php wp_head(); ?>
</head>
<!-- Injecte des classes au body selon le contexte --> 
<body <?php body_class(); ?>>
<!-- Hook utilisable dans functions.php -->
<?php wp_body_open(); ?>
<header class="  ">
        <div class="  ">
            <section>
                <h1 class="titre-principal"> <a href="<?php echo esc_url(home_url('/')) ?>"> <?php bloginfo( 'title' ) ?></a></h1>
                <div class="slogan"><?php bloginfo( 'description' ) ?></div>
            </section>
            <nav class="  ">

            <?php 
            
                $args = array(
                    'theme_location' => 'main-menu'
                );
                    wp_nav_menu($args);
            
             
            ?>

            </nav>
        </div>
    </header>
