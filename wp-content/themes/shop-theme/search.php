<?php get_header(); ?>

<div id="primary" class="content centered ">
    <h1 class="page-title">
        <?php printf( esc_html__( 'result: %s', 'shop' ), get_search_query() ); ?>
    </h1>

    <?php if ( have_posts() ) : ?>
        <div class="search-results">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php get_template_part('template_parts/pagination');?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e( 'nothing....................................', 'shop' ); ?></p>
        <a href="<?php echo esc_url( home_url('/posts') ); ?>">
            <?php esc_html_e( '<-back', 'shop' ); ?>
        </a>

    <?php endif; ?>
</div>
<?php get_footer(); ?>
