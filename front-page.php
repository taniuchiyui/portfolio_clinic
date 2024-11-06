<?php get_header(); ?>
<div class="content">
  <!-- ======================================
MV
====================================== -->
  <!-- MV -->
  <div class="p-index-mv">
    <!-- スライダー -->
    <div class="p-index-mv__swiper-container">
      <div class="swiper p-index-mv__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide p-index-mv__slide">
            <!-- スライドの中身 -->

            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__swiper01-sp.png" media="(max-width: 767px)" type="image/png" />
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__swiper01-pc.png" alt="" width="2320" height="1040" loading="lazy" />
            </picture>
          </div>
          <div class="swiper-slide p-index-mv__slide">
            <!-- スライドの中身 -->

            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__swiper02-sp.jpg" media="(max-width: 767px)" />
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__swiper02-pc.png" alt="" width="2320" height="1040" loading="lazy" />
            </picture>
          </div>
          <div class="swiper-slide p-index-mv__slide">
            <!-- スライドの中身 -->

            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__swiper03-sp.png" media="(max-width: 767px)" type="image/png" />
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__swiper03-pc.png" alt="" width="2320" height="1040" loading="lazy" />
            </picture>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- スクロールバー -->
      </div>
      <div class="p-index-mv__copy">
        <picture>
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-index-mv_copy-sp.png" media="(max-width: 767px)" type="image/png" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-index-mv_copy-pc.png" alt="街の皆さまの笑顔を守るアットホームな歯医者さん" width="844" height="238" loading="lazy" />
        </picture>
      </div>
    </div>

    <div class="p-index-mv__lower">
      <div class="p-index-mv__medical-time">
        <picture>
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__medical-time-sp.png" media="(max-width: 767px)" type="image/png" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-mv__medical-time-pc.png" alt="診療時間" width="966" height="344" loading="lazy" />
        </picture>
      </div>

      <!-- ニュース -->
      <div class="p-index-mv__news">
        <div class="p-index-mv__news-head">
          <div class="p-index-mv__news-heading">
            <p>お知らせ</p>
            <span>NEWS</span>
          </div>
          <div class="p-index-mv__news-link">
            <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">過去のお知らせはこちら</a>
          </div>
        </div>
        <ul class="p-index-mv__list">
          <li class="p-index-mv__list-item">
            <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 1
              );
              $the_query = new WP_Query($args);
              ?>
              <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : ?>
                  <?php $the_query->the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                    <div class="p-index-mv__list-date"> <?php the_time('Y.m.d'); ?></div>
                    <div class="p-index-mv__list-text"><?php the_title(); ?></div>
                  </a>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </li>
        </ul>
      </div>

    </div>
  </div>
  <!-- ======================================
コンセプト
====================================== -->
  <div class="p-index-concept">
    <div class="p-index-concept__inner">
      <div class="p-index-concept__container">
        <div class="p-index-concept__decoration-bg"></div>
        <div class="p-index-concept__contents">
          <span class="p-index-concept__sub-heading">CONCEPT</span>
          <h2 class="p-index-concept__heading">
            健康的で素敵な笑顔あふれる
            <br />
            街づくりを目指して
          </h2>
          <p class="p-index-concept__text">
            私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。
            <br />
            お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
          </p>
          <div class="p-index-concept__btn">
            <a href="<?php
                      echo esc_html(get_page_link(130));
                      ?>">
              <span>当院について</span>
            </a>
          </div>
        </div>
        <div class="p-index-concept__img">
        </div>
      </div>
    </div>
  </div>
  <!-- ======================================
リコメンド
====================================== -->
  <section class="p-index-recommend">
    <div class="p-index-recommend__inner">
      <div class="p-index-recommend__title">
        <h2 class="c-title">当院の3つのおすすめ</h2>
      </div>
      <div class="p-index-recommend__items">
        <div class="p-index-recommend__item">
          <div class="p-index-recommend__imgbox">
            <div class="p-index-recommend__heading-img">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__heading01.svg" alt="おすすめ1" width="177" height="33" loading="lazy" />
            </div>
            <div class="p-index-recommend__img">
              <!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__icon01.svg" alt="" width="220" height="220" loading="lazy"> -->
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__icon01.png" alt="おすすめ1" width="552" height="516" loading="lazy" />
            </div>
            <!-- <div class="p-index-recommend__balloon">
            <h3>痛くない歯科医療の追求</h3>
          </div> -->
            <div class="p-index-recommend__text">
              歯の治療において、小さな違和感は大きなストレスにつながります。
              <br />
              私たちは常に快適な歯科医療技術の研究を
              <br class="u-hidden-sm u-hidden-lg u-hidden-md" />
              行っております。
            </div>
          </div>
        </div>
        <div class="p-index-recommend__item">
          <div class="p-index-recommend__imgbox">
            <div class="p-index-recommend__heading-img">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__heading02.svg" alt="おすすめ2" width="182" height="33" loading="lazy" />
            </div>
            <div class="p-index-recommend__img">
              <!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__icon02.svg" alt="" width="220" height="220" loading="lazy"> -->
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__icon02.png" alt="おすすめ2" width="552" height="516" loading="lazy" />
            </div>
            <!-- <div class="p-index-recommend__balloon">
            <h3>駅から徒歩3分</h3>
          </div> -->
            <div class="p-index-recommend__text">
              「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
            </div>
          </div>
        </div>
        <div class="p-index-recommend__item">
          <div class="p-index-recommend__imgbox">
            <div class="p-index-recommend__heading-img">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__heading03.svg" alt="おすすめ3" width="182" height="33" loading="lazy" />
            </div>
            <div class="p-index-recommend__img">
              <!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__icon03.svg" alt="" width="220" height="220" loading="lazy"> -->
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-top-recommend__icon03.png" alt="おすすめ3" width="552" height="516" loading="lazy" />
            </div>
            <!-- <div class="p-index-recommend__balloon"> -->
            <!-- <h3>夜20:30まで営業</h3> -->
            <!-- </div> -->
            <div class="p-index-recommend__text">
              朝から夜までお仕事をされている方のために、診療時間を見直しました。
              <br />
              <span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======================================
