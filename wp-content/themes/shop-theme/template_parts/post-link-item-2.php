<?php
$title = get_the_title();
$excerpt = get_the_excerpt();
$permalink = get_permalink();
$category = get_the_category();
$date = get_the_date();
$time = get_the_time('d:m:y | h:i:s');
$author = get_the_author();

?>

<div class="postLinkItem postCard card-2">
    <div class="postCardFace postCardImage">
        <?php if (has_post_thumbnail()): ?>
            <?php  the_post_thumbnail('medium_large', ['class' => 'postBG', 'alt' => esc_attr($title)]); ?>
        <?php else: ?>
            <img src="<?= get_theme_file_uri('assets/images/dog.jpg'); ?>" class="postBG default" alt="<?= esc_attr($title)?>">
        <?php endif; ?>

        <div class="postTitle">
            <h5 class="card-title"><?= esc_html($title);?></h5>
        </div>
    </div>

    <div class="postCardFace postCardArticle">
        <?php if ($permalink) : ?>
            <h5 class="cardTitle">
                <a href="<?= esc_url($permalink); ?>"><?= esc_html($title); ?></a>
            </h5>
        <?php endif ?>

        <?php if ($category) : ?>
            <h6 class="cardCategory"><?php the_category(); ?></h6>
        <?php endif; ?>

        <?php if ($excerpt) : ?>
            <p class="cardText"><?= esc_html($excerpt); ?></p>
        <?php else : ?>
            <p class="cardText">empty yet</p>
        <?php endif; ?>

        <?php if ($date) : ?>
            <date class="cardDate"><?php echo esc_html($date) ?></date>
        <?php endif; ?>

        <?php if ($time) : ?>
            <date class="cardDate"><?php echo esc_html($time) ?></date>
        <?php endif; ?>

        <?php if ($author) : ?>
            <h6 class="cardCategory"><?php echo $author ?></h6>
        <?php endif; ?>

        <?php  if (has_post_thumbnail()) : ?>
                <?php  the_post_thumbnail('medium', ['class' => 'thumbnail'])?>
        <?php endif; ?>


        <a href="#" class="cardButton">button</a>
    </div>
</div>