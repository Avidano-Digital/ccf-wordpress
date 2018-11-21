<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'member-portal';
  $page_title = 'Member Portal';

  $is_donor = true;
  $is_recipient = true;
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">

  <?php include_once($root . '/include/sub-page-header-member-portal.php'); ?>

    <div class="container-fluid wide">

      <div class="row">
        
        <div class="col-lg-4 col-xl-3 collapse d-lg-block py-3 py-lg-5 bg-light" id="aside-nav" >
          <?php include_once($root . '/include/aside-member-portal.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-5 px-lg-5 bg-white" id="article-content">
        
          <div class="narrow">

            <section class="mb-5">

              <header class="mb-4">
                <h2 class="h1 text-center text-primary">Hi, John</h2>
              </header>

              <p>Welcome to the new MFTA member portal. Our goal is to serve you better and more efficiently. Please <a href="#">let us know</a> if you have any questions.

            </section>

            <section class="mb-5">
              <div class="card border border-info">
                <div class="card-header bg-info fs-md text-white py-3">
                  <span class="fas fa-exclamation-circle"></span><span class="mx-2">Announcements</span> 
                </div>
                <div class="card-body">
                  <h4 class="card-title text-info">Lorem ipsum dolor sit amet consectetur</h4>
                  <p class="card-text fs-md">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient
                cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum
                ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat</p>
                </div>
              </div>
            </section>

            <section class="mb-5">

              <h2 class="mb-4">My Notifications</h2>

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <div class="row no-gutters align-items-center">
                      <div class="col">
                          <p class="side-by-side">
                                <span>
                                    <span class="fas fa-check-circle"></span>
                                </span>
                                <span>   
                                    Lorem ipsum dolor sit amet <a href="#" title="consectetur adipisicing elit">consectetur adipisicing elit</a>.
                                </span>
                            </p>
                      </div>
                      <!-- .col -->
                      <div class="col-auto px-1">

                        <button class="no-btn-style close-alert fs-md"
                          type="button" 
                          data-toggle="modal"
                          data-target="#delete-confirmation">
                            <span class="fas fa-trash"></span>
                            <span class="sr-only">Delete</span>
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

                        <p class="side-by-side">
                            <span>
                                <span class="fas fa-exclamation-circle"></span>
                            </span>
                            <span>
                                Lorem ipsum dolor sit amet
                                <a href="#" title="consectetur adipisicing elit">consectetur adipisicing elit</a>.
                            </span>
                        </p>

                      </div>
                      <!-- .col -->
                      <div class="col-auto px-1">

                        <button class="no-btn-style close-alert fs-md"
                          type="button" 
                          data-toggle="modal"
                          data-target="#delete-confirmation">
                            <span class="fas fa-trash"></span>
                            <span class="sr-only">Delete</span>
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

                        <p class="side-by-side">
                          <span>
                            <span class="fas fa-times-circle"></span>
                          </span>
                          <span>
                            Lorem ipsum dolor sit amet
                            <a href="#" title="consectetur adipisicing elit">consectetur adipisicing elit</a>.
                          </span>
                        </p>

                      </div>
                      <!-- .col -->
                      <div class="col-auto px-1">

                        <button class="no-btn-style close-alert fs-md"
                          type="button" 
                          data-toggle="modal"
                          data-target="#delete-confirmation">
                            <span class="fas fa-trash"></span>
                            <span class="sr-only">Delete</span>
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

        </div><!-- .col -->

      </div><!-- .row --> 

    </div><!-- .container -->

</main><!-- content -->

<?php include_once($root . '/include/confirm-delete.php'); ?>

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>
