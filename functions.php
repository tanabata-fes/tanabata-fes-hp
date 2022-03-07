<?php
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
?>