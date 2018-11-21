<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'tear-sheet';
  $page_title = 'Tear Sheet';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">

    <?php include_once($root . '/include/sub-page-header.php'); ?>

    <article role="article">

        <div class="container-fluid wide">

            <div class="row">

                <div class="col-lg-4 col-xl-3 py-3 py-lg-5">
                    <?php include_once($root . '/tear-sheet/include/aside-nav.php'); ?>
                </div>

                <div class="col-lg-8 col-xl-9 py-3 py-lg-5 px-lg-5 bg-white" id="article-content">

                    <div class="narrow">

                        <section class="mb-5">

                            <header class="mb-4">
                                <h2 class="h1 text-center text-primary">Buttons</h2>
                            </header>

                            <p>Large buttons:</p>

                            <div class="row matrix-border mb-5">

                                <div class="col-md-4">
                                    <button type="button" class="btn btn-lg btn-block btn-primary text-secondary">Primary</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-lg btn-block btn-secondary text-primary">Secondary</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-lg btn-block btn-info text-accent">Info</button>
                                </div>

                            </div>
                            <!-- .row -->

                            <p>Regular buttons (no class):</p>

                            <div class="row matrix-border">

                                <div class="col-md-4">
                                    <button type="button" class="btn btn-block btn-primary text-secondary">Primary</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-block btn-secondary text-primary">Secondary</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-block btn-info text-accent">Info</button>
                                </div>

                            </div>
                            <!-- .row -->

                        </section>

                        <section class="mb-5">

                            <header class="mb-4">
                                <h2 class="h1 text-center text-primary">Alerts</h2>
                            </header>

                            <div class="alert alert-success" role="alert">
                                <p class="alert-heading"><span class="fas fa-check-circle mr-2"></span> Thank you for your application</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consequuntur eius ex cum adipisci sint reiciendis
                                    odit doloremque.</p>
                            </div>

                            <div class="alert alert-warning" role="alert">
                                <p class="alert-heading"><span class="fas fa-exclamation-circle mr-2"></span>Your application is pending approval</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consequuntur eius ex cum adipisci sint reiciendis
                                    odit doloremque.</p>
                            </div>

                            <div class="alert alert-danger" role="alert">
                                <p class="alert-heading">
                                    <span class="fas fa-times-circle"></span>
                                    <span class="px-2">Your application was not sent</span>
                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consequuntur eius ex cum adipisci
                                    sint reiciendis
                                    odit doloremque.</p>
                            </div>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <p><span class="fas fa-check-circle mr-2"></span>Lorem ipsum dolor sit amet <a href="#" title="consectetur adipisicing elit">consectetur adipisicing elit</a>.</p>
                                    </div>
                                    <!-- .col -->
                                    <div class="col-auto text-right">
                                        <button class="no-btn-style" type="button" data-dismiss="alert" aria-label="Close">
                                            <span class="fas fa-times"></span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <!-- .col -->
                                </div>
                                <!-- .row -->

                            </div>
                            <!-- .alert -->

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <p><span class="fas fa-exclamation-circle mr-2"></span>Lorem ipsum dolor sit amet <a href="#" title="consectetur adipisicing elit">consectetur adipisicing elit</a>.</p>
                                    </div>
                                    <!-- .col -->
                                    <div class="col-auto text-right">
                                        <button class="no-btn-style" type="button" data-dismiss="alert" aria-label="Close">
                                            <span class="fas fa-times"></span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <!-- .col -->
                                </div>
                                <!-- .row -->

                            </div>
                            <!-- .alert -->

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <p><span class="fas fa-times-circle fa-sm mr-2"></span>Lorem ipsum dolor sit amet <a href="#" title="consectetur adipisicing elit">consectetur adipisicing elit</a>.</p>
                                    </div>
                                    <!-- .col -->
                                    <div class="col-auto text-right">
                                        <button class="no-btn-style" type="button" data-dismiss="alert" aria-label="Close">
                                            <span class="fas fa-times"></span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <!-- .col -->
                                </div>
                                <!-- .row -->

                            </div>
                            <!-- .alert -->


                            <div class="alert alert-danger alert-dismissible fade show py-1" role="alert">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <p><span class="fas fa-times-circle fa-sm mr-2"></span>Lorem ipsum dolor sit amet <a href="#" title="consectetur adipisicing elit">consectetur adipisicing elit</a>.</p>
                                    </div>
                                    <!-- .col -->
                                    <div class="col-auto text-right">
                                        <button class="no-btn-style" type="button" data-dismiss="alert" aria-label="Close">
                                            <span class="fas fa-times"></span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <!-- .col -->
                                </div>
                                <!-- .row -->

                            </div>
                            <!-- .alert -->

                        </section>

                    </div>
                    <!-- .narrow -->

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .container -->

    </article>

</main>
<!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>