<?php get_header(); ?>

    <div class="content centered">
        <h1><?php single_post_title(); ?></h1>

        <?php if ( have_posts() ) : ?>
            <ul class="list">
                <?php while ( have_posts() ) : the_post(); ?>
                        <li class="item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>

            </ul>
        <?php else : ?>
            <p>Нет записей для отображения.</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>