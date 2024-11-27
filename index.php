<?php

declare(strict_types=1);

require __DIR__ . '/header.php';
require __DIR__ . '/main.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!--form start-->
  <div class="form-text">
    <p>BLI MEDLEM OCH FÅ</p>
    <h2>15% rabatt på ditt första köp</h2>
  </div>

  <form action="process_email.php" method="POST">
    <label for="email">E-postadress*</label>
    <br>
    <input type="email" id="email" name="email" required>

    <div class="checkboxes">
      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        Jag anmäler mig till nyhetsbrevet*
      </label>

      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        Jag har läst och godkänner <br><a href=""> ReGens sekresstespolicy</a>*
      </label>
      <button type="submit" class="form-button">Skicka</button>

    </div>
    </div>
  </form>
  <!--form end-->

  <!--Andrea kodar-->
  <!--CONFIGURATOR-->
  <section class="configurator-container desktopOnly">
    <div id="configurator-jewelry" class="gold" title="Klackring med ReGens logotyp på framsida"></div>
    <div class="configurator-text">
      <h3>Klackring</h3>
      <p class="small">Våra ringar är skapade av återvunna metaller från gamla smycken och elektronik, kombinerade med laboratorieframställda ädelstenar – ett hållbart val som minimerar avfall och garanterar en etisk produktion.<br><br>
      <strong>1099 SEK</strong></p>
      <div class="configurator-choose-color">
        <p class="small">Välj färg:</p>
        <div class="configurator-options">
          <div class="configurator-color-options">
            <div class="configurator-ellipse silver" onclick="changeColorSilver()"></div>
            <p id="silver-text" class="small">Silver</p>
          </div>
          <div class="configurator-color-options">
            <div class="configurator-ellipse gold" onclick="changeColorGold()"></div>
            <p id="gold-text" class="small">Guld</p>
          </div>
        </div>
        <button class="configurator-button">
          <p>Lägg till i varukorg</p>
          <svg width="32" height="25" viewBox="0 0 32 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Icon/Shopping bag &#226;&#128;&#147; large">
              <path id="shopping_bag" d="M8.0001 24.5C7.4601 24.5 6.9917 24.3017 6.5949 23.9051C6.1983 23.5083 6 23.0399 6 22.4999V7.3001C6 6.7601 6.1983 6.2917 6.5949 5.8949C6.9917 5.4983 7.4601 5.3 8.0001 5.3H11.0001V5.0999C11.0001 3.8199 11.4467 2.7333 12.3399 1.8401C13.2333 0.9467 14.32 0.5 15.6 0.5C16.88 0.5 17.9667 0.9467 18.8601 1.8401C19.7533 2.7333 20.1999 3.8199 20.1999 5.0999V5.3H23.1999C23.7399 5.3 24.2083 5.4983 24.6051 5.8949C25.0017 6.2917 25.2 6.7601 25.2 7.3001V22.4999C25.2 23.0399 25.0017 23.5083 24.6051 23.9051C24.2083 24.3017 23.7399 24.5 23.1999 24.5H8.0001ZM8.0001 22.4999H23.1999V7.3001H20.1999V9.8999C20.1999 10.1833 20.1038 10.4208 19.9116 10.6124C19.7192 10.8042 19.4808 10.9001 19.1964 10.9001C18.9122 10.9001 18.6751 10.8042 18.4851 10.6124C18.2951 10.4208 18.2001 10.1833 18.2001 9.8999V7.3001H12.9999V9.8999C12.9999 10.1833 12.9038 10.4208 12.7116 10.6124C12.5192 10.8042 12.2808 10.9001 11.9964 10.9001C11.7122 10.9001 11.4751 10.8042 11.2851 10.6124C11.0951 10.4208 11.0001 10.1833 11.0001 9.8999V7.3001H8.0001V22.4999ZM12.9999 5.3H18.2001V5.0999C18.2001 4.3733 17.9484 3.7583 17.445 3.2549C16.9416 2.7517 16.3266 2.5001 15.6 2.5001C14.8734 2.5001 14.2584 2.7517 13.755 3.2549C13.2516 3.7583 12.9999 4.3733 12.9999 5.0999V5.3Z" fill="white" />
            </g>
          </svg>
        </button>

      </div>
  </section>



  <!-- ANDREA KODAR -->
  <!--Hampus bygger-->
  <section class="hero-inspiration">
    <!--@TODO: Ersätt Placeholder image-->
    <!-- <img class="hero-inspiration-image"
      src="assets/CG_bilder/mobil/Inspirationshero-mobilFotograferadBakgrund_Sebastian_Moreno_Ring Mobil 362x385.webp"
      srcset="assets/Mobil-webp/Inspiration – mobil 362x385.webp 362w,
              assets/Desktop-webp/ringaronstone.webp 1416w"
      sizes="(max-width: 768px) 100vw,
             (min-width: 769px) 100vw" /> -->

    <div class="hero-inspiration-image">
