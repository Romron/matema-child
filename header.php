<?php

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   <!-- Google Tag Manager -->
   <script>
   (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
         'gtm.start': new Date().getTime(),
         event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
         j = d.createElement(s),
         dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
         'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
   })(window, document, 'script', 'dataLayer', 'GTM-KZJVMNQ');
   </script>
   <!-- End Google Tag Manager -->
   <!-- favicons -->
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.ico">
   <link rel="icon" sizes="16x16 32x32 64x64"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.ico">
   <link rel="icon" type="image/png" sizes="196x196"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-192.png">
   <link rel="icon" type="image/png" sizes="160x160"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-160.png">
   <link rel="icon" type="image/png" sizes="96x96"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-96.png">
   <link rel="icon" type="image/png" sizes="64x64"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-64.png">
   <link rel="icon" type="image/png" sizes="32x32"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-32.png">
   <link rel="icon" type="image/png" sizes="16x16"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-16.png">
   <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-57.png">
   <link rel="apple-touch-icon" sizes="114x114"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-114.png">
   <link rel="apple-touch-icon" sizes="72x72"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-72.png">
   <link rel="apple-touch-icon" sizes="144x144"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-144.png">
   <link rel="apple-touch-icon" sizes="60x60"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-60.png">
   <link rel="apple-touch-icon" sizes="120x120"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-120.png">
   <link rel="apple-touch-icon" sizes="76x76"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-76.png">
   <link rel="apple-touch-icon" sizes="152x152"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-152.png">
   <link rel="apple-touch-icon" sizes="180x180"
      href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-180.png">
   <meta name="msapplication-TileColor" content="#FFFFFF">
   <meta name="msapplication-TileImage"
      content="<?php echo get_stylesheet_directory_uri() ?>/assets/img/faviconit/favicon-144.png">
   <meta name="msapplication-config" content="/browserconfig.xml">
   <!-- fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
   <!-- styles -->
   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <style>
   .wpml-ls-legacy-list-horizontal .wpml-ls-item.wpml-ls-item-ru {
      display: none;
   }

   img {
      image-rendering: optimizeSpeed;
      /* Legal fallback */
      image-rendering: -moz-crisp-edges;
      /* Firefox        */
      image-rendering: -o-crisp-edges;
      /* Opera          */
      image-rendering: -webkit-optimize-contrast;
      /* Safari         */
      image-rendering: optimize-contrast;
      /* CSS3 Proposed  */
      image-rendering: crisp-edges;
      /* CSS4 Proposed  */
      image-rendering: pixelated;
      /* CSS4 Proposed  */
      -ms-interpolation-mode: nearest-neighbor;
      /* IE8+           */
   }

   .wpml-ls-legacy-list-horizontal .wpml-ls-item.wpml-ls-item-ru.wpml-ls-current-language {
      display: inline-block;
   }

   .two-plus-two-modal .diagnostic-form {
      box-sizing: border-box;
      background-color: #1A1A31;
      border-radius: 12px;
      padding: 32px;
   }

   .two-plus-two-modal .diagnostic-form legend {
      display: none !important;
   }

   .two-plus-two-modal .diagnostic-form label {
      color: #fff;
      display: block !important;
      font-size: 12px !important;
      font-weight: 400 !important;
      margin-bottom: 10px !important;
   }

   .two-plus-two-modal .diagnostic-form .gfield_required {
      content: '*';
      font-size: 0 !important;
   }

   .two-plus-two-modal .diagnostic-form .gform_validation_errors {
      display: none !important;
   }

   .two-plus-two-modal .diagnostic-form .validation_message {
      display: none !important;
   }

   h3.gsection_title {
      font-weight: normal;
      font-size: 12px;
      padding-left: 10px;
      position: relative;
      text-transform: uppercase;
      margin-bottom: -14px;
   }

   h3.gsection_title:before {
      background-color: #6536D6;
      border-radius: 50%;
      content: "";
      height: 4px;
      margin-top: -2px;
      position: absolute;
      top: 50%;
      left: 0;
      width: 4px;
   }

   body .gform_wrapper.gravity-theme .gsection {
      border-bottom: none;
   }

   body .gform_wrapper.gravity-theme .gfield_label,
   .like-usual-label h3.gsection_title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 15px;
      color: black;
      text-transform: none;
   }

   .radio-horiz .gchoice {
      border-radius: 24px;
      border: 1px solid #c5c5c5;
      cursor: pointer;
      line-height: 40px;
      margin-left: 0;
      margin-right: 16px;
      margin-bottom: 16px;
      padding: 0 0 0 16px;
   }

   body .gform_wrapper.gravity-theme .gfield-choice-input+label {
      max-width: unset;
   }

   .gform_wrapper.gravity-theme .gfield-choice-input {
      margin-right: -33px;
   }

   .gform_wrapper.gravity-theme .gfield_checkbox label,
   .gform_wrapper.gravity-theme .gfield_radio label {
      padding: 0 20px 0 33px;
   }

   body .gform_wrapper.gravity-theme .radio-horiz .gfield_label {
      margin-bottom: 40px;
   }

   .gform_wrapper.gravity-theme .gfield input.large,
   .gform_wrapper.gravity-theme .gfield select.large {
      box-sizing: border-box;
      background-color: #fff;
      border: 1px solid #CFD6E4;
      border-radius: 24px;
      margin-bottom: 0;
      padding: 15px;
      width: 100%;
      font-size: 100%;
      height: auto;
      line-height: 1.15;
   }

   .instruction.validation_message,
   .ginput_container_number .gfield_description.instruction {
      display: none;
   }

   .popup-flex {
      display: flex;
      align-items: center;
      padding: 28px 0 28px 28px;
   }

   .popup-flex>* {
      flex: 1;
   }

   .popup-flex .pop-flex-item {
      overflow: hidden;
   }

   .pop-flex-item .gform_wrapper {
      margin-top: 30px;
   }

   .pop-flex-item .gfield_radio {
      display: flex;
      white-space: nowrap;
      justify-content: space-around;
   }

   .pop-flex-item .gform_footer .gform_button.button {
      width: 100%;
      margin-top: 30px;
   }

   .popup-flex .pop-flex-item img {
      display: block;
      margin-left: 50px;
   }

   .popup-flex .gform_confirmation_message {
      margin-top: 40px;
      font-size: 22px;
      font-weight: 500;
   }

   .pum-theme-18202 .pum-content+.pum-close,
   body .pum-theme-enterprise-blue .pum-content+.pum-close {
      padding: 4px 4px 8px;
   }

   .page-wrap a {
      color: var(--wp--preset--color--vivid-cyan-blue);
      text-decoration: underline;
      cursor: pointer;
   }

   .page-wrap a.button {
      color: white;
      text-decoration: none;
   }

   .page-wrap .left-tut-wrap a,
   .page-wrap a.button.yellow-button {
      color: black;
      text-decoration: none;
   }

   .page-wrap .posts-list a {
      text-decoration: none;
   }

   .partial_entry_warning {
      display: none;
   }

   body .gform_wrapper.gravity-theme input[type=text] {
      background-color: #fff;
      border: 1px solid #CFD6E4;
      border-radius: 24px;
      padding: 15px;
      font-size: 100%;
      line-height: 1.15;
      height: auto;
   }

   .popmake-content .gform_wrapper.gravity-theme .gfield input.large,
   body .popmake-content .gform_wrapper.gravity-theme input[type=text] {
      border-radius: 5px;
      font-size: 14px;
      height: 32px;
      padding: 0 16px;
      border: 1px solid #d8dbe8;
      background-color: #f8f9fd;
   }

   .pum-theme-18200 .pum-content,
   .pum-theme-default-theme .pum-content {
      padding-top: 15px;
   }

   .pum-theme-18200 .pum-title,
   .pum-theme-default-theme .pum-title {
      padding-right: 25px;
   }

   footer .bottom .row {
      align-items: end;
   }



   .nega-margin {
      margin-bottom: -16px;
   }

   body .gform_wrapper.gravity-theme .one-third .gfield_label,
   body .gform_wrapper.gravity-theme .two-thirds .gfield_label {
      display: none;
   }

   .tutpopnamediv {
      margin-top: 20px;
   }

   .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds {
      -ms-grid-column-span: 10;
      grid-column: span 10;
   }

   .two-thirds .gfield_label,
   .phone-flags .gfield_label {
      opacity: 0 !important;
   }

   .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third {
      -ms-grid-column-span: 2;
      grid-column: span 2;
      margin-right: -14px;
   }

   .phone-flags .gfield_radio {
      text-align: left;
      position: relative;
      height: 50px;
      border-radius: 5px 0 0 5px;
      font-size: 14px;
      height: 32px;
      padding: 0 16px;
      border: 1px solid #d8dbe8;
      background-color: #f8f9fd;
      padding-left: 35px;
      overflow: hidden;
   }

   .popmake-content .gform_wrapper.gravity-theme .two-thirds.gfield input.large {
      border-radius: 0 5px 5px 0;
   }

   .phone-flags .gchoice {
      position: absolute;
      height: 0;
      top: 0;
      width: 100%;
   }

   .phone-flags input.gfield-choice-input,
   .phone-flags input.gfield-choice-input+label {
      height: 0px;
      top: 50px;
   }

   .phone-flags input.gfield-choice-input {
      overflow: hidden;
   }

   .phone-flags input.gfield-choice-input:checked {
      height: 0;
      overflow: visible;
   }

   .phone-flags input.gfield-choice-input:checked+label {
      height: 0;
      top: 8px;
   }

   .gform_wrapper.gravity-theme .phone-flags .gfield-choice-input+label img {
      top: 0;
      position: absolute;
      left: 0;
   }

   .gform_wrapper.gravity-theme .phone-flags .gfield-choice-input+label {
      line-height: 18px;
      display: inline-block;
      padding-left: 24px;
   }

   .phone-flags input.gfield-choice-input {
      appearance: none;
      width: 100%;
      background-color: #FBF9F6;
      position: absolute;
   }

   .phone-flags input.gfield-choice-input:hover,
   .gchoice label:hover {
      cursor: pointer;
   }

   .phone-flags input.gfield-choice-input:checked+label {
      color: black;
      z-index: 1;
   }

   .phone-flags .gchoice label {
      z-index: 3;
      position: absolute;
      padding: 0 0 0 10px;
      width: 100%;
      overflow: visible;
   }

   .phone-flags input.gfield-choice-input+label:after {
      width: 90px;
      height: 32px;
      color: transparent;
      content: '';
      background-image: url('/wp-content/uploads/2023/12/arrow-green-down.png');
      background-size: 12px 18px;
      background-repeat: no-repeat;
      background-position: 0% 14px;
      left: -18px;
      z-index: 4;
      top: -56px;
      position: absolute;
   }

   .phone-flags .gchoice:first-child input.gfield-choice-inpu+label:after {
      top: 10px;
      z-index: 4;
   }

   .phone-flags .gchoice:last-child input.gfield-choice-input+label:after {
      top: -55px;
      z-index: 4;
   }

   .phone-flags .gchoice:first-child input.gfield-choice-input:checked+label:after {
      top: 50px;
      z-index: 2;
      opacity: 0;
   }

   .phone-flags .gchoice:last-child input.gfield-choice-input:checked+label:after {
      top: 50px;
      z-index: 2;
      opacity: 0;
   }

   body header .language-switcher {
      width: 58px;
      margin-top: -16px;
   }

   body .language-switcher::after {
      left: unset;
      right: 7px;
      top: 10px;
   }

   html header .right-side .language-switcher li.wpml-ls-current-language {
      padding: 8px 24px 8px 16px;
   }

   @media all and (max-width: 700px) {
      body .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds {
         -ms-grid-column-span: 9;
         grid-column: span 9;
      }

      body .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third {
         -ms-grid-column-span: 3;
         grid-column: span 3;
      }
   }

   @media all and (max-width: 641px) {
      .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third {
         margin-right: -12px;
      }

      choice-input:checked+label:after {
         top: 63px;
      }

      .phone-flags .gchoice:last-child input.gfield-choice-input:checked+label:after {
         top: 63px;
      }

      .gform_wrapper.gravity-theme .gform_footer input:not([type=radio]):not([type=checkbox]):not([type=image]):not([type=file]) {
         line-height: 60px;
      }

      .popup-flex {
         flex-direction: column;
         padding: 38px 20px;
      }

      .popup-flex .pop-flex-item img {
         margin-left: 0;
      }

      .pum-theme-18200 .pum-title,
      .pum-theme-default-theme .pum-title {
         font-size: 22px;
         line-height: 26px;
      }

      html body .pum-container,
      .pum-theme-default-theme .pum-container.popmake {
         top: 50px !important;
      }
   }

   @media all and (max-width: 640px) {
      .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third {
         margin-right: 0;
      }
   }

   @media all and (max-width: 480px) {
      body .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds {
         -ms-grid-column-span: 8;
         grid-column: span 8;
      }

      body .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third {
         -ms-grid-column-span: 4;
         grid-column: span 4;
      }
   }

   @media all and (max-width: 400px) {
      body header .language-switcher {
         margin: -16px 0 0;
      }

      header .container {
         padding: 0 8px;
      }
   }

   @media all and (max-width: 370px) {
      html body .gform_wrapper.gravity-theme .gfield.gfield--width-third.two-thirds {
         -ms-grid-column-span: 7;
         grid-column: span 7;
      }

      html body .gform_wrapper.gravity-theme .gfield.gfield--width-third.one-third {
         -ms-grid-column-span: 5;
         grid-column: span 5;
      }

      .button.button-diagnostics-header {
         display: none;
      }
   }

   @media only screen and (max-width: 360px) {
      .page-diagnostic-registration .diagnostic-form {
         padding: 40px 7px;
      }
   }
   </style>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-192006525-1"></script>
   <script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());

   gtag('config', 'UA-192006525-1');
   </script>
   <script type="application/ld+json">
   {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Mathema",
      "description": "Онлайн репетитори математики — уроки з вчителем математики для дошкільнят та дітей 1-11 класів 📚 Підтягніть шкільну програму та підготуйтеся до ЗНО разом з найкращими вчителями на Матема!",
      "url": "https://www.mathema.me/tutors/",
      "openingHours": "Mo-Su",
      "telephone": "80734459025",
      "logo": {
         "@type": "ImageObject",
         "url": "https://www.mathema.me/wp-content/uploads/2023/11/mathema.me_.logo_.jpg",
         "caption": "Матема",
         "inLanguage": "uk-UA"
      },
      "currenciesAccepted": "UAH,EUR,PLN,GBP,USD",
      "paymentAccepted": "Credit Card, Debit Card",
      "foundingDate": "2021",
      "sameAs": "https://www.facebook.com/matema.school",
      "address": {
         "@type": "PostalAddress",
         "addressCountry": "UA"
      },
      "numberOfEmployees": {
         "@type": "QuantitativeValue",
         "value": "1509"
      },
      "email": "support@mathema.me",
      "review": {
         "@type": "Review",
         "reviewBody": "Доброго дня,так,почала набагато краще розуміти математику,викладач-супер!",
         "author": {
            "@type": "Person",
            "name": "Батьки Є."
         }
      },
      "brand": {
         "@type": "Organization",
         "name": "Матема",
         "url": "https://www.mathema.me/",
         "logo": {
            "@type": "ImageObject",
            "url": "https://www.mathema.me/wp-content/uploads/2023/11/mathema.me_.logo_.jpg",
            "caption": "Матема",
            "inLanguage": "uk-UA"
         }
      },
      "aggregateRating": {
         "@type": "AggregateRating",
         "ratingValue": "5",
         "reviewCount": 581,
         "bestRating": 5,
         "worstRating": 1
      },
      "priceRange": "260-390 грн./год."
   }
   </script>
   <?php wp_head(); ?>
   <script>
   function getCookie(name) {
      var cookieArr = document.cookie.split(";");
      for (var i = 0; i < cookieArr.length; i++) {
         var cookiePair = cookieArr[i].split("=");

         if (name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
         }
      }
      return null;
   }

   function setCookie(cname, cvalue, exdays) {
      const d = new Date();
      d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
      let expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
   }
   </script>
   <!-- Facebook Pixel Code -->
   <script>
   ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
         n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
   }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
   fbq('init', '1082093382282683');
   const queryString1 = window.location.search;
   const urlParams1 = new URLSearchParams(queryString1);
   if (urlParams1.get("utm_source") == "facebook") {
      if (getCookie("eventID") == null) {
         /*NOT GENERATED YET*/
         var d = new Date();
         var month = d.getMonth() + 1;
         var day = d.getDate();
         var output = Math.floor((Math.random() * 1000) + 1) + '-' + d.getFullYear() + '-' +
            (month < 10 ? '0' : '') + month + '-' +
            (day < 10 ? '0' : '') + day + '-' + d.getHours() + "-" + d.getMinutes() + "-" + d.getSeconds() + '-' + Math
            .floor((Math.random() * 1000) + 1); /*GENERATING*/
         setCookie("eventID", output, 30); /*SAVING TO COOKIE*/
      }
   }
   <?php if (is_page(array('1627', '1710', '53520', '53305', '4057', '62392', '92087', '109183', '113018', '113062', '113859', '113990', '115369', '117264', '117111', '120698', '120845', '128567', '130538', '130539', '131630', '131689'))){ ?>
   fbq('track', 'Lead', {}, {
      eventID: getCookie("eventID")
   });
   <?php } ?>
   /*fbq('track', 'PageView');*/
   fbq('track', 'PageView', {}, {
      eventID: getCookie("eventID")
   });
   </script>
   <noscript><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1082093382282683&ev=PageView&noscript=1" /></noscript>
   <!-- End Facebook Pixel Code -->


