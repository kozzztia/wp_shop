<div class="post-pagination">
    <?php
    $prev_icon = '<svg class="arrow prev" width="24" height="24">
                                    <use href="' . get_theme_file_uri('assets/svg/sprite.svg') . '?ver=' . get_version() . '#arrow"></use>
                                  </svg>';
    $next_icon = '<svg class="arrow next" width="24" height="24">
                                        <use 
                                            href="' . get_theme_file_uri('assets/svg/sprite.svg') . '?ver=' . get_version() . '#arrow"></use>
                                  </svg>';
    the_posts_pagination([
        'end_size' => 1,
        'mid_size' => 0,
        'prev_text' => $prev_icon,
        'next_text' => $next_icon,
    ]);
    ?>
</div>
