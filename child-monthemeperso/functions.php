<?php
add_action('widgets_init', 'monthemeperso_init_sidebar');
add_action('init', 'monthemeperso_init_menu');


function monthemeperso_init_sidebar()
{
    register_sidebar(array(
        'name' => __('Haut Gauche', 'monthemeperso'),
        'id' => 'haut-gauche',
        'description' => __('Region en haut à gauche', 'monthemeperso')
    ));

    register_sidebar(array(
        'name' => __('Title Header', 'monthemeperso'),
        'id' => 'titleheader',
        'description' => __('Region titre milieu haut', 'monthemeperso')
    ));

    register_sidebar(array(
        'name' => __('Haut Droite', 'monthemeperso'),
        'id' => 'haut-droite',
        'description' => __('Region en haut à droite', 'monthemeperso')
    ));

    register_sidebar(array(
        'name' => __('Banierre', 'monthemeperso'),
        'id' => 'entete',
        'description' => __('Region entete', 'monthemeperso')
    ));

    register_sidebar(array(
        'name' => __('Bas Droite', 'monthemeperso'),
        'id' => 'bas-droite',
        'description' => __('Region en bas à droite', 'monthemeperso')
    ));

    register_sidebar(array(
        'name' => __('Bas Gauche', 'monthemeperso'),
        'id' => 'bas-gauche',
        'description' => __('Region en bas à gauche', 'monthemeperso')
    ));
}

function monthemeperso_init_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'monthemeperso'));
}
