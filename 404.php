<?php get_header(); ?>

    <div class="content centered">
        <h1>404</h1>
        <p>К сожалению, запрашиваемая страница не существует или была удалена.</p>

        <a href="<?php echo home_url(); ?>" class="btn">Вернуться на главную</a>

        <div class="search-form">
            <?php get_search_form(); ?>
        </div>
    </div>

<?php get_footer(); ?><?php