<<<<<<< Updated upstream
    <image class="mobileOnly" alt="Silvrig ring ligger på sten utomhus i solljus"
        src="assets/CG_bilder/mobil/Inspirationshero-mobilFotograferadBakgrund_Sebastian_Moreno_Ring Mobil 362x385.webp" />
      <image class="desktopOnly" alt="Silvrig ring ligger på sten utomhus i solljus" src="assets/CG_bilder/desktop/Inspirationshero-desktop-FotograferadBakgrund_Sebastian_Moreno_Ring Desktop 1416x428.webp" />
    
    <!-- <img
=======
      <image class="mobileOnly"
        src="assets/CG_bilder/mobil/Inspirationshero-mobilFotograferadBakgrund_Sebastian_Moreno_Ring Mobil 362x385.webp" />
      <image class="desktopOnly" src="assets/CG_bilder/desktop/Inspirationshero-desktop-FotograferadBakgrund_Sebastian_Moreno_Ring Desktop 1416x428.webp" />

      <!-- <img
>>>>>>> Stashed changes
      src="assets/CG_bilder/desktop/Inspirationshero-desktop-FotograferadBakgrund_Sebastian_Moreno_Ring Desktop 1416x428.webp"
      srcset="assets/CG_bilder/mobil/Inspirationshero-mobilFotograferadBakgrund_Sebastian_Moreno_Ring Mobil 362x385.webp 362w, 
             assets/CG_bilder/desktop/Inspirationshero-desktop-FotograferadBakgrund_Sebastian_Moreno_Ring Desktop 1416x428.webp 1416w"
      sizes="(max-width: 768px) 362px, (min-width: 769px) 1416px" /> -->
    </div>
    <h1 class="hero-inspiration-header">INSPIRATION</h1>
  </section>
  <!--om oss och sustainablity är här i mobilt -->
  <!-- sortiment selection items-->


  <!-- ANDREA KODAR -->
  <!--@TODO: H1 på mobil men h3 på desktop. Hur lösa? -->
  <section class="selected-sortiment-section">
    <div class="selected-sortiment selected-sortiment-margin-mobile">
      <h3>Nyheter</h3>
      <!--@TODO: Ersätt Placeholder image-->
      <image class="selected-sortiment-image" alt="Silvriga smycken ligger på ett bord och ett halsband som hänger över"
        src="assets/Mobil-webp/Nyheter – mobil 362x311.webp"
        srcset="assets/Mobil-webp/Nyheter – mobil 362x311.webp,
              assets/Desktop-webp/Nyheter_ReGen_Desktop_658x300.webp"
        sizes="(max-width: 768px) 100vw,
             (min-width: 769px) 50vw" />
      <button class="read-more mobileOnly">
        <h1>Se mer</h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="17" viewBox="0 0 30 17" fill="none">
          <path d="M1 8.5H29M29 8.5L22.467 1.5M29 8.5L22.467 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <div class="selected-sortiment desktopOnly">
      <h3>Köp looken</h3>
      <!--@TODO: Ersätt Placeholder image-->
      <img class="selected-sortiment-image" alt="Dekolletage med två guldiga halsband"
        src="assets/Desktop-webp/Kop-looken_ReGen_Desktop_658x300.webp"
        srcset="assets/Desktop-webp/Kop-looken_ReGen_Desktop_658x300.webp,
              assets/Desktop - webp/Nyheter_ReGen_Desktop_658x300.webp 658w"
        sizes="(max-width: 768px) 100vw,
             (min-width: 769px) 50vw" />
    </div>

    <div class=" selected-sortiment selected-sortiment-margin-mobile">
      <h3>Våra favoriter</h3>
      <!--@TODO: Ersätt Placeholder image-->
      <img class="selected-sortiment-image" alt="Guldiga ringar och örhängen ligger på ett fat i keramik"
        src="assets/Mobil-webp/Våra favoriter – mobil 362x311.webp"
        srcset="assets/Mobil-webp/Våra favoriter – mobil 362x311.webp,
              assets/Desktop-webp/Favoriter_ReGen_Desktop_658x300.webp"
        sizes="(max-width: 768px) 100vw,
             (min-width: 769px) 50vw" />
      <button class="read-more mobileOnly">
        <h1>Se mer</h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="17" viewBox="0 0 30 17" fill="none">
          <path d="M1 8.5H29M29 8.5L22.467 1.5M29 8.5L22.467 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <div class="selected-sortiment desktopOnly">
      <h3>Kommande kollektioner</h3>
      <!--@TODO: Ersätt Placeholder image-->
      <img class="selected-sortiment-image" alt="Två händer smider örhänge med stenar"
        src="assets/Desktop-webp/Kommande_ReGen_Desktop_658x300.webp"
        srcset="assets/Mobil-webp/Nyheter – mobil 362x311.webp 362w,
              assets/Desktop-webp/Kommande_ReGen_Desktop_658x300.webp"
        sizes="(max-width: 768px) 100vw,
             (min-width: 769px) 50vw" />
    </div>

    <div class="selected-sortiment mobileOnly">
      <h3 id="about-us-text-mobile">Om oss</h3>
      <!--@TODO: Ersätt Placeholder image-->
      <img class="selected-sortiment-image"
        src="assets/CG_bilder/mobil/om_oss_mobil.webp"
        srcset="assets/CG_bilder/mobil/om_oss_mobil.webp,
              assets/Desktop - webp/Nyheter_ReGen_Desktop_658x300.webp 658w"
        sizes="(max-width: 768px) 100vw,
             (min-width: 769px) 50vw" />
      <button id="about-us-button-mobile">
        <p>Lär känna oss bättre</p><svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.5 9.5H30.5M30.5 9.5L23.967 2.5M30.5 9.5L23.967 16.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <div class="selected-sortiment mobileOnly">
      <h3>Hållbarhet</h3>
      <!--@TODO: Ersätt Placeholder image-->
      <img class="selected-sortiment-image"
        src="assets/Mobil-webp/Hallbarhet – mobil 402x418.webp"
        srcset="assets/Mobil-webp/Hallbarhet – mobil 402x418.webp,
              assets/Desktop - webp/Nyheter_ReGen_Desktop_658x300.webp 658w"
        sizes="(max-width: 768px) 100vw,
             (min-width: 769px) 49vw" />
      <button id="sustainability-button-mobile">
        <p>Läs mer om vårt hållbarhetsarbete</p><svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.5 9.5H30.5M30.5 9.5L23.967 2.5M30.5 9.5L23.967 16.5" stroke="var(--text-black)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
  </section>
  <!--sortiment selection items end-->

  <!-- ANDREA KODAR -->
  <!--ABOUT US SECTION-->
  <section class="about-us-section">
    <div class="about-us-text">
      <h1>Om oss</h1>
      <p>ReGen är ett skandinaviskt modeföretag som säljer hållbara smycken av återvunnet material i hög kvalitét.</p>
    </div>
    <div class="about-us-image"></div>
    <div class="our-production-image"></div>
    <div class="about-us-text">
      <h1>Vår produktion</h1>
      <p>Metallerna är återvunna från både gamla smycken som företaget köper in, men också från elektronikskrot, som till exempel kretskort.</p>
    </div>
    <div class="about-us-text">
      <h1>Inte som andra</h1>
      <p>Vi erbjuder tidlösa, skandinaviska smycken med en etisk profil där alla smycken är tillverkade av återvunnet material och odlade ädelstenar.</p>
    </div>
    <div class="what-sets-us-apart-image"></div>
  </section>
  <!--About us ends-->
  <!--bara desktop-->

  <!-- Andrea bygger -->
  <!-- SUSTAINABILITY -->
  <section class="sustainability-desktop">
    <div class="sustainability-image"><img src="assets/Desktop-webp/Hallbarhet_ReGen_Desktop_718x708.webp" /></div>
    <div class="sustainability-text">
      <h2>Hållbarhet på riktigt</h2>
      <p class="sustainability-paragraph">Genom att använda återvunna metaller från gamla smycken och elektronikskrot samt laboratorie-framställda ädelstenar, minimerar vi avfall och kan säkerställa en etisk produktion. Vårt sortiment inkluderar även etiskt odlade pärlor och accessoarer med porslin och glas. Självklart är vi certifierade:</p>
      <div class="sustainability-awards">
        <img class="sustainability-icon" src="assets/Logos SVG/Ecolabel.svg" />
        <img class="sustainability-icon" src="assets/Logos SVG/Fairtrade.svg" />
        <img class="sustainability-icon" src="assets/Logos SVG/GR.svg" />
      </div>
      <p>Vill du veta mer om vårt hållbarhetsarbete?</p>
      <button class="sustainability-button">
        <p>Klicka här</p><svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.5 9.5H30.5M30.5 9.5L23.967 2.5M30.5 9.5L23.967 16.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
  </section>
  <section class="social-media-mobile">
    <!-- Andrea Bygger -->
    <div class="social-media-text">
      <h1>Följ vår resa på Instagram</h1>
    </div>
    <!-- @TODO: PLACEHOLDER -->
    <div class="follow-us"><img src="assets/Desktop-webp/instagram_mockup_regen-desktop.png" />
      <div>
        <div class="social-media">
          <div class="icon"><svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.9991 0C18.6397 0.0045 19.4724 0.0135 20.1914 0.0345L20.4743 0.045C20.801 0.057 21.1233 0.0719999 21.5126 0.0899999C23.0643 0.165 24.1231 0.417 25.052 0.7875C26.0145 1.1685 26.8253 1.6845 27.6362 2.517C28.378 3.2666 28.9519 4.17371 29.3176 5.175C29.6778 6.1305 29.9228 7.2195 29.9958 8.817C30.0133 9.216 30.0278 9.5475 30.0395 9.885L30.0483 10.176C30.0701 10.914 30.0789 11.7705 30.0818 13.458L30.0833 14.577V16.542C30.0868 17.6361 30.0756 18.7302 30.0497 19.824L30.041 20.115C30.0293 20.4525 30.0147 20.784 29.9972 21.183C29.9243 22.7805 29.6764 23.868 29.3176 24.825C28.9519 25.8263 28.378 26.7334 27.6362 27.483C26.9074 28.246 26.0255 28.8363 25.052 29.2125C24.1231 29.583 23.0643 29.835 21.5126 29.91L20.4743 29.955L20.1914 29.964C19.4724 29.985 18.6397 29.9955 16.9991 29.9985L15.9112 30H14.0022C12.938 30.0039 11.8738 29.9924 10.8099 29.9655L10.527 29.9565C10.1808 29.943 9.83471 29.9275 9.48868 29.91C7.93702 29.835 6.87827 29.583 5.94785 29.2125C4.97489 28.8361 4.0935 28.2459 3.36514 27.483C2.62277 26.7336 2.04843 25.8264 1.68223 24.825C1.32202 23.8695 1.07702 22.7805 1.0041 21.183L0.960351 20.115L0.953059 19.824C0.926177 18.7302 0.914023 17.6361 0.916601 16.542V13.458C0.912564 12.3639 0.92326 11.2698 0.948684 10.176L0.958893 9.885C0.970559 9.5475 0.985143 9.216 1.00264 8.817C1.07556 7.2195 1.32056 6.132 1.68077 5.175C2.04782 4.1733 2.62318 3.26615 3.3666 2.517C4.09453 1.75432 4.97542 1.16411 5.94785 0.7875C6.87827 0.417 7.93556 0.165 9.48868 0.0899999C9.8766 0.0719999 10.2004 0.057 10.527 0.045L10.8099 0.0359999C11.8733 0.00934906 12.9371 -0.00215205 14.0008 0.00149989L16.9991 0ZM15.4999 7.5C13.5661 7.5 11.7114 8.29018 10.3439 9.6967C8.97649 11.1032 8.20827 13.0109 8.20827 15C8.20827 16.9891 8.97649 18.8968 10.3439 20.3033C11.7114 21.7098 13.5661 22.5 15.4999 22.5C17.4338 22.5 19.2885 21.7098 20.6559 20.3033C22.0234 18.8968 22.7916 16.9891 22.7916 15C22.7916 13.0109 22.0234 11.1032 20.6559 9.6967C19.2885 8.29018 17.4338 7.5 15.4999 7.5ZM15.4999 10.5C16.0745 10.4999 16.6434 10.6162 17.1742 10.8423C17.7051 11.0683 18.1874 11.3997 18.5937 11.8175C19.0001 12.2353 19.3224 12.7313 19.5424 13.2772C19.7623 13.8232 19.8756 14.4083 19.8757 14.9993C19.8758 15.5902 19.7627 16.1754 19.5429 16.7214C19.3231 17.2674 19.001 17.7635 18.5948 18.1815C18.1886 18.5994 17.7063 18.9309 17.1756 19.1572C16.6448 19.3834 16.0759 19.4999 15.5014 19.5C14.3411 19.5 13.2283 19.0259 12.4078 18.182C11.5873 17.3381 11.1264 16.1935 11.1264 15C11.1264 13.8065 11.5873 12.6619 12.4078 11.818C13.2283 10.9741 14.3411 10.5 15.5014 10.5M23.1576 5.25C22.6742 5.25 22.2105 5.44754 21.8686 5.79917C21.5268 6.15081 21.3347 6.62772 21.3347 7.125C21.3347 7.62228 21.5268 8.09919 21.8686 8.45083C22.2105 8.80246 22.6742 9 23.1576 9C23.6411 9 24.1048 8.80246 24.4466 8.45083C24.7885 8.09919 24.9806 7.62228 24.9806 7.125C24.9806 6.62772 24.7885 6.15081 24.4466 5.79917C24.1048 5.44754 23.6411 5.25 23.1576 5.25Z" fill="#C36443" />
            </svg></div>
          <p>@regenjewelry</p>
        </div>
  </section>

  <section class="social-media-desktop">
    <div class="contact-desktop">
      <div class="social-media-text">
        <h2>Följ vår resa på Instagram</h2>
      </div>
      <div class="social-media-links-desktop">
        <div class="social-media">
          <div class="icon"><svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.9991 0C18.6397 0.0045 19.4724 0.0135 20.1914 0.0345L20.4743 0.045C20.801 0.057 21.1233 0.0719999 21.5126 0.0899999C23.0643 0.165 24.1231 0.417 25.052 0.7875C26.0145 1.1685 26.8253 1.6845 27.6362 2.517C28.378 3.2666 28.9519 4.17371 29.3176 5.175C29.6778 6.1305 29.9228 7.2195 29.9958 8.817C30.0133 9.216 30.0278 9.5475 30.0395 9.885L30.0483 10.176C30.0701 10.914 30.0789 11.7705 30.0818 13.458L30.0833 14.577V16.542C30.0868 17.6361 30.0756 18.7302 30.0497 19.824L30.041 20.115C30.0293 20.4525 30.0147 20.784 29.9972 21.183C29.9243 22.7805 29.6764 23.868 29.3176 24.825C28.9519 25.8263 28.378 26.7334 27.6362 27.483C26.9074 28.246 26.0255 28.8363 25.052 29.2125C24.1231 29.583 23.0643 29.835 21.5126 29.91L20.4743 29.955L20.1914 29.964C19.4724 29.985 18.6397 29.9955 16.9991 29.9985L15.9112 30H14.0022C12.938 30.0039 11.8738 29.9924 10.8099 29.9655L10.527 29.9565C10.1808 29.943 9.83471 29.9275 9.48868 29.91C7.93702 29.835 6.87827 29.583 5.94785 29.2125C4.97489 28.8361 4.0935 28.2459 3.36514 27.483C2.62277 26.7336 2.04843 25.8264 1.68223 24.825C1.32202 23.8695 1.07702 22.7805 1.0041 21.183L0.960351 20.115L0.953059 19.824C0.926177 18.7302 0.914023 17.6361 0.916601 16.542V13.458C0.912564 12.3639 0.92326 11.2698 0.948684 10.176L0.958893 9.885C0.970559 9.5475 0.985143 9.216 1.00264 8.817C1.07556 7.2195 1.32056 6.132 1.68077 5.175C2.04782 4.1733 2.62318 3.26615 3.3666 2.517C4.09453 1.75432 4.97542 1.16411 5.94785 0.7875C6.87827 0.417 7.93556 0.165 9.48868 0.0899999C9.8766 0.0719999 10.2004 0.057 10.527 0.045L10.8099 0.0359999C11.8733 0.00934906 12.9371 -0.00215205 14.0008 0.00149989L16.9991 0ZM15.4999 7.5C13.5661 7.5 11.7114 8.29018 10.3439 9.6967C8.97649 11.1032 8.20827 13.0109 8.20827 15C8.20827 16.9891 8.97649 18.8968 10.3439 20.3033C11.7114 21.7098 13.5661 22.5 15.4999 22.5C17.4338 22.5 19.2885 21.7098 20.6559 20.3033C22.0234 18.8968 22.7916 16.9891 22.7916 15C22.7916 13.0109 22.0234 11.1032 20.6559 9.6967C19.2885 8.29018 17.4338 7.5 15.4999 7.5ZM15.4999 10.5C16.0745 10.4999 16.6434 10.6162 17.1742 10.8423C17.7051 11.0683 18.1874 11.3997 18.5937 11.8175C19.0001 12.2353 19.3224 12.7313 19.5424 13.2772C19.7623 13.8232 19.8756 14.4083 19.8757 14.9993C19.8758 15.5902 19.7627 16.1754 19.5429 16.7214C19.3231 17.2674 19.001 17.7635 18.5948 18.1815C18.1886 18.5994 17.7063 18.9309 17.1756 19.1572C16.6448 19.3834 16.0759 19.4999 15.5014 19.5C14.3411 19.5 13.2283 19.0259 12.4078 18.182C11.5873 17.3381 11.1264 16.1935 11.1264 15C11.1264 13.8065 11.5873 12.6619 12.4078 11.818C13.2283 10.9741 14.3411 10.5 15.5014 10.5M23.1576 5.25C22.6742 5.25 22.2105 5.44754 21.8686 5.79917C21.5268 6.15081 21.3347 6.62772 21.3347 7.125C21.3347 7.62228 21.5268 8.09919 21.8686 8.45083C22.2105 8.80246 22.6742 9 23.1576 9C23.6411 9 24.1048 8.80246 24.4466 8.45083C24.7885 8.09919 24.9806 7.62228 24.9806 7.125C24.9806 6.62772 24.7885 6.15081 24.4466 5.79917C24.1048 5.44754 23.6411 5.25 23.1576 5.25Z" fill="#C36443" />
            </svg></div>
          <p>@regenjewelry</p>
        </div>
        <div class="social-media">
          <div class="icon"><svg class="icon" width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M28.4792 0H2.52091C2.09546 0 1.68744 0.173839 1.3866 0.483274C1.08576 0.792709 0.916748 1.21239 0.916748 1.65V28.35C0.916748 28.7876 1.08576 29.2073 1.3866 29.5167C1.68744 29.8262 2.09546 30 2.52091 30H15.4917C16.044 30 16.4917 29.5523 16.4917 29V19.375C16.4917 18.8227 16.044 18.375 15.4917 18.375H13.7001C13.1478 18.375 12.7001 17.9273 12.7001 17.375V14.875C12.7001 14.3227 13.1478 13.875 13.7001 13.875H15.4917C16.044 13.875 16.4917 13.4273 16.4917 12.875V10.5C16.4132 9.70763 16.5042 8.90719 16.7582 8.15481C17.0123 7.40242 17.4233 6.71632 17.9624 6.14462C18.5016 5.57292 19.1558 5.12946 19.8792 4.84536C20.6026 4.56125 21.3777 4.44338 22.1501 4.5C22.9875 4.49405 23.8247 4.52521 24.6592 4.59334C25.1662 4.63474 25.548 5.06432 25.548 5.573V7.73C25.548 8.28228 25.1003 8.73 24.548 8.73H23.2292C21.3917 8.73 21.0418 9.63 21.0418 10.935V12.83C21.0418 13.3823 21.4895 13.83 22.0418 13.83H24.2824C24.8845 13.83 25.35 14.3581 25.2745 14.9554L24.9585 17.4554C24.8954 17.9552 24.4702 18.33 23.9664 18.33H22.0417C21.4895 18.33 21.0418 18.7777 21.0418 19.33V29C21.0418 29.5523 21.4895 30 22.0418 30H28.4792C28.6899 30 28.8985 29.9573 29.0931 29.8744C29.2878 29.7915 29.4646 29.6699 29.6136 29.5167C29.7625 29.3635 29.8807 29.1816 29.9613 28.9814C30.0419 28.7812 30.0834 28.5667 30.0834 28.35V1.65C30.0834 1.43332 30.0419 1.21876 29.9613 1.01857C29.8807 0.818385 29.7625 0.636491 29.6136 0.483274C29.4646 0.330057 29.2878 0.208519 29.0931 0.125599C28.8985 0.0426786 28.6899 0 28.4792 0Z" fill="#C36443" />
            </svg></div>
          <p>@regenjewelry</p>
        </div>
      </div>
    </div>
    <!-- @TODO: PLACEHOLDER -->
    <div class="follow-us"><img src="assets/Desktop-webp/instagram_mockup_regen-desktop.png" /></div>
  </section>


  <?php require __DIR__ . '/footer.php'; ?>