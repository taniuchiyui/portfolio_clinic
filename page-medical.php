<?php
/*
Template Name: 診療案内
*/
?>
<?php get_header(); ?>


<div class="content">
  <div class="p-medical">
    <!-- ======================================
MV
====================================== -->
    <div class="p-mv">
      <div class="p-mv__inner">
        <h1 class="p-mv__heading">
          <span class="p-mv__heading-inline-ja">診療案内</span>
          <span class="p-mv__heading-inline-en">MEDICAL</span>
        </h1>
        <div class="p-mv__img">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-medical-mv_item-sp.png" media="(max-width: 767px)" type="image/png" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-medical-mv_item.png" alt="" width="2320" height="680" loading="lazy" />
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
ページ内リンク
====================================== -->
    <div class="p-medical-nav__wrap">
      <!-- 一般診療 -->
      <div class="p-medical-nav__item">
        <div class="p-medical-nav__title-wrap">
          <div class="p-medical-nav__title">一般診療</div>
          <div class="p-medical-nav__subtitle">保険対象</div>
        </div>
        <ul class="p-medical-nav__lists">
          <?php // タクソノミーとタームの取得
          $taxonomy = 'plan_category'; // タクソノミーの名前
          $term_slug = 'general_medical_treatment'; // タームのスラッグ

          // タームのオブジェクトを取得
          $term = get_term_by('slug', $term_slug, $taxonomy);

          // タームのクエリを作成
          $args = array(
            'post_type' => 'plan', // カスタム投稿タイプの名前
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
              <li class="p-medical-nav__list">
                <a href="#<?php echo $post->ID; ?>" class="p-medical-nav__btn">
                  <span class="p-medical-nav__btn-text"><?php the_title(); ?></span>
                </a>
              </li>
          <?php endwhile;
          else :
          // 投稿が見つからない場合の表示
          endif;

          wp_reset_postdata(); ?>

        </ul>
      </div>

      <!-- 特殊診療 -->
      <div class="p-medical-nav__item">
        <div class="p-medical-nav__title-wrap">
          <div class="p-medical-nav__title">特殊診療</div>
          <div class="p-medical-nav__subtitle p-medical-nav__subtitle-accent">実費</div>
        </div>
        <ul class="p-medical-nav__lists">
          <?php // タクソノミーとタームの取得
          $taxonomy = 'plan_category'; // タクソノミーの名前
          $term_slug = 'special_medical_treatment'; // タームのスラッグ

          // タームのオブジェクトを取得
          $term = get_term_by('slug', $term_slug, $taxonomy);

          // タームのクエリを作成
          $args = array(
            'post_type' => 'plan', // カスタム投稿タイプの名前
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
              <li class="p-medical-nav__list">
                <a href="#<?php echo $post->ID; ?>" class="p-medical-nav__btn">
                  <span class="p-medical-nav__btn-text"><?php the_title(); ?></span>
                </a>
              </li>
          <?php endwhile;
          else :
          // 投稿が見つからない場合の表示
          endif;

          wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
    <!-- ======================================
medical-main
====================================== -->

    <section class="p-medical-main">
      <div class="p-medical-main__inner">
        <!-- 装飾部分 -->
        <div class="p-medical-main__decoration-top">
          <div class="p-medical-main__decoration-top-left">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-kirakira.svg" alt="" loading="lazy" width="252" height="276" />
          </div>
          <div class="p-medical-main__decoration-top-center">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-nose02.svg" alt="" loading="lazy" width="200" height="180" />
          </div>
          <div class="p-medical-main__decoration-top-right">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-kira.svg" alt="" loading="lazy" width="116" height="116" />
          </div>
          <div class="p-medical-main__decoration-bg"></div>
        </div>


        <!-- コンテンツ -->
        <div class="p-medical-main__content">
          <div class="p-medical-main__title" id="p-medical-nav__general">
            <h2 class="c-title">一般診療</h2>
          </div>
          <div class="p-medical-main__items">
            <!-- 一般診療 -->
            <?php // タクソノミーとタームの取得
            $taxonomy = 'plan_category'; // タクソノミーの名前
            $term_slug = 'general_medical_treatment'; // タームのスラッグ

            // タームのオブジェクトを取得
            $term = get_term_by('slug', $term_slug, $taxonomy);

            // タームのクエリを作成
            $args = array(
              'post_type' => 'plan', // カスタム投稿タイプの名前
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
                <div id="<?php echo $post->ID; ?>" class="p-medical-main__item">
                  <h2 class="p-medical-main__head">
                    <span class="p-medical-main__heading"><?php the_title(); ?></span>
                    <span class="p-medical-main__subheading"><?php the_field('trouble'); ?></span>
                  </h2>

                  <div class="p-medical-main__body">
                    <div class="p-medical-main__text">
                      <p><?php the_field('overview'); ?></p>
                    </div>
                    <div class="p-medical-main__img">
                      <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                      ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo esc_url(get_template_directory_uri());; ?>/img/noimg.png" alt="No Image">
                      <?php endif; ?>
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
        <div class="p-medical-main__decoration-bottom">
          <div class="p-medical-main__decoration-bottom-left">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-bottom-deco-kira.svg" alt="" width="57" height="56" loading="lazy" />
          </div>
          <div class="p-medical-main__decoration-bottom-right">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-bottom-deco-kirakira.svg" alt="" loading="lazy" width="126" height="138" />
          </div>
        </div>
      </div>
    </section>

    <!-- 特殊診療 -->
    <section class="p-medical-main p-medical-main-self-funded">
      <div class="p-medical-main__inner">
        <!-- 装飾部分 -->
        <div class="p-medical-main__decoration-top">
          <div class="p-medical-main__decoration-top-left">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-kirakira.svg" alt="" loading="lazy" width="252" height="276" />
          </div>
          <div class="p-medical-main__decoration-top-center">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-nose02.svg" alt="" loading="lazy" width="200" height="180" />
          </div>
          <div class="p-medical-main__decoration-top-right">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-kira.svg" alt="" loading="lazy" width="58" height="58" />
          </div>
          <div class="p-medical-main__decoration-bg"></div>
        </div>


        <!-- コンテンツ -->
        <div class="p-medical-main__content">
          <div class="p-medical-main__title" id="p-medical-nav__special">
            <h2 class="c-title">特殊診療</h2>
          </div>

          <div class="p-medical-main__items">
            <?php // タクソノミーとタームの取得
            $taxonomy = 'plan_category'; // タクソノミーの名前
            $term_slug = 'special_medical_treatment'; // タームのスラッグ

            // タームのオブジェクトを取得
            $term = get_term_by('slug', $term_slug, $taxonomy);

            // タームのクエリを作成
            $args = array(
              'post_type' => 'plan', // カスタム投稿タイプの名前
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


                <div id="<?php echo $post->ID; ?>" class="p-medical-main__item p-medical-main__item-self-funded">
                  <h2 class="p-medical-main__head">
                    <span class="p-medical-main__heading"><?php the_title(); ?></span>
                    <span class="p-medical-main__subheading"><?php the_field('trouble'); ?></span>
                  </h2>

                  <div class="p-medical-main__body">
                    <div class="p-medical-main__text">
                      <p><?php the_field('overview'); ?></p>
                    </div>
                    <div class="p-medical-main__img">
                      <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                      ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : // なければnoimage画像をデフォルトで表示 
                      ?>
                        <img src="<?php echo esc_url(get_template_directory_uri());; ?>/img/noimg.png" alt="No Image">
                      <?php endif; ?>
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
        <div class="p-medical-main__decoration-bottom">
          <div class="p-medical-main__decoration-bottom-left">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-bottom-deco-kira.svg" alt="" width="57" height="56" loading="lazy" />
          </div>
          <div class="p-medical-main__decoration-bottom-right">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-bottom-deco-kirakira.svg" alt="" loading="lazy" width="126" height="138" />
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>