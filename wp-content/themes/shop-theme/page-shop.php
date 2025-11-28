<?php $id = get_the_ID()?>

<?php get_header(); ?>
    <div class="content centered ">
        <h1><?php the_title(); ?> : page-shop</h1>
        <?php the_content(); ?>


        <div class="container mainText">

            <h4 class="title"><?php  echo get_post_meta( $id , 'main_title' , true); ?></h4>

        </div>

        <div class="container mainBlock hero">

            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h2 class="fw-bold title">
                        <?php echo get_post_meta( $id , 'first_title' , true) ?>
                    </h2>
                    <p class="mb-3 text">
                        <?php echo get_post_meta( $id , 'first_text' , true) ?>
                    </p>
                    <a href="#" class="btn btn-success w-100" style="max-width: 200px;">Button</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?php echo get_theme_file_uri('assets/images/dog.jpg'); ?>" alt="the god" class="img-fluid rounded">
                </div>
            </div>

        </div>

        <div class="container ">
            <h4 class="fw-semibold text-center">Title</h4>
        </div>

        <div class="container ">
            <div class="row flex-md-row-reverse align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h2 class="fw-bold"><?php echo get_post_meta( $id , 'second_title' , true) ?></h2>
                    <p class="mb-2">
                        <?php echo get_post_meta( $id , 'second_text' , true) ?>
                    </p>

                    <a href="#" class="btn btn-success w-100" style="max-width: 200px;">Button</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?php echo get_theme_file_uri('assets/images/dog.jpg'); ?>" alt="the god" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>

        <div class="container text-center">
            <a href="" class="btn btn-success w-100" style="max-width: 200px;">Link To</a>
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

