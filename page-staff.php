<?php
/*
Template Name: スタッフ
*/
?>
<?php get_header(); ?>

<div class="content">
  <div class="p-staff">

    <!-- ======================================
MV
====================================== -->
    <div class="p-mv">
      <div class="p-mv__inner">
        <h1 class="p-mv__heading">
          <span class="p-mv__heading-inline-ja">スタッフ紹介</span>
          <span class="p-mv__heading-inline-en">STAFF</span>
        </h1>
        <div class="p-mv__img">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-top__item-sp.png" media="(max-width: 767px)" type="image/png" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-top__item.png" alt="" width="2320" height="680" loading="lazy" />
          </picture>
        </div>
      </div>
    </div>
    <!-- ======================================
パンくずリスト
====================================== -->
    <?php if (function_exists('bcn_display')) : ?>
      <div class="c-breadcrumbs">
        <ul>
          <?php if (function_exists('bcn_display')) {
            bcn_display_list();
          } ?>
        </ul>
      </div>
    <?php endif; ?>

    <!-- ======================================
director
====================================== -->
    <section class="p-staff-director">
      <div class="p-staff-director__wrap">
        <h2 class="p-staff-director__title" id="p-staff-director">
          <p class="c-title">院長のあいさつ</p>
        </h2>
        <div class="p-staff-director__item">
          <div class="p-staff-director__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-director__item.png" alt="院長の挨拶の写真" width="460" height="613" loading="lazy" />
          </div>
          <div class="p-staff-director__main">
            <div class="p-staff-director__message">
              <h3 class="p-staff-director__head">気軽に相談できる<br>街の歯医者さんでありたい。</h3>
              <p class="p-staff-director__text">
                当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。
              </p>
              <p class="p-staff-director__text p-staff-director__text--02">
                「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
              </p>
              <p class="p-staff-director__profile">
                みなみ歯科クリニック
                <br />
                院長　南 俊雄
              </p>
            </div>
          </div>
          <div class="p-staff-director__sub">
            <div class="p-staff-director__biography">
              <h3 class="p-staff-director__biography-head">経歴</h3>
              <div class="p-staff-director__dl-wrap">
                <dl class="p-staff-director__dl">
                  <dt class="p-staff-director__dt">2004年</dt>
                  <dd class="p-staff-director__dd">東京医科歯科大学歯学部 卒業</dd>
                </dl>
                <dl class="p-staff-director__dl p-staff-director__dl--02">
                  <dt class="p-staff-director__dt">2008年</dt>
                  <dd class="p-staff-director__dd p-staff-director__dd--02">
                    東京歯科大学歯学研究科大学院修了
                    <br />
                    博士(歯学)取得
                  </dd>
                  <!-- <dd class="p-staff-director__dd">博士(歯学)取得</dd> -->
                </dl>
                <dl class="p-staff-director__dl">
                  <dt class="p-staff-director__dt">2012年</dt>
                  <dd class="p-staff-director__dd">みなみ歯科クリニック 開院</dd>
                </dl>
              </div>
              <div class="p-staff-director__qualification">
                <h3 class="p-staff-director__qualification-head">資格</h3>
                <div class="p-staff-director__qualification-text-wrap">
                  <p class="p-staff-director__qualification-text">歯科医師臨床研修指導歯科医</p>
                  <p class="p-staff-director__qualification-text">博士(歯学)</p>
                  <p class="p-staff-director__qualification-text">衛生検査技師</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================
swiper
====================================== -->

    <div class="swiper-container p-staff-swiper-container">
      <div class="swiper p-staff-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!-- スライドの中身 -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-director__slider01.png" alt="院内の様子の写真" width="610" height="458" loading="lazy" />
          </div>
          <div class="swiper-slide">
            <!-- スライドの中身 -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-director__slider02.png" alt="院内の様子の写真" width="610" height="458" loading="lazy" />
          </div>
          <div class="swiper-slide">
            <!-- スライドの中身 -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-director__slider03.png" alt="院内の様子の写真" width="610" height="458" loading="lazy" />
          </div>
          <div class="swiper-slide">
            <!-- スライドの中身 -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-director__slider04.png" alt="院内の様子の写真" width="610" height="458" loading="lazy" />
          </div>
          <div class="swiper-slide">
            <!-- スライドの中身 -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-staff-director__slider05.png" alt="院内の様子の写真" width="610" height="458" loading="lazy" />
          </div>
        </div>
      </div>
    </div>

    <!-- ======================================
