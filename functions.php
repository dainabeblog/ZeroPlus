<?php

// アイキャッチ表示
// ------------------------
add_theme_support('post-thumbnails');



// 管理画面メニュー項目非表示
// ---------------------------------------
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
  remove_menu_page( 'index.php' ); //ダッシュボード
  remove_menu_page( 'edit.php' ); //投稿メニュー
  remove_menu_page( 'edit-comments.php' ); //コメントメニュー
}



// エディタボタン
// ---------------------------------------
function remove_tinymce_buttons( $buttons ) {
$remove = array('alignleft', 'aligncenter', 'alignright', 'wp_more', 'wp_adv'); // ここに削除したいものを記述
return array_diff($buttons, $remove);
}
add_filter( 'mce_buttons', 'remove_tinymce_buttons' );



// ビジュアルエディタ2行目のボタン削除
// ---------------------------------------
function remove_tinymce_buttons_2( $buttons ) {
// 削除するボタンを指定
$remove = array(
'strikethrough', // 打ち消し
'hr', // 横ライン
'forecolor', // テキスト色
'pastetext', // テキストとしてペースト
'removeformat', // 書式設定をクリア
'charmap', // 特殊文字
'outdent', // インデントを減らす
'indent', // インデントを増やす
'undo', // 取り消し
'redo', // やり直し
'wp_help' // キーボードショートカット
);
// 指定したボタンを削除
$buttons = array_diff( $buttons, $remove );
return $buttons;
}
add_filter( 'mce_buttons_2', 'remove_tinymce_buttons_2' );



// ビジュアルエディタの指定できるフォーマットを変更
// ---------------------------------------
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_formats' );
function custom_tiny_mce_formats( $settings ){
$settings[ 'block_formats' ] = '段落=p;見出し2=h2;見出し3=h3;';
return $settings;
}



// エディタカスタマイズ
// ---------------------------------------
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_style_formats' );
function custom_tiny_mce_style_formats( $settings ) {
$style_formats = array(
array(
'title' => '文字カラー（赤）',
'inline' => 'span',
'classes' => 'c-red',
'wrapper' => true,
),
array(
'title' => '文字カラー（青）',
'inline' => 'span',
'classes' => 'c-blue',
'wrapper' => true,
),
array(
'title' => 'チェック',
'inline' => 'span',
'classes' => 'check',
'wrapper' => true,
),
array(
'title' => 'マーカー',
'inline' => 'span',
'classes' => 'underline',
'wrapper' => true,
),
array(
'title' => 'ボタン',
'inline' => 'span',
'classes' => 'btn',
'wrapper' => true,
),
);
$settings[ 'style_formats' ] = json_encode( $style_formats );
return $settings;
}

add_filter( 'mce_buttons', 'add_original_styles_button' );
function add_original_styles_button( $buttons ) {
array_splice( $buttons, 1, 0, 'styleselect' );
return $buttons;
}



// エディタ内スタイル
// ---------------------------------------
function add_editor_style_cb() {
add_editor_style();
}
add_action('admin_init', 'add_editor_style_cb');



// 目次
// ---------------------------------------
function add_index_to_content( $content ) {
  if ( get_post_type() === 'column' ) {
    $index_wrap = '<div class="m-single-contents-toc"><span class="m-single-contents-toc-txt">目次</span></div>';

    $tag = '/<h2.*?>/i';

if ( preg_match( $tag, $content, $tags )) {
$content = preg_replace($tag, $index_wrap.$tags[0], $content, 1);
}
}
return $content;
}
add_filter( 'the_content', 'add_index_to_content' );



// コースページ Webデザインページへリダイレクト
// ---------------------------------------
add_action( 'template_redirect', 'my_redirect', 1);
function my_redirect() {
if ( is_page('course')){
wp_safe_redirect( home_url('/course/web-design/') );
exit;
}
}



