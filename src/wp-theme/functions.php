<?php

function theme_enqueue_styles() {
    // ファビコン
    // コメントアウトしているので、使用する場合は適切なファビコンのパスを設定してください
    // echo '<link rel="icon" href="' . get_template_directory_uri() . '/path/to/favicon.ico" />';

    // フォント
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato&family=Gotu&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

    // jQuery（CDNからの読み込み）
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

    // ローカルJavaScriptファイル
    wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery-cdn'), null, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery-cdn'), null, true);

    // jQuery UI CSS
    wp_enqueue_style('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null);

    // ローカルCSSファイル
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/styles.css', array(), null);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');




/**
* WordPress標準機能
*/
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );





/**
* メニューの登録
*
* @codex
* https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/
// function my_menu_init() {
// register_nav_menus(
// array(
// 'global' => 'ヘッダーメニュー',
// 'utility' => 'ユーティリティメニュー',
// 'drawer' => 'ドロワーメニュー',
// )
// );
// }
// add_action( 'init', 'my_menu_init' );
/**
* メニューの登録
*
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/


/**
* ウィジェットの登録
*
* @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
*/
// function my_widget_init() {
// register_sidebar(
// array(
// 'name' => 'サイドバー',
// 'id' => 'sidebar',
// 'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
	// 'after_widget' => '</div>',
// 'before_title' => '<div class="p-widget__title">',
	// 'after_title' => '</div>',
// )
// );
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

if ( is_home() ) { /* ホームの場合 */
$title = 'ブログ';
} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
$title = '' . single_cat_title( '', false ) . '';
} elseif ( is_tag() ) { /* タグアーカイブの場合 */
$title = '' . single_tag_title( '', false ) . '';
} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
$title = '' . post_type_archive_title( '', false ) . '';
} elseif ( is_tax() ) { /* タームアーカイブの場合 */
$title = '' . single_term_title( '', false );
} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
} elseif ( is_author() ) { /* 作者アーカイブの場合 */
$title = '' . get_the_author() . '';
} elseif ( is_date() ) { /* 日付アーカイブの場合 */
$title = '';
if ( get_query_var( 'year' ) ) {
$title .= get_query_var( 'year' ) . '年';
}
if ( get_query_var( 'monthnum' ) ) {
$title .= get_query_var( 'monthnum' ) . '月';
}
if ( get_query_var( 'day' ) ) {
$title .= get_query_var( 'day' ) . '日';
}
}
return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
* 抜粋文の文字数の変更
*
* @param int $length 変更前の文字数.
* @return int $length 変更後の文字数.
*/
function my_excerpt_length( $length ) {
return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
* 抜粋文の省略記法の変更
*
* @param string $more 変更前の省略記法.
* @return string $more 変更後の省略記法.
*/
function my_excerpt_more( $more ) {
return '...';
}
add_filter( 'excerpt_more', 'my_excerpt_more' );


// /**
// * WordPressサイトの画像に自動的に付与されるclass等のタグを削除
// **/
// function image_tag_delete( $html ){
//     // widthとheight属性を削除
//     $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
//     // class属性を削除
//     $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html);
//     // title属性を削除
//     $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);
//     // <a>タグを削除
//     $html = preg_replace('/<a href="[^"]*">/', '', $html);
//     $html = preg_replace('/<\/a>/', '', $html);
//     return $html;
// }
// add_filter('image_send_to_editor', 'image_tag_delete', 10);
// add_filter('post_thumbnail_html', 'image_tag_delete', 10);

/*-----------------------------------
// フロントビューJavaScriptスライダーを実装
-----------------------------------*/
function enqueue_swiper_assets() {
  // SwiperのCSSを読み込む
  wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);

  // SwiperのJSを読み込む
  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

  // カスタムスクリプトを読み込む
  wp_enqueue_script('custom-slider-js', get_template_directory_uri() . '/assets/js/custom-slider.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');








//pagenavi
function custom_pagenavi_html($html) {
    // <div>が<ul>になっている部分を正しく修正する
    $html = str_replace('<div', '<ul', $html);
    $html = str_replace('</div>', '</ul>', $html);

    // <span>タグを<li>タグに変換
    $html = str_replace('<span', '<li', $html);
    $html = str_replace('</span>', '</li>', $html);

    // <a>タグを<li>タグで囲む
    $html = preg_replace('/(<a [^>]*>.*?<\/a>)/', '<li>$1</li>', $html);

    return $html;
}
add_filter('wp_pagenavi', 'custom_pagenavi_html');





//カスタム投稿のタグをチェックボックスで入力できるようにする
// デフォルトで表示されているメタボックスを消去するー消去できていない
function my_tag_meta_box_remove() {
    remove_meta_box('tagsdiv-voice_tag', 'voice', 'side');
}
add_action('admin_init', 'my_tag_meta_box_remove');


/*-----------------------------------
// カスタムタクソノミーをチェックボックスで表示する
-----------------------------------*/
function my_add_new_tags_metabox() {
    add_meta_box('custom-tagsdiv', 'タグ', 'my_metabox_content', 'voice', 'side', 'default');
}
add_action('add_meta_boxes', 'my_add_new_tags_metabox');

function my_metabox_content($post) {
    $all_tags = get_terms(array('taxonomy' => 'voice_tag', 'hide_empty' => false));
    $all_tags_of_post = get_the_terms($post->ID, 'voice_tag');
    $ids = array();

    if ($all_tags_of_post && !is_wp_error($all_tags_of_post)) {
        foreach ($all_tags_of_post as $tag) {
            $ids[] = $tag->term_id;
        }
    }

    // HTML
    echo '<div id="taxonomy-voice_tag" class="categorydiv">';
    echo '<input type="hidden" name="tax_input[voice_tag][]" value="0" />';
    echo '<ul>';
    if (!is_wp_error($all_tags)) {
        foreach ($all_tags as $tag) {
            $checked = in_array($tag->term_id, $ids) ? " checked='checked'" : "";
            $id = 'voice_tag-' . $tag->term_id;
            echo "<li id='{$id}'>";
            echo "<label><input type='checkbox' name='tax_input[voice_tag][]' id='in-$id' value='$tag->slug'{$checked} /> $tag->name</label><br />";
            echo "</li>";
        }
    }
    echo '</ul></div>'; // end HTML
}


/*-----------------------------------
 メインループのクエリセット
-----------------------------------*/
function pickup_sort( $query ) {
    //管理画面は除外
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }
    if ( $query->is_front_page() ) {
        //トップページの表示件数
        $query->set( 'posts_per_page', -1 );

    } elseif ( $query->is_post_type_archive('voice') ) {
        //投稿タイプvoice
        $query->set( 'posts_per_page', 6 );

		} elseif ( $query->is_post_type_archive('campaign') ) {
        //投稿タイプvoice
        $query->set( 'posts_per_page', 6 );

    } elseif( $query->is_tax('hoge-cat') ) {
        //投稿タイプhogeのタクソノミー
        $query->set( 'posts_per_page', -1 );
    }
}
add_action( 'pre_get_posts', 'pickup_sort' );




