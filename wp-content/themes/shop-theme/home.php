<?php get_header(); ?>

    <div class="content centered">
        <h1><?php echo get_the_title(get_option('page_for_posts')); ?></h1>

        <?php
        $categories = get_categories([
                'orderby' => 'name',
                'order'   => 'ASC',
                'hide_empty' => true,
        ]);

        foreach ($categories as $category) :
            $cat_query = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'category__in' => [$category->term_id],
            ]);
            if ($cat_query->have_posts()) :
                ?>
                <section class="category-block">
                    <h2><?php echo esc_html($category->name); ?></h2>

                    <div class="post-list">
                        <?php while ($cat_query->have_posts()) : $cat_query->the_post(); ?>
                            <article class="post-item">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="excerpt"><?php the_excerpt(); ?></div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </section>
            <?php
            endif;
            wp_reset_postdata();
        endforeach;
        ?>
    </div>

<?php get_footer(); ?>