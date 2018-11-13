<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php the_title(); ?> • Cheetah Conservation Fund</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header id="global-header">
        
        <div class="container-fluid shadow-sm z-index-900">

            <div class="row align-items-center justify-content-between">

                <div id="wrap-logo" class="col-md-auto text-center text-md-left py-2">
                    <a class="d-inline-block" href="/canada/" title="Home">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ccf-canada-logo.svg" alt="Cheetah Conservation Fund logo">
                    </a>
                </div>
                <!-- .col -->

                <!-- separator -->
                <div class="col-12 border-top d-md-none"></div>

                <div class="col d-xl-none py-2">

                    <div class="row align-items-center justify-content-between justify-content-md-end">

                        <div class="col-auto order-md-last">

                            <button class="btn no-btn-style fs-lg" type="button" data-toggle="collapse" data-target="#mobile-menu"
                                aria-expanded="false" aria-controls="mobile-menu">
                                <span class="fas fa-bars"></span>
                                <span class="sr-only">Main Navigation</span>
                            </button>

                        </div>
                        <!-- .col -->

                        <div class="col-auto">

                            <ul class="link-list horizontal no-reverse">
                                <li>
                                    <a class="btn btn-primary donate" href="#" title="Donate">Donate</a>
                                </li>
                            </ul>

                        </div>
                        <!-- .col -->

                    </div>
                    <!-- .row -->

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