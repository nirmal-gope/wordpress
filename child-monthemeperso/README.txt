/******************* INDEX.PHP ************************/
<?php get_header(); ?> /* ici on appel le haut de la page */

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> /* ici un cree une boucle qui permet d'interoger la BDD pour afficher le contenue */

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> /* ici on affiche le titre et rend le lien cliquable */

<div class="entry"> /* une class predefinie par wordpress */
  <?php the_content(); ?> /* ici on affiche le contenue de la page ou de l'article souhaiter  */
</div>

<?php endwhile; else: ?> /* ici on ferme la boucle while et on indique une condition si la page n'est pas trouvée */
 <p> Page non Trouvée</p>
<?php endif; ?>

<?php get_footer(); ?> /* ici on appel le bas de page */


/****************************************************************************************/
/************************* style.css ***************************************************/

/*
Theme Name: mon theme perso
Author: Moi
Description: Theme Perso'
Version:1.0
Text Domain: monthemeperso
*/
body
{
    background-color: aqua; /* ici */
}

/****************************************************************************************/
/************************* header.php ***************************************************/

<!doctype html>
<html lang="fr">
  <head>
  
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="container-fluid"> 
        <div class="row justify-content-center">
            <div class="col-md-8 menuheader">
             <?php wp_nav_menu( array('container_class' => 'menu-header','theme_location' => 'primary')); ?>  
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
           <!-- the_content -->
      

/****************************************************************************************/
/************************* footer.php ***************************************************/

      </section>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 bas-gauche">
               <?php dynamic_sidebar('bas-gauche'); ?>
            </div>
            <div class="col-md-6 bas-droite">
               <?php dynamic_sidebar('bas-droite'); ?>
            </div>
        </div>
    </div>


<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

 
  </body>
</html>
   
/*********************************************************************************************/
/********************************** functions.php ******************************************/

<?php 
add_action('widgets_init','monthemeperso_init_sidebar');
add_action('init','monthemeperso_init_menu');

function monthemeperso_init_sidebar()

{
    
  register_sidebar( array (
      'name' =>__('Haut Gauche','monthemeperso'),
      'id' => 'haut-gauche',
      'description' =>__('Region en haut à gauche','monthemeperso')
  ));

  register_sidebar( array (
    'name' =>__('Titre','monthemeperso'),
    'id' => 'titleheader',
    'description' =>__('Region titre milieu haut','monthemeperso')
));

register_sidebar( array (
    'name' =>__('Haut Droite','monthemeperso'),
    'id' => 'haut-droite',
    'description' =>__('Region en haut à droite','monthemeperso')
));

register_sidebar( array (
    'name' =>__('Banierre','monthemeperso'),
    'id' => 'entete',
    'description' =>__('Region entete haut','monthemeperso')
));

register_sidebar( array (
    'name' =>__('Bas Gauche','monthemeperso'),
    'id' => 'bas-gauche',
    'description' =>__('Region en bas à gauche','monthemeperso')
));

register_sidebar( array (
    'name' =>__('Bas Droite','monthemeperso'),
    'id' => 'bas-droite',
    'description' =>__('Region en bas à droite','monthemeperso')
));


}

function monthemeperso_init_menu()
{
    register_nav_menu('primary',__('Primary Menu','monthemeperso'));
}



?>

/*********************************************************************************************/
/********************************** Plugins ******************************************/
- AddToAny Share Buttons
- Contact Form 7
- Elementor
- Max Mega Menu
- Shortcodes Ultimate
- Widget Content Blocks
- Widget Options
- Show Current Template (JOTAKI Taisuke)