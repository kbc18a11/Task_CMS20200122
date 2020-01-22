<?php get_header(); ?>
<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            //ブログ記事記事の表示部分
            $args = [
                'post_type' => 'blog',
            ];
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) : ?>
                <h1><?php echo 'ブログ'?></h1>
                <ul class="list-unstyled">
                    <?php
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <li class="media">
                            <a class="d-flex thumbnail" href="#">
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('thumbnail');
                                else :
                                ?>
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/pose_dance_ukareru_woman.png" alt="" srcset="">
                                <?php
                                endif; ?>
                            </a>
                            <div class="media-body">
                                <h1>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h1>
                                <p class="post-meta">
                                    <span class="post-date"><?php the_date(); ?>&nbsp;</span>
                                    <span class="post-category">カテゴリラ：<?php the_category(','); ?></span>
                                </p>
                                <?php the_excerpt(); ?>
                                <p class="more-link">
                                    <a href="<?php the_permalink(); ?>">続きを読む</a>
                                </p>
                            </div>
                        </li>

                    <?php
                    endwhile; ?>
                </ul>
            <?php
            endif;

            //ニュースリリースの表示部分
            $args = [
                'post_type' => 'newsrelease',
            ];
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) : ?>
                <h1><?php echo 'ニュースリリース' ?></h1>
                <ul class="list-unstyled">
                    <?php
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <li class="media">
                            <a class="d-flex thumbnail" href="#">
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('thumbnail');
                                else :
                                ?>
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/pose_dance_ukareru_woman.png" alt="" srcset="">
                                <?php
                                endif; ?>
                            </a>
                            <div class="media-body">
                                <h1>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h1>
                                <p class="post-meta">
                                    <span class="post-date"><?php the_date(); ?>&nbsp;</span>
                                    <span class="post-category">カテゴリラ：<?php the_category(','); ?></span>
                                </p>
                                <?php the_excerpt(); ?>
                                <p class="more-link">
                                    <a href="<?php the_permalink(); ?>">続きを読む</a>
                                </p>
                            </div>
                        </li>

                    <?php
                    endwhile; ?>
                </ul>
    <?php
            endif;
        endwhile;
    endif;
    ?>
</div>
<?php get_footer() ?>