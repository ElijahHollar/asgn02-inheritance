<!doctype html>

<html lang="en">
  <head>
    <title>Birds of WNC <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/styles.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
        <img class="bird-icon" src="<?php echo url_for('/images/tufted-titmouse.jpg') ?>" /><br />
        WNC Birds
      </h1>
    </header>
