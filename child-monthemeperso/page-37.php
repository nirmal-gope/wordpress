<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="entry">
            <?php the_content(); ?>
        </div>

    <?php endwhile;
else : ?>
    <p> Page non Trouvée</p>
<?php endif; ?>

<?php get_footer(); ?>