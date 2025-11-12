<?php get_header(); ?>

<?php if (has_post_thumbnail()) {
    the_post_thumbnail();
} ?>

    <div class="content centered">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

<?php //if (have_posts()) : ?>
<!--    <ul class="list">-->
<!--        --><?php //while (have_posts()) : the_post(); ?>
<!--            <li class="item"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></li>-->
<!--        --><?php //endwhile; ?>
<!---->
<!--    </ul>-->
<?php //else : ?>
<!--    <p>Нет записей для отображения.</p>-->
<?php //endif; ?>

<?php get_footer();