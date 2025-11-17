

    </main>
    <footer class="centered">
        <p>footer footer</p>
        <?php
        wp_nav_menu([
                'theme_location' => 'footer',
                'container' => 'div',
                'container_class' => 'navigation',
                'menu_class' => 'footerMenu',
        ]);
        ?>
        <?php wp_footer(); ?>
    </footer>
    </body>
</html>

