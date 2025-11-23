
<section id="custom-search" class="sidebar widget_block widget_search" >
    <form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>"
          class="customSearchForm" >
        <label>
            <input type="search" class="search-field"
                   placeholder="<?php echo esc_attr_x('Search …', 'placeholder', 'shop'); ?>"
                   value="<?php echo get_search_query(); ?>" name="s"/>
        </label>

        <button type="submit" class="search-submit submit">
            <svg class="icon" width="24" height="24">
                <use href="<?php echo get_theme_file_uri('assets/svg/sprite.svg') . '?ver=' . get_version(); ?>#search"></use>
            </svg>
        </button>
    </form>
</section>

