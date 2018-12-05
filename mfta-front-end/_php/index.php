<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include_once($root . '/include/global-header.php');

    $section = 'home';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" role="main">

  <section class="featured-panel responsive-sm">

    <div class="card bg-primary">
      <img class="card-img opacity-40 show-on-mobile" src="/images/feature/art-interpretation.jpg" alt="Card image">
      <div class="card-img-overlay d-flex">
        <div class="container align-self-center w-100">
          <div class="narrow text-white text-center">
            <h1 class="card-title display-4 font-weight-bold mb-3">NYC's Largest Creative Reuse Center</h1>
            <a href="#" class="btn btn-lg btn-secondary text-primary">Our Mission</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- .featured-panel -->

  <section class="py-6">

    <div class="container">

      <div class="row matrix-gutter">

        <div class="col-md d-md-flex">
          <div class="card align-self-stretch w-100 bg-secondary">
            <div class="card-body text-primary">
              <h2 class="card-title h2">Donate for a cause</h2>
              <p class="card-text">Support local arts across New York City. Whether you're a business or an individual,
                donating materials is easy.</p>
            </div>
            <div class="card-footer">
              <a href="/member-portal/register-as-donor.php" class="btn btn-lg btn-white text-crimson">Become a donor</a>
            </div>
          </div>
        </div>

        <div class="col-md d-md-flex">
          <div class="card align-self-stretch bg-secondary">
            <div class="card-body text-primary">
              <h2 class="card-title h2">Receive from MFTA</h2>
              <p class="card-text">Each year, MFTA provides millions of dollars of supplies and inspiration to New York
                City's artistic and educational
                communities.
              </p>
            </div>
            <div class="card-footer">
              <a href="/donate-and-receive/recipient-registration.php" class="btn btn-lg btn-white text-crimson">Become
                a receipient</a>
            </div>
          </div>
        </div>

      </div>
      <!-- .row -->

    </div>
    <!-- .container -->

  </section>

  <section class="bg-light py-6">

    <div class="container text-primary">

      <div class="row mb-5">

        <div class="col-md-6 order-md-last mb-5 mb-md-0">
          <div class="hard-shadow">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tiJVtdUzzmw"></iframe>
            </div>
          </div>
        </div>
        <!-- .col -->

        <div class="col-md-6 d-flex align-items-center">
          <h2 class="h1 mb-0">Sustaining the arts and the environment</h2>
        </div>
        <!-- .col -->

      </div>
      <!-- .row -->

      <div class="row mb-5">
        <div class="col-md mb-5 mb-md-0">
          <p><strong>Materials for the Arts</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            eaque dolor tempora
            non repudiandae ex qui, at incidunt reprehenderit itaque quae adipisci.</p>
        </div>
        <div class="col-md">
          <p><strong>Friends of Materials for the Arts</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugiat eaque
            dolor tempora non repudiandae ex qui.</p>
        </div>
      </div>
      <!-- .row -->

      <a href="#" class="btn btn-secondary text-primary btn-lg">Friends of MFTA website</a>

    </div>
    <!-- .container -->

  </section>

  <section class="container-fluid bg-accent px-0">

    <h2 class="sr-only">Screen Reader Only Header</h2>

    <div class="row matrix-border">
      <div class="col-sm-6 col-lg-3">
        <div class="bg-info">
          <img src="/images/feature/volunteer.jpg" alt="Placeholder">
          <div class="px-4 py-5">
            <h3 class="h4">
              <a href="#" class="text-accent">Volunteer</a>
            </h3>
            <p class="text-accent">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="bg-info">
          <img src="/images/feature/workshops.jpg" alt="Placeholder">
          <div class="px-4 py-5">
            <h3 class="h4">
              <a href="#" class="text-accent">Workshops</a>
            </h3>
            <p class="text-accent">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="bg-info">
          <img src="/images/feature/mfta-artists.jpg" alt="Placeholder">
          <div class="px-4 py-5">
            <h3 class="h4">
              <a href="#" class="text-accent">MFTA Artists</a>
            </h3>
            <p class="text-accent">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="bg-info">
          <img src="/images/feature/blog.jpg" alt="Placeholder">
          <div class="px-4 py-5">
            <h3 class="h4">
              <a href="#" class="text-accent">Blog</a>
            </h3>
            <p class="text-accent">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- .row -->

  </section>

  <section class="bg-accent text-info py-6">

    <div class="container">

      <h4 class="h1 mb-5">Upcoming Events</h4>

      <div class="row mb-5">
        <div class="col-lg-4 fs-md">
          <p class="mb-0">
            <strong>09/30/17 – 11/04/17</strong>
          </p>
          <p>
            <em>Workshop</em>
          </p>
        </div>
        <div class="col-lg-8 fs-md">
          <h3>
            <a href="#" class="text-info">Paper: From Pulp to Fiction</a>
          </h3>
          <p>Saturdays 9:30am – 5:00pm</p>
        </div>
      </div>
      <!-- .row -->

      <hr>

      <div class="row py-4">
        <div class="col-lg-4 fs-md">
          <p class="mb-0">
            <strong>01/18/19</strong>
          </p>
          <p>
            <em>Artist Reception</em>
          </p>
        </div>
        <div class="col-lg-8 fs-md">
          <h3>
            <a href="#" class="text-info">Opening Reception For Sol’sain’t Many Kin: All Sol’skin Is A Free Kin</a>
          </h3>
          <p>Thursday 6:30pm - 9:00pm</p>
        </div>
      </div>
      <!-- .row -->

      <hr>

      <div class="row py-4">
        <div class="col-lg-4 fs-md">
          <p class="mb-0">
            <strong>02/05/18</strong>
          </p>
          <p>
            <em>Orientation</em>
          </p>
        </div>
        <div class="col-lg-8 fs-md">
          <h3>
            <a href="#" class="text-info">Welcome Orientation</a>
          </h3>
          <p>Monday 2:00pm – 3:00pm</p>
        </div>
      </div>
      <!-- .row -->

      <a href="#" class="btn btn-info text-accent btn-lg">Events Calendar</a>

    </div>
    <!-- .container -->

  </section>

  <section class="row no-gutters align-items-center bg-primary">
    <div class="col-md">
      <img src="/images/feature/tom-finkelpearl.jpg" alt="Placeholder">
    </div>
    <div class="col-md">
      <div class="p-4 p-md-5">
        <div class="narrow text-white">
          <h4 class="h2 font-weight-bold text-secondary">Letter from the commissioner</h4>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quasi facere labore rerum aliquid
            architecto harum vero suscipit tenetur error deleniti, quo quas eius.</p>
          <a href="#" class="btn btn-lg btn-secondary text-primary" title="Read More">Read More</a>
        </div>
      </div>
    </div>
  </section>

</main><!-- role="main" -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>