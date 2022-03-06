<?php
function is_small() {
  $size = $_SESSION[windowSize];
  if ($size == 0) {
    return (wp_is_mobile()) ? 'small' : 'wide'
  } else {
    return ($size < 768) ? 'small' : 'wide'
  }
}
?>