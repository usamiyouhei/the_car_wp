<?php get_header(); ?>
<main>
      <section class="fv" id="fv">
        <div class="fv__inner">
          <div class="fv__swiper">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-img1.jpg")); ?>"
                      media="(min-width: 768px)"
                    />
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/fv_sp-img1.jpg")); ?>" alt="" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-img2.jpg")); ?>"
                      media="(min-width: 768px)"
                    />
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/fv_sp-img2.jpg")); ?>" alt="" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-img3.jpg")); ?>"
                      media="(min-width: 768px)"
                    />
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/fv_sp-img3.jpg")); ?>" alt="" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="<?php echo esc_url(get_theme_file_uri("/images/fv-img4.jpg")); ?>"
                      media="(min-width: 768px)"
                    />
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/fv_sp-img4.jpg")); ?>" alt="" />
                  </picture>
                </div>
              </div>
            </div>
          </div>
          <div class="fv__right--contents">
            <h2 class="fv__text">あなたの<br />日常が目覚める</h2>
          </div>
        </div>
      </section>

      <!-- <article> -->
      <div class="scroll-fixed">
        <div class="loop__wrap">
          <div class="loop__wrap--first">
            Good&nbsp;life&nbsp;for&nbsp;Good Car&nbsp;
          </div>
          <div class="loop__wrap--second">
            Good&nbsp;life&nbsp;for&nbsp;Good Car&nbsp;
          </div>
        </div>
      </div>

      <section class="about" id="about">
        <div class="about__inner inner">
          <div class="about__contents">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/about-img.jpg")); ?>" alt="" class="about__img" />
            <div class="about__wrap">
              <h2 class="section-title__about">About&nbsp;us</h2>
              <p class="about__text text">
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
              </p>
              <a href="#" class="read-more__button button">READ MORE</a>
            </div>
          </div>
        </div>
      </section>

      <section class="service" id="service">
        <div class="service__inner inner">
          <h2 class="section-title__service section-title scroll_right">
            <div>Service</div>
          </h2>
          <ul class="service__items">
            <li class="service__item">
              <div class="service__item--01">
                <div class="service__item--title">
                  <span>Service01</span>
                  <h3>購入サポート</h3>
                </div>
              </div>
              <p class="service__item--text text">
                国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。
              </p>
              <a href="#" class="read-more__button button">READ MORE</a>
            </li>
            <li class="service__item">
              <div class="service__item--02">
                <div class="service__item--title">
                  <span>Service02</span>
                  <h3>修理・整備</h3>
                </div>
              </div>
              <p class="service__item--text text">
                高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。
              </p>
              <a href="#" class="read-more__button button">READ MORE</a>
            </li>
            <li class="service__item">
              <div class="service__item--03">
                <div class="service__item--title">
                  <span>Service03</span>
                  <h3>車検・点検</h3>
                </div>
              </div>
              <p class="service__item--text text">
                輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。
              </p>
              <a href="<?php echo esc_url(home_url("/service")) ?>" class="read-more__button button">READ MORE</a>
            </li>
          </ul>
        </div>
      </section>

      <!-- works -->
      <section class="works" id="works">
        <div class="works__inner inner">
          <h2 class="section-title__works section-title scroll_left">Works</h2>
          <div class="works__content">
                      <?php
            $args = array(
                "post_type" => "works",
                "posts_per_page" => 2
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <ul class="works__items">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="works__item">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/works-img1.jpg")); ?>" alt="" class="works-img" />
                <div class="works__wrap">
                  <span class="works__wrap--category">修理・整備</span>
                  <h3 class="works__wrap--title scroll_up">
                    車のドアが開けられなくなった｜ドアロックの交換と...
                  </h3>
                  <p class="works__wrap--text">
                    弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                  </p>
                  <time class="works__wrap--date" datetime="2022-09-02"
                    >2022.09.02</time
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
        </div>
      </section>

      <!-- news -->
      <section class="news" id="news">
        <div class="news__inner inner">
          <div class="news-title__wrap">
            <h2 class="section-title__news section-title fade-in fade-in-left">
              News
            </h2>
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
                <a href="<?php echo esc_url(home_url("/")) ?>" class="news__link">入庫車情報</a>
              </li>
            </ul>
          </div>

          <?php
    $args = array(
        "post_type" => "post",
        "posts_per_page" => 5
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
          <ul class="news__contents">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="news__item">
              <time datetime="2022-09-02">2022.09.02</time>
              <a href="" class="news__item--tag">トピックス</a>
              <a href="" class="news__item--tag">イベント・キャンペーン</a>
              <a href="" class="news__item--link"
                ><h3 class="news__item--title">
                  2022年10月8日・9日・10日の3日間、試乗車フェアを開催します
                </h3></a
              >
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

          </ul>
          <?php else : ?>
        <p>記事が投稿されていません</p>
    <?php endif; ?>

    <a href="<?php echo esc_url(home_url("/news")) ?>" class="read-more__button button">READ MORE</a>

        </div>
      </section>

      <section class="contact" id="contact">
        <div class="contact__contents">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/contact.jpg")); ?>" media="(min-width: 1025px)" />
            <img src="<?php echo esc_url(get_theme_file_uri("/images/contact-sp.jpg")); ?>" alt="" />
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