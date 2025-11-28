<?php $count = 0; ?>


<?php get_header(); ?>

    <div class="content centered">
        <h1><?php echo get_the_title(get_option('page_for_posts')); ?> : home</h1>

        <div class="posts-content">
            <?php if (have_posts()) : ?>
                <div class="home-list">
                    <?php while (have_posts()) : the_post() ?>
                        <?php
                        $count++;
                        switch ($count) {
                            case ($count % 3 == 0):
                                get_template_part('template_parts/post-link-item-2');
                                break;
                            default:
                                get_template_part('template_parts/post-link-item-1');
                                break;
                        }
                        ?>

                    <?php endwhile; ?>

                    <?php get_template_part('template_parts/pagination');?>
                </div>
            <?php endif; ?>

            <?php get_sidebar();?>

        </div>
    </div>

<?php get_footer(); ?>


