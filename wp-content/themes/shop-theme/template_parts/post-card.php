<?php
$post_id = get_the_ID();
$title = get_the_title($post_id);
$excerpt = get_the_excerpt($post_id);
$permalink = get_permalink($post_id);
$thumbnail = get_the_post_thumbnail_url($post_id, 'medium');
?>

<div class="card mb-4 shadow-sm">
    <?php if ($thumbnail): ?>
        <img src="<?= esc_url($thumbnail); ?>" class="card-img-top" alt="<?= esc_attr($title); ?>">
    <?php endif; ?>

    <div class="card-body">
        <h5 class="card-title">
            <a href="<?= esc_url($permalink); ?>" class="text-decoration-none text-dark">
                <?= esc_html($title); ?>
            </a>
        </h5>

        <p class="card-text"><?= esc_html($excerpt); ?></p>

        <a href="<?= esc_url($permalink); ?>" class="btn btn-primary">
            Читать далее →
        </a>
    </div>
</div>
