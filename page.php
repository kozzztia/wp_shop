<?php get_header(); ?>

<?php if (has_post_thumbnail()) {
    the_post_thumbnail();
} ?>

<!--    - Для чисел і діапазонів — використовуй intval() або floatval()-->
<!--    - Для тексту — esc_html() або esc_attr() для безпеки-->
<!--    - Вивід: get_field('picture')['url'], ['alt'], ['name']-->
<!--    - Вивід: get_field('file')['url']-->
<!--    - Для checkbox завжди перевіряй, чи це масив: is_array($value)-->
<!--    - Для radio і button_group — просто рядок-->
<!--    - Для true_false — логічне значення (bool)-->
<!--    $group = get_field('group_name');-->
<!--    echo $group['sub_field'];-->










    <div class="content centered">
    <h1>
        page - <?php echo get_field("text"); ?>


    </h1>
    <div class="test">

    <h1 class="title"
        style="color : <?php echo get_field('select_color') ?>;
                font-size: <?php echo get_field('title_size') . 'px' ?>;">
        test title
    </h1>

    <?php
    $show = get_field("show");
    $div = '<div class="circle"></div>';

    if ($show) {
        echo $div;
    } ?>

    <?php
    $range = get_field("range");
    $percent = ($range / 360) * 100;
    ?>
    <figure class="picture"
            style="transform: rotate(<?php echo intval($range); ?>deg);"
    >
    <?php
        $picture = get_field("picture");
        if ($picture) :?>
            <img src="<?php echo $picture['url']?>" alt="<?php echo $picture['name']?>">
        <?php endif;?>

    </figure>

        <?php $article = get_field("article"); ?>
        <?php $palette = get_field("palette"); ?>
        <?php if ($article) : ?>
            <div class="article" style="color: <?php echo $palette ?>;">
                <?php echo $article; ?>
            </div>
        <?php endif; ?>


</div>
<?php
//
//the_content();
//?>
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
