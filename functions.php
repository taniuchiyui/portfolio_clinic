<?php
function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");; ?>



<?php
function my_script_init()
{
    wp_enqueue_style("reset", get_template_directory_uri() . "/css/reset.css", array(), filemtime(get_theme_file_path('css/reset.css')), "all");
    wp_enqueue_style("swiper", get_template_directory_uri() . "/css/swiper.min.css", array(), filemtime(get_theme_file_path('css/swiper.min.css')), "all");
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    // WordPress提供のjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery-local', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', array(),  true);
    // SwiperのJSファイルを読み込み
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery-local'), true);
    // 自作jsファイルの読み込み
    wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array('jquery-local','swiper'), filemtime(get_theme_file_path('js/script.js')), true);
    
}
add_action("wp_enqueue_scripts", "my_script_init");

function wp_google_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'wp_google_fonts');


/**
 * メニューの登録
 */
function my_menu_init()
{
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
        )
    );
}
add_action('init', 'my_menu_init');

// postが所属するカテゴリーの取得の関数
function my_the_post_category($anchor = true)
{
    $category = get_the_category();
    if ($category[0]) {
        if ($anchor) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
        } else {
            echo $category[0]->cat_name;
        }
    }
}
// カスタム投稿タイプのカテゴリーを表示する関数
function my_custom_post_category($anchor = true)
{
    $categories = get_the_terms(get_the_ID(), 'custom_taxonomy_slug'); // 'custom_taxonomy_slug' はカスタムタクソノミーのスラッグに置き換えてください
    if ($categories && !is_wp_error($categories)) {
        $category = reset($categories); // 最初のカテゴリーを取得
        if ($anchor) {
            echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
        } else {
            echo esc_html($category->name);
        }
    }
}



// 新しく記事が公開されたときに「New」と表示する
function add_new($date, $days)
{
    $today = date_i18n('U');
    $elapsed = date('U', ($today - $date)) / 86400;
    if ($days > $elapsed) {
        echo '<p class="p-index-blog__card-tag p-index-blog__card-tag-new"><span class="p-index-blog__tag-text">NEW</span></p>';
    }
    // 表示させたい箇所に　<?php add_new(get_the_time('U'),5); 　を記述
}

/*【管理画面】投稿メニューを非表示 */
function remove_menus()
{
    global $menu;
    remove_menu_page('edit.php'); // 投稿を非表示
}
add_action('admin_menu', 'remove_menus');

// Breadcrumb NavXTでメインカテゴリのみを表示させる。
add_action('bcn_after_fill', 'bc_limit');
function bc_limit($trail)
{
    $max = count($trail->breadcrumbs);
    for ($i = 1; $i < $max - 2; $i++) {
        unset($trail->trail[$i]);
    }
}

// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action('wp_footer', 'add_origin_thanks_page');
function add_origin_thanks_page()
{
    $contact = home_url('/contact-thanks/');
    $reservation = home_url('/reservation-thanks/');
    echo <<< EOC
     <script>
       var thanksPage = {
         57: '{$contact}',
         268: '{$reservation}',
       };
     document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = thanksPage[event.detail.contactFormId];
     }, false );
     </script>
   EOC;
}

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

//ContactForm7のエラー文言の表示位置調整
function wpcf7_custom_item_error_position($items, $result)
{
    // メッセージを表示させたい場所のタグのエラー用のクラス名
    $class = 'wpcf7-custom-item-error';
    // メッセージの位置を変更したい項目名(※適宜ご自身の設定したものに変更してください)
    $names = array(
        //共通
        "your-name",
        "your-name-kana",
        "your-number",
        "your-email",
        "content",
        //予約
        "my-radio",
        "my-checkbox",
        "my-parts-select",
    );
    // 入力エラーがある場合
    if (isset($items['invalid_fields'])) {
        foreach ($items['invalid_fields'] as $k => $v) {
            $orig = $v['into'];
            $name = substr($orig, strrpos($orig, ".") + 1);
            // 位置を変更したい項目のみ、エラーを設定するタグのクラス名を差替
            if (in_array($name, $names)) {
                $items['invalidFields'][$k]['into'] = ".{$class}.{$name}";
            }
        }
    }
    return $items;
}
add_filter('wpcf7_ajax_json_echo', 'wpcf7_custom_item_error_position', 10, 2);


//IE、FirefoxにてContact form 7の日付（dateタグ）のカレンダーを対応させる
add_filter('wpcf7_support_html5_fallback', '__return_true');
