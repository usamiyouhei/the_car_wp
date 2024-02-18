<?php get_header(); ?>
<main>
<?php if (have_posts()) : ?>
            <ul class="news__contents">
            <?php while (have_posts()) : the_post(); ?>
              <li class="news__item">
              <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail( 'full', array( 'class' => 'news__img' ) ); ?>
                <?php else : ?>
                    <img class="news__img" src="<?php echo esc_url(get_theme_file_uri( "/images/noimage.jpg" )); ?>" alt="NoImage画像" />
                <?php endif ; ?>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">2022.09.02</time>
                                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        $limit = 5; // 表示するカテゴリーの数を指定
                        $count = 0;
                        foreach ($categories as $category) {
                            if ($count < $limit) {
                                echo '<span class="news__category">' . esc_html($category->name) . '</span>';
                                $count++;
                            } else {
                                break;  // 制限に達したらループを抜ける
                            }
                        }
                    }
                    ?>
                <a href="<?php the_permalink(); ?>" class="news__item--link"
                  ><h3 class="news__item--title"><?php the_title(); ?></h3></a
                >
              </li>
              <?php endwhile; ?>
             </ul>
             <?php else : ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>
            <?php
            $args = array(
                'mid_size' => 1,
                'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
                'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
            );
            the_posts_pagination($args);
            ?>
      
</main>
<?php get_footer(); ?>