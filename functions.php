<?php
add_theme_support('post-thumbnails');

function is_mobile(){
  $useragents = array(
    "iPhone", // iPhone
    "iPod", // iPod touch
    "Android.*Mobile", // 1.5+ Android *** Only mobile
    "Windows.*Phone", // *** Windows Phone
    "dream", // Pre 1.5 Android
    "CUPCAKE", // 1.5+ Android
    "blackberry9500", // Storm
    "blackberry9530", // Storm
    "blackberry9520", // Storm v2
    "blackberry9550", // Storm v2
    "blackberry9800", // Torch
    "webOS", // Palm Pre Experimental
    "incognito", // Other iPhone browser
    "webmate" // Other iPhone browser
  );
  $pattern = "/".implode("|", $useragents)."/i";
  return preg_match($pattern, $_SERVER["HTTP_USER_AGENT"]);
}

function get_recently_post() {
  $recent_post = get_posts('numberposts=1');
  if (count($recent_post) > 0) {
    $recent_post_id = $recent_post[0]->ID;
    $recent_post_url = get_permalink($recent_post_id);
    echo $recent_post_url;
  } else {
    echo "/";
  }
}

/*-----------------------------------
  ヘッダー整理
-----------------------------------*/
// 絵文字を使うためのスクリプトとスタイルを出力しない
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
 
// 絵文字の DNS プリフェッチ用リンクを出力しない（この場合はフィルターフックを利用）
add_filter( 'emoji_svg_url', '__return_false' ); 
 
// REST API URL を出力しない
remove_action('wp_head','rest_output_link_wp_head');
 
// EditURI を出力しない
remove_action( 'wp_head', 'rsd_link' );
 
// wlwmanifest を出力しない
remove_action( 'wp_head', 'wlwmanifest_link' );
 
// WordPress のバージョン情報の出力をしない（機能に影響なし）
remove_action( 'wp_head', 'wp_generator' );
 
// 短縮形 URL を出力をしない 	
remove_action('wp_head', 'wp_shortlink_wp_head');
 
// oEmbed 機能に必要なリンクを出力をしない
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
 
// feed 出力をしない.
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

?>