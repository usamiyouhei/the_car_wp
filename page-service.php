<?php get_header(); ?>
<main>
<section class="another-page__top">
        <div class="another__fv">
          <div class="another__fv--wrap fv__content">
            <img
              class="another__fv--img scroll_up"
              src="<?php echo esc_url(get_theme_file_uri("/images/service.jpg")); ?>"
              alt=""
            />
            <div class="page-title__wrap scroll_left">
              <h1 class="page-title title">Service</h1>
              <span class="page-title--sub">サービス紹介</span>
            </div>

          </div>
          <?php if (function_exists('bcn_display')) { ?>
    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
    </div>
<?php } ?>
          <nav class="another-nav">
            <ul class="another-items">
              <li><a href="#" class="another__top--link">購入サポート</a></li>
              <li><a href="#" class="another__top--link">修理・整備</a></li>
              <li><a href="#" class="another__top--link">車検・点検</a></li>
            </ul>
          </nav>
          <div class="another-page__top-content inner">
            <h2 class="another-page__top-title">
              お客様一人一人が求める<br />
              理想のカー ライフに寄り添います
            </h2>
            <p class="text">
              様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロントでは車種ブランド別の専用電話回線をご用意しております。
            </p>
          </div>
        </div>
      </section>

      <section class="service-support" id="service-support">
        <div class="service-support__inner inner">
          <ul class="service-support__items">
            <li class="service-support__item">
              <div class="service-support__item--content">
                <div class="service-support__item--contents">
                  <div class="service-support__title--wrap">
                    <h3 class="service-support__number">01</h3>
                    <h4 class="service-support__title">購入サポート</h4>
                  </div>
                  <p class="service-support__text">
                    国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。
                  </p>
                </div>
                <img
                  src="<?php echo esc_url(get_theme_file_uri("/images/service2.jpg")); ?>"
                  alt=""
                  class="service-support__item-img"
                />
              </div>
              <div class="service-support__item--wrap">
                <div class="service-support__item--wrap-title">
                  <h5 class="service-support__item--wrap-title title-large">
                    FEATURES
                  </h5>
                  <span class="service-support__item--wrap-title title-small"
                    >特徴</span
                  >
                </div>
                <p>
                  弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                </p>
              </div>
            </li>
            <li class="service-support__item">
              <div class="service-support__item--content">
                <div class="service-support__item--contents">
                  <div class="service-support__title--wrap">
                    <h3 class="service-support__number">02</h3>
                    <h4 class="service-support__title">修理・整備</h4>
                  </div>
                  <p class="service-support__text">
                    高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。
                  </p>
                </div>
                <img
                  src="<?php echo esc_url(get_theme_file_uri("/images/service3.jpg")); ?>"
                  alt=""
                  class="service-support__item-img"
                />
              </div>
              <div class="service-support__item--wrap">
                <div class="service-support__item--wrap-title">
                  <h5 class="service-support__item--wrap-title title-large">
                    FEATURES
                  </h5>
                  <span class="service-support__item--wrap-title title-small"
                    >特徴</span
                  >
                </div>
                <p>
                  弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                </p>
              </div>
            </li>
            <li class="service-support__item">
              <div class="service-support__item--content">
                <div class="service-support__item--contents">
                  <div class="service-support__title--wrap">
                    <h3 class="service-support__number">03</h3>
                    <h4 class="service-support__title">車検・点検</h4>
                  </div>
                  <p class="service-support__text">
                    輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。
                  </p>
                </div>
                <img
                  src="<?php echo esc_url(get_theme_file_uri("/images/service4.jpg")); ?>"
                  alt=""
                  class="service-support__item-img"
                />
              </div>
              <div class="service-support__item--wrap">
                <div class="service-support__item--wrap-title">
                  <h5 class="service-support__item--wrap-title title-large">
                    FEATURES
                  </h5>
                  <span class="service-support__item--wrap-title title-small"
                    >特徴</span
                  >
                </div>
                <p>
                  弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="contact__contents">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/contact.jpg")); ?>" alt="" />
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