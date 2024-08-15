<ul>
    <?php $args = array(
        'numberposts' => 12,      //表示（取得）する記事の数
        'post_type' => 'event'    //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <li>
        
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            
                <?php the_title(); ?>
                <?php the_time('Y/m/d'); ?>
                
            </a>
        </li>
        <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
        <li>
            <p>記事はまだありません。</p>
        </li>
        <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
</ul>