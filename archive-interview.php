<div class="test">
    <!-- 表示件数設定 -->
    <?php
    $wp_query = new WP_Query();
    $my_posts = array(
        'post_type' => 'test',
        'posts_per_page' => '3',
    );

    $wp_query->query($my_posts);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            $obj = get_post_type_object($post->post_type); //投稿タイプ情報を取得
    ?>
            <!-- ループさせるコンテンツ  -->
            <dl class="test-item">
                <dt class="test-date"><?php the_time('Y-m-d'); ?></dt>
                <dd class="test-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </dd>
            </dl>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>