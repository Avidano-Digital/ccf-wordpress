<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'tear-sheet';
  $page_title = 'Tear Sheet';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" role="main">

  <?php include_once($root . '/include/sub-page-header.php'); ?>
  <?php include_once($root . '/tear-sheet/include/design-nav.php'); ?>

  <section class="featured-panel responsive-sm">

    <div class="card bg-primary">
      <img class="card-img opacity-50" src="/images/feature/art-interpretation.jpg" alt="Card image">
      <div class="card-img-overlay d-flex">
        <div class="align-self-center w-100">
          <div class="narrow text-white text-center">
            <h1 class="card-title display-4 font-weight-bold mb-3">NYC's Largest Creative Reuse Center</h1>
            <a href="#" class="btn btn-lg btn-secondary text-primary">Our Mission</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- .featured-panel -->

  <section class="featured-panel responsive-lg">

    <div class="card">
      <div class="overlay-gradient-x-white">
        <img class="card-img" src="/images/feature/art-interpretation.jpg" alt="Card image">
      </div>
      <div class="card-img-overlay d-flex">
        <div class="container align-self-center">
          <div class="row">
            <div class="col-lg-8">
              <h1 class="card-title display-4 font-weight-bold text-primary mb-3">NYC's Largest Creative Reuse Center</h1>
              <a href="#" class="btn btn-lg btn-secondary text-primary">Our Mission</a>
            </div>
            <!-- .col -->
          </div>
          <!-- .row -->
        </div>
        <!-- .align-self-center -->
      </div>
    </div>

  </section>
  <!-- .featured-panel -->

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>