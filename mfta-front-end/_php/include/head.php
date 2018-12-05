<a class="sr-only sr-only-focusable tab-skipper" href="#content" id="skip-main-navigation" title="Skip Main Navigation">Skip Main Navigation</a>

<?php include_once($root . '/include/nyc-top-header.php'); ?>

<header id="global-header" role="banner">

  <div class="wrap-header">

    <div class="container-fluid wide">

      <!-- row 01 -->
      <div class="row align-items-center">

        <div id="wrap-logo" class="col-lg py-3">
          <a class="d-inline-block" href="/" title="Home">
            <img src="/images/mfta-logo.svg" alt="Materials for the Arts Logo">
          </a>
        </div>
        <!-- .col -->

        <!-- separator -->
        <div class="col-12 border-top d-lg-none"></div>

        <div class="col-lg-auto">

          <!-- row 02 -->
          <div class="row no-gutters justify-content-between py-3">

            <!-- Menu Toggle -->
            <div class="col-auto d-flex d-lg-none">

              <?php if($section != 'member-portal' ) : ?>
              
              <button class="btn no-btn-style" 
                type="button" 
                data-toggle="collapse"
                data-target="#device-menu"
                aria-controls="device-menu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                  <span class="d-flex align-items-center">
                    <span class="fas fa-bars fa-fw fs-lg"></span>
                    <span class="px-2 fs-rg">Menu</span>
                  </span>
                  <span class="sr-only">Main Navigation</span>
              </button>

              <?php else : ?>

              <button class="btn no-btn-style"
                type="button"
                data-toggle="collapse"
                data-target="#aside-nav"
                aria-controls="aside-nav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                  <span class="d-flex align-items-center">
                    <span class="fas fa-bars fa-fw fs-lg"></span>
                    <span class="px-2 fs-rg">Menu</span>
                  </span>
                  <span class="sr-only">Main Navigation</span>
              </button>

              <?php endif; ?>

            </div>
            <!-- .col -->

            <div class="col-auto">

              <ul class="link-list horizontal">
                <li>
                  <!-- Member Login -->
                  <?php if($section != 'member-portal' ) : ?>
                    <a class="btn btn-secondary text-primary" href="/member-portal">Log In</a>
                  <?php else : ?>
                    <a class="btn btn-secondary text-primary" href="/">Log Out</a>
                  <?php endif; ?>
                </li>
                <li>
                  <!-- Language -->
                  <button class="btn no-btn-style"
                    type="button"
                    data-toggle="collapse"
                    data-target="#global-language"
                    aria-controls="global-language"
                    aria-expanded="false"
                    aria-label="Toggle Language">
                      <span class="fas fa-language fa-fw fs-lg"></span>
                      <span class="sr-only">Language</span>
                  </button>
                </li>
                <?php if($section != 'member-portal' ) : ?>
                <li>
                  <!-- Search -->
                  <button class="btn no-btn-style" 
                    type="button"
                    data-toggle="collapse"
                    data-target="#global-search"
                    aria-controls="global-search"
                    aria-expanded="false"
                    aria-label="Toggle Search">
                      <span class="fas fa-search fa-fw fs-lg"></span>
                      <span class="sr-only">Global Search</span>
                  </button>
                </li><?php endif; ?>
              </ul>

            </div>
            <!-- .col -->

          </div>
          <!-- .row -->

        </div>
        <!-- .col -->

      </div>
      <!-- .row -->

    </div>
    <!-- .container-fluid -->

  </div>
  <!-- .wrap-header -->

  <?php include($path . 'language.php'); ?>
  <?php include($path . 'search-bar.php'); ?>

  <?php if($section != 'member-portal' ) : ?>

  <hr class="d-none d-lg-block">

  <?php endif; ?>

  <div class="container-fluid wide d-none d-lg-block px-0">

    <nav class="nav nav-pills" id="nav-primary" role="navigation">

      <?php 

        if( $section != 'member-portal' ){
          include($path . 'nav-primary.php');
        }
  
      ?>

    </nav>

  </div>

  <div id="device-menu" class="primary-navigation-device collapse d-lg-none">
    <hr>
    <nav class="nav d-flex flex-column py-3" role="navigation">
      <?php include($path . 'nav-primary.php'); ?>
    </nav>
  </div>

</header>