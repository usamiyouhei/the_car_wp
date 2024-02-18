<?php get_header(); ?>
<main>

<section class="another-page__top">
        <div class="another__fv">
          <div class="another__fv--wrap fv__content">
            <img
              class="another__fv--img scroll_up"
              src="./images/works-top.jpg"
              alt=""
            />
            <div class="page-title__wrap scroll_left">
              <h1 class="page-title title">Works</h1>
              <span class="page-title--sub">実績一覧</span>
            </div>
          </div>
        </div>
      </section>

      <div class="news__main">
        <div class="news__main--inner inner">
          <section class="news__category">
            <ul class="news-title__items">
              <li class="news-title__item--top">
                <a href="#" class="news__link">すべてのお知らせ</a>
              </li>
              <li class="news-title__item">
                <a href="#" class="news__link">トピックス</a>
              </li>
              <li class="news-title__item">
                <a href="#" class="news__link">イベント・キャンペーン</a>
              </li>
              <li class="news-title__item">
                <a href="#" class="news__link">入庫車情報</a>
              </li>
            </ul>
            <?php
                $taxonomy_terms = get_the_terms($post->ID, 'genre');
                if (!empty($taxonomy_terms)) {
                    $limit = 5;
                    $count = 0;
                    foreach ($taxonomy_terms as $taxonomy_term) {
                        if ($count < $limit) {
                            echo '<span class="news__link">' . esc_html($taxonomy_term->name) . '</span>';
                            $count++;
                        } else {
                            break;
                        }
                    }
                }
                ?>
          </section>

      <section class="news__text--items">
            <div class="works__content">
                      <?php
          $args = array(
              "post_type" => "works",
              "posts_per_page" => 10
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
                  <ul class="works__items">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="works__item">
               <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail( 'full', array( 'class' => 'works-img' ) ); ?>
            <?php else : ?>
                <img class="works-img" src="<?php echo esc_url(get_theme_file_uri( "/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
            <?php endif ; ?>
                      <div class="works__wrap">
                    <span class="works__wrap--category">修理・整備</span>
                    <h3 class="works__wrap--title scroll_up">
                      <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a></h3>
                    <p class="works__wrap--text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                    </p>
                    <time class="works__wrap--date" datetime="<?php echo get_the_date('Y-m-d'); ?>"
                      ><?php echo get_the_date('Y.m.d'); ?></time
                    >
                  </div>
                </li>
                <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
   
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
          </section>
        </div>
      </div>


</main>
<?php get_footer(); ?>