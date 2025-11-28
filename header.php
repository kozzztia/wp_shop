


<!doctype html>
    <html lang="<?php echo get_locale(); ?>">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="profile" href="https://gmpg.org/xfn/11">
<!--            <link rel="stylesheet" href="--><?php //echo get_stylesheet_uri() ?><!--">-->
            <title><?php the_title()?></title>
            <?php wp_head()?>
        </head>

        <body>
            <header class="header">
                <div class="centred-container">
                    <div class="logo">
                        <?= get_template_part('template_parts/logo')?>
                    </div>

                    <?php
                    wp_nav_menu([
                            'theme_location' => 'header',
                            'container' => 'div',
                            'container_class' => 'navigation',
                            'menu_class' => 'headerMenu navbar-nav',
                            'walker'          => new Shop_Bootstrap_Walker(),
                    ]);
                    ?>
                </div>
            </header>
            <main>
<!--     other part in footer   -->