/*-----------------------------------
投稿タイプのラベルを変更
-----------------------------------*/
function change_post_labels() {
    global $wp_post_types;

    // 'post' は標準の投稿タイプを指します
    $post_labels = $wp_post_types['post']->labels;

    // ラベルを変更します
    $post_labels->name = 'ブログ';
    $post_labels->singular_name = 'ブログ';
    $post_labels->add_new = '新しいブログを追加';
    $post_labels->add_new_item = '新しいブログを追加';
    $post_labels->edit_item = 'ブログを編集';
    $post_labels->new_item = '新しいブログ';
    $post_labels->view_item = 'ブログを表示';
    $post_labels->search_items = 'ブログを検索';
    $post_labels->not_found = 'ブログが見つかりません';
    $post_labels->not_found_in_trash = 'ゴミ箱にブログはありません';
    $post_labels->all_items = 'すべてのブログ';
    $post_labels->menu_name = 'ブログ';
    $post_labels->name_admin_bar = 'ブログ';
}

// アクションフックを追加して、WordPressの初期化時にラベルを変更します
add_action('init', 'change_post_labels');


/*-----------------------------------
scf オプションページ
-----------------------------------*/
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( '料金一覧', '料金リスト', 'manage_options', 'theme-options' );

/*-----------------------------------
投稿ビュー数を カスタムフィールドpost_views_countに、記録する
-----------------------------------*/
function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_field($count_key, $postID);
    if($count == ''){
        $count = 0;
        update_field($count_key, $count, $postID);
    } else {
        $count++;
        update_field($count_key, $count, $postID);
    }
}

function track_post_views($post_id) {
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    set_post_views($post_id);
}
add_action('wp_head', 'track_post_views');


/*-----------------------------------
特定の固定ページにだけSmart Custom Fieldsの入力欄を表示させる
-----------------------------------*/