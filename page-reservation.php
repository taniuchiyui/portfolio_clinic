<?php
/*
Template Name: 予約
*/
?>
<?php get_header(); ?>

<div class="content">
  <div class="p-reservation">
    <!-- ======================================
MV
====================================== -->
    <div class="p-mv">
      <div class="p-mv__inner">
        <h1 class="p-mv__heading">
          <span class="p-mv__heading-inline-ja">WEB予約</span>
          <span class="p-mv__heading-inline-en">RESERVE</span>
        </h1>
        <div class="p-mv__img">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-form-mv__item-sp.png" media="(max-width: 767px)" type="image/png" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-form-mv__item.png" alt="" width="2320" height="680" loading="lazy" />
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
p-reservation
====================================== -->
    <div class="p-reservation-main">
      <div class="p-reservation-inner">
        <!-- ======================================
intro
====================================== -->
        <div class="p-reservation-info-area">
          <div class="p-reservation-info__inner">
            <dl class="p-reservation-info__item">
              <dt class="p-reservation-info__title">お電話でのご予約/ご相談</dt>
              <dd class="p-reservation-info__tel">
                <a href="tel:0312345678">03-1234-5678</a>
                <span>(年中無休 AM9:00〜PM22:00)</span>
              </dd>
              <dd class="p-reservation-info__text">
                お急ぎの方は電話での連絡がスムーズです。
                <br />
                混雑状況によっては当日受診をご利用いただけない場合がございます。
                <br />
                あらかじめご了承ください。
              </dd>
            </dl>
            <dl class="p-reservation-info__item">
              <dt class="p-reservation-info__title">メールでのご予約/ご相談</dt>

              <dd class="p-reservation-info__text">
                【ご予約に関しての注意点】
                <br />
                メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。
                <br />
                ※24時間以内に当院からの返信がない場合には、お電話(TEL
                03-1234-5678)にてお問い合わせ下さい。
                <br />
              </dd>
            </dl>
          </div>
        </div>

        <!-- ======================================
form
====================================== -->
        <div class="p-reservation-form">
          <div class="p-reservation-form__title">
            <h2 class="c-title">予約フォーム</h2>
          </div>

          <div class="p-reservation-form-area">
            <?php echo do_shortcode('[contact-form-7 id="f6a958d" title="予約"]'); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>


<div class="p-reservation-contents__error-message"></div>