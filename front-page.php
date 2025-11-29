<?php get_header(); ?>

<div class="content centered">
    <h1><?php the_title(); ?> front-page</h1>

    <section class="features">
        <div class="feature">
            <h2>Проекты</h2>
            <p>Мои работы и кейсы</p>
        </div>
        <div class="feature">
            <h2>Блог</h2>
            <p>Технические статьи и заметки</p>
        </div>
    </section>
    <div class="page-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