medical
====================================== -->
  <section class="p-index-medical">
    <div class="p-index-medical__inner">
      <!-- 装飾部分 -->
      <div class="p-index-medical__decoration-top">
        <div class="p-index-medical__decoration-top-left">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-kirakira.svg" alt="" loading="lazy" width="252" height="276" />
        </div>
        <div class="p-index-medical__decoration-top-center">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-nose02.svg" alt="" loading="lazy" width="200" height="180" />
        </div>
        <div class="p-index-medical__decoration-top-right">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-upper-deco-kira.svg" alt="" loading="lazy" width="116" height="116" />
        </div>
        <div class="p-index-medical__decoration-bg"></div>
      </div>
      <!-- コンテンツ -->
      <div class="p-index-medical__main">
        <div class="p-index-medical__title">
          <h2 class="c-title">診療案内</h2>
        </div>
        <div class="p-index-medical__items">
          <!-- 一般診療 -->
          <a class="p-index-medical__item" href="<?php if (is_page(138)) : ?>#p-medical-nav__general<?php else : ?><?php echo esc_html(get_page_link(138)); ?>#p-medical-nav__general<?php endif; ?>">

            <div class="p-index-medical__panel">
              <h2 class="p-index-medical__panel-head">一般診療</h2>
              <p class="p-index-medical__panel-text">虫歯・入れ歯・小児歯科</p>
            </div>
            <div class="p-index-medical__bg-img p-index-medical__bg-img01"></div>
          </a>
          <!-- 特殊診療 -->
          <a class="p-index-medical__item" href="<?php if (is_page(138)) : ?>p-medical-nav__special<?php else : ?><?php echo esc_html(get_page_link(138)); ?>#p-medical-nav__special<?php endif; ?>">
            <div class="p-index-medical__panel p-index-medical__panel02">
              <h2 class="p-index-medical__panel-head">特殊診療</h2>
              <p class="p-index-medical__panel-text">
                インプラント・ホワイトニング
                <br />
                予防歯科・口腔外科・審美歯科
              </p>
            </div>
            <div class="p-index-medical__bg-img p-index-medical__bg-img02"></div>
          </a>
        </div>
        <div class="p-index-medical__description-box">
          <p class="p-index-medical__text">
            当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。
            <br />
            痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。
            <br />
            <span>
              ※特殊性の高い矯正治療などは保険の適応外となります。
              これらの治療を行う際は事前に詳細と費用のご説明いたします。
            </span>
          </p>
        </div>
      </div>
      <div class="p-index-medical__decoration-bottom">
        <div class="p-index-medical__decoration-bottom-left">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-bottom-deco-kira.svg" alt="" width="57" height="56" loading="lazy" />
        </div>
        <div class="p-index-medical__decoration-bottom-right">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-bottom-deco-kirakira.svg" alt="" loading="lazy" width="126" height="138" />
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================
blog
====================================== -->
  <section class="p-index-blog">
    <div class="p-index-blog__inner">
      <div class="p-index-blog__title">
        <h2 class="c-title">スタッフブログ</h2>
      </div>
      <?php /* 取得する投稿の条件 */ ?>
      <?php
      $args = array(
        'post_type' => 'blog', /* 取得したい投稿タイプ */
        'posts_per_page' => 6, /* 表示したい投稿の数 (すべての取得したい場合は「-1」) */
      );
      $the_query = new WP_Query($args); /* クエリの作成と発行をし、取得したデータを「$the_query」に格納 */
      ?>

      <?php /* 取得した投稿の表示 */ ?>
      <?php if ($the_query->have_posts()) : /* もし、投稿がある場合 */ ?>
        <div class="p-index-blog__cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); /* 投稿のループ開始 */ ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('p-index-blog__card'); ?>>
              <a href="<?php the_permalink(); /* 投稿のパーマリンク取得 */ ?>" class="p-index-blog__link">
                <?php add_new(get_the_time('U'), 3); ?>
                <div class="p-index-blog__card-thumbnail">
                  <?php if (has_post_thumbnail()) : /* もし、投稿にサムネイルが設定されている場合 */ ?>
                    <?php the_post_thumbnail(); /* 投稿のサムネイルを表示 */ ?>
                  <?php else : /* もし、サムネイルが設定されていない場合 */ ?>
                    <img src="https://placehold.jp/16px/999/ffffff/352x198.png?text=No%20Image" alt="No Image">
                  <?php endif; /* サムネイルのif文終了 */ ?>
                </div>
                <div class="p-index-blog__card-body">
                  <div class="p-index-blog__card-category">
                    <span class="p-index-blog__cat-text">その他</span>
                  </div>

                  <div class="p-index-blog__card-textbox">
                    <h3 class="p-index-blog__card-title">
                      <?php the_title(); /* 投稿タイトルの表示 */ ?>
                    </h3>
                    <time class="p-index-blog__card-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; /* 投稿のループ終了 */ ?>
        </div>
      <?php else : /* もし、投稿がない場合 */ ?>
        <p>まだ投稿がありません。</p>
      <?php endif; /* 投稿の条件分岐を終了 */ ?>
      <?php wp_reset_postdata(); /* クエリ(サブループ)のリセット */ ?>
      <div class="p-index-blog__btn">
        <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="p-index-blog__btn-link">
          <span>スタッフブログ一覧はこちら</span>
        </a>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>