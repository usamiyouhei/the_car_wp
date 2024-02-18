<?php get_header(); ?>
<main>
<section class="another-page__top">
        <div class="another__fv">
          <div class="another__fv--wrap fv__content">
            <img class="another__fv--img scroll_up" src="<?php echo esc_url(get_theme_file_uri("/images/about-top1.jpg")); ?>" alt=""/>
            <div class="page-title__wrap scroll_left">
              <h1 class="page-title title">About</h1>
              <span class="page-title--sub">私たちについて</span>
            </div>
           
          </div>
          <?php if (function_exists('bcn_display')) { ?>
    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
    </div>
<?php } ?>
          <nav class="another-nav">
            <ul class="another-items">
              <li><a href="#" class="another__top--link">経営理念</a></li>
              <li><a href="#" class="another__top--link">アクセス</a></li>
              <li><a href="#" class="another__top--link">会社概要</a></li>
            </ul>
          </nav>
          <div class="another-page__top-content inner">
            <h3 class="another-page__top-title">
              国境を超え、メーカーを超え<br />
              「型にはまらない」あなただけの歓びを
            </h3>
            <p class="text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。
              これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
          </div>
        </div>
      </section>

      <section class="about-page__philosophy">
        <div class="about-page__philosophy--inner inner">
        <div class="about-page__philosophy--wrap">
        <div class="title-wrap">
        <span>経営理念</span>
        <h2 class="title-philosophy section-title__about">Philosophy</h2>
      </div>
      <div class="philosophy-text--wrap">
        <p class="philosophy-text text">「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。我々は現状に満足することなく挑戦し続けます。</p>
        <p class="president-text">代表取締役　田中太郎</p>
      </div>
    </div>
      <img src="<?php echo esc_url(get_theme_file_uri("/images/about2.jpg")); ?>" alt="" class="president--img">
    </div>
      </section>

<section class="access" id="access">
  <div class="access__inner inner">
    <div class="access--wrap">
    <div class="title-wrap">
      <span>アクセス</span>
    <h2 class="access-title section-title__about">Access</h2>
  </div>
  <div class="access-text">
    <p><?php the_field("custom-text"); ?></p>
  </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13046.118185199572!2d136.89674120396373!3d35.16835192424985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037120bb9b111f%3A0xa50373f96ddb69c4!2z6Yec54KK44GN44GU44Gv44KT44Go44OP44Oz44OQ44O844KwIOOCv-OCpOODgemjn-Wggg!5e0!3m2!1sja!2sjp!4v1707354549648!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>

<section class="company-profile" id="company-profile">
  <div class="company-profile__inner inner">
 
    <div class="title-wrap">
      <span>会社概要</span>
    <h2 class="access-title section-title__about">Company Profile</h2>
  </div>
  <dl class="company-profile__container">
    <dt class="company-profile__title">会社名</dt>
    <dd class="company-profile__text">株式会社Auto mobile</dd>
    <dt class="company-profile__title">所在地</dt>
    <dd class="company-profile__text"><?php the_field("custom-text"); ?></dd>
    <dt class="company-profile__title">設立</dt>
    <dd class="company-profile__text">2015年12月10日</dd>
    <dt class="company-profile__title">代表取締役</dt>
    <dd class="company-profile__text">田中　太郎</dd>
    <dt class="company-profile__title">事業内容</dt>
    <dd class="company-profile__text">
      <ul>
        <li class="company-profile__service-text">自動車販売（新車、中古車）古物No.第00000000号</li>
        <li class="company-profile__service-text">自動車整備（国産車、輸入車）陸運局認証工場　認証No.0-0000</li>
        <li class="company-profile__service-text">輸入車販売（自動車、自動車関連部品）</li>
        <li class="company-profile__service-text">保険代理店（ABC損害保険株式会社、DFG損害保険株式会社）</li>
      </ul>
    </dd>
  </dl>
  </div>
  <div class="test-slick">
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about3.jpg")); ?>" alt="" width="500" height="233"></div>
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about4.jpg")); ?>" alt="" width="500" height="233"></div>
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about5.jpg")); ?>" alt="" width="500" height="233"></div>
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about6.jpg")); ?>" alt="" width="500" height="233"></div>
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about7.jpg")); ?>" alt="" width="500" height="233"></div>
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about3.jpg")); ?>" alt="" width="500" height="233"></div>
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about1.jpg")); ?>" alt="" width="500" height="233"></div>
    <div class="test-slick__item"><img src="<?php echo esc_url(get_theme_file_uri("/images/about4.jpg")); ?>" alt="" width="500" height="233"></div>
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