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
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-single">
                        <div class="page-header">
                            <h1 class="title"><?php single_post_title(); ?></h1>
                        </div>
                        <div class="body post-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar( 'sidebar2' ); ?>
            </div>
        </div>
    </div>
<?php get_footer();