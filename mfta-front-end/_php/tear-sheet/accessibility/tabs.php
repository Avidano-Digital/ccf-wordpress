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
                <h1>Tabs</h1>
              </header>

              <div class="mb-5">

                <nav class="nav nav-pills responsive-sm mb-4" role="tablist">

                  <a class="nav-item nav-link flex-sm-fill text-sm-center active" 
                    id="tab-btn-01-a"
                    href="#tab-01-a"
                    data-toggle="pill"
                    aria-controls="tab-01-a"
                    aria-selected="true"
                    role="tab">
                      Tab One
                  </a>

                  <a class="nav-item nav-link flex-sm-fill text-sm-center" 
                    id="tab-btn-01-b"
                    href="#tab-01-b"
                    data-toggle="pill"
                    aria-controls="tab-01-b"
                    aria-selected="false"
                    role="tab">
                      Tab Two
                  </a>

                  <a class="nav-item nav-link flex-sm-fill text-sm-center" 
                    id="tab-btn-01-c"
                    href="#tab-01-c"
                    data-toggle="pill"
                    aria-controls="tab-01-c"
                    aria-selected="false"
                    role="tab">
                      Tab Three
                  </a>

                </nav>

                <div class="tab-content" id="tabs-01-content">

                  <div class="tab-pane fade show active" id="tab-01-a" aria-labelledby="tab-btn-01-a" role="tabpanel">
                    <h2 class="h3">Tab One Content</h2>
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>

                  <div class="tab-pane fade" id="tab-01-b" aria-labelledby="tab-btn-01-b" role="tabpanel">
                    <h2 class="h3">Tab Two Content</h2>
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>

                  <div class="tab-pane fade" id="tab-01-c" aria-labelledby="tab-btn-01-c" role="tabpanel">
                    <h2 class="h3">Tab Three Content</h2>
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>
                </div>

              </div><!-- #tabs 01 -->

              <div class="mb-5">

                <nav class="nav nav-tabs responsive-md mb-4" role="tablist">

                  <a class="nav-item nav-link active" 
                  id="tab-btn-02-a"
                  href="#tab-02-a"
                  data-toggle="tab"
                  aria-controls="tab-02-a"
                  aria-selected="true"
                  role="tab">
                    Tab One
                  </a>

                  <a class="nav-item nav-link" 
                  id="tab-btn-02-b"
                  href="#tab-02-b"
                  data-toggle="tab"
                  aria-controls="tab-02-b"
                  aria-selected="false"
                  role="tab">
                    Tab Two
                  </a>

                  <a class="nav-item nav-link" 
                  id="tab-btn-02-c"
                  href="#tab-02-c"
                  data-toggle="tab"
                  aria-controls="tab-02-c"
                  aria-selected="false"
                  href="#tab-02-c"
                  role="tab">
                    Tab Three
                  </a>

                </nav>

                <div class="tab-content" id="tabs-02-content">

                  <div class="tab-pane fade show active" id="tab-02-a" aria-labelledby="tab-btn-02-a" role="tabpanel">
                    <h3>Tab One Content</h3>
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>

                  <div class="tab-pane fade" id="tab-02-b" aria-labelledby="tab-btn-02-b" role="tabpanel">
                    <h3>Tab Two Content</h3>
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>

                  <div class="tab-pane fade" id="tab-02-c" aria-labelledby="tab-btn-02-c" role="tabpanel">
                    <h3>Tab Three Content</h3>
                    <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
                  </div>
                </div>

              </div><!-- #tabs 02 -->

            </section>

          </div><!-- .narrow -->

        </div><!-- .col -->

      </div><!-- .row --> 

    </div><!-- .container -->

  </article>

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>