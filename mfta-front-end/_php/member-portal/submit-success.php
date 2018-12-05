<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $page_title = 'Member Portal';
  $section = 'member-portal';

  $is_donor = true;
  $is_recipient = false;
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
                <h2 class="h1 text-primary"><span class="far fa-check-circle text-success"></span><span class="mx-1"></span>Thank You</h2>
              </header>

              <p class="mb-4">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient.</p>

              <p><a href="#" class="text-info fs-md" title="Member Portal Home">Member Portal Home</a></p>

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