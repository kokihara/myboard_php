<?php
define('MAX_FILE_SIZE', 1 * 1024 * 1024);
define('THUMBNAIL_WIDTH', 400);
define('IMAGES_DIR', __DIR__ . '/images');
define('THUMBNAIL_DIR', __DIR__ . '/thumbs');
ini_set('display_errors', 1);
if (!function_exists('imagecreatetruecolor')) {
  echo 'Go not installed';
  exit;

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
require 'ImageUploader.php';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>画像アップロード掲示板</title>
  <style>
  body {
    text-align: center;
    font-family: Arial, sans-serif;
  }
  </style>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="">
  <input type="file" name="image">
  <input type="submit" value="upload">
</form>
</body>
</html>