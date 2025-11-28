<?php
    $title = get_field('title');
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
                    <h2 class="title"><?= $title?></h2>

                    <figure class="heroImage">
                        <img src="https://picsum.photos/200/200" alt="test">
                    </figure>

                </div>

                <div class="right">
                    <figure class="heroImage">
                        <img src="https://picsum.photos/200/50" alt="test">
                    </figure>

                    <ul class="heroList">
                        <li>Тому що він приводить «правильних» гостей.</li>
                        <li>Наш сидр обирають люди із середнім та високим доходом. Ті, хто цінує смак і культуру, а не «женеться за градусами». Такі гості закладів не провокують конфліктів, частіше замовляють «ще один келих» і створюють ту саму атмосферу, заради якої до вас повертаються.</li>
                        <li>Для вас це — спокійні вечори, лояльна аудиторія і прибуток без ризиків.</li><li>Тому що він приводить «правильних» гостей.</li>
                        <li>Наш сидр обирають люди із середнім та високим доходом. Ті, хто цінує смак і культуру, а не «женеться за градусами». Такі гості закладів не провокують конфліктів, частіше замовляють «ще один келих» і створюють ту саму атмосферу, заради якої до вас повертаються.</li>
                        <li>Для вас це — спокійні вечори, лояльна аудиторія і прибуток без ризиків.</li>
                        <li>Тому що він приводить «правильних» гостей.</li>
                        <li>Наш сидр обирають люди із середнім та високим доходом. Ті, хто цінує смак і культуру, а не
                            «женеться за градусами». Такі гості закладів не провокують конфліктів, частіше замовляють
                            «ще один келих» і створюють ту саму атмосферу, заради якої до вас повертаються.
                        </li>
                        <li>Для вас це — спокійні вечори, лояльна аудиторія і прибуток без ризиків.</li>
                    </ul>
                    <p class="button">
                        <a href="#">link to</a>
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
                <p class="link"><a href="#">number</a> </p>
                <p class="link"><a href="#">mail</a> </p>
                <p class="link"><a href="#">social</a> </p>
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
