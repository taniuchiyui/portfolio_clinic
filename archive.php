<?php get_header(); ?>

<div class="content">
  <div class="p-archive">
    <!-- ======================================
MV
====================================== -->
    <div class="p-mv">
      <div class="p-mv__inner">
        <h1 class="p-mv__heading">
          <span class="p-mv__heading-inline-ja">スタッフブログ</span>
          <span class="p-mv__heading-inline-en">STAFF BLOG</span>
        </h1>
        <div class="p-mv__img">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-archive-mv__item-sp.png" media="(max-width: 767px)" type="image/png" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-archive-mv__item.png" alt="" width="2320" height="680" loading="lazy" />
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
p-archive-primary
====================================== -->
    <!-- content -->
    <div id="content">
      <div class="p-archive-inner">
        <!-- primary -->
        <main class="p-archive-primary">
          <!-- entries -->
          <div class="p-archive-entries m_horizontal">
            <?php if (have_posts()) : // 記事があれば表示 
            ?>
              <?php while (have_posts()) : // 記事数分ループ 
              ?>
                <?php the_post(); ?>

                <!-- entry-item -->
                <a href="<?php the_permalink(); ?>" class="p-archive-entry__item">
                  <?php add_new(get_the_time('U'), 3); ?>
                  <!-- entry-item-img -->
                  <div class="p-archive-entry__thumbnail">

                    <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                    ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : // なければnoimage画像をデフォルトで表示 
                    ?>
                      <img src="<?php echo esc_url(get_template_directory_uri());; ?>/img/noimg.png" alt="">
                    <?php endif; ?>

                  </div>
                  <!-- /entry-item-img -->

                  <!-- entry-item-body -->
                  <div class="p-archive-entry__body">
                    <div class="p-archive-entry__category">

                      <div class="p-archive-entry__tag--cat"><?php my_the_post_category(false); ?></div><!-- /entry-item-tag -->
                      <!-- /entry-item-tag -->
                    </div>
                    <!-- /entry-item-meta -->
                    <h2 class="p-archive-entry__title">
                      <?php the_title(); ?>
                    </h2>
                    <!-- /entry-item-title -->
                    <div class="p-archive-entry__meta--time">
                      <time class="p-archive-entry__published" datetime="<?php the_time('c'); ?>">
                        <?php the_time('Y/n/j'); ?>
                      </time>
                      <!-- /entry-item-published -->
                    </div>
                    <!-- /entry-item-meta -->
                  </div>
                  <!-- /entry-item-body -->
                </a>
                <!-- /entry-item -->
              <?php endwhile; ?>
            <?php endif; ?>

          </div>

          <!-- pagination -->
          <?php get_template_part('template-parts/pagination-archive'); ?>

        </main>
        <!-- /primary -->
        <?php get_sidebar(); ?>
      </div>
      <!-- /inner -->
    </div>
    <!-- /content -->
  </div>
</div>
<?php get_footer(); ?>