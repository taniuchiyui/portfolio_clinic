<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>



<div class="content">
  <div class="p-contact">
    <!-- ======================================
MV
====================================== -->
    <div class="p-mv">
      <div class="p-mv__inner">
        <h1 class="p-mv__heading">
          <span class="p-mv__heading-inline-ja">お問い合わせ</span>
          <span class="p-mv__heading-inline-en">CONTACT</span>
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
p-contact
====================================== -->
    <div class="p-contact-main">
      <div class="p-contact-inner">
        <!-- ======================================
intro
====================================== -->
        <div class="p-contact-item">
          <p class="p-contact-intro">
            お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。
            <br />
            以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。
            <br />
            また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。
            <br />
            <span>
              ※3営業日以内に当院からの返信がない場合には、お電話(TEL
              03-1234-5678)にてお問い合わせ下さい。
            </span>
          </p>
        </div>
      </div>
    </div>

    <!-- ======================================
form
====================================== -->
    <div class="p-contact-form">
      <div class="p-contact-form__title">
        <h2 class="c-title">
          お問い合わせ<br class="u-hidden-md u-hidden-lg u-hidden-xl" />フォーム
        </h2>
      </div>

      <?php echo do_shortcode('[contact-form-7 id="ad872ad" title="お問い合わせ"]'); ?>

    </div>
  </div>
</div>



<!-- <div class="p-contact-form">
    <div class="p-contact-form__title">
      <h2 class="c-title">
        お問い合わせ<br class="u-hidden-md u-hidden-lg u-hidden-xl" />フォーム
      </h2>
    </div>

    <form action="post">
      <dl class="contact-contents__items">
        <div class="contact-contents__item--required">
          <dt class="contact-contents__item-title">
            <label for="your-name">お名前</label>
          </dt>
          <dd class="contact-contents__item-input contact-contents__item-input--text">
            <input type="text" name="your-name" id="your-name" required placeholder="山田　太郎" />
          </dd>
        </div>
        <div class="contact-contents__item--required">
          <dt class="contact-contents__item-title">
            <label for="your-name">フリガナ</label>
          </dt>
          <dd class="contact-contents__item-input contact-contents__item-input--text">
            <input type="text" name="your-name" id="your-name" required placeholder="ヤマダ　タロウ" />
          </dd>
        </div>
        <div class="contact-contents__item--required">
          <dt class="contact-contents__item-title">
            <label for="your-name">電話番号</label>
          </dt>
          <dd class="contact-contents__item-input contact-contents__item-input--text">
            <input type="text" name="your-name" id="your-name" required placeholder="000-0000-0000" />
          </dd>
        </div>
        <div class="contact-contents__item--required">
          <dt class="contact-contents__item-title">
            <label for="your-email">メールアドレス</label>
          </dt>
          <dd class="contact-contents__item-input contact-contents__item-input--text">
            <input type="email" name="your-email" id="your-email" required placeholder="xxx@example.com" />
          </dd>
        </div>
        <div class="contact-contents__item--required">
          <dt class="contact-contents__item-title">
            <label for="content">お問い合わせ内容</label>
          </dt>
          <dd class="contact-contents__item-input contact-contents__item-textarea">
            <textarea name="content" id="content" required placeholder="ご自由にご記入ください。"></textarea>
          </dd>
        </div>
      </dl>
      <div class="contact-contents__submit">
        <input type="submit" value="送　信" class="contact-contents__btn" />
      </div>
    </form>
  </div> -->
<?php get_footer(); ?>