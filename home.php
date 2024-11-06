<?php get_header(); ?>


<div class="content">
  <div class="p-home">
    <!-- ======================================
MV
====================================== -->
    <div class="p-mv">
      <div class="p-mv__inner">
        <h1 class="p-mv__heading">
          <span class="p-mv__heading-inline-ja">お知らせ一覧</span>
          <span class="p-mv__heading-inline-en">NEWS</span>
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

====================================== -->
    <!-- content -->
    <div id="content">
      <div class="p-home-inner">
        <!-- primary -->
        <main class="p-home-primary">
          <!-- entries -->
          <div class="p-home-entries m_horizontal">
            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <picture>
                  <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item-sp.png" media="(max-width: 767px)" type="image/png">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt='' width='488' height='306' loading='lazy'>
                </picture>
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

            <!-- entry-item -->
            <a href="#" class="p-home-entry__item">
              <!-- entry-item-img -->
              <div class="p-home-entry__thumbnail">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-main__item.png" alt="" width="488" height="306" />
              </div>
              <!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="p-home-entry__body">
                <div class="p-home-entry__category">
                  <div class="p-home-entry__tag--cat">カテゴリ1</div>
                  <!-- /entry-item-tag -->
                </div>
                <!-- /entry-item-meta -->
                <h2 class="p-home-entry__title">
                  記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
                </h2>
                <!-- /entry-item-title -->
                <div class="p-home-entry__meta--time">
                  <time class="p-home-entry__published" datetime="2020-02-14">
                    2020.02.14
                  </time>
                  <!-- /entry-item-published -->
                </div>
                <!-- /entry-item-meta -->
              </div>
              <!-- /entry-item-body -->
            </a>
            <!-- /entry-item -->

          </div>

          <!-- pagination -->
          <div class="pagination">
            <a class="prev page-numbers" href="#">前へ</a>
            <span class="page-numbers current">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers u-hidden-sm" href="#">4</a>
            <a class="page-numbers u-hidden-sm" href="#">5</a>
            <a class="page-numbers u-hidden-sm" href="#">6</a>
            <a class="page-numbers" href="#">…</a>
            <a class="page-numbers" href="#">20</a>
            <a class="next page-numbers" href="#">次へ</a>
          </div>
          <!-- /pagination -->
        </main>
        <!-- /primary -->
        <!-- ======================================
	secondary
