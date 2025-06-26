<!DOCTYPE html>
<html lang="ja">
<head>
  <title>ポートフォリオ</title>
  <meta charset="UTF-8">
  <meta name="description" content="NABWORKSのポートフォリオです。">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class( );?>>
<!-- header start -->
<header id="header">
  <div class="header-container">
    <a href="<?php echo home_url('/') ;?>" rel="home">
      <h1 class="header-logo">NABWORKS</h1>
    </a>
    <nav id="nav">
      <ul>
        <li class="nav-item"><a href="<?php echo home_url( );?>/#works">WORKS</a></li>
        <li class="nav-item"><a href="<?php echo home_url( );?>/#skill">SKILL</a></li>
        <li class="nav-item"><a href="<?php echo home_url( );?>/#about">ABOUT</a></li>
        <li class="nav-item"><a href="<?php echo home_url( );?>/contact">CONTACT</a></li>
      </ul>
    </nav>
  </div>
</header>
  <!-- header finish -->