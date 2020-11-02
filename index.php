<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Slideshow</title>
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div id="slideshow-example" data-component="slideshow">
        <div role="list" class="list">
<?php
  // add images from the images folder
  $files = glob('/var/www/html/data/*.*');
  foreach($files as $file) {
      $file_parts = pathinfo($file); 
      if ($file_parts['extension'] == "pptx") {
           continue;
      }
      $path = str_replace("/var/www/html/", "", $file);
      echo("<div class=\"slide\"><img src=\"" . $path . "\"></div>");
  }
?>
        </div>
      </div>
    <script src="js/slideshow.js"></script>
    </body>
  </html>
