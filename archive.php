<?php get_header(); ?>


<div class="content centered">
    <h1><?php the_archive_title(); ?> : archive</h1>

        <?php
        $term = get_queried_object();
        $option_text = get_field('option_text', $term);

        if ($option_text) {
            echo '<h3>' .$option_text .'</h3>';
        }
        ?>

    <?php if (have_posts()) : ?>
        <div class="post-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                </article>
            <?php endwhile; ?>
        </div>

        <?php get_template_part('template_parts/pagination');?>
    <?php else : ?>
        <p>nothing....................................</p>
    <?php endif; ?>

<!--    <div class="test">-->
<!--        --><?php
//        $posts = get_posts_query();
//
//        if ($posts->have_posts()) :
//            while ($posts->have_posts()) : $posts->the_post();
//                get_template_part('template_parts/post-card');
//            endwhile;
//            wp_reset_postdata();
//        else :
//            echo 'Нет записей';
//        endif;
//        ?>
<!--    </div>-->

</div>
<?php get_footer(); ?>