member
====================================== -->
    <section class="p-staff-member">
      <div class="p-staff-member__wrap">
        <h2 class="p-staff-member__title" id="p-staff-member">
          <p class="c-title">スタッフ紹介</p>
        </h2>
        <!-- 歯科衛生士 -->
        <div class="p-staff-member__upper">
          <div class="p-staff-member__body">
            <div class="p-staff-member__job-title">歯科衛生士</div>
            <div class="p-staff-member__cards">
              <?php // タクソノミーとタームの取得
              $taxonomy = 'occupation'; // タクソノミーの名前
              $term_slug = 'hygienist-staffs'; // タームのスラッグ

              // タームのオブジェクトを取得
              $term = get_term_by('slug', $term_slug, $taxonomy);

              // タームのクエリを作成
              $args = array(
                'post_type' => 'staffs', // カスタム投稿タイプの名前
                'posts_per_page' => -1, // 全ての投稿を取得
                'tax_query' => array(
                  array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug', // スラッグを使用してタームを指定する場合
                    'terms'    => $term_slug,
                  ),
                ),
                'orderby'        => 'date', // 日付でソート
                'order'          => 'ASC', // 昇順（古い記事が一番上に表示される）
              );

              $posts_query = new WP_Query($args);

              if ($posts_query->have_posts()) :
                while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                  <div class="p-staff-member__card">
                    <div class="p-staff-member__img">
                      <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                      ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo esc_url(get_template_directory_uri());; ?>/img/noimg.png" alt="">
                      <?php endif; ?>
                    </div>
                    <div class="p-staff-member__name">
                      <span>歯科衛生士</span>
                      <p><?php the_title(); ?></p>
                    </div>
                    <div class="p-staff-member__dl-wrap">
                      <div class="p-staff-member__dl">
                        <div class="p-staff-member__dt">出身地</div>
                        <div class="p-staff-member__dd"><?php the_field('birthplace'); ?></div>
                      </div>
                      <div class="p-staff-member__dl">
                        <div class="p-staff-member__dt">趣味</div>
                        <div class="p-staff-member__dd"><?php the_field('hobby'); ?></div>
                      </div>
                      <div class="p-staff-member__dl">
                        <div class="p-staff-member__dt">好きな食べ物</div>
                        <div class="p-staff-member__dd"><?php the_field('food'); ?></div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              else :
                // 投稿が見つからない場合の表示
                echo '投稿がありません。';
              endif;

              wp_reset_postdata(); ?>
            </div>
          </div>
        </div>


        <!-- 歯科助手 -->
        <div class="p-staff-member__lower">
          <div class="p-staff-member__body">
            <div class="p-staff-member__job-title">歯科助手</div>
            <div class="p-staff-member__cards">
              <!-- card03 -->
              <?php // タクソノミーとタームの取得
              $taxonomy = 'occupation'; // タクソノミーの名前
              $term_slug = 'assistant-staffs'; // タームのスラッグ

              // タームのオブジェクトを取得
              $term = get_term_by('slug', $term_slug, $taxonomy);

              // タームのクエリを作成
              $args = array(
                'post_type' => 'staffs', // カスタム投稿タイプの名前
                'posts_per_page' => -1, // 全ての投稿を取得
                'tax_query' => array(
                  array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug', // スラッグを使用してタームを指定する場合
                    'terms'    => $term_slug,
                  ),
                ),
                'orderby'        => 'date', // 日付でソート
                'order'          => 'ASC', // 昇順（古い記事が一番上に表示される）
              );

              $posts_query = new WP_Query($args);

              if ($posts_query->have_posts()) :
                while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                  <div class="p-staff-member__card">
                    <div class="p-staff-member__img">
                      <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                      ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo esc_url(get_template_directory_uri());; ?>/img/noimg.png" alt="">
                      <?php endif; ?>
                    </div>
                    <div class="p-staff-member__name">
                      <span>歯科衛生士</span>
                      <p><?php the_title(); ?></p>
                    </div>
                    <div class="p-staff-member__dl-wrap">
                      <div class="p-staff-member__dl">
                        <div class="p-staff-member__dt">出身地</div>
                        <div class="p-staff-member__dd"><?php the_field('birthplace'); ?></div>
                      </div>
                      <div class="p-staff-member__dl">
                        <div class="p-staff-member__dt">趣味</div>
                        <div class="p-staff-member__dd"><?php the_field('hobby'); ?></div>
                      </div>
                      <div class="p-staff-member__dl">
                        <div class="p-staff-member__dt">好きな食べ物</div>
                        <div class="p-staff-member__dd"><?php the_field('food'); ?></div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              else :
                // 投稿が見つからない場合の表示
                echo '投稿がありません。';
              endif;

              wp_reset_postdata(); ?>

            </div>
          </div>
        </div>
      </div>
</section>
</div>
</div>
<?php get_footer(); ?>