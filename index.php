<?php

declare(strict_types=1);

require __DIR__ . '/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="hero"> <!--utan grid på mobilt-->
    <!-- Jakub bygger -->
  </div>
  <div class="sortiment">
    <!-- Jakub bygger -->
  </div>
  <form>
    <!-- Jakub bygger -->
  </form>
  <!--Hampus bygger-->
  <div class="hero-inspiration"></div>
  <!--om oss och sustainablity är här i mobilt -->
  <!-- sortiment selection items-->
  <div class="sortiment-selection-item">
    <div class="sortiment-selection-wraper">
      <h3>News/seasonality</h3>
      <div class="sortiment-selection-item-1"></div>
    </div>

    <div class="sortiment-selection-wraper">
      <h3>Shop the look</h3>
      <div class="sortiment-selection-item-2"></div>
    </div>

    <div class="sortiment-selection-wraper">
      <h3>Our most beloved</h3>
      <div class="sortiment-selection-item-3"></div>
    </div>

    <div class="sortiment-selection-wraper">
      <h3>Collaboration/coming soon</h3>
      <div class="sortiment-selection-item-4"></div>
    </div>

    <div class="sortiment-selection-wraper-hidden">
      <h3>Om oss</h3>
      <div class="sortiment-selection-item-5"></div>
    </div>

    <div class="sortiment-selection-wraper-hidden">
      <h3>Hållbarhet</h3>
      <div class="sortiment-selection-item-6"></div>
    </div>
  </div>
  <!--sortiment selection items end-->

  <!--our story start-->
  <div class="our-story">
    <div class="our-story-box-1"></div>
    <div class="our-story-box-2"></div>
    <div class="our-story-box-3"></div>
    <div class="our-story-box-4"></div>
    <div class="our-story-box-5"></div>
    <div class="our-story-box-6"></div>
  </div>
  <!--our story end-->

  <div class="sustainability"> <!--bara desktop-->
    <!-- Andrea bygger -->
  </div>
  <div class="social-media-mobile">
    <!-- Andrea Bygger -->
    <div class="social-media-text">Följ vår resa på Instagram</div>
    <div class="follow-us"></div>
    <div class="social-media-text">@Regenjewelry</div>
  </div>

  <div class="social-media-desktop">
    <div class="follow-us"></div>
    <div class="contact-desktop">
      <div class="social-media-text"><h1>Följ vår resa på Instagram</h1></div>
      <div class="social-media-links-desktop">
        <div class="social-media"><img class="icon" src="assets/Instagram.png" /><a href="https://www.instagram.com">@regenjewelry</div></a>
        <div><img class="icon" src="assets/Facebook.png" /><a href="https://www.facebook.com">@regenjewelry</a></div>
      </div>
    </div>
  </div>


  <?php require __DIR__ . '/footer.php'; ?>