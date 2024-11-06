<aside class="p-secondary p-archive-secondary">
    <!-- widget -->
    <div class="p-widget">
        <div class="p-widget__title-wrap p-archive-widget__title-wrap">
            <div class="p-widget__icon p-archive-widget__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-clinic-black.svg" alt="" width="24" height="24" loading="lazy" />
            </div>
            <p class="p-widget__title p-archive-widget__title">クリニックの紹介</p>
        </div>

        <div class="p-wprofile p-archive-wprofile">
            <div class="p-wprofile__img p-archive-wprofile__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-side__item01.png" alt="クリニックの紹介の写真" width="600" height="376" />
            </div>
            <div class="p-wprofile__content p-archive-wprofile__content">
                <div class="p-wprofile__title p-archive-wprofile__title">みなみ歯科クリニック</div>
                <p class="p-wprofile__text p-archive-wprofile__text">
                    お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
                </p>
            </div>
            <div class="p-wprofile__link-about p-archive-wprofile__link-about">
                <a href="<?php
                            echo esc_html(get_page_link(130));
                            ?>">当院について</a>
            </div>
            <!-- /wprofile-content -->
        </div>
        <!-- /wprofile -->
    </div>
    <!-- /widget -->

    <!--  widget_recent -->
    <div class="p-widget  widget_recent">
        <div class="p-widget__title-wrap p-archive-widget__title-wrap">
            <div class="p-widget__icon p-archive-widget__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-file-text-black.svg" alt="" width="24" height="24" loading="lazy" />
            </div>
            <div class="p-widget__title p-archive-widget__title">新着記事</div>
        </div>
        <div class="p-wpost__items p-archive-wpost__items">
            <?php
            $popular_post_args = array(
                'post_type'        => 'blog',    // 投稿タイプ
                'post_status'    => 'publish',                    // 公開・非公開
                'posts_per_page' => 5,                            // ページ内投稿数
                'ignore_sticky_posts ' => true,                    // 先頭固定表示を無視する
                'orderby'        => 'date',                        // 日付順
                'order'            => 'DESC',                        // 降順
            );
            $post_query = new WP_Query($popular_post_args);
            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) :
                    $post_query->the_post(); ?>
                    <!-- wpost-item -->
                    <a class="p-wpost__item p-archive-wpost__item" href="<?php the_permalink(); ?>">
                        <div class="p-wpost__img p-archive-wpost__img">
                            <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 
                            ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : // なければnoimage画像をデフォルトで表示 
                            ?>
                                <img src="<?php echo esc_url(get_template_directory_uri());; ?>/img/noimg.png" alt="noimg">
                            <?php endif; ?>
                        </div>
                        <div class="p-wpost__body p-archive-wpost__body">
                            <div class="p-wpost__tag p-archive-wpost__tag"><span><?php echo get_the_terms(get_the_ID(), 'blog-category')[0]->name; ?></span></div>
                            <div class="p-wpost__title p-archive-wpost-item-title">
                                <?php the_title(); ?>
                            </div>
                            <div class="p-wpost__meta--time p-archive-wpost__meta--time">
                                <time class="p-archive-wpost__published p-archive-wpost__published" datetime="<?php the_time('c'); ?>">
                                    <?php the_time('Y/n/j'); ?>
                                </time>
                            </div>
                        </div>
                        <!-- /wpost-item-body -->
                    </a>
                    <!-- /wpost-item -->
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>







    <!-- アーカイブ -->
    <div class="p-widget-archive p-widget-archive--archive">
        <div class="p-widget__title-wrap p-archive-widget__title-wrap">
            <div class="p-widget__icon p-archive-widget__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-folder.svg" alt="" width="24" height="24" loading="lazy" />
            </div>
            <div class="p-widget__title p-archive-widget__title">カテゴリー</div>
        </div>
        <ul class="widget-archive__list">
            <?php
            $terms = get_terms('blog-category');
            foreach ($terms as $term) :
            ?>
                <li><a href="<?php echo get_term_link($term); ?>">
                        <?php echo $term->name; ?>
                    </a></li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
    <!-- /widget -->
</aside>
<!-- secondary -->