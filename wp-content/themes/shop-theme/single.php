<?php get_header(); ?>

    <div class="content centered">
        <article class="single-post">
            <h1><?php the_title(); ?> : single</h1>
            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>

            <?php if (has_post_thumbnail()) : ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <div class="post-meta">
                <p>Категории: <?php the_category(', '); ?></p>
                <p>Метки: <?php the_tags('', ', '); ?></p>
            </div>

            <div class="post-navigation">
                <div class="prev"><?php previous_post_link('%link', '← %title'); ?></div>
                <div class="next"><?php next_post_link('%link', '%title →'); ?></div>
            </div>
        </article>
    </div>

<?php get_footer(); ?><?php
