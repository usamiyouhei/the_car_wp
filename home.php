<?php get_header(); ?>
<main>
<section class="another-page__top">
        <div class="another__fv">
          <div class="another__fv--wrap fv__content">
            <img
              class="another__fv--img scroll_up"
              src="./images/news-top.jpg"
              alt=""
            />
            <div class="page-title__wrap scroll_left">
              <h1 class="page-title title">News</h1>
              <span class="page-title--sub">お知らせ</span>
            </div>
          </div>
        </div>
        <?php if (function_exists('bcn_display')) { ?>
    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
    </div>
<?php } ?>
      </section>

      <div class="news__main">
        <div class="news__main--inner inner">
          <section class="news__category">
            <ul class="news-title__items">
            <?php
    $categories = get_categories();
    foreach ($categories as $category) {
        echo '<li class="news-title__item--top"><a class="news__link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    ?>
             
            </ul>
          </section>

          <section class="news__text--items">
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
          </section>
        </div>
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