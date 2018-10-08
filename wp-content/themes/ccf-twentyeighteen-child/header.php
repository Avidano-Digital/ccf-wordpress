<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Canada • Cheetah Conservation Fund</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="collapse" id="desktop-search">
        <?php include( 'include/site-search.php' ); ?>
    </div>

    <header id="global-header">
        
        <div class="container-fluid shadow-sm z-index-900">

            <div class="row align-items-center">

                <div id="logo" class="col-sm text-center text-sm-left py-2">
                    <a href="/canada/" class="home" title="Cheetah Conservation Fund home">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ccf-canada-logo.svg" alt="Cheetah Conservation Fund logo">
                    </a>
                </div>

                <div class="col-sm-auto d-flex d-sm-none align-items-center border-top py-2">

                    <button class="btn no-btn-style fs-lg" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false"
                        aria-controls="mobile-menu">
                        <span class="fas fa-bars"></span>
                        <span class="sr-only">Main Navigation</span>
                    </button>

                    <a class="btn btn-primary donate ml-auto" href="#" title="Donate">Donate</a>

                </div>
                <!-- .col -->

                <!-- col c -->
                <div class="col-sm-auto d-none d-sm-flex d-xl-none align-items-center">

                    <a class="btn btn-primary donate ml-auto" href="#" title="Donate">Donate</a>

                    <button class="btn no-btn-style ml-3" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false"
                        aria-controls="mobile-menu">
                        <span class="fas fa-bars fa-lg"></span>
                        <span class="sr-only">Main Navigation</span>
                    </button>

                </div>
                <!-- .col -->

                <div class="col-sm-auto d-none d-xl-flex flex-column align-self-stretch">

                    <div class="py-2 ml-auto">
                        <nav id="secondary-navigation">
                            <?php include( 'include/secondary-navigation.php' );?>
                        </nav>
                    </div>

                    <div class="mt-auto">
                        <nav id="primary-navigation-desktop">
                            <?php include( 'include/primary-navigation.php' );?>
                        </nav>
                    </div>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .container-fluid -->

        <div id="mobile-menu" class="collapse bg-white d-xl-none">
            <?php include( 'include/mobile-menu.php' ); ?>
        </div>

        <div class="container-fluid bg-info py-2 fs-md">

            <div class="row align-items-center">

                <div class="col-lg text-center text-lg-left">
                    <a class="text-primary font-weight-bold" href="/">Back to Cheetah.org</a>
                </div>
                <!-- .col -->
            
                <div class="col-lg-auto d-none d-lg-flex">
                    <p class="text-white f-sans-serif">Cheetah Conservation Fund Affiliate</p>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>

    </header>
    <!-- #global-header -->