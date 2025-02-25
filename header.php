<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'container' => false,
                    'menu_class' => 'navbar-nav me-auto',
                    'fallback_cb' => '__return_false',
                    'depth' => 2,
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                <a href="#contato" class="btn btn-primary">Entre em Contato</a>
            </div>
        </div>
    </header>


    