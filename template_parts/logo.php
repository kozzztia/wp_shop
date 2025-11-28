
    <?php if (has_custom_logo()) {
        the_custom_logo();
    } else { ?>
        <a
            href="<?php echo get_site_url(); ?>"
            class="custom-logo-link">
            <img
                class="custom-logo"
                src="<?php echo get_theme_file_uri('assets/images/logo.png'); ?>"
                alt="Site Logo">
        </a>
    <?php } ?>