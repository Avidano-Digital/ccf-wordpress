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

  <section class="bg-light py-5">

    <div class="container">

      <h2 class="h1 text-center mb-5">Common Bootstrap Cards</h2>

      <div class="row">

        <div class="col-lg d-lg-flex">
          <div class="card bg-white mb-4 mb-lg-0">
            <img class="card-img-top" src="/images/feature/coney-island.jpg" alt="Placeholder">
            <div class="card-body">
              <h3 class="card-title">Card Title</h3>
              <p class="card-text">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-lg btn-block btn-secondary text-primary" href="#">Card link</a>
            </div>
          </div>
        </div>

        <div class="col-lg d-lg-flex">
          <div class="card bg-white mb-4 mb-lg-0">
            <img class="card-img-top" src="/images/feature/manhattan-bridge.jpg" alt="Placeholder">
            <div class="card-body">
              <h3 class="card-title">Card title</h3>
              <p class="card-text">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-lg btn-block btn-secondary text-primary" href="#">Card link</a>
            </div>
          </div>
        </div>

        <div class="col-lg d-lg-flex">
          <div class="card bg-white mb-4 mb-lg-0">
            <img class="card-img-top" src="/images/feature/little-new-yorkers.jpg" alt="Placeholder">
            <div class="card-body">
              <h3 class="card-title">Card title</h3>
              <p class="card-text">Mus malesuada dapibus ac condimentum habitasse.</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-lg btn-block btn-secondary text-primary" href="#">Card link</a>
            </div>
          </div>
        </div>

      </div><!-- .row -->

    </div><!-- .container -->

  </section>
  
  <section class="py-5">

    <div class="container">

      <h2 class="h1 text-center sr-only">More Bootstrap Cards</h2>

      <div class="row">

        <div class="col-lg d-lg-flex">
          <div class="card shadow-lg mb-4 mb-lg-0">
            <div class="card-header bg-primary fs-md text-white">
              Featured
            </div>
            <div class="card-body">
              <h4 class="card-title">Card Title</h4>
              <p class="card-text">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-lg btn-outline-primary btn-block" href="#">Card link</a>
            </div>
          </div>
        </div>

        <div class="col-lg d-lg-flex">
          <div class="card shadow-lg mb-4 mb-lg-0">
            <div class="card-header bg-primary fs-md text-white">
              Featured
            </div>
            <div class="card-body">
              <h4 class="card-title">Card Title</h4>
              <p class="card-text">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-lg btn-outline-primary btn-block" href="#">Card link</a>
            </div>
          </div>
        </div>

        <div class="col-lg d-lg-flex">
          <div class="card shadow-lg">
            <div class="card-header bg-primary fs-md text-white">
              Featured
            </div>
            <div class="card-body">
              <h4 class="card-title">Card Title</h4>
              <p class="card-text">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
            </div>
            <div class="card-footer">
              <a class="btn btn-lg btn-outline-primary btn-block" href="#">Card link</a>
            </div>
          </div>
        </div>

      </div><!-- .row -->

    </div><!-- .container -->

  </section>

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>

