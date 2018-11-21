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
        
        <div class="col-lg-4 col-xl-3 collapse d-lg-block py-3 py-lg-5 bg-light" id="aside-nav">
          <?php include_once($root . '/include/aside-member-portal.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-5 px-lg-5 bg-white" id="article-content">
        
          <div class="narrow">

            <section class="mb-5">

              <header class="mb-4 text-center">
                <h2 class="h1 text-primary">Direct Donations</h2>
              </header>

              <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient.</p>

            </section>

            <section class="mb-5">

              <form>

                <div class="row matrix-gutter mb-5">
                  <div class="col-md-6">
                      <label class="sr-only" for="dd-search">Search Direct Donations</label>
                      <input type="text" class="form-control" placeholder="Search..." id="dd-search">
                  </div>
                  <!-- .col -->
                  <div class="col-md-4">
                    <label class="sr-only" for="dd-sort">Sort-order</label>
                    <select id="dd-sort" class="form-control">
                      <option selected>Newest-Oldest</option>
                      <option >Oldest-Newest</option>
                      <option>A-Z</option>
                      <option>Z-A</option>
                    </select>
                  </div>
                  <!-- .col -->
                  <div class="col-md-2">
                    <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-sync-alt"></i></button>
                  </div>
                  <!-- .col -->
                </div>
                <!-- .row -->

              </form>

              <div class="dd-results mobile-margin-offset-x">

                <?php 
                  $i = 1;
                  while ($i <= 12){
                    include($root . '/include/_template_parts/direct-donation.php');
                    $i++;
                  }
                ?>

              </div>
              <!-- .dd-results -->

            </section>

          </div>
          <!-- .narrow -->

        </div><!-- .col -->

      </div><!-- .row --> 

    </div><!-- .container -->

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>