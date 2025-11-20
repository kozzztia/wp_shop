<?php get_header(); ?>

<?php if (has_post_thumbnail()) {
    the_post_thumbnail();
} ?>

    <div class="content centered">
        <h1><?php the_title(); ?> index</h1>
        <?php the_content(); ?>
        <?php
        wp_nav_menu([
                'theme_location' => 'social',
                'container' => 'div',
                'container_class' => 'navigation',
                'menu_class' => 'socialMenu',
                'walker' => new Shop_Social_Icons_Only(),
        ]);
        ?>
    </div>

<?php echo 'index' ?>

<?php get_footer();