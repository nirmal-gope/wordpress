<!doctype html>
<html lang="fr">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">



    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 menuheader">
                <?php wp_nav_menu(array('container_class' => 'menu_header', 'theme_location' => 'primary')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 haut-gauche">
                <?php dynamic_sidebar('haut-gauche'); ?>

            </div>
            <div class="col-md-6 titleheader">
                <h1><?php bloginfo('name'); ?></h1>
            </div>
            <div class="col-md-3 haut-droite">
                <?php dynamic_sidebar('haut-droite'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 entete">
                <?php dynamic_sidebar('entete'); ?>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <section class="milieu">