// よくあるご質問, 講演・交流会
// エディタ非表示
// ---------------------------------------
function disable_visual_editor_in_page_individual(){
global $typenow;
$post_id = $_GET['post'];
if( $typenow == 'page' ){
if ( in_array( $post_id, array('100','102'), true ) ){
$hide_postdiv_css = '<style type="text/css">
#postdiv,
#postdivrich {
    display: none;
}
</style>';
echo $hide_postdiv_css;
}
}
}
add_action('load-post.php', 'disable_visual_editor_in_page_individual');
add_action('load-post-new.php', 'disable_visual_editor_in_page_individual');



// カスタム投稿 meta情報
// ---------------------------------------
function output_ogp() {
global $post;

$og_type = 'article';
$og_locale = 'ja_JP';
$og_image = get_template_directory_uri().'/img/ogp.jpg';
$og_site_name = 'ZeroPlus池袋校 - フリーランス特化型プログラミングスクール -';
$twitter_card = 'summary';
$twitter_domain = 'zero-plus.io';

if( is_post_type_archive('column') ) {
$og_url = home_url('/column/');
$site_description = 'スクールを検討中やwebデザイン/プログラミングに興味がある方に役立つコンテンツを用意しています。フリーランス育成に特化したプログラミングスクール | ZeroPlus';
$site_title = 'お役立ち情報 | '.get_bloginfo('name');
} else if ( is_post_type_archive('interview') ){
$og_url = home_url('/interview/');
$site_description = '卒業した生徒様のインタビューコンテンツです。フリーランス育成に特化したプログラミングスクール | ZeroPlus';
$site_title = '生徒様の声 | '.get_bloginfo('name');
}

if( is_post_type_archive('column') || is_post_type_archive('interview')) { ?>
<meta name="description" content="<?php echo esc_attr($site_description); ?>" />
<meta property="og:type" content="<?php echo $og_type; ?>">
<meta property="og:description" content="<?php echo esc_attr($site_description); ?>">
<meta property="og:title" content="<?php echo $site_title; ?>">
<meta property="og:url" content="<?php echo esc_url($og_url); ?>">
<meta property="og:site_name" content="<?php echo $og_site_name; ?>">
<meta property="og:locale" content="<?php echo $og_locale; ?>">
<meta property="og:image" content="<?php echo esc_url($og_image); ?>">
<meta name="twitter:card" content="<?php echo $twitter_card; ?>">
<meta name="twitter:description" content="<?php echo esc_attr($site_description); ?>">
<meta name="twitter:title" content="<?php echo $site_title; ?>">
<meta name="twitter:url" content="<?php echo esc_url($og_url); ?>">
<meta name="twitter:domain" content="<?php echo $twitter_domain; ?>">
<meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">
<?php }
}

add_action('wp_head', 'output_ogp');



// セキュリティ対策
// ---------------------------------------
remove_action('wp_head', 'wp_generator');// WordPressのバージョン
remove_action('wp_head', 'wp_shortlink_wp_head');// 短縮URLのlink
remove_action('wp_head', 'wlwmanifest_link');// ブログエディターのマニフェストファイル
remove_action('wp_head', 'rsd_link');// 外部から編集するためのAPI
remove_action('wp_head', 'feed_links_extra', 3);// フィードへのリンク
remove_action('wp_head', 'print_emoji_detection_script', 7);// 絵文字に関するJavaScript
remove_action('wp_head', 'rel_canonical');// カノニカル
remove_action('wp_print_styles', 'print_emoji_styles');// 絵文字に関するCSS
remove_action('admin_print_scripts', 'print_emoji_detection_script');// 絵文字に関するJavaScript
remove_action('admin_print_styles', 'print_emoji_styles');// 絵文字に関するCSS



// 固定ページ エディタ非表示 (全ページ)
// ---------------------------------------
function post_output_css() {
  $pt = get_post_type();
  if ($pt == 'page') {
      $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
      echo $hide_postdiv_css;
  }
}
add_action('admin_head', 'post_output_css');