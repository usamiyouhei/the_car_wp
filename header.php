<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if (is_404()) : ?>
    <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
<?php endif; ?>
    <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header" id="header">
      <div class="header__inner">
        <h1 class="header__name">
          <a href="<?php echo esc_url(home_url("/")) ?>">
          <img
            class="header__logo"
            src="<?php echo esc_url(get_theme_file_uri('/images/the Car Automobile-logo1.svg')); ?>"
            alt="ヘッダーロゴ"
          />
          </a>
        </h1>
        <nav class="header__nav md-none">
          <ul class="header__items">
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/")) ?>" class="header__link">TOP</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/about")) ?>" class="header__link">ABOUT</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/service")) ?>" class="header__link">SERVICE</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/works")) ?>" class="header__link">WORKS</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/news")) ?>" class="header__link">NEWS</a>
            </li>
          </ul>
        </nav>
        <div class="header__contact contact-button md-none">
          <i class="fa-regular fa-envelope"></i
          ><a href="<?php echo esc_url(home_url("/contact")) ?>" class="header__link header__link--contact"
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
