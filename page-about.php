<?php
/*
Template Name: 当院について
*/
?>
<?php get_header(); ?>


<div class="content">
  <!-- ======================================
MV
====================================== -->
  <div class="p-mv">
    <div class="p-mv__inner">
      <h1 class="p-mv__heading">
        <span class="p-mv__heading-inline-ja">当院について</span>
        <span class="p-mv__heading-inline-en">ABOUT OUR CLINIC</span>
      </h1>
      <div class="p-mv__img">
        <picture>
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-mv_item-sp.png" media="(max-width: 767px)" type="image/png" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-mv_item.png" alt="" width="2320" height="680" loading="lazy" />
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
ポリシーと特徴
====================================== -->
  <div class="p-about-policy-feature">
    <div class="p-about-policy-feature__inner">
      <div id="about-policy-feature" class=" p-about-policy-feature__title">
        <h2 class="c-title">ポリシーと特徴</h2>
      </div>
      <div class="p-about-policy__container">
        <div class="p-about-policy__decoration-bg"></div>
        <div class="p-about-policy__contents">
          <span class="p-about-policy__sub-heading">POLICY</span>
          <h2 class="p-about-policy__heading">コミュニケーションから始まる最適な医療提供</h2>
          <p class="p-about-policy__text">
            当院ではまず患者様から詳しくお話を伺います。
            <br />
            難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。
            <br />
            <br />
            「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。
          </p>
        </div>
        <div class="p-about-policy__img"></div>
      </div>

      <div class="p-about-feature__container">
        <div class="p-about-feature__contents">
          <span class="p-about-feature__sub-heading">FEATURE</span>
          <h2 class="p-about-feature__heading">
            「医療技術の追求」と
            <br />
            「通いやすさ」
          </h2>
          <p class="p-about-feature__text">
            歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br class="u-hidden-md u-hidden-lg u-hidden-xl">
            また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
            <br />
          </p>
          <p class="p-about-feature__text">
            朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
          </p>
        </div>
        <div class="p-about-feature__img"></div>
      </div>
    </div>
  </div>
  <!-- ======================================
院内の様子
====================================== -->
  <div class="p-about-gallery">
    <div class="p-about-gallery__inner">
      <div id="about-gallery" class="p-about-gallery__title">
        <h2 class="c-title">院内の様子</h2>
      </div>
      <div class="p-about-gallery__main">
        <div class="p-about-gallery__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-gallery__item01.png" alt="" width="" height="" loading="lazy" />
        </div>
        <div class="p-about-gallery__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-gallery__item02.png" alt="" width="" height="" loading="lazy" />
        </div>
        <div class="p-about-gallery__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-gallery__item03.png" alt="" width="" height="" loading="lazy" />
        </div>
        <div class="p-about-gallery__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-gallery__item04.png" alt="" width="" height="" loading="lazy" />
        </div>
        <div class="p-about-gallery__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-gallery__item05.png" alt="" width="" height="" loading="lazy" />
        </div>
        <div class="p-about-gallery__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-about-gallery__item06.png" alt="" width="" height="" loading="lazy" />
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>