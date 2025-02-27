<?php
/*
Template Name: About Page Template
*/
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About - Beckn protocol</title>
	<meta name="description" content="Beckn Protocol (or Beckn in short) enables the creation of open, peer-to-peer decentralized networks for pan-sector economic transactions.The protocol can be">
	<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="About - Beckn protocol"/>
<meta property="og:description" content="Beckn Protocol (or Beckn in short) enables the creation of open, peer-to-peer decentralized networks for pan-sector economic transactions.The protocol can be"/>
<meta property="og:url" content="https://becknprotocol.io/"/>
<meta property="og:site_name" content="Beckn protocol"/>
	<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="About - Beckn protocol"/>
<meta name="twitter:description" content="Beckn Protocol (or Beckn in short) enables the creation of open, peer-to-peer decentralized networks for pan-sector economic transactions.The protocol can be"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>About - Beckn</title>
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/css/bootstrap/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/css/bootstrap/bootstrap-utilities.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/css/swiper/swiper.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/css/about-us.css">
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


<!--             <div class="bn-mobilenav__menu">
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
            </div>
 -->
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
          <!-- Float Btn: End -->
          <section class="bn-section bn-section--about-hero">
            <div class="bn-section__backdrop">
              <div class="bn-backdropblobs">
                <div class="bn-backdropblob"></div>
                <div class="bn-backdropblob"></div>
              </div>
            </div>
            <div class="container position-relative">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="bn-hero">
                    <h1 id="aboutHeroQuote" class="bn-hero__title">
                      <span class="first col-lg-8">Individuals, consumers, businesses, platforms and governments —</span>
                      <span class="offset-1 offset-lg-2"> beckn <i>builds for everyone</i></span>
                    </h1>
                    <p class="bn-hero__desc col-lg-8 offset-1 offset-lg-2">
                      A community-driven solution to closed ecosystems and platform-dependent markets, beckn levels the playing field for everyone. Consumers benefit from greater choice, sellers from wider markets, organizations and governments from more effective digital services.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Section One: End -->
          <section class="bn-section bn-section--about-core-values">
            <div class="bn-corevalues">
              <div class="container position-relative">
                <div class="bn-corevalues__header">
                  <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                      <h2 class="bn-section__title">
                        Our<i> core <br> values</i>
                      </h2>
                      <p class="bn-section__desc">
                        Beckn is built on five foundational principles that guide our vision toward an open, interconnected digital landscape.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bn-corevalues__track">
                  <svg class="bn-streakline" viewBox="0 0 1312 2048" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="zigZag" d="M367.5 1H422.5L638.5 223L173 461L720.5 702L94.5 882L620.5 1152L3 1782.5H276L390 2046.5H1311.5" stroke="url(#paint0_linear_2392_1243)" stroke-width="2" stroke-miterlimit="10"/>
                    <path class="streak-anim" d="M367.5 1H422.5L638.5 223L173 461L720.5 702L94.5 882L620.5 1152L3 1782.5H276L390 2046.5H1311.5" stroke="var(--primary-red)" stroke-width="2" stroke-miterlimit="10"/>
                    <defs>
                      <linearGradient id="paint0_linear_2392_1243" x1="1418.41" y1="1707.17" x2="90.9357" y2="1045.63" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#EBEBED"/>
                      <stop offset="0.37" stop-color="#0059C9"/>
                      <stop offset="0.608893" stop-color="#EBEBED"/>
                      </linearGradient>
                    </defs>
                  </svg>
              
                  <div class="bn-corevalues__content">
                    <div class="bn-corevalue" data-stop="4.8">
                      <h3 class="bn-corevalue__title">Be a force multiplier</h3>
                      <p class="bn-corevalue__desc">Beckn increases the inherent value of digital ecosystems by creating open digital playgrounds that restore the agency and potential of individuals, businesses and governments to build and scale on their own terms.</p>
                    </div>

                    <div class="bn-corevalue" data-stop="11.8">
                      <h3 class="bn-corevalue__title">Inclusive by design</h3>
                      <p class="bn-corevalue__desc">Small or big, local, global or glocal—beckn’s design is platform-agnostic, enabling equal access for participants of all sizes, ultimately expanding market opportunities across sectors, regions and demographics.</p>
                    </div>
                  
                    <div class="bn-corevalue" data-stop="19.8">
                      <h3 class="bn-corevalue__title">Leave a minimal footprint</h3>
                      <p class="bn-corevalue__desc">Beckn is a location-aware protocol with lightweight specifications that allow participants to build and operate seamless digital experiences without extracting power for itself in the process.</p>
                    </div>

                    <div class="bn-corevalue" data-stop="28.3">
                      <h3 class="bn-corevalue__title">Stay future flexible</h3>
                      <p class="bn-corevalue__desc">Beckn is built to evolve, using semantic interoperability to enable the quick integration of any new or emerging technology into existing ecosystems, platforms or networks.</p>
                    </div>
                  
                    <div class="bn-corevalue" data-stop="36.4">
                      <h3 class="bn-corevalue__title">Be movement weavers</h3>
                      <p class="bn-corevalue__desc">Beckn champions collaboration and innovation, fostering a vibrant community where every participant is a network weaver, interlacing individual and collective contributions into a rich tapestry of open networks.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Section Two: End -->
          <section class="bn-section bn-section--about-timeline">
            <div class="bn-backdrop">
              <div class="bn-backdrop__dot bn-backdrop__dot--1"></div>
              <div class="bn-backdrop__dot bn-backdrop__dot--2"></div>

              <svg id="mobileTimelineStreak" width="407" height="312" viewBox="0 0 407 312" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="14" cy="14" r="10" fill="#FF433A" stroke="#212121" stroke-width="8"/>
                <path class="extend-path" d="M20 14H59.5L118.5 60.5H370.5L110.5 311H406.5" stroke="url(#paint0_linear_3122_1233)" stroke-width="1.5" stroke-miterlimit="10"/>
                <circle cx="369" cy="60" r="10" fill="#FF433A" stroke="#212121" stroke-width="8"/>
                <defs>
                <linearGradient id="paint0_linear_3122_1233" x1="316.5" y1="288" x2="72.2264" y2="264.026" gradientUnits="userSpaceOnUse">
                <stop stop-color="#EBEBED"/>
                <stop offset="1" stop-color="#0059C9"/>
                </linearGradient>
                </defs>
              </svg>

            </div>



            <div class="container">
              <div class="d-flex justify-content-center justify-content-md-between">
                <h2 class="bn-section__title">
                  <span> The <i>evolution</i></span><br><span>of beckn</span>
                </h2>
                <div class="bn-timelinenav">
                  <div class="bn-timelinenav__prev">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-right.svg" alt="">
                  </div>
                  <div class="bn-timelinenav__next">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/arrow-right.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="bn-tiles">
                <div class="bn-tiles__wrapper">
                  <div class="bn-tile" data-year="2018">
                    <div class="bn-tile__date">November 2018</div>
                    <div class="bn-tile__title">An idea named ‘Beckn’ is born</div>
                  </div>

                  <div class="bn-tile" data-year="2019">
                    <div class="bn-tile__date">September 13, 2019</div>
                    <div class="bn-tile__title">The ‘Beckn Foundation’ is incorporated</div>
                  </div>

                  <div class="bn-tile" data-year="2021">
                    <div class="bn-tile__date">July 23, 2021</div>
                    <div class="bn-tile__title">The world’s first open mobility network KOMN goes live</div>
                  </div>

                  <div class="bn-tile" data-year="2021">
                    <div class="bn-tile__date">December 2021</div>
                    <div class="bn-tile__title">First transaction on ONDC, the world’s first open e-commerce network</div>
                  </div>

                  <div class="bn-tile" data-year="2022">
                    <div class="bn-tile__date">November 1, 2022</div>
                    <div class="bn-tile__title">Launch of peer-to-peer ride-hailing app Namma Yatri</div>
                  </div>

                  <div class="bn-tile"  data-year="2023">
                    <div class="bn-tile__date">July 22, 2023</div>
                    <div class="bn-tile__title">Beckn expands into unified financial services with DFSP</div>
                  </div>

                  <div class="bn-tile" data-year="2023">
                    <div class="bn-tile__date">October 17, 2023</div>
                    <div class="bn-tile__title">Open network for education and skilling (ONEST) goes live</div>
                  </div>

                  <div class="bn-tile" data-year="2023">
                    <div class="bn-tile__date">November 22, 2023</div>
                    <div class="bn-tile__title">Brazil’s first-ever city-wide open network Rede Belem Aberta launched</div>
                  </div>

                  <div class="bn-tile" data-year="2023">
                    <div class="bn-tile__date">December 2023</div>
                    <div class="bn-tile__title">Beckn powers the ITU GovStack E-Marketplace</div>
                  </div>

                  <div class="bn-tile" data-year="2024">
                    <div class="bn-tile__date">March 20, 2024</div>
                    <div class="bn-tile__title">Beckn-ONIX is demoed for rapid deployment of Beckn-enabled networks </div>
                  </div>

                  <div class="bn-tile" data-year="2024">
                    <div class="bn-tile__date">July 15, 2024</div>
                    <div class="bn-tile__title">Nepal's open network enables seamless possibilities across commerce and tourism</div>
                  </div>

                  <div class="bn-tile" data-year="2024">
                    <div class="bn-tile__date">Nov 2024</div>
                    <div class="bn-tile__title">Beckn XPLOR, a super engine for personalized user journeys launched</div>
                  </div>

                  <div class="bn-tile" data-year="2024">
                    <div class="bn-tile__date">December 15, 2024</div>
                    <div class="bn-tile__title">The beta trials of Unified Krishi Interface’s Nashik pilot go live</div>
                  </div>
                </div>
              </div>

              <div class="bn-timelineyears">
                <div data-year="2018" class="bn-timelineyear bn-timelineyear--active">
                  2018
                </div>
                <div data-year="2019" class="bn-timelineyear">
                  2019
                </div>
                <div data-year="2021" class="bn-timelineyear">
                  2021
                </div>
                <div data-year="2022" class="bn-timelineyear">
                  2022
                </div>
                <div data-year="2023" class="bn-timelineyear">
                  2023
                </div>
                <div data-year="2024" class="bn-timelineyear">
                  2024
                </div>
              </div>
            </div>
          </section>
          <!-- Section Three: End -->
          <section class="bn-section bn-section--about-team">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                  <h2 class="bn-section__title text-center normal">
                    Meet our <br class="d-lg-none"/><i>genesis custodians</i>
                  </h2>
                  <p class="bn-section__desc">
                    Meet the minds behind the protocol—the original authors, visionaries and founding members from the Foundation for Interoperability in Digital Economy (<a href="https://fide.org/" target="_blank" style="color: inherit;">FIDE</a>), the angel donor driving beckn's evolution and shaping the future of the internet.
                  </p>
                </div>
              </div>

              <div class="bn-teamcards">

                <figure class="bn-teamcard">
                  <div class="bn-teamcard__media">
                    <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/team/nandan-nilekani.png" alt="Nandan Nilekani" />
                  </div>
                  <figcaption class="bn-teamcard__content">
                    <h5 class="bn-teamcard__title">Nandan Nilekani</h5>
                    <p class="bn-teamcard__desc">Co-founder, FIDE</p>
                  </figcaption>
                </figure>
                
                <figure class="bn-teamcard">
                  <div class="bn-teamcard__media">
                    <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/team/pramod-varma.png" alt="Dr. Pramod Varma" />
                  </div>
                  <figcaption class="bn-teamcard__content">
                    <h5 class="bn-teamcard__title">Dr. Pramod Varma</h5>
                    <p class="bn-teamcard__desc">Co-author, Beckn</p>
                  </figcaption>
                </figure>

                <figure class="bn-teamcard">
                  <div class="bn-teamcard__media">
                    <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/team/sujith-nair.png" alt="Sujith Nair" />
                  </div>
                  <figcaption class="bn-teamcard__content">
                    <h5 class="bn-teamcard__title">Sujith Nair</h5>
                    <p class="bn-teamcard__desc">Co-author, Beckn</p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </section>
          <!-- Section Four: End -->
          <section class="bn-section bn-section--about-contributors overflow-hidden">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                  <h2 class="bn-section__title">
                    Meet our <i>contributors </i>
                  </h2>
                  <p class="bn-section__desc">Beckn is supported by a network of contributors and collaborators across domains, industries and academia, together committed to the development and adoption of interoperable open protocols as the universal standard for digital transactions.</p>
                </div>
              </div>
            </div>

            <div class="bn-contributors">
                <div class="bn-contributors__list" data-reversed="false">
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-1.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-2.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-3.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-4.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-5.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-6.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-7.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-8.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-9.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-10.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-11.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-12.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-13.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-14.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-15.png" alt=""></div>
                </div>

                <div class="bn-contributors__list" data-reversed="true">
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-16.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-17.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-18.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-19.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-20.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-21.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-22.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-23.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-24.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-25.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-26.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-27.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-28.png" alt=""></div>
                  <div class="bn-contributor bn-contributor--portrait"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-29.png" alt=""></div>
                  <div class="bn-contributor"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/contributors/img-30.png" alt=""></div>
                </div>
              </div>
          </section>
          <!-- Section Fifth: End -->
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
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/github.svg" alt="Github">
                    </a>
                  </li>

                  <li>
                    <a href="https://bit.ly/bocWebInvite" target="_blank">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/discord.svg" alt="Discord">
                    </a>
                  </li>

                  <li>
                    <a href="https://www.linkedin.com/company/becknprotocol/" target="_blank">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/linkedin.svg" alt="Linked In">
                    </a>
                  </li>
                  
                  <li>
                    <a href="https://www.youtube.com/@becknprotocol">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/youtube.svg" alt="Youtube">
                    </a>
                  </li>
                  
                  <li>
                    <a href="https://www.instagram.com/becknprotocol/">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/instagram.svg" alt="Instagram">
                    </a>
                  </li>

                  <li>
                    <a href="https://twitter.com/BecknProtocol" target="_blank">
                      <img src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/icons/x.svg" alt="X">
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
				© 2025 all rights reserved <br> Designed by Small Town Folk / <a href="http://creativenuts.in/" target="_blank">Developed by Creative Nuts</a>
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
	
	<?php 
	// function that runs when shortcode is called