</head>

<body <?php body_class(); ?>>

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZJVMNQ" height="0" width="0"
         style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->

   <header>


      <?php define("ICL_LANGUAGE_CODE", "ru"); ?>



      <div class="container">
         <div class="row">
            <div class="left-side">
               <a href="<?php echo home_url('/'); ?>" class="logo">
                  <svg width="108" height="29" viewBox="0 0 108 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g clip-path="url(#clip0_1401_35)">
                        <path
                           d="M9 0.5C4.03783 0.5 0 4.28377 0 8.93445C0 10.9276 0.792611 12.8718 2.29215 14.5577C3.06763 15.4286 3.87375 16.5384 3.97117 18.1635L3.98201 18.3428C4.05375 19.5644 4.13861 20.9003 5.33187 21.5477V22.7872C5.20788 22.8303 5.10602 22.9323 5.08477 23.0703C5.05756 23.2459 5.16665 23.4055 5.33187 23.4623V24.5966C5.20788 24.6401 5.10602 24.7413 5.08477 24.8788C5.05756 25.0543 5.16665 25.2139 5.33187 25.2708V26.0329C5.33187 26.7795 5.94867 27.3868 6.70696 27.3868H7.02878L7.38509 28.2701C7.44097 28.4086 7.57714 28.5 7.72867 28.5H10.0335C10.1849 28.5 10.321 28.4086 10.377 28.2701L10.7333 27.3868H11.294C12.0515 27.3868 12.6682 26.7795 12.6682 26.0329V25.051C12.7275 25.0379 12.7845 25.0302 12.8441 25.0165C13.0424 24.9703 13.165 24.7749 13.1191 24.5787C13.0712 24.3843 12.8775 24.2644 12.6745 24.308C12.6724 24.3085 12.6704 24.3087 12.6682 24.3093V23.2435C12.7275 23.2304 12.7844 23.2227 12.844 23.2089C13.0424 23.1627 13.165 22.9675 13.119 22.7713C13.0711 22.5768 12.8774 22.4561 12.6744 22.5005C12.6724 22.501 12.6703 22.5012 12.6681 22.5017V21.4069C13.6217 20.7879 13.8752 19.718 13.9495 18.5871C14.045 17.1347 14.7466 15.6574 15.358 14.8997C16.7304 13.1973 18 11.2961 18 8.93458C18 4.28377 13.9621 0.5 9 0.5ZM9.78273 27.7721H7.97926L7.82323 27.3868H9.9387L9.78273 27.7721ZM11.9288 26.0328C11.9288 26.3782 11.6438 26.6587 11.294 26.6587H6.7069C6.35611 26.6587 6.0712 26.3781 6.0712 26.0328V25.3815C6.70246 25.4535 7.48683 25.5126 8.39043 25.5126C9.44154 25.5126 10.6486 25.4257 11.9288 25.1967V26.0328ZM11.9288 24.4552C9.53685 24.9018 7.40793 24.8078 6.07126 24.65V23.573C6.70284 23.645 7.48804 23.7042 8.39227 23.7042C9.44325 23.7042 10.6492 23.6172 11.9288 23.3888V24.4552ZM11.9288 22.6474C9.53631 23.0931 7.4078 23.0006 6.07126 22.8421V21.82C6.40558 21.8984 6.78878 21.9455 7.24442 21.9455C7.24804 21.9455 7.25077 21.9455 7.25432 21.9455C10.0515 21.9411 10.7313 21.9455 10.7331 21.9455C10.7412 21.9463 10.7448 21.9446 10.7521 21.9446C11.2152 21.9239 11.5904 21.8444 11.9288 21.7407V22.6474ZM11.0108 6.89564C11.0839 6.98356 11.1902 7.02883 11.2966 7.02883C11.3796 7.02883 11.4626 7.00173 11.5311 6.94628C11.8072 6.72373 12.2026 6.54357 12.6979 6.4052L12.7024 6.40744C13.2262 6.5171 13.5815 6.72747 13.7574 7.03376C14.0143 7.48031 13.8305 8.02052 13.8286 8.02407C13.7835 8.14928 13.8106 8.28909 13.9007 8.3885C14.6437 9.21014 14.0035 9.8551 13.8691 9.97455C13.7546 10.0744 13.714 10.2337 13.7672 10.3753C14.3894 12.0081 13.2992 12.5327 13.1756 12.586C13.0837 12.6236 13.0115 12.696 12.9746 12.787C12.5581 13.8177 11.659 14.0619 11.3948 14.112L11.2054 14.1511C10.2523 14.3611 9.63009 14.0025 9.40014 13.8293L9.38547 10.5063C9.57537 10.0592 9.96318 9.97667 9.98811 9.9718C10.1874 9.9399 10.3244 9.75612 10.2937 9.55906C10.2631 9.36013 10.0747 9.22832 9.87363 9.25361C9.85608 9.25611 9.63702 9.29301 9.38088 9.44306L9.3708 7.15203C9.37512 7.14336 9.38475 7.13961 9.38844 7.13049C9.5553 6.71411 9.82764 6.39939 10.1974 6.19476C10.3749 6.09623 10.4381 5.87473 10.338 5.69938C10.2379 5.52404 10.0125 5.46234 9.83484 5.56089C9.69192 5.64006 9.52848 5.76014 9.36531 5.90827L9.35604 3.80214C9.85914 3.63566 11.1261 3.37201 11.8709 4.57538C11.9187 4.65176 11.99 4.70502 12.0693 4.73119C12.0883 4.73787 12.1081 4.74273 12.1288 4.74629C12.2667 4.76984 12.3912 4.8231 12.4985 4.9039C12.6626 5.02729 12.695 5.14226 12.7041 5.21819C12.7247 5.38055 12.6517 5.55601 12.5809 5.68209C11.9467 5.85031 11.433 6.08442 11.0621 6.38434C10.9044 6.51123 10.8819 6.74071 11.0108 6.89564ZM14.7791 14.4471C14.0757 15.319 13.3183 16.9224 13.2118 18.54C13.1027 20.2072 12.6744 21.1278 10.7276 21.2175C10.6688 21.218 10.3281 21.2171 9.40923 21.217L9.4086 18.5762L11.2667 17.6415V17.9575C11.2667 18.1581 11.4327 18.3215 11.6365 18.3215C11.8402 18.3215 12.0062 18.1581 12.0062 17.9575V17.0471C12.0062 16.9205 11.9386 16.8029 11.8294 16.7367C11.7184 16.6711 11.5814 16.6662 11.4687 16.723L9.40833 17.7589L9.40752 14.6726C9.71442 14.817 10.1213 14.9435 10.6329 14.9435C10.8582 14.9435 11.1035 14.9186 11.3668 14.861L11.5328 14.8263C11.8808 14.7606 13.0315 14.4503 13.6076 13.1808C14.0188 12.9429 15.1099 12.1199 14.5345 10.3345C14.7104 10.1232 14.9584 9.74549 14.9881 9.2616C15.0133 8.84347 14.8772 8.43952 14.5814 8.05866C14.6445 7.7635 14.7005 7.20549 14.4047 6.68395C14.1855 6.29773 13.8249 6.01143 13.3298 5.8299C13.4101 5.63457 13.4696 5.39222 13.438 5.13388C13.3993 4.81829 13.2297 4.53904 12.9466 4.32598C12.7897 4.2079 12.6094 4.11954 12.4164 4.06584C11.4429 2.65184 9.83754 2.82843 8.9837 3.1652C8.13046 2.83287 6.53242 2.67695 5.55874 4.08294C5.36378 4.13609 5.17641 4.2147 5.01691 4.33441C4.73467 4.54704 4.56425 4.82622 4.52639 5.14188C4.4948 5.40021 4.55435 5.64262 4.63459 5.83789C4.13861 6.01991 3.77798 6.30573 3.55973 6.69194C3.26399 7.21355 3.31987 7.77105 3.38297 8.06622C3.08723 8.44707 2.95105 8.85103 2.9763 9.26916C3.00604 9.75293 3.25403 10.1308 3.42985 10.3421C2.85547 12.1261 3.94561 12.9495 4.35679 13.1875C4.93211 14.4565 6.08357 14.7668 6.43164 14.8325L6.59668 14.8667C6.85905 14.9248 7.10527 14.9492 7.3343 14.9492C7.88957 14.949 8.33823 14.8054 8.6681 14.6496L8.66886 17.7427L6.25589 16.7657C6.14047 16.7191 6.0088 16.7328 5.9051 16.8029C5.80228 16.8731 5.74279 16.9899 5.74641 17.1128L5.77438 18.0508C5.77977 18.2479 5.94391 18.4041 6.14319 18.4041C6.1468 18.4041 6.15042 18.4041 6.15404 18.4032C6.35782 18.3979 6.51834 18.2302 6.512 18.0295L6.50116 17.6513L8.66905 18.5296L8.66975 21.217C8.26866 21.217 7.81054 21.2171 7.25229 21.2176C7.24956 21.2176 7.2469 21.2176 7.24328 21.2176C6.63999 21.2176 6.18866 21.1401 5.84668 20.9968L5.84415 20.9956C4.85562 20.5799 4.79575 19.6053 4.71938 18.3003L4.70854 18.1209C4.59672 16.2654 3.65531 14.9857 2.84742 14.0783C1.46782 12.5274 0.739207 10.7487 0.739207 8.93451C0.739207 4.68467 4.44438 1.22717 8.99981 1.22717C13.5553 1.22717 17.2604 4.68467 17.2604 8.93451C17.2606 11.0731 16.0685 12.8483 14.7791 14.4471ZM4.09738 9.98385C3.96121 9.86263 3.32101 9.2177 4.06402 8.39599C4.15238 8.29745 4.18034 8.15808 4.13614 8.03375C4.13436 8.02801 3.95037 7.48824 4.20736 7.04163C4.38317 6.73534 4.73847 6.52497 5.26235 6.41531C5.27028 6.41369 5.27561 6.40707 5.28335 6.40494C5.79892 6.54669 6.2049 6.73147 6.47966 6.96089C6.5491 7.01903 6.63384 7.04744 6.71863 7.04744C6.82322 7.04744 6.92692 7.00391 6.99998 6.91962C7.13254 6.7665 7.11358 6.53695 6.95762 6.40695C6.58209 6.09235 6.0466 5.84813 5.37556 5.67547C5.30701 5.55001 5.23978 5.38242 5.25969 5.22618C5.26959 5.15075 5.30117 5.03623 5.46531 4.91233C5.57536 4.83066 5.70068 4.77739 5.83951 4.75429C5.87344 4.74867 5.90224 4.73312 5.93193 4.71945C5.94201 4.71488 5.95241 4.71357 5.96205 4.70808C6.01304 4.67892 6.05459 4.63914 6.08598 4.59118C6.08801 4.58806 6.09181 4.587 6.09378 4.58387C6.84041 3.37714 8.11264 3.63996 8.61698 3.80444L8.62592 5.83389C8.5018 5.72518 8.37026 5.62514 8.22547 5.54228C8.04965 5.44193 7.82329 5.50056 7.72048 5.67453C7.61767 5.84806 7.67812 6.07049 7.85393 6.17171C8.20732 6.37323 8.46673 6.67989 8.63138 7.07873L8.64172 9.4171C8.38903 9.27084 8.17429 9.23531 8.15691 9.23281C7.96302 9.20396 7.7737 9.33759 7.74033 9.53283C7.70697 9.7291 7.84315 9.91553 8.04154 9.95098C8.05847 9.95408 8.45544 10.0334 8.64647 10.4894L8.66112 13.8189C8.40458 13.9993 7.73032 14.3732 6.75841 14.1569L6.57085 14.1188C6.30574 14.0682 5.40582 13.8239 4.99014 12.7937C4.95405 12.7049 4.88105 12.6321 4.79175 12.594C4.66554 12.5394 3.57534 12.0146 4.19753 10.383C4.25068 10.243 4.2092 10.0837 4.09738 9.98385Z"
                           fill="#112136" />
                        <path
                           d="M5.95399 10.1952C5.9621 10.1961 5.97022 10.1961 5.97834 10.1961C6.17127 10.1961 6.33364 10.0487 6.34715 9.85696C6.36066 9.65635 6.20647 9.48321 6.00269 9.46982C5.51217 9.43748 5.29393 8.99978 5.28493 8.98111C5.20019 8.80046 4.98106 8.72234 4.79706 8.80357C4.61129 8.887 4.52922 9.10231 4.61402 9.28521C4.63026 9.31981 5.01619 10.1334 5.95399 10.1952Z"
                           fill="#112136" />
                        <path
                           d="M12.8747 9.64687C12.8837 9.64775 12.8918 9.64775 12.9 9.64775C13.0928 9.64775 13.2552 9.50084 13.2688 9.30861C13.2823 9.10841 13.1281 8.93488 12.9252 8.92151C12.4374 8.8891 12.2191 8.45761 12.2065 8.43319C12.1218 8.25254 11.9036 8.17349 11.7186 8.25517C11.5329 8.33859 11.4508 8.55434 11.5357 8.7368C11.5519 8.77152 11.9378 9.58475 12.8747 9.64687Z"
                           fill="#112136" />
                        <path
                           d="M11.174 13.0973C11.193 13.0973 11.2128 13.096 11.2326 13.0929C11.4347 13.0609 11.5708 12.874 11.5384 12.6757C11.5033 12.4599 12.0884 12.1612 12.5077 12.0502C12.7043 11.9982 12.8216 11.7989 12.7684 11.6054C12.717 11.4109 12.5122 11.2978 12.3175 11.3475C12.1461 11.3923 10.6493 11.8131 10.8098 12.7919C10.8386 12.9704 10.9956 13.0973 11.174 13.0973Z"
                           fill="#112136" />
                        <path
                           d="M5.82594 11.69C5.77273 11.8836 5.88994 12.0829 6.08656 12.1349C6.50224 12.245 7.08384 12.5415 7.04958 12.7555C7.01711 12.9534 7.15417 13.1403 7.35529 13.1723C7.37514 13.1754 7.39499 13.1767 7.41479 13.1767C7.59243 13.1767 7.74934 13.0498 7.7782 12.8709C7.93777 11.8961 6.44725 11.477 6.27682 11.4322C6.08205 11.3825 5.87738 11.4957 5.82594 11.69Z"
                           fill="#112136" />
                        <path
                           d="M23.358 18.5C23.2647 18.5 23.1853 18.472 23.12 18.416C23.064 18.3507 23.036 18.2713 23.036 18.178V11.542C23.036 11.4487 23.064 11.374 23.12 11.318C23.1853 11.2527 23.2647 11.22 23.358 11.22H23.988C24.0813 11.22 24.156 11.2527 24.212 11.318C24.2773 11.374 24.31 11.4487 24.31 11.542V12.032C24.7953 11.3973 25.472 11.08 26.34 11.08C27.376 11.08 28.1087 11.5093 28.538 12.368C28.762 11.976 29.0793 11.6633 29.49 11.43C29.9007 11.1967 30.3627 11.08 30.876 11.08C31.6413 11.08 32.2667 11.3413 32.752 11.864C33.2373 12.3867 33.48 13.1427 33.48 14.132V18.178C33.48 18.2713 33.4473 18.3507 33.382 18.416C33.326 18.472 33.2513 18.5 33.158 18.5H32.5C32.4067 18.5 32.3273 18.472 32.262 18.416C32.206 18.3507 32.178 18.2713 32.178 18.178V14.258C32.178 13.53 32.024 13.0073 31.716 12.69C31.4173 12.3727 31.0207 12.214 30.526 12.214C30.0873 12.214 29.7093 12.3773 29.392 12.704C29.0747 13.0213 28.916 13.5393 28.916 14.258V18.178C28.916 18.2713 28.8833 18.3507 28.818 18.416C28.762 18.472 28.6873 18.5 28.594 18.5H27.936C27.8427 18.5 27.7633 18.472 27.698 18.416C27.642 18.3507 27.614 18.2713 27.614 18.178V14.258C27.614 13.53 27.4553 13.0073 27.138 12.69C26.83 12.3727 26.438 12.214 25.962 12.214C25.5233 12.214 25.1453 12.3773 24.828 12.704C24.5107 13.0213 24.352 13.5347 24.352 14.244V18.178C24.352 18.2713 24.3193 18.3507 24.254 18.416C24.198 18.472 24.1233 18.5 24.03 18.5H23.358ZM37.5074 18.64C37.0501 18.64 36.6254 18.5467 36.2334 18.36C35.8414 18.1733 35.5287 17.9213 35.2954 17.604C35.0714 17.2773 34.9594 16.918 34.9594 16.526C34.9594 15.91 35.2114 15.406 35.7154 15.014C36.2287 14.6127 36.9194 14.3513 37.7874 14.23L39.8734 13.936V13.53C39.8734 12.578 39.3274 12.102 38.2354 12.102C37.8247 12.102 37.4887 12.1907 37.2274 12.368C36.9661 12.536 36.7701 12.7367 36.6394 12.97C36.6114 13.054 36.5741 13.1147 36.5274 13.152C36.4901 13.1893 36.4341 13.208 36.3594 13.208H35.7574C35.6734 13.208 35.5987 13.18 35.5334 13.124C35.4774 13.0587 35.4494 12.984 35.4494 12.9C35.4587 12.676 35.5614 12.424 35.7574 12.144C35.9627 11.8547 36.2754 11.6073 36.6954 11.402C37.1154 11.1873 37.6334 11.08 38.2494 11.08C39.2947 11.08 40.0461 11.3273 40.5034 11.822C40.9607 12.3073 41.1894 12.914 41.1894 13.642V18.178C41.1894 18.2713 41.1567 18.3507 41.0914 18.416C41.0354 18.472 40.9607 18.5 40.8674 18.5H40.2234C40.1301 18.5 40.0507 18.472 39.9854 18.416C39.9294 18.3507 39.9014 18.2713 39.9014 18.178V17.576C39.6961 17.8747 39.3974 18.1267 39.0054 18.332C38.6134 18.5373 38.1141 18.64 37.5074 18.64ZM37.8014 17.59C38.4081 17.59 38.9027 17.394 39.2854 17.002C39.6774 16.6007 39.8734 16.0267 39.8734 15.28V14.888L38.2494 15.126C37.5867 15.2193 37.0874 15.378 36.7514 15.602C36.4154 15.8167 36.2474 16.092 36.2474 16.428C36.2474 16.8013 36.4014 17.0907 36.7094 17.296C37.0174 17.492 37.3814 17.59 37.8014 17.59ZM45.9757 18.5C44.501 18.5 43.7637 17.6787 43.7637 16.036V12.34H42.6717C42.5783 12.34 42.499 12.312 42.4337 12.256C42.3777 12.1907 42.3497 12.1113 42.3497 12.018V11.542C42.3497 11.4487 42.3777 11.374 42.4337 11.318C42.499 11.2527 42.5783 11.22 42.6717 11.22H43.7637V8.882C43.7637 8.78867 43.7917 8.714 43.8477 8.658C43.913 8.59267 43.9923 8.56 44.0857 8.56H44.7437C44.837 8.56 44.9117 8.59267 44.9677 8.658C45.033 8.714 45.0657 8.78867 45.0657 8.882V11.22H46.8017C46.895 11.22 46.9697 11.2527 47.0257 11.318C47.091 11.374 47.1237 11.4487 47.1237 11.542V12.018C47.1237 12.1113 47.091 12.1907 47.0257 12.256C46.9697 12.312 46.895 12.34 46.8017 12.34H45.0657V15.938C45.0657 16.4047 45.145 16.7593 45.3037 17.002C45.4623 17.2353 45.7237 17.352 46.0877 17.352H46.9417C47.035 17.352 47.1097 17.3847 47.1657 17.45C47.231 17.506 47.2637 17.5807 47.2637 17.674V18.178C47.2637 18.2713 47.231 18.3507 47.1657 18.416C47.1097 18.472 47.035 18.5 46.9417 18.5H45.9757ZM48.9384 18.5C48.8451 18.5 48.7657 18.472 48.7004 18.416C48.6444 18.3507 48.6164 18.2713 48.6164 18.178V8.882C48.6164 8.78867 48.6444 8.714 48.7004 8.658C48.7657 8.59267 48.8451 8.56 48.9384 8.56H49.6384C49.7317 8.56 49.8064 8.59267 49.8624 8.658C49.9277 8.714 49.9604 8.78867 49.9604 8.882V12.144C50.2311 11.7987 50.5484 11.5373 50.9124 11.36C51.2764 11.1733 51.7291 11.08 52.2704 11.08C53.1664 11.08 53.8617 11.3693 54.3564 11.948C54.8604 12.5173 55.1124 13.278 55.1124 14.23V18.178C55.1124 18.2713 55.0797 18.3507 55.0144 18.416C54.9584 18.472 54.8837 18.5 54.7904 18.5H54.0904C53.9971 18.5 53.9177 18.472 53.8524 18.416C53.7964 18.3507 53.7684 18.2713 53.7684 18.178V14.3C53.7684 13.6373 53.6051 13.124 53.2784 12.76C52.9611 12.396 52.4991 12.214 51.8924 12.214C51.3044 12.214 50.8331 12.4007 50.4784 12.774C50.1331 13.138 49.9604 13.6467 49.9604 14.3V18.178C49.9604 18.2713 49.9277 18.3507 49.8624 18.416C49.8064 18.472 49.7317 18.5 49.6384 18.5H48.9384ZM60.0457 18.64C59.0843 18.64 58.3143 18.346 57.7357 17.758C57.1663 17.1607 56.8537 16.3487 56.7977 15.322L56.7837 14.846L56.7977 14.384C56.863 13.376 57.1803 12.5733 57.7497 11.976C58.3283 11.3787 59.089 11.08 60.0317 11.08C61.0677 11.08 61.8703 11.4113 62.4397 12.074C63.009 12.7273 63.2937 13.614 63.2937 14.734V14.972C63.2937 15.0653 63.261 15.1447 63.1957 15.21C63.1397 15.266 63.065 15.294 62.9717 15.294H58.1277V15.42C58.1557 16.0267 58.3377 16.5447 58.6737 16.974C59.019 17.394 59.4717 17.604 60.0317 17.604C60.461 17.604 60.811 17.52 61.0817 17.352C61.3617 17.1747 61.567 16.9927 61.6977 16.806C61.7817 16.694 61.8423 16.6287 61.8797 16.61C61.9263 16.582 62.0057 16.568 62.1177 16.568H62.8037C62.8877 16.568 62.9577 16.5913 63.0137 16.638C63.0697 16.6847 63.0977 16.75 63.0977 16.834C63.0977 17.0393 62.967 17.2867 62.7057 17.576C62.4537 17.8653 62.0943 18.1173 61.6277 18.332C61.1703 18.5373 60.643 18.64 60.0457 18.64ZM61.9637 14.328V14.286C61.9637 13.642 61.7863 13.1193 61.4317 12.718C61.0863 12.3073 60.6197 12.102 60.0317 12.102C59.4437 12.102 58.977 12.3073 58.6317 12.718C58.2957 13.1193 58.1277 13.642 58.1277 14.286V14.328H61.9637ZM65.2896 18.5C65.1963 18.5 65.117 18.472 65.0516 18.416C64.9956 18.3507 64.9676 18.2713 64.9676 18.178V11.542C64.9676 11.4487 64.9956 11.374 65.0516 11.318C65.117 11.2527 65.1963 11.22 65.2896 11.22H65.9196C66.013 11.22 66.0876 11.2527 66.1436 11.318C66.209 11.374 66.2416 11.4487 66.2416 11.542V12.032C66.727 11.3973 67.4036 11.08 68.2716 11.08C69.3076 11.08 70.0403 11.5093 70.4696 12.368C70.6936 11.976 71.011 11.6633 71.4216 11.43C71.8323 11.1967 72.2943 11.08 72.8076 11.08C73.573 11.08 74.1983 11.3413 74.6836 11.864C75.169 12.3867 75.4116 13.1427 75.4116 14.132V18.178C75.4116 18.2713 75.379 18.3507 75.3136 18.416C75.2576 18.472 75.183 18.5 75.0896 18.5H74.4316C74.3383 18.5 74.259 18.472 74.1936 18.416C74.1376 18.3507 74.1096 18.2713 74.1096 18.178V14.258C74.1096 13.53 73.9556 13.0073 73.6476 12.69C73.349 12.3727 72.9523 12.214 72.4576 12.214C72.019 12.214 71.641 12.3773 71.3236 12.704C71.0063 13.0213 70.8476 13.5393 70.8476 14.258V18.178C70.8476 18.2713 70.815 18.3507 70.7496 18.416C70.6936 18.472 70.619 18.5 70.5256 18.5H69.8676C69.7743 18.5 69.695 18.472 69.6296 18.416C69.5736 18.3507 69.5456 18.2713 69.5456 18.178V14.258C69.5456 13.53 69.387 13.0073 69.0696 12.69C68.7616 12.3727 68.3696 12.214 67.8936 12.214C67.455 12.214 67.077 12.3773 66.7596 12.704C66.4423 13.0213 66.2836 13.5347 66.2836 14.244V18.178C66.2836 18.2713 66.251 18.3507 66.1856 18.416C66.1296 18.472 66.055 18.5 65.9616 18.5H65.2896ZM79.439 18.64C78.9817 18.64 78.557 18.5467 78.165 18.36C77.773 18.1733 77.4604 17.9213 77.227 17.604C77.003 17.2773 76.891 16.918 76.891 16.526C76.891 15.91 77.143 15.406 77.647 15.014C78.1604 14.6127 78.851 14.3513 79.719 14.23L81.805 13.936V13.53C81.805 12.578 81.259 12.102 80.167 12.102C79.7564 12.102 79.4204 12.1907 79.159 12.368C78.8977 12.536 78.7017 12.7367 78.571 12.97C78.543 13.054 78.5057 13.1147 78.459 13.152C78.4217 13.1893 78.3657 13.208 78.291 13.208H77.689C77.605 13.208 77.5304 13.18 77.465 13.124C77.409 13.0587 77.381 12.984 77.381 12.9C77.3904 12.676 77.493 12.424 77.689 12.144C77.8944 11.8547 78.207 11.6073 78.627 11.402C79.047 11.1873 79.565 11.08 80.181 11.08C81.2264 11.08 81.9777 11.3273 82.435 11.822C82.8924 12.3073 83.121 12.914 83.121 13.642V18.178C83.121 18.2713 83.0884 18.3507 83.023 18.416C82.967 18.472 82.8924 18.5 82.799 18.5H82.155C82.0617 18.5 81.9824 18.472 81.917 18.416C81.861 18.3507 81.833 18.2713 81.833 18.178V17.576C81.6277 17.8747 81.329 18.1267 80.937 18.332C80.545 18.5373 80.0457 18.64 79.439 18.64ZM79.733 17.59C80.3397 17.59 80.8344 17.394 81.217 17.002C81.609 16.6007 81.805 16.0267 81.805 15.28V14.888L80.181 15.126C79.5184 15.2193 79.019 15.378 78.683 15.602C78.347 15.8167 78.179 16.092 78.179 16.428C78.179 16.8013 78.333 17.0907 78.641 17.296C78.949 17.492 79.313 17.59 79.733 17.59ZM85.3577 18.5C85.2643 18.5 85.185 18.472 85.1197 18.416C85.0637 18.3507 85.0357 18.2713 85.0357 18.178V17.17C85.0357 17.0767 85.0637 17.002 85.1197 16.946C85.185 16.8807 85.2643 16.848 85.3577 16.848H86.3657C86.459 16.848 86.5383 16.8807 86.6037 16.946C86.669 17.002 86.7017 17.0767 86.7017 17.17V18.178C86.7017 18.2713 86.669 18.3507 86.6037 18.416C86.5383 18.472 86.459 18.5 86.3657 18.5H85.3577ZM88.983 18.5C88.8897 18.5 88.8103 18.472 88.745 18.416C88.689 18.3507 88.661 18.2713 88.661 18.178V11.542C88.661 11.4487 88.689 11.374 88.745 11.318C88.8103 11.2527 88.8897 11.22 88.983 11.22H89.613C89.7063 11.22 89.781 11.2527 89.837 11.318C89.9023 11.374 89.935 11.4487 89.935 11.542V12.032C90.4203 11.3973 91.097 11.08 91.965 11.08C93.001 11.08 93.7337 11.5093 94.163 12.368C94.387 11.976 94.7043 11.6633 95.115 11.43C95.5257 11.1967 95.9877 11.08 96.501 11.08C97.2663 11.08 97.8917 11.3413 98.377 11.864C98.8623 12.3867 99.105 13.1427 99.105 14.132V18.178C99.105 18.2713 99.0723 18.3507 99.007 18.416C98.951 18.472 98.8763 18.5 98.783 18.5H98.125C98.0317 18.5 97.9523 18.472 97.887 18.416C97.831 18.3507 97.803 18.2713 97.803 18.178V14.258C97.803 13.53 97.649 13.0073 97.341 12.69C97.0423 12.3727 96.6457 12.214 96.151 12.214C95.7123 12.214 95.3343 12.3773 95.017 12.704C94.6997 13.0213 94.541 13.5393 94.541 14.258V18.178C94.541 18.2713 94.5083 18.3507 94.443 18.416C94.387 18.472 94.3123 18.5 94.219 18.5H93.561C93.4677 18.5 93.3883 18.472 93.323 18.416C93.267 18.3507 93.239 18.2713 93.239 18.178V14.258C93.239 13.53 93.0803 13.0073 92.763 12.69C92.455 12.3727 92.063 12.214 91.587 12.214C91.1483 12.214 90.7703 12.3773 90.453 12.704C90.1357 13.0213 89.977 13.5347 89.977 14.244V18.178C89.977 18.2713 89.9443 18.3507 89.879 18.416C89.823 18.472 89.7483 18.5 89.655 18.5H88.983ZM104.014 18.64C103.053 18.64 102.283 18.346 101.704 17.758C101.135 17.1607 100.822 16.3487 100.766 15.322L100.752 14.846L100.766 14.384C100.832 13.376 101.149 12.5733 101.718 11.976C102.297 11.3787 103.058 11.08 104 11.08C105.036 11.08 105.839 11.4113 106.408 12.074C106.978 12.7273 107.262 13.614 107.262 14.734V14.972C107.262 15.0653 107.23 15.1447 107.164 15.21C107.108 15.266 107.034 15.294 106.94 15.294H102.096V15.42C102.124 16.0267 102.306 16.5447 102.642 16.974C102.988 17.394 103.44 17.604 104 17.604C104.43 17.604 104.78 17.52 105.05 17.352C105.33 17.1747 105.536 16.9927 105.666 16.806C105.75 16.694 105.811 16.6287 105.848 16.61C105.895 16.582 105.974 16.568 106.086 16.568H106.772C106.856 16.568 106.926 16.5913 106.982 16.638C107.038 16.6847 107.066 16.75 107.066 16.834C107.066 17.0393 106.936 17.2867 106.674 17.576C106.422 17.8653 106.063 18.1173 105.596 18.332C105.139 18.5373 104.612 18.64 104.014 18.64ZM105.932 14.328V14.286C105.932 13.642 105.755 13.1193 105.4 12.718C105.055 12.3073 104.588 12.102 104 12.102C103.412 12.102 102.946 12.3073 102.6 12.718C102.264 13.1193 102.096 13.642 102.096 14.286V14.328H105.932Z"
                           fill="#112136" />
                     </g>
                     <defs>
                        <clipPath id="clip0_1401_35">
                           <rect width="108" height="29" fill="white" />
                        </clipPath>
                     </defs>
                  </svg>
               </a>

               <div class="navigation desktop-show">
                  <?php wp_nav_menu(
                            array(
                                'menu' => 'navigation',
                            )
                        ); ?>
               </div>
            </div>

            <div class="right-side">
               <?php if (!is_page(array('2769', '2775'))): ?>
               <?php
                        // Default phone and text
                        $phone = '+380734459025';
                        $button_link = '#';
                        $button_text = 'Підбір репетитора';

                        switch (ICL_LANGUAGE_CODE) {
                            case 'ru':
                                $phone = '+380734459025';
                                break;
                            case 'pl':
                                $phone = '+48799355950';
                                $button_link = get_page_link(1705);
                                $button_text = 'Diagnostyka';
                                break;
                            case 'gb':
							 $phone = '+447418379952';
							 $button_text = 'Test lesson';
							  break;
                            case 'en':
                                $phone = '+442037693576';
                                $button_link = get_page_link(11079);
                                $button_text = 'Test lesson';
                                break;
                            case 'de':
                                $phone = '+490000000000';
                                $button_link = get_page_link(YOUR_DE_PAGE_ID);
                                $button_text = 'Lektion buchen';
                                break;
                            case 'fr':
                                $phone = '+330000000000';
                                $button_link = get_page_link(YOUR_FR_PAGE_ID);
                                $button_text = 'Réservez une leçon';
                                break;
                            case 'es':
                                $phone = '+34000000000';
                                $button_link = get_page_link(YOUR_ES_PAGE_ID);
                                $button_text = 'Reserva una lección';
                                break;
                            case 'it':
                                $phone = '+390000000000';
                                $button_link = get_page_link(YOUR_IT_PAGE_ID);
                                $button_text = 'Prenota una lezione';
                                break;
                            case 'pt':
                                $phone = '+351000000000';
                                $button_link = get_page_link(YOUR_PT_PAGE_ID);
                                $button_text = 'Marque uma lição';
                                break;
                            case 'nl':
                                $phone = '+310000000000';
                                $button_link = get_page_link(YOUR_NL_PAGE_ID);
                                $button_text = 'Boek een les';
                                break;
                            case 'cs':
                                $phone = '+420000000000';
                                $button_link = get_page_link(YOUR_CS_PAGE_ID);
                                $button_text = 'Zarezervujte si lekci';
                                break;
                            case 'hu':
                                $phone = '+36000000000';
                                $button_link = get_page_link(YOUR_HU_PAGE_ID);
                                $button_text = 'Foglaljon egy órát';
                                break;
                            case 'ro':
                                $phone = '+40000000000';
                                $button_link = get_page_link(YOUR_RO_PAGE_ID);
                                $button_text = 'Rezervați o lecție';
                                break;
                            case 'tr':
                                $phone = '+902169222792';
                                $button_text = 'Bir ders ayır';
                                break;
                            default:
                                break;
                        }
                        ?>

               <a href="tel:<?php echo $phone; ?>" class="phone">
                  <?php echo $phone; ?>
               </a>
               <?php if ((ICL_LANGUAGE_CODE == 'gb') || (ICL_LANGUAGE_CODE == 'en')|| (ICL_LANGUAGE_CODE == 'tr') || (ICL_LANGUAGE_CODE == 'uk')) { ?>
               <span class="button main-menu-popup light-effect">
                  <?php echo $button_text; ?>
               </span>
               <?php } else if ($button_link != '#') { ?>
               <a href="<?php echo $button_link; ?>" class="button light-effect">
                  <?php echo $button_text; ?>
               </a>
               <?php } else { ?>
               <span class="button main-menu-popup light-effect">
                  <?php echo $button_text; ?>
               </span>
               <?php } ?>
               <?php else: ?>
               <span class="button main-menu-popup light-effect blue-button">
                  Підбір репетитора
               </span>
               <?php endif; ?>

               <div class="language-switcher">
                  <?php echo do_shortcode('[wpml_language_switcher flags=0 native=0 translated=1]'); ?>
               </div>
               <script>
               jQuery(document).ready(function($) {
                  $(".menu-trigger.mobile-show").click(function() {
                     $(".mobile-menu.mobile-show").toggleClass("visible");
                  });
               });
               </script>
               <div class="menu-trigger mobile-show">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
            </div><!-- right side -->

         </div>
      </div>
   </header>

   <div class="mobile-menu mobile-show">
      <?php wp_nav_menu(
            array(
                'menu' => 'navigation'
            )
        ); ?>
   </div>