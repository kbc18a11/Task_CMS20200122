<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
            <p class="post-meta">
                <span class="post-date"><?php the_time(get_option('date_format')) ?></span>
                <span class="category">カテゴリラ： - <?php the_category(',') ?></span>
                <span class="comment-num"><?php comments_popup_link(
                                                'コメント : 0',
                                                'コメント : 1',
                                                'コメント : %',
                                            ) ?></span>
            </p>
            <?php the_content();
            $args = [
                'before' => '<div class="page-link">',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>'
            ];
            wp_link_pages($args);

            ?>
        </div><!-- end_post-->

        <?php
        if (get_previous_post()) :
        ?>
            <div class="nav-previous"><?php previous_post_link('<strong>%link</strong>'); ?></div>
        <?php
        endif;
        if (get_next_post()) : ?>
            <div class="nav-next"><?php next_post_link('<strong>%link</strong>'); ?></div>
        <?php endif; ?>
<?php
    endwhile;
endif;
?>
<?php get_footer();?>
