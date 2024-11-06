<?php
/*
Template Name: お問い合わせ完了
*/
?>
<?php get_header(); ?>



<div class="content">
  <div class="p-contact-thanks">
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
    <div class="p-contact-thanks-main">
      <div class="p-contact-thanks__inner">
        <!-- ======================================
intro
====================================== -->
        <div class="p-contact-thanks__item">
          <p class="p-contact-thanks__intro">
            お問い合わせありがとうございました。
            <br />
            3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。
            <br />
            <span>
              ※3営業日以内に当院からの返信がない場合には、お電話(TEL
              03-1234-5678)にてお問い合わせ下さい。
            </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>