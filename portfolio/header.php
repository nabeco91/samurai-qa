<!DOCTYPE html>
<html lang="ja">
<head>
  <title>ポートフォリオ</title>
  <meta charset="UTF-8">
  <meta name="description" content="NABWORKSのポートフォリオです。">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri( );?>/style.css">
</head>

<!-- header start -->
<header id="header">
  <div class="header-container">
    <a href="<?php echo esc_url( home.url('/') );?>" rel="home">
      <h1 class="header-logo">NABWORKS</h1>
    </a>
    <nav id="nav">
      <ul>
        <li class="nav-item"><a href="<?php echo get_template_directory_uri( );?>/works.html">WORKS</a></li>
        <li class="nav-item"><a href="<?php echo get_template_directory_uri( );?>/#skill">SKILL</a></li>
        <li class="nav-item"><a href="<?php echo get_template_directory_uri( );?>/#about">ABOUT</a></li>
        <li class="nav-item"><a href="<?php echo get_template_directory_uri( );?>/contact.html">CONTACT</a></li>
      </ul>
    </nav>
  </div>
  <?php wp_head(); ?>
</header>
  <!-- header finish -->