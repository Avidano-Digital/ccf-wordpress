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
                <h1>Modals</h1>
              </header>
              
              <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient.</p>
              
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch Modal
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered " role="document">
                      <div class="modal-content border-0 shadow-sm">
                          <div class="modal-header d-flex align-items-center">
                              <h1 class="modal-title h5 mb-0" id="language-title">Modal Title</h1>
                              <button  class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                                  <span class="fas fa-times"></span>
                                  <span class="sr-only">Close</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor
                                  parturient.</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>

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
