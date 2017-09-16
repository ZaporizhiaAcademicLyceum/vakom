<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <img style="width: 100%" class="img-fluid" src="/wp-content/themes/forvakbysnosme/img/main-top.jpg">
        </div>
        <div class="row content-gutter">
            <div class="col-sm-3">
                <?php dynamic_sidebar( 'sidebar1' ); ?>
            </div>
            <div class="col-sm-6 main-col">
                <?php if (have_posts()) : ?>

                    <?php
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', get_post_format());
                    endwhile;

                // If no content, include the "No posts found" template.
                else :
                    get_template_part('template-parts/content', 'none');

                endif;
                ?>
                <?php
                if (!function_exists("wp_bs_pagination"))
                    require 'inc/bs-pagination.php';
                wp_bs_pagination(); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar( 'sidebar2' ); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>