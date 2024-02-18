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
              <h1 class="page-title title">Contact</h1>
              <span class="page-title--sub">お問い合わせ</span>
            </div>
          </div>
        </div>
      </section>

     
	<div class="contact">
  <?php echo do_shortcode('[contact-form-7 id="f816b1c" title="問い合わせ確認"]'); ?>
  </div>
  
</main>

<?php get_footer(); ?>