function wpb_demo_shortcode() { 
  
// Things that you want to do.
$message = 'Hello world!'; 
  
// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('greeting', 'wpb_demo_shortcode');
	?>

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
            <!-- <iframe src="https://wordpress-1212353-5167265.cloudwaysapps.com/wp-content/uploads/2025/01/Beckn-showcase-animation-film-v5-250107.mp4" allowfullscreen></iframe> -->
            <video class="bn-brand-video" id='brandVideo' controls="controls" preload='none' width="600" poster="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/images/about/popup-frame.png">
              <source id='mp4' src="https://wordpress-1212353-5167265.cloudwaysapps.com/wp-content/uploads/2025/01/Beckn-showcase-animation-film-v5-250107.mp4" type='video/mp4' />
            </video>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: End -->

  <!-- Scripts: Start -->
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/gsap.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/ScrollTrigger.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/ScrollSmoother.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/MotionPathPlugin.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/SplitText.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/DrawSVGPlugin.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/ScrollToPlugin.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/Draggable.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/gsap/InertiaPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/main.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/becknprotocol/js/about-us-page.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
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

      floatAnim('.bn-section--about-timeline');
    })
  </script>
    <!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
      
      function stickyHeader() {
        const header = document.querySelector('.bn-header');
        const headerTop = header.offsetTop;

        window.addEventListener("scroll", function () {
          if(window.scrollY > headerTop) {
            header.classList.add('bn-header--sticky')
          }
          else if (window.scrollY < headerTop) {
            header.classList.remove('bn-header--sticky')
          }
        })
      }

      stickyHeader();
      window.addEventListener('resize', stickyHeader);

      function dropMenu() {
        const headerNavItems = header.querySelectorAll('.bn-header__nav .bn-header__nav-item');
        const headerDropdowns = header.querySelectorAll('.bn-header__nav .bn-header__dropmenu');

        const itemActiveClass = 'bn-header__nav-item--active';
        hideOtherMenus();


        function hideOtherMenus() {
          headerNavItems.forEach(item => item.classList.remove(itemActiveClass))
        }

        headerNavItems.forEach((item) => {
          item.addEventListener('mouseenter', () => {
            hideOtherMenus();
            item.classList.add(itemActiveClass);
          })
        })

        headerDropdowns.forEach((item) => {
          item.addEventListener('mouseleave', () => {
            const itemClass = '.'+itemActiveClass;
            item.closest(itemClass).classList.remove(itemActiveClass);
          })
        })

        document.addEventListener('click', (e) => {
          e.preventDefault();
          const headerItemClass = '.'+itemActiveClass;

          header.querySelector(headerItemClass)?.classList.remove(itemActiveClass);
        })

        window.addEventListener('scroll', () => {
          if(window.scrollY > document.documentElement.scrollTop) {
             hideOtherMenus()
          }
        })
      }

      dropMenu();

      const mobileMenu = () => {
        const mobileNav = document.querySelector('.bn-mobilenav');
        const mobileNavs = mobileNav.querySelectorAll('.bn-mobilenav__menu')
        const mobileMenuActiveClass = 'bn-mobilenav__menu--open';

        mobileNavs.forEach(menu => {   
          const links =  menu.querySelectorAll('.bn-mobilenav__list .bn-mobilenav__item')
          const listHeight = ((links[0].clientHeight + 16 ) * links.length) + 32;
          menu.style.setProperty('--list-height', listHeight); 
        })

        mobileNavs.forEach(menu => {
          menu.addEventListener('click', () => {
            closeOtherMenus()
            menu.classList.toggle(mobileMenuActiveClass)
          })
        })

        function closeOtherMenus() {
          mobileNavs.forEach(menu => {
            menu.classList.remove(mobileMenuActiveClass)
          })
        }

        function mobileMenuBtn() {
          const menuBtn = document.querySelector('.bn-header__mobile-menu');
          menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('bn-header__mobile-menu--close')
            mobileNav.classList.toggle('bn-mobilenav--open')
          })
        }

        mobileMenuBtn()

      }

      mobileMenu();
    })
  </script> -->
  <!-- Scripts: End -->
</body>
</html>