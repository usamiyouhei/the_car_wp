<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>タイトル</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:card" content="summary" />
    <!-- ファビコン -->
    <link rel="icon" href="#" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <!-- font-awesome -->
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <script
      src="https://kit.fontawesome.com/b055b2123e.js"
      crossorigin="anonymous"
    ></script>
    <!-- css -->
    <link rel="stylesheet" href="/the_car_wp/sass/style.css" />
    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
      defer
    ></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/the_car_wp/js/script.js" defer></script>
  </head>

  <body>
    <header class="header" id="header">
      <div class="header__inner">
        <h1 class="header__name">
          <img
            class="header__logo"
            src="./images/the Car Automobile-logo1.svg"
            alt="ヘッダーロゴ"
          />
        </h1>
        <nav class="header__nav md-none">
          <ul class="header__items">
            <li class="header__item">
              <a href="#top" class="header__link">TOP</a>
            </li>
            <li class="header__item">
              <a href="#about" class="header__link">ABOUT</a>
            </li>
            <li class="header__item">
              <a href="#service" class="header__link">SERVICE</a>
            </li>
            <li class="header__item">
              <a href="#works" class="header__link">WORKS</a>
            </li>
            <li class="header__item">
              <a href="#news" class="header__link">NEWS</a>
            </li>
          </ul>
        </nav>
        <div class="header__contact contact-button md-none">
          <i class="fa-regular fa-envelope"></i
          ><a href="#contact" class="header__link header__link--contact"
            >CONTACT</a
          >
        </div>
      </div>

      <div class="hamburger js-hamburger md-show">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="drawer-menu js-drawer">
        <div class="drawer-menu__inner">
          <ul class="drawer-menu__items">
            <li class="drawer-menu__item">
              <a href="#top" class="drawer-menu__link">top</a>
            </li>
            <li class="drawer-menu__item">
              <a href="#about" class="drawer-menu__link">about</a>
            </li>
            <li class="drawer-menu__item">
              <a href="#service" class="drawer-menu__link">Service</a>
            </li>
            <li class="drawer-menu__item">
              <a href="#works" class="drawer-menu__link">works</a>
            </li>
            <li class="drawer-menu__item">
              <a href="#news" class="drawer-menu__link">news</a>
            </li>
            <li class="drawer-menu__item">
              <a
                href="#contact"
                class="drawer-menu__link drawer-menu__link--contact"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </header>

    <main>
      <section class="fv" id="fv">
        <div class="fv__inner">
          <div class="fv__swiper">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="./images/fv-img1.jpg"
                      media="(min-width: 768px)"
                    />
                    <img src="./images/fv_sp-img1.jpg" alt="" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="./images/fv-img2.jpg"
                      media="(min-width: 768px)"
                    />
                    <img src="./images/fv_sp-img2.jpg" alt="" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="./images/fv-img3.jpg"
                      media="(min-width: 768px)"
                    />
                    <img src="./images/fv_sp-img3.jpg" alt="" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source
                      srcset="./images/fv-img4.jpg"
                      media="(min-width: 768px)"
                    />
                    <img src="./images/fv_sp-img4.jpg" alt="" />
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
            <img src="./images/about-img.jpg" alt="" class="about__img" />
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
              <a href="#" class="read-more__button button">READ MORE</a>
            </li>
          </ul>
        </div>
      </section>

      <!-- works -->
      <section class="works" id="works">
        <div class="works__inner inner">
          <h2 class="section-title__works section-title scroll_left">Works</h2>
          <div class="works__content">
            <ul class="works__items">
              <li class="works__item">
                <img src="./images/works-img1.jpg" alt="" class="works-img" />
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
              <li class="works__item">
                <img src="./images/works-img2.jpg" alt="" class="works-img" />
                <div class="works__wrap">
                  <span class="works__wrap--category">修理・整備</span>
                  <h3 class="works__wrap--title scroll_up">
                    愛車のリアバンパーに傷がついた｜板金修理と塗装で...
                  </h3>
                  <p class="works__wrap--text">
                    弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                  </p>
                  <time class="works__wrap--date" datetime="2022-08-26"
                    >2022.08.26</time
                  >
                </div>
              </li>
              <li class="works__item">
                <img src="./images/works-img3.jpg" alt="" class="works-img" />
                <div class="works__wrap">
                  <span class="works__wrap--category">購入サポート</span>
                  <h3 class="works__wrap--title scroll_up">
                    はじめて輸入車の購入を検討中のお客様
                  </h3>
                  <p class="works__wrap--text">
                    弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                  </p>
                  <time class="works__wrap--date" datetime="2022-08-20"
                    >2022.08.20</time
                  >
                </div>
              </li>
              <a href="#" class="read-more__button button">READ MORE</a>
            </ul>
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
                <a href="#" class="news__link">入庫車情報</a>
              </li>
            </ul>
          </div>
          <ul class="news__contents">
            <li class="news__item">
              <time datetime="2022-09-02">2022.09.02</time>
              <a href="" class="news__item--tag">トピックス</a>
              <a href="" class="news__item--tag">イベント・キャンペーン</a>
              <a href="" class="nwes__item--link"
                ><h3 class="news__item--title">
                  2022年10月8日・9日・10日の3日間、試乗車フェアを開催します
                </h3></a
              >
            </li>
            <li class="news__item">
              <time datetime="2022-08-23">2022.08.23</time>
              <a href="" class="news__item--tag">トピックス</a>
              <a href="" class="news__item--tag">入庫車情報</a>
              <a href="" class="nwes__item--link"
                ><h3 class="news__item--title">
                  【入庫車のご案内】メルセデスベンツG 350が入庫しました
                </h3></a
              >
            </li>
            <li class="news__item">
              <time datetime="2022-08-07">2022.08.07</time>
              <a href="" class="news__item--tag">トピックス</a>
              <a href="" class="nwes__item--link"
                ><h3 class="news__item--title">お盆休みのご案内</h3></a
              >
            </li>
            <li class="news__item">
              <time datetime="2022-08-03">2022.08.03</time>
              <a href="" class="news__item--tag">トピックス</a>
              <a href="" class="news__item--tag">入庫車情報</a>
              <a href="" class="nwes__item--link"
                ><h3 class="news__item--title">
                  【入庫車のご案内】JEEPラングラー アンリミテッド
                  サハラが入庫しました
                </h3></a
              >
            </li>
            <li class="news__item">
              <time datetime="2022-07-26">2022.07.26</time>
              <a href="" class="news__item--tag">トピックス</a>
              <a href="" class="nwes__item--link"
                ><h3 class="news__item--title">
                  半導体不足は輸入車・輸入中古車にどう影響するか
                </h3></a
              >
            </li>
            <a href="#" class="read-more__button button">READ MORE</a>
          </ul>
        </div>
      </section>

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
              <a href="" class="contact__link--mail button">
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

    <footer class="footer" id="footer">
      <div class="footer__contents">
        <div class="footer__logo--items">
          <div class="footer__logo--item">
            <div class="footer__logo--wrap">
              <img
                class="footer__logo"
                src="./images/the Car Automobile-logo1.svg"
                alt="ヘッダーロゴ"
              />
            </div>
            <div class="brand-logo">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
          <small class="footer__copyright"
            >&copy;2023&nbsp;the&nbsp;Car&nbsp;Automobile&nbsp;all&nbsp;rights&nbsp;reserved</small
          >
        </div>
        <nav class="footer__nav--link">
          <ul class="footer__link-items">
            <li><a href="#" class="footer__link-item">TOP</a></li>
            <li><a href="#" class="footer__link-item">ABOUT</a></li>
            <li><a href="#" class="footer__link-item">SERVICE</a></li>
            <li><a href="#" class="footer__link-item">WORKS</a></li>
            <li><a href="#" class="footer__link-item">NEWS</a></li>
            <li><a href="#" class="footer__link-item">CONTACT</a></li>
            <li>
              <a href="#" class="footer__link-item">プライバシーポリシー</a>
            </li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>
