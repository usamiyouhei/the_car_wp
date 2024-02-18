<?php get_header(); ?>
<main>
           <div class="works__item">
                          <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    foreach( $categories as $category ) {
                        echo '<span class="works-detail__category">' . esc_html( $category->name ) . '</span>';
                    }
                }
                ?>
                   <h3 class="works__wrap--title scroll_up">
                   <?php the_title(); ?>
                  </h3>
                    <time class="works__wrap--date" datetime="<?php echo get_the_date('Y-m-d'); ?>"
                      ><?php echo get_the_date('Y年n月j日'); ?></time
                    >
                    <?php if (has_post_thumbnail()) : ?>
                         <?php the_post_thumbnail( 'full', array( 'class' => 'works-img' ) ); ?>
                   <?php else : ?>
                          <img class="works-detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                      <?php endif; ?>
                   <div class="works__wrap">
                    
                    <p class="works__wrap--text">
                      弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...
                    </p>
                    
                    <p>本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。</p>
                  </div>
                  <a href="#" class="read-more__button button">実績一覧へ戻る</a>
                  <?php the_content(); ?>
                </div>
                              <?php
              // 前の記事へのリンク
              $prev_link = get_previous_post_link('%link', '&larr;前の記事へ');
              if (!empty($prev_link)) {
                  echo str_replace('<a href=', '<a class="works-detail__prev" href=', $prev_link);
              }

              // 次の記事へのリンク
              $next_link = get_next_post_link('%link', '次の記事へ&rarr;');
              if (!empty($next_link)) {
                  echo str_replace('<a href=', '<a class="works-detail__next" href=', $next_link);
              }
              ?>
</main>
<?php get_footer(); ?>