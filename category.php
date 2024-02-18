<?php get_header(); ?>
<main>
    <div class="post">
        <div class="post__fv">
            <h1 class="post__title">カテゴリー別一覧</h1>
        </div>
        <div class="post__inner">
            <div class="news">
                <?php if (have_posts()) : ?>
                    <ul class="news__items">
                        <?php while (have_posts()) : the_post(); ?>
                            <li class="news__item">
                                <a href="<?php the_permalink(); ?>" class="news__link">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', array('class' => 'news__img')); ?>
                                    <?php else : ?>
                                        <img class="news__img" src="<?php echo get_theme_file_uri("/images/noimage.jpg"); ?>" alt="NoImage画像" />
                                    <?php endif; ?>
                                    <div class="news__text-wrapper">
                                        <div class="news__information">
                                            <time class="news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                            <?php
																						$categories = get_the_category();
																						if (!empty($categories)) {
																						    $limit = 5;
																						    $count = 0;
																						    foreach ($categories as $category) {
																						        if ($count < $limit) {
																						            echo '<span class=news__category">' . esc_html($category->name) . '</span>';
																						            $count++;
																						        } else {
																						            break;
																						        }
																						    }
																						}
																						?>
                                        </div>
                                        <div class="news__title"><?php the_title(); ?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <p>記事が投稿されていません</p>
                <?php endif; ?>
            </div>
            <?php
            $args = array(
                'mid_size' => 1,
                'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
                'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
            );
            the_posts_pagination($args);
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>