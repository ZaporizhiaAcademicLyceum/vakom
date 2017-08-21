<div class="">
    <article id="post-<?php the_ID(); ?>" <?php post_class(array('post')); ?>>
        <div class="post-body">
            <?php the_title(sprintf('<header><h2 class="post-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2></header>'); ?>
            <footer class="post-footer">
                <span class="post-date"><i class="fa fa-calendar"></i> Опубликовано <?php the_time(get_option('date_format')); ?></span>
                <i class="fa fa-comment"></i> <?php comments_number(); ?>
                <?php //twentysixteen_entry_meta(); ?>
                <?php
                edit_post_link('<i class="fa fa-edit"></i> Изменить');
                ?>
            </footer>
            <div class="post-content">
            <?php

            the_content(false);
            /* translators: %s: Name of current post */

            wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentysixteen') . '</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                'pagelink' => '<span class="screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>%',
                'separator' => '<span class="screen-reader-text">, </span>',
            ));
            ?>
            </div>
            <a class="read-more" href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">Читать далее &raquo;</a>       
        </div>
    </article>
</div>