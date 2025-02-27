<?php
/*
Template Name: Home Page Template
*/
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home - Beckn protocol</title>
	<meta name="description" content="Beckn Protocol (or Beckn in short) enables the creation of open, peer-to-peer decentralized networks for pan-sector economic transactions.The protocol can be">
	<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Home - Beckn protocol"/>
<meta property="og:description" content="Beckn Protocol (or Beckn in short) enables the creation of open, peer-to-peer decentralized networks for pan-sector economic transactions.The protocol can be"/>
<meta property="og:url" content="https://becknprotocol.io/"/>
<meta property="og:site_name" content="Beckn protocol"/>
	<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="Home - Beckn protocol"/>
<meta name="twitter:description" content="Beckn Protocol (or Beckn in short) enables the creation of open, peer-to-peer decentralized networks for pan-sector economic transactions.The protocol can be"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-utilities.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/css/home-page.css">
</head>
<body>
  <div class="bn-app">
    <header id="header" class="bn-header">
      <div class="bn-header__inner">
        <a href="/" class="bn-header__brand">
          <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/global/logo/beckn.svg" alt="Beckn">
        </a>
        <a href="/" class="bn-header__brand-simple">
          <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/global/logo/beckn-short.svg" alt="Beckn">
        </a>
    
        <div class="bn-header__nav-aside">
          <a class="bn-header__nav-link" href="https://github.com/beckn">
            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/github-logo.svg" alt="">
          </a>
          <a class="bn-header__nav-link" href="https://discord.com/invite/pbayfsrMR9?utm_source=website&amp;utm_medium=BOCCTAButton&amp;utm_campaign=BecknProtocol">
            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/discord-logo.svg" alt="">
          </a>
        </div>

        <div class="bn-header__mobile-menu ">
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 5.5H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1 11.5H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1 17.5H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>

      <nav class="bn-header__nav">
        <ul class="bn-header__nav-list">
          <li class="bn-header__nav-item">
            <a class="bn-header__nav-link" href="#">Developers</a>
            <div class="bn-header__dropmenu">
              <ul class="bn-header__dropmenu-list">
                <li class="bn-header__dropmenu-item">
                  <a href="<?php echo site_url(); ?>/resources/" class="bn-header__dropmenu-link">Concept papers</a>
                </li>
                <li class="bn-header__dropmenu-item">
                  <a href="<?php echo site_url(); ?>/governance/" class="bn-header__dropmenu-link">Governance</a>
                </li>
                <li class="bn-header__dropmenu-item">
                  <a href="<?php echo site_url(); ?>/projects/" class="bn-header__dropmenu-link">Projects</a>
                </li>
                <li class="bn-header__dropmenu-item">
                  <a href="<?php echo site_url(); ?>/faqs/" class="bn-header__dropmenu-link">FAQ</a>
                </li>
                <li class="bn-header__dropmenu-item">
                  <a href="https://github.com/beckn" class="bn-header__dropmenu-link">Github</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bn-header__nav-item">
            <a class="bn-header__nav-link" href="<?php echo site_url(); ?>/community/">Community</a>

            <div class="bn-header__dropmenu">
              <ul class="bn-header__dropmenu-list">
                <li class="bn-header__dropmenu-item">
                  <a href="<?php echo site_url(); ?>/community/" class="bn-header__dropmenu-link">Beckn Open Collective</a>
                </li>
                <li class="bn-header__dropmenu-item">
                  <a href="<?php echo site_url(); ?>/events/" class="bn-header__dropmenu-link">Events</a>
                </li>
                <li class="bn-header__dropmenu-item">
                  <a href="https://bit.ly/bocWebInvite " class="bn-header__dropmenu-link">Discord</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bn-header__nav-item">
            <a class="bn-header__nav-link" href="<?php echo site_url(); ?>/beckn-onix/">Beckn ONIX</a>
          </li>
          <li class="bn-header__nav-item">
            <a class="bn-header__nav-link" href="<?php echo site_url(); ?>/all-projects/">Live Networks</a>
          </li>
			<li class="bn-header__nav-item">
            <a class="bn-header__nav-link" href="https://energy.becknprotocol.io/">Digital Energy Grid</a>
          </li>
<!--           <li class="bn-header__nav-item">
            <a class="bn-header__nav-link" href="#">Beckn 101</a>

            <div class="bn-header__dropmenu">
              <ul class="bn-header__dropmenu-list">
                <li class="bn-header__dropmenu-item">
                  <a href="https://blog.becknprotocol.io/" class="bn-header__dropmenu-link">Blog</a>
                </li>
                <li class="bn-header__dropmenu-item">
                  <a href="https://www.youtube.com/@becknprotocol" class="bn-header__dropmenu-link">Videos</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="bn-header__nav-item">
            <a class="bn-header__nav-link" href="<?php echo site_url(); ?>/about">About</a>
          </li>
        </ul>
      </nav>

      <div class="bn-mobilenav">
        <div class="bn-mobilenav__container">
          <div class="bn-mobilenav__inner">          
            <div class="bn-mobilenav__menu">
              <div class="bn-mobilenav__menu-header">
                <h4 class="bn-mobilenav__menu-title">Developers</h4>
                <span class="bn-mobilenav__menu-icon">
                  <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/chevron-right.svg" alt="icon">
                </span>
              </div>
              <ul class="bn-mobilenav__list">
                <li class="bn-mobilenav__item">
                  <a href="<?php echo site_url(); ?>/resources/" class="bn-mobilenav__link">Concept papers</a>
                </li>
                <li class="bn-mobilenav__item">
                  <a href="<?php echo site_url(); ?>/governance/" class="bn-mobilenav__link">Governance</a>
                </li>
                <li class="bn-mobilenav__item">
                  <a href="<?php echo site_url(); ?>/projects/" class="bn-mobilenav__link">Projects</a>
                </li>
                <li class="bn-mobilenav__item">
                  <a href="<?php echo site_url(); ?>/faqs/" class="bn-mobilenav__link">FAQ</a>
                </li>
                <li class="bn-mobilenav__item">
                  <a href="https://github.com/beckn" class="bn-mobilenav__link">Github</a>
                </li>
              </ul>
            </div>

            <div class="bn-mobilenav__menu">
              <div class="bn-mobilenav__menu-header">
                <h4 class="bn-mobilenav__menu-title">Community</h4>
                <span class="bn-mobilenav__menu-icon">
                  <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/chevron-right.svg" alt="icon">
                </span>
              </div>
              <ul class="bn-mobilenav__list">
                <li class="bn-mobilenav__item">
                  <a href="<?php echo site_url(); ?>/community/" class="bn-mobilenav__link">Beckn Open Collective</a>
                </li>
                <li class="bn-mobilenav__item">
                  <a href="<?php echo site_url(); ?>/events/" class="bn-mobilenav__link">Events</a>
                </li>
                <li class="bn-mobilenav__item">
                  <a href="https://bit.ly/bocWebInvite " class="bn-mobilenav__link">Discord</a>
                </li>
              </ul>
            </div>
			  
			  			

            <div class="bn-mobilenav__menu">
              <div class="bn-mobilenav__menu-header">
                <h4 class="bn-mobilenav__menu-title"><a href="<?php echo site_url(); ?>/beckn-onix/">Beckn ONIX</a></h4>
                <!-- <span class="bn-mobilenav__menu-icon">
                  <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/chevron-right.svg" alt="icon">
                </span> -->
              </div>
            </div>

            <div class="bn-mobilenav__menu">
              <div class="bn-mobilenav__menu-header">
                <a class="bn-mobilenav__menu-title" href="<?php echo site_url(); ?>/all-projects/">Live Networks</a>
                
              </div>
            </div>
			  
			    <div class="bn-mobilenav__menu">
              <div class="bn-mobilenav__menu-header">
                <a class="bn-mobilenav__menu-title" href="https://energy.becknprotocol.io/">Digital Energy Grid</a>
                
              </div>
            </div>
