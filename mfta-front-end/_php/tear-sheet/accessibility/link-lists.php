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
                                <h2 class="h1 text-center text-primary">Link lists</h2>
                            </header>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic dolor eveniet cupiditate et. Perspiciatis, eos quibusdam reprehenderit necessitatibus ex fugit.</p>

                        </section>
                        <section class="mb-5">
                            
                            <ul class="link-list">
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                            </ul>

                            <ul class="link-list horizontal">
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                            </ul>

                            <ul class="link-list horizontal justify-content-center">
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                            </ul>
                            
                            <ul class="link-list horizontal justify-content-end">
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                            </ul>

                            <ul class="link-list horizontal responsive-lg">
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                                <li><a href="#" title="Link">Link</a></li>
                            </ul>

                            <h3 class="side-by-side">
                                <span>
                                    icon
                                </span>
                                <span>   
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam sapiente numquam quas soluta aut labore esse non, inventore culpa ullam
                                </span>
                            </h3>

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