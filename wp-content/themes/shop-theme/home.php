<?php get_header(); ?>

    <div class="content centered">
        <h1><?php echo get_the_title(get_option('page_for_posts')); ?> : home</h1>

        <?php if (have_posts()) : ?>
            <div class="list">
                <?php while (have_posts()) : the_post() ?>
                    <?=get_template_part('template_parts/post-link-item');?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>