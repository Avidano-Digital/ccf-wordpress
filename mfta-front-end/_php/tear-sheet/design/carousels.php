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

  <section class="container">

    <h2 class="text-center mb-4">Carousels</h2>

    <div id="carouselExample" class="carousel slide mb-5" data-ride="carousel" data-keyboard="true" data-interval="false" dir="ltr">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="d-block w-100" src="/images/carousel/01.jpg" alt="First slide">
          <div class="carousel-caption">
            <p>Mus malesuada dapibus ac condimentum habitasse</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/carousel/02.jpg" alt="Second slide">
          <div class="carousel-caption">
            <p>Mus malesuada dapibus ac condimentum habitasse</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/carousel/03.jpg" alt="Third slide">
          <div class="carousel-caption">
            <p>Mus malesuada dapibus ac condimentum habitasse</p>
          </div>
        </div>

      </div>

      <div class="row no-gutters align-items-center bg-primary py-3">
        <div class="col-2 text-left px-3">
          <a class="no-btn-style" href="#carouselExample" role="button" data-slide="prev">
            <span class="fas fa-chevron-left fa-lg" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
        </div><!-- .col -->
        <div class="col-8">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" class="active" data-slide-to="0">
              <span class="sr-only">Slide 1</span>
              </a>
            </li>
            <li data-target="#carouselExample" data-slide-to="1">
              <span class="sr-only">Slide 2</span>
            </li>
            <li data-target="#carouselExample" data-slide-to="2">
              <span class="sr-only">Slide 3</span>
            </li>
          </ol>
        </div><!-- .col -->
        <div class="col-2 text-right px-3">
          <a class="no-btn-style" href="#carouselExample" role="button" data-slide="next">
            <span class="fas fa-chevron-right fa-lg" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- .col -->

      </div><!-- .row -->

    </div><!-- #carouselExample -->

  </section>
      
</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>
