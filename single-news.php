<?php get_header(); ?>

<div class="content">
  <div class="p-single">

    <!-- ======================================
        MV
====================================== -->
    <div class="p-mv">
      <div class="p-mv__inner">
        <h1 class="p-mv__heading">
          <span class="p-mv__heading-inline-ja"><?php echo get_the_terms(get_the_ID(), 'news-category')[0]->name; ?></span>
          <!-- <span class="p-mv__heading-inline-en">NEWS</span> -->
        </h1>
        <div class="p-mv__img">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-single-mv__item-sp.png" media="(max-width: 767px)" type="image/png" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-single-mv__item.png" alt="" width="2320" height="680" loading="lazy" />
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
content
====================================== -->
    <!-- content -->
    <div class="p-single-content">
      <div class="p-single-inner">
        <!-- primary -->
        <main class="p-single-primary">

          <?php if (have_posts()) : // 記事があれば表示 
          ?>
            <?php while (have_posts()) : // 記事数分ループ 
            ?>
              <?php the_post(); ?>
              <!-- entry -->
              <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                <!-- entry-header -->
                <div class="entry-header">
                  <!-- /entry-item-tag -->
                  <h1 class="entry-title">
                    <?php the_title(); ?>
                  </h1>
                  <!-- /entry-title -->

                  <!-- entry-meta -->
                  <div class="entry-meta">
                    <time class="entry-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                    <div class="entry-label"><?php echo get_the_terms(get_the_ID(), 'news-category')[0]->name; ?></div>
                  </div>
                  <!-- /entry-meta -->
                </div>
                <!-- /entry-header -->

                <!-- entry-body -->
                <div class="entry-body">
                  <!-- 管理画面で編集する箇所 -->
                  <?php the_content(); // 本文の表示 
                  ?>
                  <?php
                  // 改ページを有効にするための記述
                  wp_link_pages(
                    array(
                      'before' => '<nav class="entry-links">',
                      'after' => '</nav>',
                      'link_before' => '',
                      'link_after' => '',
                      'next_or_number' => 'number',
                      'separator' => '',
                    )
                  );
                  ?>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>

          <div class="entry-btn-wrap">
            <div class="entry-btn-prev">
              <?php previous_post_link('%link', '前の記事<span class="u-hidden-sm">へ</span>'); ?>
            </div>
            <div class="entry-btn-archive">
              <a class="entry-btn-link" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">記事一覧</a>
            </div>
            <div class="entry-btn-next">
              <?php next_post_link('%link', '次の記事<span class="u-hidden-sm">へ</span>'); ?>
            </div>
          </div>

        </main>

        <?php get_sidebar('news'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>