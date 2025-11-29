<?php
$left_image = get_field('left_image');
$right_image = get_field('right_image');
$title = get_field('title');
$list = get_field('list');
$link = get_field('link_to');
?>

<?php get_header(); ?>

<?php if (has_post_thumbnail()) {
    the_post_thumbnail();
} ?>

    <div class="content centered">
        <h1><?php the_title(); ?> :page-about</h1>

        <div class="about">
            <div class="hero">

                <div class="left">
                    <!--                    this one-->
                    <h2 class="title"><?= $title ?></h2>

                    <figure class="heroImage">
                        <?php

                        if ($left_image) {
                            echo '<img src="' . esc_url($left_image) . '" alt="text">';
                        }
                        ?>
                    </figure>

                </div>

                <div class="right">
                    <figure class="heroImage">
                        <?php

                        if ($right_image) {
                            echo '<img src="' . esc_url($right_image['url']) . '" alt="' . esc_attr($right_image['alt']) . '">';
                        }
                        ?>

                    </figure>

                    <?php
                    if ($list) {
                        $items = explode(';', $list);
                        echo '<ul class="heroList">';
                        foreach ($items as $item) {
                            echo '<li><span>' . esc_html(trim($item)) . '</span></li>';
                        }
                        echo '</ul>';

                    }
                    ?>
                    <p class="button">
                        <a href="<?= esc_url($link['url'])?>"><?= esc_html($link['title'])?></a>
                    </p>

                </div>

            </div>

            <div class="mainTitle">
                <h1>Big title</h1>
            </div>

            <div class="banner">
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    $url = "https://picsum.photos/200/200?id=" . $i;
                    echo "
                        <figure class='bannerImage'>
                            <img src='{$url}' alt='test {$i}'>
                            
                            <figcaption>
                              <p class='button'>
                                <a href='#'>link to</a>
                              </p>
                             </figcaption>
                             
                        </figure>
                    ";
                }
                ?>
            </div>

            <div class="links">
                <p class="link"><a href="#">number</a></p>
                <p class="link"><a href="#">mail</a></p>
                <p class="link"><a href="#">social</a></p>
            </div>


        </div>

        <?php
        wp_nav_menu([
                'theme_location' => 'social',
                'container' => 'div',
                'container_class' => 'navigation',
                'menu_class' => 'socialMenu',
                'walker' => new Shop_Social_Icons_Only(),
        ]);
        ?>
    </div>


<?php get_footer();