<!-- 
            <div class="bn-mobilenav__menu">
              <div class="bn-mobilenav__menu-header">
                <a class="bn-mobilenav__menu-title" href="#">Beckn 101</a>
                <span class="bn-mobilenav__menu-icon">
                  <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/chevron-right.svg" alt="icon">
                </span>
              </div>
              <ul class="bn-mobilenav__list">
                <li class="bn-mobilenav__item">
                  <a href="https://blog.becknprotocol.io/" class="bn-mobilenav__link">Blog</a>
                </li>
                <li class="bn-mobilenav__item">
                  <a href="https://www.youtube.com/@becknprotocol" class="bn-mobilenav__link">Videos</a>
                </li>
              </ul>
            </div> -->

            <div class="bn-mobilenav__menu">
              <div class="bn-mobilenav__menu-header">
                <a class="bn-mobilenav__menu-title" href="<?php echo site_url(); ?>/about">About</a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- Header: End -->
    <div class="bn-smoother" id="smooth-wrapper">
      <div class="bn-smoother__content" id="smooth-content">
        <main class="bn-main">
          <svg id="svgLineContainer" class="bn-connecting-line"  width="100%" height="100%">
            <path id="dynamicLine" stroke="#ebebed" stroke-width="1" fill="none" />
          </svg>
          <!-- Dynamic Svg Line Connector -->
          <section id="hero" class="bn-section bn-section--home-hero">
            <div id="appBackdrop" class="bn-section__backdrop bn-app__backdrop">
              <svg id="bgSvg" class="desktop-bg" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path class="line" d="M-1 709L234.5 660.5L371.5 586L961 740L1219 615" stroke="#ebebed" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="stroke-line" d="M-1 709L234.5 660.5L371.5 586L961 740L1219 615" stroke="#FF433A" stroke-width="1" stroke-miterlimit="10"/>
                    
                    <path class="line" d="M-1 215L402 156.5L369.5 581L1012.5 512L1122 156.5L1219.5 615L1420.5 821" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="stroke-line" d="M-1 215L402 156.5L369.5 581L1012.5 512L1122 156.5L1219.5 615L1420.5 821" stroke="#FF433A" stroke-width="1" stroke-miterlimit="10"/>
                    
                    <path class="line" d="M251 900.5L234 663.5L402.5 158.5L738.5 256L927 43L1355.5 283.5L1416 821" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="stroke-line" d="M251 900.5L234 663.5L402.5 158.5L738.5 256L927 43L1355.5 283.5L1416 821" stroke="#FF433A" stroke-width="1" stroke-miterlimit="10"/>

                    <path class="line" d="M240.48 658.1L-78 503" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M234 -22.5L403.5 158.5M742 250L698.5 -6" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M664.5 -63L401 160.5L137 430L-220 160.5" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M1125 148.604L1446.33 176.713" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    
                    <path class="line" d="M1120.5 150.5L1197.5 -23.5" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    
                    <path class="line" d="M1124.5 149L1454.5 -9.5" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M735 250.5L1012.5 513L933 40L665.5 -68" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M235.48 660.101L132.5 426.5" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M251.123 894.392L367 583" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M956.5 742L251.124 894.392" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M1414 814L957 742" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M1222 616.5L1014.5 517.5" stroke="#EBEBED" stroke-width="1" stroke-miterlimit="10"/>
                    <path class="line" d="M250.5 894L-44 813" stroke="#EBEAEC"></path>
                  </g>
                  <g filter="url(#filter0_f_2352_1529)">
                    <path d="M1448.05 834.765L1404.01 851.24L1374.73 814.445L1400.68 775.229L1445.99 787.788L1448.05 834.765Z" fill="url(#paint4_radial_2352_1529)"/>
                  </g>
                  <circle id="dot1" class="shape" cx="246" cy="888" width="24" height="24" r="12" fill="url(#paint5_radial_2352_1529)"/>
                  <path class="shape" d="M1031.18 516.361L1019.95 531.452L1002.13 525.438L1002.34 506.63L1020.3 501.02L1031.18 516.361Z" fill="url(#paint6_radial_2352_1529)"/>
                  <path class="shape" d="M253.165 666.112L234.261 680.091L215.124 666.433L222.201 644.011L245.711 643.813L253.165 666.112Z" fill="url(#paint7_radial_2352_1529)"/>
                  <rect class="shape" x="953" y="58" width="48" height="48" rx="24" transform="rotate(-180 953 58)" fill="url(#paint8_radial_2352_1529)"/>
                  <g filter="url(#filter1_f_2352_1529)">
                    <rect class="filter-shape" x="427.725" y="149.08" width="32" height="32" transform="rotate(112.12 427.725 149.08)" fill="#0059C9"/>
                  </g>
                  <g filter="url(#filter2_f_2352_1529)">
                    <rect class="filter-shape" x="1113" y="138" width="20" height="20" rx="10" fill="url(#paint9_radial_2352_1529)"/>
                  </g>
                  <path class="shape" d="M763.268 249.541L746.427 272.178L719.695 263.156L720.014 234.945L746.944 226.53L763.268 249.541Z" fill="url(#paint10_radial_2352_1529)"/>
                  <rect class="shape" x="1338" y="262" width="40" height="40" rx="20" fill="url(#paint11_radial_2352_1529)"/>
                  <g filter="url(#filter3_f_2352_1529)">
                    <rect class="filter-shape" x="78" y="356" width="120" height="120" rx="60" fill="url(#paint12_radial_2352_1529)"/>
                  </g>
                  <rect class="shape" x="407.831" y="579.823" width="49" height="49" transform="rotate(127.242 407.831 579.823)" fill="url(#paint13_radial_2352_1529)"/>
                  <rect class="shape" x="1228.47" y="581" width="49" height="49" transform="rotate(53.6667 1228.47 581)" fill="url(#paint14_radial_2352_1529)"/>
                  <g filter="url(#filter4_f_2352_1529)">
                    <rect class="filter-shape" x="-47" y="660" width="80" height="80" rx="40" fill="url(#paint15_radial_2352_1529)"/>
                  </g>
                  <rect class="shape" x="919" y="699" width="80" height="80" rx="40" fill="url(#paint16_radial_2352_1529)"/>
                  <path id="dynamicLine2" stroke="#ebebed" stroke-width="1" fill="none"></path>
                </g>
                <defs>
                <filter id="filter0_f_2352_1529" x="1362.73" y="763.229" width="97.3207" height="100.012" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="6" result="effect1_foregroundBlur_2352_1529"/>
                </filter>
                <filter id="filter1_f_2352_1529" x="378.03" y="129.03" width="57.6943" height="57.6943" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="4" result="effect1_foregroundBlur_2352_1529"/>
                </filter>
                <filter id="filter2_f_2352_1529" x="1109" y="134" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_2352_1529"/>
                </filter>
                <filter id="filter3_f_2352_1529" x="62" y="340" width="152" height="152" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="8" result="effect1_foregroundBlur_2352_1529"/>
                </filter>
                <filter id="filter4_f_2352_1529" x="-59" y="648" width="104" height="104" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="6" result="effect1_foregroundBlur_2352_1529"/>
                </filter>
                <linearGradient id="paint0_linear_2352_1529" x1="-1" y1="663" x2="1219" y2="663" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#FF433A"/>
                  <stop offset="0.2" stop-color="#FF433A"/>
                  <stop offset="0.201" stop-color="#EBEBED"/>
                </linearGradient>
                <linearGradient id="paint1_linear_2352_1529" x1="-71.5" y1="488.75" x2="1420.5" y2="488.75" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#FF433A"/>
                  <stop offset="0.2" stop-color="#FF433A"/>
                  <stop offset="0.201" stop-color="#EBEBED"/>
                </linearGradient>
                <linearGradient id="paint2_linear_2352_1529" x1="253.5" y1="884.5" x2="681" y2="-2.49998" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#FF433A"/>
                  <stop offset="0.2" stop-color="#FF433A"/>
                  <stop offset="0.201" stop-color="#EBEBED"/>
                </linearGradient>
                <linearGradient id="paint3_linear_2352_1529" x1="1121" y1="135.5" x2="1293.5" y2="-338" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#EBEBED"/>
                  <stop offset="0.11" stop-color="#FF433A"/>
                  <stop offset="0.2" stop-color="#FF433A"/>
                  <stop offset="0.201" stop-color="#EBEBED"/>
                </linearGradient>
                <radialGradient id="paint4_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1441.56 917.063) rotate(-102.136) scale(138.962)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint5_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(272.664 864) rotate(134.374) scale(41.6886)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint6_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1046.85 545.426) rotate(-134.978) scale(55.5848)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint7_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(261.37 706.564) rotate(-118.11) scale(69.481)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint8_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1020.33 34) rotate(134.374) scale(83.3771)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint9_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1141.05 128) rotate(134.374) scale(34.7405)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint10_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(786.777 293.139) rotate(-134.978) scale(83.3771)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint11_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1394.11 242) rotate(134.374) scale(69.481)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint12_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(246.322 296) rotate(134.374) scale(208.443)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint13_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(476.563 555.323) rotate(134.374) scale(85.1142)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint14_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1297.21 556.5) rotate(134.374) scale(85.1142)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint15_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(65.2148 620) rotate(134.374) scale(138.962)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint16_radial_2352_1529" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1031.21 659) rotate(134.374) scale(138.962)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <!-- <clipPath id="clip1_2352_1529">
                <rect width="1440" height="969" fill="white" transform="translate(0 -69)"/>
                </clipPath> -->
                </defs>
              </svg>

              <svg id="mobileBg" class="mobile-bg" viewBox="0 0 428 781" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3067_1266)">
                <path opacity="0.5" d="M368.115 534.512L316.977 711.5" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M313.054 317.917L430.215 444.772" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M430.77 445.603L367.065 532.02L463.453 574.674" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M367.896 534.235L455.697 717.04" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M283.978 646.5L367.896 532.851" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M311.67 318.471L166.257 472.193L430.215 445.603L488.104 279.971" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M477.577 2.7179L365.125 135.39L312.776 317.363L485.887 291.881" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M324.412 -128.292L363.742 134.005L128.589 116.001L166.812 472.193L35.2483 442.556" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M127.203 120.433L84.7695 41.7603L213.977 -13" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M487.826 279.971L364.018 134.005L214.187 -13.2389L363.477 -211" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M364.295 134.559L84.7701 41.7603L170.688 -134.662" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M127.48 114.616L-45.016 50.426L85.657 42.0485L35.8013 -91.4541" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M82.6104 41.7716C82.6104 43.6072 84.0985 45.0953 85.9341 45.0953C87.7697 45.0953 89.2578 43.6072 89.2578 41.7716C89.2578 39.936 87.7697 38.4479 85.9341 38.4479C84.0985 38.4479 82.6104 39.936 82.6104 41.7716Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M309.731 317.64C309.731 319.475 311.22 320.964 313.055 320.964C314.891 320.964 316.379 319.475 316.379 317.64C316.379 315.804 314.891 314.316 313.055 314.316C311.22 314.316 309.731 315.804 309.731 317.64Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M113.354 585.476L-1.03772 692.943" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M36.6328 437.571L-45.0154 50.4263" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M0.0708254 692.112L35.8008 440.894" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M165.98 472.747L367.342 532.574L108.923 588.246L165.98 472.747Z" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path opacity="0.5" d="M111.693 587.692L37.1862 440.063L127.48 116.555" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M162.933 472.193C162.933 474.028 164.421 475.517 166.256 475.517C168.092 475.517 169.58 474.028 169.58 472.193C169.58 470.357 168.092 468.869 166.256 468.869C164.421 468.869 162.933 470.357 162.933 472.193Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M280.999 646.324C280.999 648.159 282.487 649.647 284.323 649.647C286.158 649.647 287.646 648.159 287.646 646.324C287.646 644.488 286.158 643 284.323 643C282.487 643 280.999 644.488 280.999 646.324Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M312 710.5C312 712.985 314.015 715 316.5 715C318.985 715 321 712.985 321 710.5C321 708.015 318.985 706 316.5 706C314.015 706 312 708.015 312 710.5Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                <rect x="144.1" y="99.3827" width="35.453" height="35.453" rx="17.7265" transform="rotate(90 144.1 99.3827)" fill="url(#paint0_radial_3067_1266)"/>
                <rect x="61.0059" y="419.013" width="44.3162" height="44.3162" rx="22.1581" transform="rotate(90 61.0059 419.013)" fill="url(#paint1_radial_3067_1266)"/>
                <rect x="124.711" y="574.674" width="26.5897" height="26.5897" rx="13.2949" transform="rotate(90 124.711 574.674)" fill="url(#paint2_radial_3067_1266)"/>
                <rect x="419.967" y="456.128" width="22.1581" height="22.1581" rx="11.0791" transform="rotate(-90 419.967 456.128)" fill="url(#paint3_radial_3067_1266)"/>
                <g filter="url(#filter0_f_3067_1266)">
                <rect x="373.436" y="526.48" width="13.2949" height="13.2949" rx="6.64743" transform="rotate(90 373.436 526.48)" fill="url(#paint4_radial_3067_1266)"/>
                </g>
                <g filter="url(#filter1_f_3067_1266)">
                <rect x="371.773" y="125.972" width="15.5107" height="15.5107" rx="7.75534" transform="rotate(90 371.773 125.972)" fill="url(#paint5_radial_3067_1266)"/>
                </g>
                <g filter="url(#filter2_f_3067_1266)">
                <rect x="33.3086" y="664.968" width="70.9059" height="70.9059" rx="35.453" transform="rotate(90 33.3086 664.968)" fill="url(#paint6_radial_3067_1266)"/>
                </g>
                </g>
                <defs>
                <filter id="filter0_f_3067_1266" x="356.141" y="522.48" width="21.2949" height="21.2949" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_3067_1266"/>
                </filter>
                <filter id="filter1_f_3067_1266" x="348.264" y="117.972" width="31.5098" height="31.5106" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="4" result="effect1_foregroundBlur_3067_1266"/>
                </filter>
                <filter id="filter2_f_3067_1266" x="-53.5977" y="648.968" width="102.906" height="102.906" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="8" result="effect1_foregroundBlur_3067_1266"/>
                </filter>
                <radialGradient id="paint0_radial_3067_1266" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(193.829 81.6562) rotate(134.374) scale(61.5827)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint1_radial_3067_1266" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(123.168 396.855) rotate(134.374) scale(76.9783)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint2_radial_3067_1266" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(162.008 561.379) rotate(134.374) scale(46.187)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint3_radial_3067_1266" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(451.048 445.049) rotate(134.374) scale(38.4892)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint4_radial_3067_1266" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(392.084 519.833) rotate(134.374) scale(23.0935)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint5_radial_3067_1266" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(393.53 118.217) rotate(134.374) scale(26.9424)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <radialGradient id="paint6_radial_3067_1266" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(132.767 629.515) rotate(134.374) scale(123.165)">
                <stop offset="0.138616" stop-color="#2E8BFF"/>
                <stop offset="1" stop-color="#0059C9"/>
                </radialGradient>
                <clipPath id="clip0_3067_1266">
                <rect width="428" height="781" fill="white"/>
                </clipPath>
                </defs>
                </svg>

            </div>
            <!-- Backdrop: End -->
            <div class="bn-container">
              <div class="bn-hero bn-hero--home">
                <div class="row justify-content-center">
                  <div class="COL-SM-8 col-lg-8">
                    <h1 class="bn-hero__title">
                      Internet’s leap <br/><i>for humanity</i>
                    </h1>
                  </div>
                  <div class="col-lg-5">
                    <p class="bn-hero__desc">
                      Beckn is a universal resource discovery and transaction protocol that enables the leap to open, decentralized, and interoperable peer-to-peer networks.
                    </p>
                  </div>
                </div>
                <div class="bn-hero__footer">
                  <a href="https://github.com/beckn" target="_blank" class="bn-hero__cta bn-btn bn-btn--primary">
                    Build with beckn
                  </a>
                  <a href="https://discord.gg/6xZfNJtbMN" target="_blank" class="bn-hero__cta bn-btn bn-btn--secondary">Join the collective</a>
                </div>
              </div>
            </div>
            
          </section>
          <!-- Hero: End -->
          
          <div id="passingLineWrap" class="bn-bgwrap">
            <!-- <div class="bn-bgwrap__backdrop-fill"></div> -->
            <div id="futureStreakLine" class="bn-mainstreakline bn-bgwrap__backdrop">
              <div class="bn-bgwrap__backdrop-line bn-streakline-container">
                <div class="container">
                  <!-- <svg id="streakSvg" class="bn-streak-line" viewBox="0 0 1370 2272" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                    <path id="extend-path" d="M1 1L249.5 315.5" stroke="transparent"/>
                    <path id="main-path" d="M250.5 316.5L723 316L955 597.5V903.5L382 1381.5H1351.5L511.5 2262H459" stroke="url(#streak-grad)"/>
                    <path id="dup-path" d="M250.5 316.5L723 316L955 597.5V903.5L382 1381.5H1351.5L511.5 2262H459" stroke="#FF433A"/>
                      <circle class="red-dot red-dot-1" cx="1352" cy="1382" r="14" fill="#FF433A" stroke="#212121" stroke-width="8"/>
                      <circle class="red-dot-3" cx="510" cy="2262" r="10" fill="#FF433A"/>
                      <circle class="red-dot red-dot-2" cx="381" cy="1382" r="14" fill="#FF433A" stroke="#212121" stroke-width="8"/>
                      <circle cx="954.5" cy="598.5" r="7.5" fill="url(#paint0_radial_2379_1240)"/>
                      <circle id="dot2" cx="250" cy="315" r="6" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                    </g>
                    <defs>
                      <radialGradient id="paint0_radial_2379_1240" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(968.04 583.5) rotate(134.374) scale(26.0554 26.0553)">
                        <stop offset="0.138616" stop-color="#2E8BFF"/>
                      <stop offset="1" stop-color="#0059C9"/>
                    </radialGradient>
                    <linearGradient id="streak-grad" x1="1000" y1="1276" x2="1469" y2="2176" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EBEBED"></stop>
                        <stop offset="0" stop-color="#0059C9"></stop>
                        <stop offset="1" stop-color="#EBEBED"></stop>
                      </linearGradient>
                    </defs>
                  </svg> -->
                  <!-- Old: End -->
                  <!-- New: Start -->
                  <svg id="lineStreak" class="bn-streak-line bn-streakline" viewBox="0 0 1222 2042" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="main-path" id="main-path" d="M526 8L563 57H913.5L811.5 293.5V673L237.5 1152.5H1208L369.5 2033.5H0" stroke="url(#paint0_linear_2939_1238)" stroke-width="2" stroke-miterlimit="10"/>
                    <path id="dup-path" class="red-stroke" d="M526 8L563 57H913.5L811.5 293.5V673L237.5 1152.5H1208L369.5 2033.5H0" stroke="#FF433A" stroke-width="2" stroke-miterlimit="10"/>
                    <circle cx="812" cy="378" r="8" fill="url(#paint1_radial_2939_1238)"/>
                    <circle cx="369" cy="2032" r="10" fill="#FF433A"/>
                    <circle class="red-dot red-dot-1" cx="238" cy="1152" r="14" fill="#FF433A" stroke="#212121" stroke-width="8"/>
                    <circle class="red-dot red-dot-2" cx="1204" cy="1152" r="14" fill="#FF433A" stroke="#212121" stroke-width="8"/>
                    <path d="M526 13C529.314 13 532 10.3137 532 7C532 3.68629 529.314 1 526 1C522.686 1 520 3.68629 520 7C520 10.3137 522.686 13 526 13Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                    <defs>
                      <linearGradient id="paint0_linear_2939_1238" x1="571.098" y1="-34866.5" x2="571.098" y2="-36015.3" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#EBEBED"/>
                      <stop offset="1" stop-color="#0059C9"/>
                      </linearGradient>
                      <radialGradient id="paint1_radial_2939_1238" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(826.443 459) rotate(134.374) scale(27.7924)">
                      <stop offset="0.138616" stop-color="#2E8BFF"/>
                      <stop offset="1" stop-color="#0059C9"/>
                      </radialGradient>
                    </defs>
                  </svg>


                  <svg id="lineStreakMobile" class="bn-streakline-mobile"  viewBox="0 0 371 1527" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="main-path" d="M7 7L24.5 44.5H344.5L174.5 205.5V750.5L14 935.5H361L24 1520.5H102.5" stroke="url(#paint0_linear_3068_1302)" stroke-width="2" stroke-miterlimit="10"/>
                    <path class="red-stroke" d="M7 7L24.5 44.5H344.5L174.5 205.5V750.5L14 935.5H361L24 1520.5H102.5" stroke="#FF433A" stroke-width="2" stroke-miterlimit="10"/>
                    <circle cx="176" cy="204" r="8" fill="url(#paint1_radial_3068_1302)"/>
                    <circle class="red-dot red-dot-1" cx="13" cy="935" r="8" fill="#FF433A" stroke="#212121" stroke-width="4"/>
                    <circle class="red-dot red-dot-2" cx="361" cy="935" r="8" fill="#FF433A" stroke="#212121" stroke-width="4"/>
                    <circle cx="25" cy="1521" r="6" fill="#FF433A"/>
                    <path class="grey-circle" d="M7 13C10.3137 13 13 10.3137 13 7C13 3.68629 10.3137 1 7 1C3.68629 1 1 3.68629 1 7C1 10.3137 3.68629 13 7 13Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                    <defs>
                      <linearGradient id="paint0_linear_3068_1302" x1="725.991" y1="1534.5" x2="895.94" y2="1196.59" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#EBEBED"/>
                      <stop offset="0.561114" stop-color="#0059C9"/>
                      <stop offset="1" stop-color="#EBEBED"/>
                      </linearGradient>
                      <radialGradient id="paint1_radial_3068_1302" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(190.443 188) rotate(134.374) scale(27.7924)">
                      <stop offset="0.138616" stop-color="#2E8BFF"/>
                      <stop offset="1" stop-color="#0059C9"/>
                      </radialGradient>
                    </defs>
                  </svg>
					
					<!-- <svg id="lineStreakTablet" class="bn-streakline-tablet" viewBox="0 0 371 1527" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path  class="main-path" d="M7 7L24.5 44.5H344.5L174.5 205.5V750.5L14 935.5H361L24 1520.5H102.5" stroke="url(#paint0_linear_3068_1303)" stroke-width="2" stroke-miterlimit="10"/>
                    <path class="red-stroke" d="M7 7L24.5 44.5H344.5L174.5 205.5V750.5L14 935.5H361L24 1520.5H102.5" stroke="#FF433A" stroke-width="2" stroke-miterlimit="10"/>
                    <circle cx="176" cy="204" r="8" fill="url(#paint1_radial_3068_1302)"/>
                    <circle class="red-dot red-dot-1" cx="13" cy="935" r="8" fill="#FF433A" stroke="#212121" stroke-width="4"/>
                    <circle class="red-dot red-dot-2" cx="361" cy="935" r="8" fill="#FF433A" stroke="#212121" stroke-width="4"/>
                    <circle cx="25" cy="1521" r="6" fill="#FF433A"/>
                    <path class="grey-circle" d="M7 13C10.3137 13 13 10.3137 13 7C13 3.68629 10.3137 1 7 1C3.68629 1 1 3.68629 1 7C1 10.3137 3.68629 13 7 13Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
                    <defs>
                    <linearGradient id="paint0_linear_3068_1303" x1="725.991" y1="1534.5" x2="895.94" y2="1196.59" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EBEBED"/>
                    <stop offset="0.561114" stop-color="#0059C9"/>
                    <stop offset="1" stop-color="#EBEBED"/>
                    </linearGradient>
                    <radialGradient id="paint1_radial_3068_1302" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(190.443 188) rotate(134.374) scale(27.7924)">
                    <stop offset="0.138616" stop-color="#2E8BFF"/>
                    <stop offset="1" stop-color="#0059C9"/>
                    </radialGradient>
                    </defs>
                    </svg> -->


                  <svg id="lineStreakTablet" class="bn-streakline-tablet" viewBox="0 0 371 1265" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="main-path"   d="M7 7L24.5 44.5H344.5L174.5 205.5V610.5L14 795.5H361L24 1260.5H102.5" stroke="url(#paint0_linear_3224_123e)" stroke-width="2" stroke-miterlimit="10"/>
<path class="red-stroke"   d="M7 7L24.5 44.5H344.5L174.5 205.5V610.5L14 795.5H361L24 1260.5H102.5"  stroke="#FF433A" stroke-width="2" stroke-miterlimit="10"/>
<circle cx="176" cy="204" r="8" fill="url(#paint1_radial_3224_1230)"/>
<circle class="red-dot red-dot-1" cx="13" cy="795" r="8" fill="#FF433A" stroke="#212121" stroke-width="4"/>
<circle class="red-dot red-dot-1" cx="361" cy="795" r="8" fill="#FF433A" stroke="#212121" stroke-width="4"/>
<circle cx="25" cy="1259" r="6" fill="#FF433A"/>
<path  class="grey-circle" d="M7 13C10.3137 13 13 10.3137 13 7C13 3.68629 10.3137 1 7 1C3.68629 1 1 3.68629 1 7C1 10.3137 3.68629 13 7 13Z" fill="white" stroke="#EBEBED" stroke-width="2" stroke-miterlimit="10"/>
<defs>
<linearGradient id="paint0_linear_3224_123e" x1="725.99" y1="1534.49" x2="895.939" y2="1196.59" gradientUnits="userSpaceOnUse">
<stop stop-color="#EBEBED"/>
<stop offset="0.561114" stop-color="#0059C9"/>
<stop offset="1" stop-color="#EBEBED"/>
</linearGradient>
<radialGradient id="paint1_radial_3224_1230" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(190.443 188) rotate(134.374) scale(27.7924)">
<stop offset="0.138616" stop-color="#2E8BFF"/>
<stop offset="1" stop-color="#0059C9"/>
</radialGradient>
</defs>
</svg>
                </div>
              </div>
            </div>
            <!-- streaklines -->
            <section id="future" class="bn-section bn-section--home-future">
              <div class="bn-section__body">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-sm-8 col-lg-7">
                      <h2 class="bn-section__title">
                        <span>Beliefs that build</span> <br/> <span><i>a better future</i></span>
                      </h2>
                      <p class="bn-section__desc">
                        Beckn protocol helps individuals, organizations, platforms and governments create integrated digital networks.
                      </p>
                    </div>
                  </div>
                  <div class="bn-slides">
                    <div class="bn-slides__wrapper">
                      <div data-slide-index="0" class="bn-slide">
                        <div class="row justify-content-center justify-content-lg-start align-items-center">
                          <div class="col-sm-9 col-lg-4 col-xxl-5 offset-lg-2 offset-xxl-1">
                            <div class="bn-slide__media">
                              <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/future/bkn-principles-03.png" alt="beckn believes in amplifying access" class="img-fluid bn-slide__img">
                            </div>
                          </div>
                          <div class="col-sm-8 col-lg-4 offset-lg-1">
                            <p class="bn-slide__desc">
                              Beckn unlocks doors to opportunities for everyone with open networks that amplify universal autonomy and access to resources.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div data-slide-index="1" class="bn-slide">
                        <div class="row justify-content-center justify-content-lg-start align-items-center">
                          <div class="col-sm-9 col-lg-4 col-xxl-5 offset-lg-2 offset-xxl-1">
                            <div class="bn-slide__media">
                              <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/future/bkn-principles-02.png" alt="beckn creates value at scale" class="img-fluid bn-slide__img">
                            </div>
                          </div>
                          <div class="col-sm-8 col-lg-4 offset-lg-1">
                            <p class="bn-slide__desc">
                              With open building blocks, beckn empowers individuals and ecosystems with creative, contextual solutions to scale at low cost and high speed.
                            </p>
                          </div>
                        </div>
                      </div>



                      <div data-slide-index="2" class="bn-slide">
                        <div class="row justify-content-center justify-content-lg-start align-items-center">
                          <div class="col-sm-9 col-lg-4 col-xxl-5 offset-lg-2 offset-xxl-1">
                            <div class="bn-slide__media">
                              <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/future/bkn-principles-01.png" alt="" class="img-fluid bn-slide__img">
                            </div>
                          </div>
                          <div class="col-sm-8 col-lg-4 offset-lg-1">
                            <p class="bn-slide__desc">
                              Like HTTP and SMTP, beckn creates a common language that allows for seamless interoperability between platforms and ecosystems.
                            </p>
                          </div>
                        </div>
                      </div>

                      

                      <div data-slide-index="3" class="bn-slide">
                        <div class="row justify-content-center justify-content-lg-start align-items-center">
                          <div class="col-sm-9 col-lg-4 col-xxl-5 offset-lg-2 offset-xxl-1">
                            <div class="bn-slide__media">
                              <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/future/bkn-principles-04.png" alt="" class="img-fluid bn-slide__img">
                            </div>
                          </div>
                          <div class="col-sm-8 col-lg-4 offset-lg-1">
                            <p class="bn-slide__desc">
                              Beckn-enabled open networks empower consumers with choices and sellers with the freedom to access demand without relying on one platform.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="bn-slides__pagination">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                </div>
              </div>
              
            </section>
            <!-- future: End -->
            <section id="infinite" class="bn-section bn-section--home-infinite">
              <!-- Backdrop Line: End -->
              <div class="bn-section__body">
                <div class="container position-relative z-3">
                  <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-lg-9 col-xl-8 col-xxl-8">
                      <h2 class="bn-section__title">
                        <span>One protocol,</span><span class="bn-text-indent"><i>infinite potential</i></span> 
                      </h2>
                      <p class="offset-lg-4 bn-section__desc">Create, enable and scale economic and digital exchange across and between diverse sectors.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bn-industries">
                <div class="bn-industries__marquee bn-industries__marquee--1" data-reversed="false">
                  
                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/mobility.svg" alt="Mobility" />
                    </span>
                    <h5 class="bn-industry__title">Mobility</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/digital-commerce.svg" alt="Digital Commerce" />
                    </span>
                    <h5 class="bn-industry__title">Digital Commerce</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/energy.svg" alt="Energy" />
                    </span>
                    <h5 class="bn-industry__title">Energy</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/logistics.svg" alt="Logistics" />
                    </span>
                    <h5 class="bn-industry__title">Logistics</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/healthcare.svg" alt="Healthcare" />
                    </span>
                    <h5 class="bn-industry__title">Healthcare</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/agriculture.svg" alt="Agriculture" />
                    </span>
                    <h5 class="bn-industry__title">Agriculture</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/education-skilling.svg" alt="Education and Skilling" />
                    </span>
                    <h5 class="bn-industry__title">Education and Skilling</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/smart-cities.svg" alt="Smart Cities" />
                    </span>
                    <h5 class="bn-industry__title">Smart Cities</h5>
                  </div>
                  <!-- Industry: End -->


                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/mobility.svg" alt="Mobility" />
                    </span>
                    <h5 class="bn-industry__title">Mobility</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/digital-commerce.svg" alt="Digital Commerce" />
                    </span>
                    <h5 class="bn-industry__title">Digital Commerce</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/energy.svg" alt="Energy" />
                    </span>
                    <h5 class="bn-industry__title">Energy</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/logistics.svg" alt="Logistics" />
                    </span>
                    <h5 class="bn-industry__title">Logistics</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/healthcare.svg" alt="Healthcare" />
                    </span>
                    <h5 class="bn-industry__title">Healthcare</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/agriculture.svg" alt="Agriculture" />
                    </span>
                    <h5 class="bn-industry__title">Agriculture</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/education-skilling.svg" alt="Education and Skilling" />
                    </span>
                    <h5 class="bn-industry__title">Education and Skilling</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/smart-cities.svg" alt="Smart Cities" />
                    </span>
                    <h5 class="bn-industry__title">Smart Cities</h5>
                  </div>
                  <!-- Industry: End -->
                </div>
                <!-- Marquee - 1: End -->



                <div class="bn-industries__marquee bn-industries__marquee--2" data-reversed="true">
                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/financial-services.svg" alt="Financial Services" />
                    </span>
                    <h5 class="bn-industry__title">Financial Services</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/circular-economy.svg" alt="Circular Economy" />
                    </span>
                    <h5 class="bn-industry__title">Circular Economy</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/tourism-culture.svg" alt="Tourism and Culture" />
                    </span>
                    <h5 class="bn-industry__title">Tourism and Culture</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/smart-manufacturing.svg" alt="Smart Manufacturing" />
                    </span>
                    <h5 class="bn-industry__title">Smart Manufacturing</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/tele-law.svg" alt="Tele-law" />
                    </span>
                    <h5 class="bn-industry__title">Tele-law</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/online-dispute-resolution.svg" alt="Online Dispute Resolution" />
                    </span>
                    <h5 class="bn-industry__title">Online Dispute Resolution</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/financial-services.svg" alt="Financial Services" />
                    </span>
                    <h5 class="bn-industry__title">Financial Services</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/circular-economy.svg" alt="Circular Economy" />
                    </span>
                    <h5 class="bn-industry__title">Circular Economy</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/tourism-culture.svg" alt="Tourism and Culture" />
                    </span>
                    <h5 class="bn-industry__title">Tourism and Culture</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/smart-manufacturing.svg" alt="Smart Manufacturing" />
                    </span>
                    <h5 class="bn-industry__title">Smart Manufacturing</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/tele-law.svg" alt="Tele-law" />
                    </span>
                    <h5 class="bn-industry__title">Tele-law</h5>
                  </div>
                  <!-- Industry: End -->

                  <div class="bn-industry">
                    <span class="bn-industry__icon">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/infinite/industries/online-dispute-resolution.svg" alt="Online Dispute Resolution" />
                    </span>
                    <h5 class="bn-industry__title">Online Dispute Resolution</h5>
                  </div>
                  <!-- Industry: End -->
                </div>
              </div>
            </section>
          </div>
          <!-- Infinite: End -->
          <section id="possibilities" class="bn-section bn-section--home-possibilities">
            <div class="bn-section__bg"></div>
            <!-- <div class="bn-section__grad-top"></div> -->
            <div class="bn-section__grad-bottom"></div>
            <div class="bn-section__grad"></div>
        
            <div class="container">
              <div class="row">
                <div class="col-lg-5 position-relative z-2">
                  <h2 class="bn-section__title">
                    Leap into <br/>the inter<i>networks</i> <br/><span class="fst-normal">of the future</span>
                  </h2>
                  <p class="bn-section__desc col-md-8 col-lg-12">Build better digital economies, ecosystems and societies based on efficient, inclusive, transparent and sustainable open networks.</p>
                  <a href="<?php echo site_url(); ?>/all-projects/" class="bn-btn bn-btn--primary d-none d-lg-inline-flex">
                    View live networks
                  </a>
                </div>

                <div class="col-lg-6 offset-lg-1 position-relative h-100">
                  <!-- Desktop: Start -->
                  <div class="bn-usecasecards">
                    <div class="bn-usecasecards__stack bn-usecasecards__stack--left">
                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">EDUCATION</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/onest.png" alt="ONest" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">ONEST</h4>
                            <p class="bn-usecasecard__desc">Open network for learning and livelihood transactions</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">MOBILITY</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/namma-yatri.png" alt="Namma Yatri" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Namma Yatri</h4>
                            <p class="bn-usecasecard__desc">Open mobility network and peer-to-peer ride booking platform</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">ENERGY</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/uei.png" alt="Unified Energy Interface" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Unified Energy Interface </h4>
                            <p class="bn-usecasecard__desc">Open network for all transactions in the energy sector</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">DIGITAL COMMERCE</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/ondc.png" alt="ONDC" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">ONDC</h4>
                            <p class="bn-usecasecard__desc">A country-wide open network for digital commerce in India</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">HEALTHCARE</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/uhi.png" alt="Unified Health Interface" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Unified Health Interface</h4>
                            <p class="bn-usecasecard__desc">Open network for health, enabling the Ayushman Bharat Digital Mission</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">Agriculture</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/unified-krishi-interface.png" alt="Unified Krishi Interface" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Unified Krishi Interface</h4>
                            <p class="bn-usecasecard__desc">A community-led local open agriculture network</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- Stack - Left: End -->

                    <div class="bn-usecasecards__stack bn-usecasecards__stack--right">
                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">DIGITAL COMMERCE</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/oga.png" alt="Open Gambia Network" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Open Gambia Network</h4>
                            <p class="bn-usecasecard__desc">Country-wide network for digital commerce in Gambia</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">REGIONAL NETWORK</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/vriddhi.png" alt="Vriddhi Open Nepal Network" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Vriddhi Open Nepal Network</h4>
                            <p class="bn-usecasecard__desc">Nepal’s first open network powering tourism and agriculture</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">REGIONAL NETWORK</div>
                          <div class="bn-usecasecard__media bn-usecasecard__media--portrait">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/belemaberta.png" alt="Belem Open Network" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Belem Open Network </h4>
                            <p class="bn-usecasecard__desc">City-wide open network fostering access to digital services</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">AGRICULTURE</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/oan.png" alt="OpenAgriNet" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">OpenAgriNet</h4>
                            <p class="bn-usecasecard__desc">Open network for transactions in the agricultural sector</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">DIGITAL COMMERCE</div>
                          <div class="bn-usecasecard__media">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/govstack.png" alt="GovStack" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">GovStack</h4>
                            <p class="bn-usecasecard__desc">Building blocks for ITU e-marketplace transactions for governments</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>

                      <div class="bn-usecasecard">
                        <div class="bn-usecasecard__header">
                          <div class="bn-usecasecard__category">mobility</div>
                          <div class="bn-usecasecard__media bn-usecasecard__media--portrait">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/open-kochi.png" alt="Open Kochi" />
                          </div>
                        </div>
                        <div class="bn-usecasecard__content">
                          <div>
                            <h4 class="bn-usecasecard__title">Open Kochi</h4>
                            <p class="bn-usecasecard__desc">Open mobility network for multimodal transport in Kochi</p>
                          </div>
                          <a class="bn-usecasecard__link" href="">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>
                      <!-- card: End -->
                    </div>
                  </div>
                  <!-- Desktop: End -->


                  <div class="bn-usecasecardsmobile">
                    <div id="usecasecardsMobile" class="swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">EDUCATION</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/onest.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">ONEST</h4>
                                <p class="bn-usecasecard__desc">Open network for learning and livelihood transactions</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">MOBILITY</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/namma-yatri.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Namma Yatri</h4>
                                <p class="bn-usecasecard__desc">Open mobility network and peer-to-peer ride booking platform</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">ENERGY</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/uei.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Unified Energy Interface</h4>
                                <p class="bn-usecasecard__desc">Open network for all transactions in the energy sector</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>


                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">DIGITAL COMMERCE</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/ondc.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">ONDC</h4>
                                <p class="bn-usecasecard__desc">A country-wide open network for digital commerce in India</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">HEALTHCARE</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/uhi.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Unified Health Interface</h4>
                                <p class="bn-usecasecard__desc">Open network for health, enabling the Ayushman Bharat Digital Mission</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">AGRICULTURE</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/unified-krishi-interface.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Unified Krishi Interface</h4>
                                <p class="bn-usecasecard__desc">A community-led local open agriculture network</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">DIGITAL COMMERCE</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/oga.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Open Gambia Network</h4>
                                <p class="bn-usecasecard__desc">Country-wide network for digital commerce in Gambia</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>
                        
                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">REGIONAL NETWORK</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/vriddhi.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Vriddhi Open Nepal Network</h4>
                                <p class="bn-usecasecard__desc">Nepal’s first open network powering tourism and agriculture</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">REGIONAL NETWORK</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/belemaberta.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Belem Open Network</h4>
                                <p class="bn-usecasecard__desc">City-wide open network fostering access to digital services</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">AGRICULTURE</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/oan.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">OpenAgriNet</h4>
                                <p class="bn-usecasecard__desc">Open network for transactions in the agricultural sector</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">DIGITAL COMMERCE</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/govstack.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">GovStack</h4>
                                <p class="bn-usecasecard__desc">Building blocks for ITU e-marketplace transactions for governments</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="bn-usecasecard">
                            <div class="bn-usecasecard__header">
                              <div class="bn-usecasecard__category">mobility</div>
                              <div class="bn-usecasecard__media">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/possibilities/logos/open-kochi.png" alt="" />
                              </div>
                            </div>
                            <div class="bn-usecasecard__content">
                              <div>
                                <h4 class="bn-usecasecard__title">Open Kochi</h4>
                                <p class="bn-usecasecard__desc">Open mobility network for multimodal transport in Kochi</p>
                              </div>
                              <a class="bn-usecasecard__link" href="">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-black.svg" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  

                  <a href="<?php echo site_url(); ?>/all-projects/" class="bn-btn bn-btn--primary d-lg-none mt-5 mx-auto">
                    View all projects
                  </a>
                </div>
              </div>
            </div>
          </section>
          <!-- Possibilities: End -->
          <section id="community" class="bn-section bn-section--home-community">
            <div class="container">
              <div class="row">
                <div class="offset-lg-2 col-md-8 col-lg-7 col-xxl-6">
                  <h2 class="bn-section__title">
                    A protocol powered <br/><span class="fst-italic">by community</span>
                  </h2>
                  <p class="bn-section__desc">
                    Beckn is a living protocol. Individuals, businesses and organizations alike actively contribute to protocol specifications via a community-led governance and development model.
                  </p>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-sm-8 col-md-12 col-lg-10">
                  <div class="bn-communitycards">
                    <div class="bn-communitycards__item">
                      <a href="<?php echo site_url(); ?>/events/" class="bn-communitycard bn-communitycard--three">
                        <div class="bn-communitycard__backdrop">
                          <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/community/image.png" alt="Image">
                        </div>
                        <div class="bn-communitycard__header">
                          <span></span>
                          <h6 class="bn-communitycard__subtitle">Beckn Open Collective</h6>
                        </div>
                        <div class="bn-communitycard__content">
                          <h4 class="bn-communitycard__title">A growing network of 4,000+ open source entrepreneurs, enthusiasts, students and professionals.</h4>

                        </div>
                        <div class="bn-communitycard__footer">
                          <div href="<?php echo site_url(); ?>/events/" class="bn-communitycard__link">
                            <span>Explore live events</span>
                            <span class="bn-communitycard__link-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow.svg" alt="Arrow"></span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- Communitycard: End -->
                    
                    <div class="bn-communitycards__item">
                      <a  href="https://bit.ly/bocWebInvite" class="bn-communitycard bn-communitycard--two">
                        <div class="bn-communitycard__header">
                          <span></span>
                          <h6 class="bn-communitycard__subtitle">BOC Discord Community</h6>
                        </div>
                        <div class="bn-communitycard__content">
                          <h4 class="bn-communitycard__title">A space to connect, collaborate and chat with boc members and open-source aficionados.</h4>

                        </div>
                        <div class="bn-communitycard__footer">
                          <div class="bn-communitycard__link">
                            <span>Join us on Discord</span>
                            <span class="bn-communitycard__link-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow.svg" alt="Arrow"></span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- Communitycard: End -->

                    <div class="bn-communitycards__item">
                      <a href="https://github.com/beckn" class="bn-communitycard bn-communitycard--one">
                        <div class="bn-communitycard__header">
                          <span></span>
                          <h6 class="bn-communitycard__subtitle">Beckn Protocol GitHub</h6>
                        </div>
                        <div class="bn-communitycard__content">
                          <h4 class="bn-communitycard__title">Discover core protocol specifications, layers and adaptations for swift implementation.</h4>

                        </div>
                        <div class="bn-communitycard__footer">
                          <div class="bn-communitycard__link">
                            <span>Build with beckn</span>
                            <span class="bn-communitycard__link-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow.svg" alt="Arrow"></span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- Communitycard: End -->
                    
                  </div>
                  <!-- Communitycards: End -->
                </div>
              </div>
            </div>
          </section>
          <!-- Community: End -->
          <section class="bn-section bn-section--home-visual-design">
            <div class="container">
              <div class="row align-items-lg-stretch lg:h-100">
                <div class="col-lg-4 bn-sticycolumn">
					<h2 class="bn-section__title">Visual language <br/><i> story & origin</i></h2>
                </div>
                <div class="col-lg-8">
                    <p class="bn-section__desc">Each visual element is deeply rooted in beckn’s core values, anchoring openness and interoperability at the heart of the brand. They weave our philosophy into a visual language that conveys connectivity, creativity and community.</p>

                    <div class="bn-accordion">
                      <div class="bn-accordion__item">
                        <div class="bn-accordion__header">
                          <div class="bn-accordion__title">Visual marker</div>
                          <div class="bn-accordion__count">01</div>
                        </div>

                        <div class="bn-accordion__content">
                          <div class="bn-accordion__desc">Like Bluetooth, Wi-Fi or email, beckn works seamlessly across digital ecosystems. Inspired by the universal simplicity of Unicode characters, our brandmark combines a dot and a dash, depicting an individual ‘hailing’ an opportunity. The minimalistic approach also symbolizes the inherent versatility and flexibility of the protocol.</div>
                          <div class="bn-accordion__media">
                            <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/visual-design/visual-marker.png" alt="Visual marker">
                          </div>
                        </div>   
                      </div>

                      <div class="bn-accordion__item">
                        <div class="bn-accordion__header">
                          <div class="bn-accordion__title">Rhizome</div>
                          <div class="bn-accordion__count">02</div>
                        </div>

                        <div class="bn-accordion__content">
                          <div class="bn-accordion__desc">The structure of the internet is rhizomatic. Drawn from the philosophy of Deleuze and Guattari, a rhizome is a post-structural theory of knowledge that describes natural principles of connection and multiplicity. With no beginning, end, center or direction, such a network is ‘rhizomatically’ interconnected, where any node can connect with any other node to create both structured and fluid grids.</div>
                          <div class="bn-accordion__media">
                            <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/visual-design/rhizome.png" alt="Rhizome">
                          </div>
                        </div>   
                      </div>

                      <div class="bn-accordion__item">
                        <div class="bn-accordion__header">
                          <div class="bn-accordion__title">Interoperable line</div>
                          <div class="bn-accordion__count">03</div>
                        </div>

                        <div class="bn-accordion__content">
                          <div class="bn-accordion__desc">Lines, solid and gradient weave through and interact with text, visually evoking the interoperable nature of beckn. Adaptable to various sizes, the clear thick strokes emphasize the clarity of purpose and foundational impact of beckn across the digital economy. </div>
                          <div class="bn-accordion__media">
                            <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/visual-design/interoperable-line.png" alt="Interoperable line">
                          </div>
                        </div>  
                      </div>

                      <div class="bn-accordion__item">
                        <div class="bn-accordion__header">
                          <div class="bn-accordion__title">Shapes</div>
                          <div class="bn-accordion__count">04</div>
                        </div>

                        <div class="bn-accordion__content">
                          <div class="bn-accordion__desc">At the core of our visual identity lie three solid-colored shapes: a blue circle, a red square, and a green pentagon, each representing different network participants like consumers, businesses, and governments. The shapes are connected by varied lines—solid, dotted, and gradient—illustrating the diverse yet unified nature of open networks.</div>
                          <div class="bn-accordion__media">
                            <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/visual-design/shapes.png" alt="Shapes">
                          </div>
                        </div>   
                      </div>

                      <div class="bn-accordion__item">
                        <div class="bn-accordion__header">
                          <div class="bn-accordion__title">Noto serif</div>
                          <div class="bn-accordion__count">05</div>
                        </div>

                        <div class="bn-accordion__content">
                          <div class="bn-accordion__desc">Known for its universal compatibility, the Noto Serif font family is both a design and purpose-driven choice, extolling our commitment to inclusivity and universal access. Developed collaboratively in a transparent, open-source process by Google, Monotype, and Adobe, Noto covers over 1,000 languages and 150 writing systems, ensuring readability across all our communications.</div>
                          <div class="bn-accordion__media">
                            <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/visual-design/noto-serif.png" alt="Noto serif">
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <!-- Visual Design: End -->
          <section id="newspanel" class="bn-section bn-section--home-newspanel">
            <div class="container">
              <div class="bn-newschannels">
                <div class="row justify-content-center">
                  <div class="col-md-9">
                    <div id="newsChannelsTop" class="bn-newschannels__content swiper-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Forbes India <span class="bn-newschannel__year">2023</span></span>
                              <h4 class="bn-newschannel__title">“Beckn Protocol is perhaps the least well-known project outside of tech circles, but is likely the most impactful of all work Nilekani has championed since Aadhaar”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Hindustan Times <span class="bn-newschannel__year">2023</span></span>
                              <h4 class="bn-newschannel__title">“India has built a protocol that can reshape global e-commerce…”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Mint <span class="bn-newschannel__year">2023</span></span>
                              <h4 class="bn-newschannel__title">“Think of it as a box of Lego bricks… Beckn opens this market up dramatically, allowing one to get these blocks from a wide variety of vendors”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Atlantic Council <span class="bn-newschannel__year">2023</span></span>
                              <h4 class="bn-newschannel__title">“It will enable small sellers to participate in high-growth digital commerce while expanding the market dramatically”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Deccan Herald <span class="bn-newschannel__year">2022</span></span>
                              <h4 class="bn-newschannel__title">“The absence of a middle (in Beckn enabled networks) means consumers directly interact and transact with service providers without having to pay more”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Fortune <span class="bn-newschannel__year">2022</span></span>
                              <h4 class="bn-newschannel__title">“Open standards of ONDC are an adapted version of Beckn Protocol… that can be used even beyond retail commerce for sectors such as mobility and health”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Financial Express <span class="bn-newschannel__year">2022</span></span>
                              <h4 class="bn-newschannel__title">“The (Kochi Open Mobility) Network has combined several taxi associations and Kochi metro booking systems into an integrated solution… using Beckn Protocol”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">Reuters <span class="bn-newschannel__year">2021</span></span>
                              <h4 class="bn-newschannel__title">“Beckn may emerge as 2021’s Robin Hood technology superstar”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->

                        <div class="swiper-slide">
                          <div class="bn-newschannel">
                            <div class="bn-newschannel__content">
                              <span class="bn-newschannel__brand-year">The Economic Times <span class="bn-newschannel__year">2020</span></span>
                              <h4 class="bn-newschannel__title">“Why you should pay attention to an early-stage tech protocol [Beckn] in Bengaluru”</h4>
                            </div>
                          </div>
                        </div>  
                        <!-- Newschannel: End -->
                      </div>
                    </div>
                  </div>
                </div>

                <div id="newsChannelBrandsThumbs" class="bn-newschannel__brands swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/forbes.svg
                        " alt="Forbes">
                          <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/forbes-grayscale.svg
                        " alt="Forbes">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/hindustan.svg
                    " alt="hindustan">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/hindustan-grayscale.svg
                      " alt="hindustan Times">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/mint.png
                    " alt="mint">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/mint-grayscale.png
                      " alt="mint">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/atlantic-council.png
                    " alt="Atlantic council">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/atlantic-council-grayscale.png
                      " alt="Atlantic Council">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/deccan-herald.svg
                    " alt="Deccan Herald">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/deccan-herald-grayscale.svg
                      " alt="Deccan Herald">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/fortune.svg
                    " alt="Fortune">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/fortune-grayscale.svg
                      " alt="Fortune">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/financial-express.svg
                    " alt="Financial Express">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/financial-express-grayscale.svg
                      " alt="Financial Express">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/reuters.svg
                    " alt="Reuters">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/reuters-grayscale.svg
                      " alt="Reuters">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="bn-newschannel__brand">
                        <img class="color" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/economic-times.svg
                    " alt="Economic Times">
                        <img class="grayscale" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/home/newschannel/economic-times-grayscale.svg
                      " alt="Economic Times">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- NewsPanel: End -->
        </main>
        <!-- Main: End -->
        <footer class="bn-footer">
          <div class="bn-footer__inner">
            <div class="bn-footer__top">
              <div class="row g-0">
                <div class="col-lg-3 col-xxl-3">
                  <h2 class="bn-footer__title"><i>Stay updated</i> on all things beckn</h2>
                  <p class="bn-footer__desc">Subscribe to our newsletter for the latest beckn-powered news, events and more!</p>
                </div>
                <div class="col-md-9 col-lg-7 offset-lg-1 col-xl-8">
                   <div class="bn-footer__subscription">
                    <div class="bn-footer__subscription-form">
<!--                       <input class="bn-footer__subscription-form-input" placeholder="Enter email address"/>
                      <div class="bn-footer__subscription-form-btn">Subscribe</div> -->
						<?php display_subscribe_form(); ?>
                    </div>
                    <p class="bn-footer__subscription-desc col-lg-5">You can unsubscribe at any time using the link in our emails.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Footer Top: End -->
            <div class="bn-footer__bottom">
              <div class="row">
                <div class="col-lg-4 d-none d-lg-flex flex-column justify-content-end">
                  <!-- <div class="bn-footer__brand">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/global/beckn-footer.svg" alt="Beckn">
                  </div> -->
                </div>
                <div class="col-lg-8 position-relative">
                  <div class="row g-0 row-cols-2 row-cols-sm-3 row-cols-lg-6 bn-footer__row justify-content-lg-between">
                    <div class="col bn-footer__col">
                      <h4 class="bn-footer__subtitle">Developers</h4>
                      <ul class="bn-footer__list">
                        <li><a href="<?php echo site_url(); ?>/projects/" class="bn-footer__list-link">Projects</a></li>
                        <li><a href="<?php echo site_url(); ?>/governance/" class="bn-footer__list-link">Governance</a></li>
                        <li><a href="<?php echo site_url(); ?>/beckn-onix/" class="bn-footer__list-link">Beckn ONIX</a></li>
                        <li><a href="<?php echo site_url(); ?>/faqs/" class="bn-footer__list-link">FAQ</a></li>
                      </ul>
                    </div>

                    <div class="col bn-footer__col">
                      <h4 class="bn-footer__subtitle">Community</h4>
                      <ul class="bn-footer__list">
                        <li><a href="<?php echo site_url(); ?>/community/" class="bn-footer__list-link">Beckn Open Collective</a></li>
                        <li><a href="<?php echo site_url(); ?>/events/" class="bn-footer__list-link">Events</a></li>
                        <li><a href="https://bit.ly/bocWebInvite" class="bn-footer__list-link">Discord</a></li>
                      </ul>
                    </div>

                    <div class="col bn-footer__col">
                      <h4 class="bn-footer__subtitle">Live Networks</h4>
                      <ul class="bn-footer__list">
                        <li><a href="<?php echo site_url(); ?>/all-projects/" class="bn-footer__list-link">All Projects</a></li>
                        <li><a href="<?php echo site_url(); ?>/resources/" class="bn-footer__list-link">Concept papers</a></li>
                      </ul>
                    </div>

                    <div class="col bn-footer__col">
                      <h4 class="bn-footer__subtitle">Beckn 101</h4>
                      <ul class="bn-footer__list">
                        <li><a href="https://blog.becknprotocol.io/" class="bn-footer__list-link">Blog</a></li>
                        <li><a href="https://www.youtube.com/@becknprotocol" class="bn-footer__list-link">Videos</a></li>
                      </ul>
                    </div>

                    <div class="col bn-footer__col">
                      <h4 class="bn-footer__subtitle"><a href="<?php echo site_url(); ?>/about/">About</a></h4>
                      <h4 class="bn-footer__subtitle"><a href="<?php echo site_url(); ?>/sharing/">Code of sharing</a></h4>
                      <h4 class="bn-footer__subtitle"><a href="<?php echo site_url(); ?>/license/">License</a></h4>
                    </div>
                  </div>                
                </div>
              </div>

              <div class="bn-footer__brand-social">
                <div class="bn-footer__brand">
                  <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/global/logo/beckn-footer.svg" alt="Beckn">
                </div>
                
                <ul class="bn-footer__social">
                  <li>
                    <a href="https://github.com/beckn" target="_blank">
                      <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/github.svg" alt="Github">
                    </a>
                  </li>

                  <li>
                    <a href="https://bit.ly/bocWebInvite" target="_blank">
                      <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/discord.svg" alt="Discord">
                    </a>
                  </li>

                  <li>
                    <a href="https://www.linkedin.com/company/becknprotocol/" target="_blank">
                      <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/linkedin.svg" alt="Linked In">
                    </a>
                  </li>
                  
                  <li>
                    <a href="https://www.youtube.com/@becknprotocol">
                      <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/youtube.svg" alt="Youtube">
                    </a>
                  </li>
                  
                  <li>
                    <a href="https://www.instagram.com/becknprotocol/">
                      <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/instagram.svg" alt="Instagram">
                    </a>
                  </li>

                  <li>
                    <a href="https://twitter.com/BecknProtocol" target="_blank">
                      <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/x.svg" alt="X">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Footer Bottom: End -->
          </div>
          <div class="bn-footer__info">
            <div class="bn-footer__privacy-terms">
              <a href="<?php echo site_url(); ?>/community-guidelines/">Community Guidelines</a>
<!--               <a href="<?php echo site_url(); ?>/community-guidelines/">Terms of Service</a> -->
            </div>

            <p>
              © 2025 all rights reserved <br> Designed by Small Town Folk /<a href="http://creativenuts.in/" target="_blank"> Developed by Creative Nuts</a>
            </p>
          </div>
        </footer>
        <!-- Footer: End -->
        
      </div>
    </div>
    <!-- Smoother: End -->
  </div>
  
  <div id="floatBtn" class="bn-floatbtn" type="button" data-bs-toggle="modal" data-bs-target="#videoModal">
    <div class="bn-floatbtn__play">
      <div class="bn-floatbtn__play-disc">
        <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/floatbtn/play-disc.svg" alt="">
        <div class="bn-floatbtn__play-btn">
          <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/floatbtn/play-btn.svg" alt="">
        </div>
      </div>
      <div class="bn-floatbtn__play-content">
        <div class="bn-floatbtn__play-title">Leap ahead!</div>
        <div class="bn-floatbtn__play-duration">0:32</div>
      </div>
    </div>
  </div>
  <!-- Float Btn: ENd -->

  <!-- Modal: Start -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/close.svg" alt="">
          </button>
        </div>
        <div class="modal-body">
          <!-- <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/popup-frame.png" alt="" class="img-fluid"> -->
          <div class="ratio ratio-16x9">
            <!-- <iframe src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/Beckn-showcase-animation-film-v5-250107.mp4" allowfullscreen></iframe> -->
            <video class="bn-brand-video" id='brandVideo' controls="controls" preload='none' width="600" poster="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/popup-frame.png">
              <source id='mp4' src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/Beckn-showcase-animation-film-v5-250107.mp4" type='video/mp4' />
            </video>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: End -->
  <!-- Body Scripts: Start -->
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/gsap.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/ScrollSmoother.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/ScrollTrigger.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/MotionPathPlugin.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/SplitText.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/DrawSVGPlugin.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/ScrollSmoother.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/main.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/home-page.js"></script>
  <!-- Body Scripts: End -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      function accordion() {
        const accordionItems = document.querySelectorAll('.bn-accordion .bn-accordion__item');
        const itemActiveClass = 'bn-accordion__item--active';

        accordionItems[0].classList.add(itemActiveClass)

        accordionItems.forEach(item => {

          item.addEventListener('mouseenter', () => {
            removeAllActiveClass();
            item.classList.add(itemActiveClass)
            // setMaxHeight(item);
          })
          item.addEventListener('mouseLeave', () => {
            item.classList.remove(itemActiveClass)
          })
        })

        function removeAllActiveClass() {
          accordionItems.forEach(item => item.classList.remove(itemActiveClass))
        }
        

        function setMaxHeight(item) {
          const accordionItemBody = item.querySelector('.bn-accordion__content');
          if(item.classList.contains(itemActiveClass)) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
          }
          else {
            accordionItemBody.style.maxHeight = 0;
          }
        }
      }

      accordion()

      const floatAnim = (triggerEl ) => {
        // Float Btn: Start
        const floatBtn = document.querySelector('#floatBtn'),
          floatBtnDisc = floatBtn.querySelector('.bn-floatbtn__play-disc');

        gsap.set(floatBtn, { opacity: 0, y: 100 });
        gsap.set(floatBtnDisc, { rotate: -115 });

        gsap.timeline()
          .to(floatBtn, { opacity: 1, y: 0, duration: .8, delay: .6 })
          .to(floatBtnDisc, { rotate: 0, duration: 1, delay: .06 }, "<")

        gsap.timeline({
          scrollTrigger: {
            trigger: triggerEl,
            start: "top top",
            end: "top +=100",
            // markers: true,
            toggleActions: "play none none reverse",
          }
        })
          .to(floatBtn, { opacity: 0, y: 100, duration: .8, })
          .to(floatBtnDisc, { rotate: -115, duration: 1 }, "<")
      }
      // Float Btn: End

      floatAnim('.bn-section--home-future');
    })
  </script>
</body>
</html>