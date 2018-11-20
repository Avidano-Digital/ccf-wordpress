<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

 get_header(); ?>

  <main id="content">

    <section id="introduction">

      <div class="featured-panel responsive-lg">

        <div class="card bg-white">
          <div class="overlay-gradient-y-black">
            <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature/01.jpg" alt="Card image">
          </div>

          <div class="card-img-overlay d-flex">
            <div class="align-self-end w-100">
              <div class="container text-white text-lg-center py-4">
                <h1 class="card-title display-3 mb-3 text-shadow">Engaging Canadians in the cause of saving the cheetah in the wild.</h1>
                <a href="#" class="btn btn-lg btn-primary">Our Mission</a>
              </div>
            </div>
          </div>

        </div>
        <!-- .card -->

      </div>
      <!-- .featured-panel -->

    </section>
    <!-- #introduction -->

    <section class="bg-light pattern-border-top-bottom py-8">

      <div class="container">

        <h2 class="sr-only">Cheetah Conservation Fund Canada Overview</h2>

        <div class="row mb-5">
          <div class="col-md-8 offset-md-2">
            <div class="embed-responsive embed-responsive-16by9 shadow border">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0hyNVlYVTNo" frameborder="0" allowTransparency="true"
                allowfullscreen="true"></iframe>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md mb-3 mb-md-0">
            <p>We fundraise for a highly innovative wildlife conservation organization in Namibia, Cheetah Conservation Fund,
              whose primary goal is to save cheetahs from extinction. We hold fundraising events and educate Canadians. We
              are a registered charity run by Canadian volunteers – we direct 98% of all funds to charitable programming
              in Namibia.</p>
          </div>
          <div class="col-md">
            <p>Since 2013, we have provided close to $310,000; and our impact has been in the support of school outreach, education
              sessions with Future Farmers of Africa, the support of the livestock guarding dogs, and the care of cheetahs.
              Our goal is to save cheetahs in the wild and help ensure that local communities can prosper in harmony with
              wildlife and protect their shared ecosystems.</p>
          </div>
        </div>
        <!-- .row -->

      </div>
      <!-- .container -->

    </section>

    <section class="py-5 py-xl-7">

      <h2 class="sr-only">News and Videos from CCF</h2>

      <section class="container-fluid wide mb-6" id="latest-news">

        <header class="text-center mb-4">
          <h3 class="display-4 mb-0">Latest News</h3>
          <a class="blended-link fs-md" href="#">All News</a>
        </header>

        <?php get_template_part('template-parts/featured-news'); ?>

      </section>
      <!-- #latest-news -->

      <section class="container-fluid wide" id="events">

        <header class="text-center mb-4">
            <h3 class="display-4 mb-0">Upcoming Events</h3>
            <a class="blended-link fs-md" href="#">All Events</a>
        </header>

        <div class="row matrix-border">

          <div class="col-md-6 d-md-flex mb-3 mb-md-0 col-xl-4 offset-xl-2">
            <div class="card bg-light">
              <div class="card-header bg-info text-white text-center font-weight-bold py-2">
                September 29th, 2018
              </div>
              <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/events/02.jpg" alt="Placeholder">
              <div class="card-body">
                <h4 class="card-title mb-2">Discover Namibia</h4>
                <p class="card-text fs-md">Join us for wine & cheese while taking a virtual tour of Namibia with professional
                  photographer and travel consultant Vanessa Dewson.</p>
              </div>
              <div class="card-footer pt-0">
                <a class="btn btn-primary btn-block" href="#">Event Details</a>
              </div>
            </div>
          </div>
          <!-- .col -->

          <div class="col-md-6 d-md-flex col-xl-4">
            <div class="card bg-light">
              <div class="card-header bg-info text-white text-center font-weight-bold py-2">
                October 26th, 2018
              </div>
              <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/events/01.jpg" alt="Placeholder">
              <div class="card-body">
                <h4 class="card-title mb-2">Dr. Laurie Marker Returns to Ottawa, Canada</h4>
                <p class="card-text fs-md">We are pleased to announce that Dr. Laurie Marker, founder and executive director of
                  Cheetah Conservation Fund (CCF),
                  will be coming back to Canada this fall.</p>
              </div>
              <div class="card-footer pt-0">
                <a class="btn btn-primary btn-block" href="#">Event Details</a>
              </div>
            </div>
          </div>
          <!-- .col -->


        </div>
        <!-- .matrix-border -->

      </section>
      <!-- #videos -->


    </section>

    <section class="featured-panel responsive-lg">

      <div class="card bg-dark">
        <img class="card-img opacity-30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/donate.jpg" alt="Placeholder">
        <div class="card-img-overlay d-flex px-0">

          <div class="container align-self-center">

            <div class="text-white text-center text-shadow">
              <h5 class="card-title h1">Help us <a class="text-primary" href="#">#SaveTheCheetah</a>
              </h5>
              <p class="card-text mb-4 d-none">Support our research and conservation initiatives.</p>
            </div>

            <div class="row narrow">

              <div class="col-md-6 offset-md-3">
                <a class="btn btn-lg btn-block btn-primary shadow" href="#" title="Donate">Donate to CCF Canada</a>
              </div>
              <!-- .col -->

            </div>
            <!-- .matrix-border -->

          </div>
          <!-- .container -->
        </div>
      </div>

    </section>

  </main>
  <!-- #content -->

  <?php get_footer(); ?>