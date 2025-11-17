<?php get_header(); ?>

<div class="content centered">
    <h1><?php the_archive_title(); ?> : archive</h1>
    <p><?php the_archive_description(); ?></p>

    <?php if (have_posts()) : ?>
        <div class="post-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p>Ничего не найдено.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>