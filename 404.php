<?php get_header(); ?>
<main>
<section class="not_page">
        <div class="not__inner">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/not-img.jpg')); ?>" alt="" class="not__img" />
          <div class="not__text-wrap">
            <h1 class="not__title section-title">404&nbsp;Not&nbsp;Found</h1>
            <p class="text">
              お探しのページはURLが誤っているか、削除された可能性があります。3秒後にTOPページに遷移します
            </p>
          <a href="" class="go-top__button button"><span>TOPへ戻る</span></a>

          </div>
        </div>
      </section>
</main>
<?php get_footer(); ?>