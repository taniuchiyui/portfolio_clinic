<!-- トップに戻るボタン -->
<p id="page-top"><a href="#"></a></p>

<!-- sp-bottom固定 -->
<div class="p-sp-bottom u-hidden-xl">
    <div class="p-sp-bottom__inner">
        <div class="p-sp-bottom__tel-area">
            <a href="tel:03-1234-5678"><span>03-1234-5678</span></a>
            <p>(年中無休 AM9:00〜PM22:00)</p>
        </div>
        <div class="p-sp-bottom__btn-area">
            <a href="<?php
                        echo esc_html(get_page_link(140));
                        ?>">
                <p>WEB予約</p><span>はこちら</span>
            </a>
        </div>
    </div>
</div>

<!-- footer -->
<footer class="l-footer">
    <div class="l-footer__upper">
        <div class="l-footer__upper-inner">
            <div class="l-footer__info">
                <div class="l-footer__title">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-logo-footer-pc.png" media="(min-width: 767px)" />
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-logo-footer-sp.png" alt="みなみ歯科クリニック" width="618" height="66" loading="lazy" />
                    </picture>
                </div>
                <div class="l-footer__address">
                    <span>〒166-0001</span>
                    <span>東京都杉並区阿佐谷北7-3-1</span>
                </div>
                <div class="l-footer__tell-area">
                    <a href="tel:03-1234-5678">03-1234-5678</a>
                    <span>(年中無休 AM9:00〜PM22:00)</span>
                </div>

                <div class="l-footer__btn-area">
                    <div class="l-footer__btn l-footer__btn-reserve">
                        <a href="<?php
                                    echo esc_html(get_page_link(140));
                                    ?>">
                            <div class="l-footer__btn-reserve-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="20" viewBox="0 0 35 20" fill="none">
                                    <path d="M28.989 6.36255H24.0424C23.4572 6.36255 22.9824 6.83733 22.9824 7.42253V16.609C22.9824 17.1942 23.4572 17.669 24.0424 17.669H28.989C29.5742 17.669 30.049 17.1942 30.049 16.609V7.42253C30.049 6.83733 29.5742 6.36255 28.989 6.36255ZM26.5157 16.9624C26.1248 16.9624 25.809 16.6466 25.809 16.2557C25.809 15.8649 26.1248 15.5491 26.5157 15.5491C26.9066 15.5491 27.2224 15.8649 27.2224 16.2557C27.2224 16.6466 26.9066 16.9624 26.5157 16.9624ZM28.989 14.5774C28.989 14.7232 28.8698 14.8424 28.724 14.8424H24.3074C24.1617 14.8424 24.0424 14.7232 24.0424 14.5774V7.68753C24.0424 7.54178 24.1617 7.42253 24.3074 7.42253H28.724C28.8698 7.42253 28.989 7.54178 28.989 7.68753V14.5774Z" fill="white" />
                                    <path d="M20.1274 3H6.37522C5.61598 3 5 3.61598 5 4.37521V13.5433C5 14.3025 5.61598 14.9185 6.37522 14.9185H11.8761L11.4177 16.2937H9.35486C8.97381 16.2937 8.66725 16.6003 8.66725 16.9814C8.66725 17.3624 8.97381 17.669 9.35486 17.669H17.1478C17.5288 17.669 17.8354 17.3624 17.8354 16.9814C17.8354 16.6003 17.5288 16.2937 17.1478 16.2937H15.0849L14.6265 14.9185H20.1274C20.8866 14.9185 21.5026 14.3025 21.5026 13.5433V4.37521C21.5026 3.61598 20.8866 3 20.1274 3ZM19.669 13.0849H6.83362V4.83362H19.669V13.0849Z" fill="white" />
                                </svg>
                            </div>
                            <span>WEB予約</span>
                        </a>
                    </div>
                    <div class="l-footer__btn l-footer__btn-contact">
                        <a href="<?php
                                    echo esc_html(get_page_link(136));
                                    ?>">
                            <div class="l-footer__btn-contact-img">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" fill="#ffffff">
                                    <path d="M2.83268 2.83398H14.166C14.9452 2.83398 15.5827 3.47148 15.5827 4.25065V12.7507C15.5827 13.5298 14.9452 14.1673 14.166 14.1673H2.83268C2.05352 14.1673 1.41602 13.5298 1.41602 12.7507V4.25065C1.41602 3.47148 2.05352 2.83398 2.83268 2.83398Z" stroke="#1391E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.5827 4.34692L8.49935 9.64275L1.41602 4.34692" stroke="#1391E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span>お問い合わせ</span>
                        </a>
                    </div>
                </div>
                <div class="l-footer__table">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-footer-medicalTimeSheet.png" alt="診療時間" width="954" height="332" loading="lazy" />
                </div>
            </div>
            <div class="l-footer__map">
                <div class="l-footer__map-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6479.731213219012!2d139.62711095809934!3d35.70492466728162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1710135720329!5m2!1sja!2sjp" width="385" height="385" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- footerグローバルナビゲーション -->
    <div class="l-footer__lower">
        <div class="l-footer__lower-inner">
            <!-- TOP -->
            <div class="l-footer__homelink">
                <a href="<?php echo esc_url(home_url('/')); ?>"><span>TOP</span></a>
            </div>
            <!-- 当院について -->
            <div class=" l-footer__link l-footer__link-about">
                <span class="l-footer__link-title">当院について</span>
                <ul>
                    <li><a href="<?php if (is_page(130)) : ?>#about-policy-feature<?php else : ?><?php echo esc_html(get_page_link(130)); ?>#about-policy-feature<?php endif; ?>">ポリシーと特徴</a></li>
                    <li><a href="<?php if (is_page(130)) : ?>#about-gallery<?php else : ?><?php echo esc_html(get_page_link(130)); ?>#about-gallery<?php endif; ?>">当院の様子</a></li>
                </ul>
            </div>
            <!-- スタッフ紹介 -->
            <div class="l-footer__link l-footer__link-staff">
                <span class="l-footer__link-title">スタッフ紹介</span>
                <ul>
                    <li><a href="<?php if (is_page(144)) : ?>#p-staff-director<?php else : ?><?php echo esc_html(get_page_link(144)); ?>#p-staff-director<?php endif; ?>">院長のあいさつ</a></li>
                    <li><a href="<?php if (is_page(144)) : ?>#p-staff-member<?php else : ?><?php echo esc_html(get_page_link(144)); ?>#p-staff-member<?php endif; ?>">スタッフ</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('blog'); ?>">スタッフブログ</a></li>
                </ul>
            </div>
            <!-- 診療内容 -->
            <div class="l-footer__link l-footer__link-medical">
                <span class="l-footer__link-title">診療内容</span>
                <div class="l-footer__medical-inner">
                    <ul>
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
                                <li>
                                    <a href="<?php if (is_page(138)) : ?>#<?php echo $post->ID; ?><?php else : ?><?php echo esc_html(get_page_link(138)); ?>#<?php echo $post->ID; ?><?php endif; ?>"><?php the_title(); ?></a>
                                </li>
                        <?php endwhile;
                        else :
                        // 投稿が見つからない場合の表示
                        endif;

                        wp_reset_postdata(); ?>
                        <!-- ここまで一般診療 -->
                        <!-- 特殊診療 -->
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
                                <li>
                                    <a href="<?php if (is_page(138)) : ?>#<?php echo $post->ID; ?><?php else : ?><?php echo esc_html(get_page_link(138)); ?>#<?php echo $post->ID; ?><?php endif; ?>"><?php the_title(); ?></a>
                                </li>
                        <?php endwhile;
                        else :
                        // 投稿が見つからない場合の表示
                        endif;
                        wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
            <!-- お問い合わせ -->
            <div class="l-footer__link l-footer__link-contact">
                <span class="l-footer__link-title">お問い合わせ</span>
                <ul>
                    <li><a href="<?php
                                    echo esc_html(get_page_link(136));
                                    ?>">お問い合わせフォーム</a></li>
                    <li><a href="<?php
                                    echo esc_html(get_page_link(140));
                                    ?>">WEB予約</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- コピーライト -->
    <div class="l-footer__copyright">
        <p>&copy;2020-2021 みなみ歯科クリニック</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>