<?php get_header(); ?>
<main>
<div class="news-detail__page">
        <section class="news-detail">
          <div class="news-detail__inner inner">
            <div class="news-detail__top-title">
              <div class="news-detail__tag">
                <span>トピックス</span>
                <span>キャンペーン</span>
              </div>
              <h1 class="news-detail__title">
                2022年10月8日・9日・10日の3日間、試乗車フェアを開催します
              </h1>
              <time class="date-time" datetime="2022-09-02">2022.09.02</time>
            </div>
            <img class="news-detail__img" src="./images/news-top2.jpg" alt="" />
            <div class="news-detail__contents">
              <div class="news-detail__content">
              <?php the_content(); ?>
                <h2 class="news-detail__content--title">
                  ここに見出し2が入ります
                </h2>
                <p class="news-detail__content--text">
                  本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。
                </p>
              </div>
              <div class="news-detail__content">
                <h2 class="news-detail__content--title-sub">
                  ここに見出し3が入ります
                </h2>
                <p class="news-detail__content--text">
                  本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。
                </p>

                <ul class="news-detail__contents--list">
                  <li class="news-detail__contents--list-item">リスト</li>
                  <li class="news-detail__contents--list-item">リストリスト</li>
                  <li class="news-detail__contents--list-item">
                    リストリストリスト
                  </li>
                </ul>
              </div>
            </div>
            <div class="another-page">
                        <?php
            // 前の記事へのリンク
            $prev_link = get_previous_post_link('%link', '&larr;前の記事へ');
            if (!empty($prev_link)) {
                echo str_replace('<a href=', '<a class="detail__prev" href=', $prev_link);
            }

            // 次の記事へのリンク
            $next_link = get_next_post_link('%link', '次の記事へ&rarr;');
            if (!empty($next_link)) {
                echo str_replace('<a href=', '<a class="detail__next" href=', $next_link);
            }
            ?>  </div>
        </section>

        <section class="another-topics">
          <div class="news-article">
            <h4 class="news-article__title">最新記事</h4>
            <?php
        $args = array(
            "post_type" => "post",
            "posts_per_page" => 5,
            "orderby" => "date",
            "order" => "DESC",
                );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <ul class="news-article__items">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                 
              <li class="news-article__item">
              <?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('full', array('class' => 'news-article__img')); ?>
<?php else : ?>
    <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
<?php endif; ?>
                <div class="news-article__item-wrap">
                  <a href="<?php the_permalink(); ?>" class="news-article__text">
                  <?php the_title(); ?>
                  </a>
                  <time class="news-article__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"
                    ><?php echo get_the_date('Y年n月j日'); ?></time
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
          <div class="news-article__archive">
            <h4 class="news-article__title">アーカイブ</h4>
            <ul class="news-article__archive-items">
           
              <?php wp_get_archives('type=monthly&limit=12'); ?>

          </ul>
          </div>
          <section class="news__category">
          <div class="tab">
            <?php
            $current_category_id = get_queried_object_id();
            $categories = get_categories(array(
                'orderby' => 'name',
                'order'   => 'ASC',
                // 表示するカテゴリーの数を指定
                'number'  => 5
            ));

            // 通常投稿一覧ページへのURL
            $home_class = (is_home() || is_front_page()) ? 'is-active' : '';
            $home_link = sprintf(
                //通常投稿一覧ページへのaタグに付与するクラスを指定できる
                '<a class="tab__link %s" href="%s" alt="%s">全て</a>',
                $home_class,
                // 通常投稿一覧ページのスラッグを指定
                esc_url(home_url('/news')),
                esc_attr(__('View all posts', 'textdomain'))
            );
            echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

            // カテゴリーのリンク
            if ($categories) {
                foreach ($categories as $category) {
                    // カレントクラスに付与するクラスを指定できる
                    $category_class = ($current_category_id === $category->term_id) ? 'is-active' : '';
                    $category_link = sprintf(
                        // 各カテゴリーに付与するクラスを指定できる
                        '<a class="news__link %s" href="%s" alt="%s">%s</a>',
                        $category_class,
                        esc_url(get_category_link($category->term_id)),
                        esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                        esc_html($category->name)
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $category_link);
                }
            }
            ?>
            </div>
            <!-- <h4 class="news-article__title">カテゴリー</h4>
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
            </ul> -->
          </section>
        </section>
      </div>

      <section class="contact" id="contact">
        <div class="contact__contents">
          <picture>
            <source srcset="./images/contact.jpg" media="(min-width: 1025px)" />
            <img src="./images/contact-sp.jpg" alt="" />
          </picture>
        </div>
        <div class="contact__wrap">
          <div class="contact__text--items">
            <p class="contact__text">
              輸入車の購入や修理のご相談など<br />
              お気軽にお問い合わせください。
            </p>
            <div class="contact-button">
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="contact__link--mail button">
                <i class="fa-regular fa-envelope"></i>お問い合わせ
              </a>
              <a href="tel:+" class="contact__link--tel button">
                <i class="fa-solid fa-phone"></i>
                0000-000-000
              </a>
            </div>
            <p class="small-text">受付時間 : 火曜日を除く 10：00〜18：00</p>
          </div>
        </div>
      </section>

</main>
<?php get_footer(); ?>