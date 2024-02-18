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
              <h1 class="page-title title">タクソノミー別一覧</h1>
              <!-- <span class="page-title--sub">実績一覧</span> -->
            </div>
          </div>
        </div>
      </section>

      <div class="news__main">
        <div class="news__main--inner inner">
          <section class="news__category">
                      <?php
            // タクソノミーのスラッグを指定
            $genre_slug = get_query_var('genre');
            $args = array(
                // カスタム投稿のスラッグを指定
                "post_type" => "works",
                'tax_query' => array(
                    array(
                        // タクソノミーのスラッグを指定
                        'taxonomy' => 'genre',
                        'field'    => 'slug',
                        'terms'    => $genre_slug,
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            ?>
           
          </section>

      <section class="news__text--items">
            <div class="works__content">
                      <?php
          $args = array(
              "post_type" => "works",
              "posts_per_page" => 10
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
                  <ul class="works__items">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="works__item">
               <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail( 'full', array( 'class' => 'works-img' ) ); ?>
            <?php else : ?>
                <img class="works-img" src="<?php echo esc_url(get_theme_file_uri( "/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
            <?php endif ; ?>
                      <div class="works__wrap">
                    <span class="works__wrap--category">修理・整備</span>
                    <h3 class="works__wrap--title scroll_up">
                      <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                       </a></h3>
                    <p class="works__wrap--text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                    </p>
                    <time class="works__wrap--date" datetime="<?php echo get_the_date('Y-m-d'); ?>"
                      ><?php echo get_the_date('Y.m.d'); ?></time
                    >
                    <?php
								                            $taxonomy_terms = get_the_terms($post->ID, 'genre');
								                            if (!empty($taxonomy_terms)) {
								                                $limit = 5;
								                                $count = 0;
								                                foreach ($taxonomy_terms as $taxonomy_term) {
								                                    if ($count < $limit) {
								                                        echo '<span class="news__category">' . esc_html($taxonomy_term->name) . '</span>';
								                                        $count++;
								                                    } else {
								                                        break;
								                                    }
								                                }
								                            }
								                            ?>
                  </div>
                </li>
                <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
   
              </ul>
              <?php else : ?>
    <p>記事が投稿されていません</p>
<?php endif; ?>
            </div>

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
      <div class="tab">
<?php
$current_term_id = get_queried_object()->term_id;
$terms = get_terms(array(
		// 表示するタクソノミースラッグを記述
    'taxonomy' => 'genre',
    'orderby' => 'name',
    'order'   => 'ASC',
    // 表示するタームの数を指定
    'number'  => 5
));

// カスタム投稿一覧ページへのURL
$home_class = (is_post_type_archive()) ? 'is-active' : '';
$home_link = sprintf(
    //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
    '<a class="tab__link %s" href="%s" alt="%s">全て</a>',
    $home_class,
    // カスタム投稿一覧ページのスラッグを指定
    esc_url(home_url('/works')),
    esc_attr(__('View all posts', 'textdomain'))
);
echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

// タームのリンク
if ($terms) {
    foreach ($terms as $term) {
        // カレントクラスに付与するクラスを指定できる
        $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
        $term_link = sprintf(
            // 各タームに付与するクラスを指定できる
            '<a class="tab__link %s" href="%s" alt="%s">%s</a>',
            $term_class,
            esc_url(get_term_link($term->term_id)),
            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
            esc_html($term->name)
        );
        echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
    }
}
?>
</div>

</main>
<?php get_footer(); ?>