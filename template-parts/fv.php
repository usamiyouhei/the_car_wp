<?php get_header(); ?>
<main>
    <?php get_template_part('fv'); ?>
    <div class="about">
        <img src="<?php echo esc_url(get_theme_file_uri("/images/about-image.jpg")); ?>" alt="画像" class="about__img">
        <p class="about__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
</main>
<?php get_footer(); ?>