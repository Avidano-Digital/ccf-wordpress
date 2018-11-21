<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'tear-sheet';
  $page_title = 'Tear Sheet';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" role="main">

  <?php include_once($root . '/include/sub-page-header.php'); ?>

  <section class="py-5">

    <h1 class="text-center mb-4">Containers</h1>

    <div class="container border p-4 mb-3">
      <p>Container</p>
    </div> 

    <div class="container-fluid wide border p-4 mb-3">
      <p>Container Fluid with 'wide' class</p>
    </div> 

    <div class="container narrow border p-4 mb-3">
      <p>Container with 'narrow' class</p>
    </div> 

  </section><!-- .container -->

  <section class="container mb-5">

    <h1 class="text-center mb-4">Responsive Grid Patterns</h2>
  
    <div class="row">
      <div class="col-md p-4 border">
        <h2>Here is an h2</h2>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
      <div class="col-md p-4 border">
        <h2>Here is an h2</h2>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
    </div><!-- .row -->

    <div class="row">
      <div class="col-lg p-4 border">
        <h3>Here is an h4</h3>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
      <div class="col-lg p-4 border">
        <h3>Here is an h3</h3>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
      <div class="col-lg p-4 border">
        <h3>Here is an h3</h3>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
    </div><!-- .row -->

    <div class="row">
      <div class="col-sm-6 col-lg-3 p-4 border">
        <h4>Here is an h4</h4>
        <p>Mus malesuada dapibus ac condimentum.</p>
      </div>
      <div class="col-sm-6 col-lg-3 p-4 border">
        <h4>Here is an h4</h4>
        <p>Mus malesuada dapibus ac condimentum.</p>
      </div>
      <div class="col-sm-6 col-lg-3 p-4 border">
        <h4>Here is an h4</h4>
        <p>Mus malesuada dapibus ac condimentum.</p>
      </div>
      <div class="col-sm-6 col-lg-3 p-4 border">
        <h4>Here is an h4</h4>
        <p>Mus malesuada dapibus ac condimentum.</p>
      </div>
    </div><!-- .row -->

    <div class="row">
      <div class="col-lg-8 p-4 border">
        <h2>Here is an h2</h2>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
      </div>
      <div class="col-lg-4 p-4 border">
        <h4>Here is an h4</h4>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
    </div><!-- .row -->

    <div class="row">
      <div class="col-lg-3 p-4 border">
        <h5>Here is an h5</h5>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
      <div class="col-lg-6 p-4 border">
        <h2>Here is an h2</h2>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>
      </div>
      <div class="col-lg-3 p-4 border">
        <h5>Here is an h5</h5>
        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
      </div>
    </div>

  </section><!-- .container -->

  <section class="container mb-5">

    <h2 class="h1 text-center mb-4">Matrix (gutter)</h2>
  
    <div class="row matrix-gutter">
      <div class="col-md-6 col-lg-4">
        <div class="bg-light p-4">
          <h3>Here is an h3</h3>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="bg-light p-4">
          <h3>Here is an h3</h3>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="bg-light p-4">
          <h3>Here is an h3</h3>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-light p-4">
          <h4>Here is an h4</h4>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-light p-4">
          <h4>Here is an h4</h4>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="bg-dark text-white p-4">
          <h4>Here is an h4</h4>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="bg-dark text-white p-4">
          <h4>Here is an h4</h4>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="bg-dark text-white p-4">
          <h4>Here is an h4</h4>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="bg-dark text-white p-4">
          <h4>Here is an h4</h4>
          <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis.</p>
        </div>
      </div>
    </div><!-- .row -->

  </section><!-- .container -->

  <section class="container mb-5 ">

    <h2 class="h1 text-center mb-4">Matrix (border)</h2>

    <div class="row matrix-border gallery">
      <div class="col-sm-6 col-lg-4">
        <a href="#" title="#">
          <img src="http://via.placeholder.com/600x400/000000/ffffff.jpg" alt="Placeholder">
          <span class="fas fa-search-plus"></span>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="#" title="#">
          <img src="http://via.placeholder.com/600x400/000000/ffffff.jpg" alt="Placeholder">
          <span class="fas fa-search-plus"></span>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="#" title="#">
          <img src="http://via.placeholder.com/600x400/000000/ffffff.jpg" alt="Placeholder">
          <span class="fas fa-search-plus"></span>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="#" title="#">
          <img src="http://via.placeholder.com/600x400/000000/ffffff.jpg" alt="Placeholder">
          <span class="fas fa-search-plus"></span>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="#" title="#">
          <img src="http://via.placeholder.com/600x400/000000/ffffff.jpg" alt="Placeholder">
          <span class="fas fa-search-plus"></span>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="#" title="#">
          <img src="http://via.placeholder.com/600x400/000000/ffffff.jpg" alt="Placeholder">
          <span class="fas fa-search-plus"></span>
        </a>
      </div>
    </div><!-- .row -->

  </section><!-- .container -->

</main><!-- #content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>