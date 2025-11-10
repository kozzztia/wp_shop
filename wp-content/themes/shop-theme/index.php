<?php get_header(); ?>

    <h1><?php the_title(); ?></h1>

<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} ?>

    <div class="content centered">
        <?php the_content(); ?>
    </div>

<?php get_footer();