====================================== -->

        <aside class="p-secondary p-home-secondary">
          <!-- widget -->
          <div class="p-widget p-home-widget widget_text widget_custom_html">
            <div class="p-widget__title-wrap p-home-widget__title-wrap">
              <div class="p-widget__icon p-home-widget__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-clinic-black.svg" alt="" width="24" height="24" loading="lazy" />
              </div>
              <p class="p-widget__title p-home-widget__title">クリニックの紹介</p>
            </div>

            <div class="p-wprofile p-home-wprofile">
              <div class="p-wprofile__img p-home-wprofile__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-side__item01.png" alt="" width="600" height="376" />
              </div>
              <div class="p-wprofile__content p-home-wprofile__content">
                <div class="p-wprofile__title p-home-wprofile__title">みなみ歯科クリニック</div>
                <p class="p-wprofile__text p-home-wprofile__text">
                  お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
                </p>
              </div>
              <div class="p-wprofile__link-about p-home-wprofile__link-about">
                <a href="#">当院について</a>
              </div>
              <!-- /wprofile-content -->
            </div>
            <!-- /wprofile -->
          </div>
          <!-- /widget -->

          <!--  widget_recent -->
          <div class="p-widget p-home-widget widget_recent">
            <div class="p-widget__title-wrap p-home-widget__title-wrap">
              <div class="p-widget__icon p-home-widget__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-file-text-black.svg" alt="" width="24" height="24" loading="lazy" />
              </div>
              <div class="p-widget__title p-home-widget__title">新着記事</div>
            </div>
            <div class="p-wpost__items p-home-wpost__items">
              <!-- wpost-item -->
              <a class="p-wpost__item p-home-wpost__item" href="#">
                <div class="p-wpost__img p-home-wpost__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-side__item02.png" alt="#" width="240" height="180" />
                </div>
                <div class="p-wpost__body p-home-wpost__body">
                  <div class="p-wpost__tag p-home-wpost__tag"><span>お知らせ</span></div>
                  <div class="p-wpost__title p-home-wpost-item-title">
                    記事のタイトルが入ります。記事のタイトルます…
                  </div>
                  <div class="p-wpost__meta--time p-home-wpost__meta--time">
                    <time class="p-home-wpost__published p-home-wpost__published" datetime="2020-02-14">
                      2020.02.14
                    </time>
                  </div>
                </div>
                <!-- /wpost-item-body -->
              </a>
              <!-- /wpost-item -->
              <!-- wpost-item -->
              <a class="p-wpost__item p-home-wpost__item" href="#">
                <div class="p-wpost__img p-home-wpost__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-side__item02.png" alt="#" width="240" height="180" />
                </div>
                <div class="p-wpost__body p-home-wpost__body">
                  <div class="p-wpost__tag p-home-wpost__tag"><span>お知らせ</span></div>
                  <div class="p-wpost__title p-home-wpost-item-title">
                    記事のタイトルが入ります。記事のタイトルます…
                  </div>
                  <div class="p-wpost__meta--time p-home-wpost__meta--time">
                    <time class="p-home-wpost__published p-home-wpost__published" datetime="2020-02-14">
                      2020.02.14
                    </time>
                  </div>
                </div>
                <!-- /wpost-item-body -->
              </a>
              <!-- /wpost-item -->
              <!-- wpost-item -->
              <a class="p-wpost__item p-home-wpost__item" href="#">
                <div class="p-wpost__img p-home-wpost__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-side__item02.png" alt="#" width="240" height="180" />
                </div>
                <div class="p-wpost__body p-home-wpost__body">
                  <div class="p-wpost__tag p-home-wpost__tag"><span>お知らせ</span></div>
                  <div class="p-wpost__title p-home-wpost-item-title">
                    記事のタイトルが入ります。記事のタイトルます…
                  </div>
                  <div class="p-wpost__meta--time p-home-wpost__meta--time">
                    <time class="p-home-wpost__published p-home-wpost__published" datetime="2020-02-14">
                      2020.02.14
                    </time>
                  </div>
                </div>
                <!-- /wpost-item-body -->
              </a>
              <!-- /wpost-item -->
              <!-- wpost-item -->
              <a class="p-wpost__item p-home-wpost__item" href="#">
                <div class="p-wpost__img p-home-wpost__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-side__item02.png" alt="#" width="240" height="180" />
                </div>
                <div class="p-wpost__body p-home-wpost__body">
                  <div class="p-wpost__tag p-home-wpost__tag"><span>お知らせ</span></div>
                  <div class="p-wpost__title p-home-wpost-item-title">
                    記事のタイトルが入ります。記事のタイトルます…
                  </div>
                  <div class="p-wpost__meta--time p-home-wpost__meta--time">
                    <time class="p-home-wpost__published p-home-wpost__published" datetime="2020-02-14">
                      2020.02.14
                    </time>
                  </div>
                </div>
                <!-- /wpost-item-body -->
              </a>
              <!-- /wpost-item -->
              <!-- wpost-item -->
              <a class="p-wpost__item p-home-wpost__item" href="#">
                <div class="p-wpost__img p-home-wpost__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-side__item02.png" alt="#" width="240" height="180" />
                </div>
                <div class="p-wpost__body p-home-wpost__body">
                  <div class="p-wpost__tag p-home-wpost__tag"><span>お知らせ</span></div>
                  <div class="p-wpost__title p-home-wpost-item-title">
                    記事のタイトルが入ります。記事のタイトルます…
                  </div>
                  <div class="p-wpost__meta--time p-home-wpost__meta--time">
                    <time class="p-home-wpost__published p-home-wpost__published" datetime="2020-02-14">
                      2020.02.14
                    </time>
                  </div>
                </div>
                <!-- /wpost-item-body -->
              </a>
              <!-- /wpost-item -->
            </div>
            <!-- /wpost-items -->
          </div>
          <!-- /widget -->

          <div class="p-widget-archive">
            <div class="p-widget__title-wrap p-archive-widget__title-wrap">
              <div class="p-widget__icon p-archive-widget__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-folder.svg" alt="" width="24" height="24" loading="lazy" />
              </div>
              <div class="p-widget__title p-archive-widget__title">カテゴリー</div>
            </div>
            <ul class="widget-archive__list">
              <li><a href="#">テキストテキスト</a></li>
              <li><a href="#">テキストテキスト</a></li>
              <li><a href="#">テキストテキスト</a></li>
              <li><a href="#">テキストテキスト</a></li>
            </ul>
          </div>
          <!-- /widget -->
        </aside>
        <!-- secondary -->
      </div>
      <!-- /inner -->
    </div>
  </div>
</div>
<!-- /content -->
<?php get_footer(); ?>