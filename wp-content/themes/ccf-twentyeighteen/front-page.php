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

      <?php

      // Primary Feature Vars
      $primary_feature = get_field('primary_feature'); 
      $image = $primary_feature['image'];
      $image_alt = $primary_feature['image_alt'];
      $headline = $primary_feature['headline'];
      $text = $primary_feature['text'];
      $link = $primary_feature['link'];
      
      if( $primary_feature ): ?>

      <div class="featured-panel responsive-lg">

        <div class="card bg-white">

          <div class="overlay-gradient-y-black">
            
            <?php if( $image ): ?>
              <img class="card-img" src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
            <?php else : ?>
              <img class="card-img" src="https://via.placeholder.com/1500x750" alt="Placeholder">
            <?php endif; ?>

          </div>
          <!-- .overlay-gradient-y-black -->

            <div class="card-img-overlay d-flex">
                <div class="align-self-end">
                    <div class="text-white">
                        <h1><?php echo $headline; ?></h1>
                        <p class="fs-lg mb-2"><?php echo $text; ?></p>
                        <a class="link text-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    </div>
                </div>
                <!-- .align-self-center -->
            </div>

          </div>
          <!-- .card -->

        </div>
        <!-- .featured-panel -->

      <?php endif; /* Primary Feature */ ?>

      <div class="row no-gutters overflow-hidden">

        <div class="col-xl-8 d-none d-sm-block">

          <?php

          // Secondary Feature Vars
          $secondary_feature = get_field('secondary_feature'); 
          $image = $secondary_feature['image'];
          $image_alt = $secondary_feature['image_alt'];
          $headline = $secondary_feature['headline'];
          $text = $secondary_feature['text'];
          $link = $secondary_feature['link'];

          if( $secondary_feature ): ?>

          <div class="featured-panel responsive-lg">

            <div class="card bg-white">
              <div class="overlay-gradient-y-black">

                <?php if( $image ): ?>
                  <img class="card-img" src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
                <?php else : ?>
                  <img class="card-img" src="https://via.placeholder.com/1000x500" alt="Placeholder">
                <?php endif; ?>

              </div>
              <div class="card-img-overlay d-flex">
                <div class="align-self-end">
                  <div class="text-white">

                    <?php if( $headline): ?>
                    <h1>
                      <?php echo $headline; ?>
                    </h1>
                    <?php endif; ?>

                    <?php if( $text): ?>
                    <p class="fs-lg mb-2">
                      <?php echo $text; ?>
                    </p>
                    <?php endif; ?>

                    <?php if( $link): ?>
                    <a class="link text-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>

                  </div>
                </div>
                <!-- .align-self-center -->
              </div>
            </div>

          </div>
          <!-- .featured-panel -->

        </div>
        <!-- .col-* -->

        <div class="col-xl-4">

          <div class="row no-gutters">

            <div class="featured-block d-sm-none">

              <div class="card">

                <div class="overlay-gradient-y-black">

                  <?php if( $image ): ?>
                    <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image_alt; ?>">
                  <?php else : ?>
                    <img class="card-img" src="https://via.placeholder.com/1500x750" alt="Placeholder">
                  <?php endif; ?>

                </div>
                <!-- .overlay-gradient-y-black -->

                <div class="card-img-overlay d-flex">
                  <div class="align-self-end">

                    <?php if( $link): ?>
                    <a class="btn btn-block btn-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>

                  </div>
                </div>

              </div>
              <!-- .card -->

            </div>
            <!-- .col-* -->

            <?php endif; /* Secondary Feature */ ?>

            <?php if( have_rows('tertiary_features') ) : while( have_rows('tertiary_features') ): the_row();     

            $image = get_sub_field('image');
            $image_alt = get_sub_field['image_alt'];
            $link = get_sub_field('link');

            ?>

            <div class="featured-block col-md-6 col-xl-12">

              <div class="card">

                <?php if( $image ): ?>
                  <div class="overlay-gradient-y-black">
                    <img class="card-img" src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
                  </div>
                <?php endif; ?>

                <div class="card-img-overlay d-flex">
                  <div class="align-self-end">
                    <?php if( $link ): ?>
                      <a class="btn btn-block btn-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                  </div>
                </div>

              </div>
              <!-- .card -->

            </div>
            <!-- .col-* -->

            <?php endwhile; endif; /* Tertiary feature */ ?>

          </div>
          <!-- .row -->

        </div>
        <!-- .col-* -->

      </div>
      <!-- .row -->

    </section>
    <!-- #introduction -->

    <section class="py-5 py-xl-7">

      <h2 class="sr-only">News and Videos from CCF</h2>
      
      <section class="container-fluid mb-5" id="latest-news">

        <div class="wide px-lg-2">

          <header class="row align-items-end justify-content-between mb-3">
            <div class="col-md-auto">
              <h2 class="display-4">Latest News</h2>
            </div>
            <div class="col-md-auto">
              <a class="link text-body" href="#">All News</a>
            </div>
          </header>
          <!-- .row -->

          <?php get_template_part('template-parts/featured-news'); ?>

        </div>
        <!-- .wide -->

      </section>
      <!-- #latest-news -->

      <section class="container-fluid" id="videos">

        <div class="wide px-lg-2">

          <header class="row align-items-end justify-content-between mb-3">
            <div class="col-md-auto">
              <h3 class="display-4">Videos</h3>
            </div>
            <div class="col-md-auto">
              <a class="link text-body" href="#">All Videos</a>
            </div>
          </header>

          <div class="row matrix-border">

            <div class="col-md-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ViEOxkiz5VI" frameborder="0" allowTransparency="true"
                  allowfullscreen="true"></iframe>
              </div>
            </div>
            <div class="col-md-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aew2okRVGl8" frameborder="0" allowTransparency="true"
                  allowfullscreen="true"></iframe>
              </div>
            </div>

          </div>
          <!-- .matrix-border -->

        </div>
        <!-- .wide -->

      </section>
      <!-- #videos -->

    </section>

    <section class="container-fluid p-0">

      <h2 class="sr-only">What's New At CCF</h2>

      <div class="row no-gutters">

        <?php while( have_rows('quaternary_features') ): the_row(); 
        
        $image = get_sub_field('image');
        $image_alt = get_sub_field('image_alt');
        $headline = get_sub_field('headline');
        $link = get_sub_field('link');

        ?>

        <div class="col-md-6">
          <div class="featured-panel responsive-md">

            <div class="card bg-white">
              <div class="overlay-gradient-y-black">
                <img class="card-img" src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
              </div>
              <div class="card-img-overlay d-flex">
                <div class="align-self-end">
                  <div class="text-white">
                    <h4 class="h3 font-weight-bold"><?php echo $headline; ?></h4>
                    <a class="link text-primary" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                  </div>
                </div>
                <!-- .align-self-center -->
              </div>
            </div>
            <!-- .card -->

          </div>
          <!-- .featured-panel -->
        </div>
        
        <?php endwhile; /* Tertiary feature */ ?>

      </div>
      <!-- .row -->

    </section>

    <?php if( have_rows('cheetah_facts') ): ?>

    <section class="bg-light text-center py-8 pattern-border-top-bottom">

      <?php while( have_rows('cheetah_facts') ): the_row(); 
  
      // Cheetah Facts Variables
      $cheetah_facts = get_field('cheetah_facts'); 
      $headline = $cheetah_facts['headline'];
      $link = $cheetah_facts['link'];

      ?>

      <div class="container-fluid wide">

        <?php if( $headline): ?>
        <h3 class="display-4 mb-5">
          <?php echo $headline; ?>
        </h3>
        <?php endif; ?>

        <div class="row mb-5">

        <?php if( have_rows('facts') ):

        while ( have_rows('facts') ) : the_row(); 

        // Facts Variables
        $image = get_sub_field('image');
        $headline = get_sub_field('headline');
        $text = get_sub_field('text');
          
        ?>

          <div class="col-sm-9 col-lg-4 mx-auto px-3 mb-4 mb-lg-0">
            <img class="rounded-circle mx-auto mb-4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <h4 class="text-info"><?php echo $headline; ?></h4>
            <p><?php echo $text; ?></p>
          </div>

          <?php endwhile;  ?>

          <?php endif; ?>

        </div>
        <!-- .container-fluid -->

        <?php if( $link ): ?>
          <a class="btn btn-lg btn-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
        <?php endif; ?>

      </div>
      <!-- .wide -->

    <?php endwhile; /* Facts */ ?>

    </section>

    <?php endif; /* Facts */ ?>

    <section id="cheetah-range" class="featured-panel responsive-xl" dir="ltr">

      <div class="card bg-info">
        <img class="card-img d-xl-none" src="<?php echo get_template_directory_uri(); ?>/images/cheetah-range-sm.svg" alt="Placeholder">
        <img class="card-img d-none d-xl-block" src="<?php echo get_template_directory_uri(); ?>/images/cheetah-range-lg.svg" alt="Placeholder">

        <div class="card-img-overlay d-flex p-0">
          <div class="container-fluid align-self-center">
          <div class="wide px-lg-2">

            <div class="row">
              <div class="col-xl-5">
                <div class="narrow text-white mb-5 mb-xl-0">

                  <h3 class="h1 text-primary">Shrinking habitat</h3>
                  <p class="mb-4">In the last 100 years, the world has lost 90% of the wild cheetah population. Today, one-third of wild
                    cheetahs live in southern Africa. CCF is working in Namibia and across Africa to save the species throughout
                    its range.</p>

                  <ul class="list-unstyled mb-5">
                    <li class="side-by-side">
                      <span class="fas fa-circle fa-fw text-umber"></span>
                      <span>Cheetah range pre-1900</span>
                    <li class="side-by-side">
                        <span class="fas fa-circle fa-fw text-primary"></span>
                        <span>Cheetah range today</span>
                    <li class="side-by-side">
                      <span class="fas fa-star fa-fw text-white"></span>
                      <span>CCF Headquarters, Namibia</span>
                  </ul>
                  
                  <ul class="thumbnail-links d-xl-none">
                    <li>
                      <a class="text-primary bg-light d-block" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-research.jpg" alt="Placeholder">
                        <span class="mx-2">Research</span> 
                      </a>
                    </li>
                    <li>
                      <a class="text-primary bg-light d-block" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-education.jpg" alt="Placeholder">
                        <span class="mx-2">Education</span>
                      </a>
                    </li>
                    <li>
                      <a class="text-primary bg-light d-block" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-conservation.jpg" alt="Placeholder">
                        <span class="mx-2">Conservation</span>
                      </a>
                    </li>
                  </ul>

                  <div class="d-none d-xl-block">

                    <ul class="link-list horizontal">
                      <li>
                        <a href="#" class="text-primary text-center">
                          <img class="rounded-circle mb-2" src="<?php echo get_template_directory_uri(); ?>/images/ccf-research.jpg" alt="Placeholder">
                          <h5>Research</h5> 
                        </a>
                      </li>
                      <li>
                        <a href="#" class="text-primary text-center">
                          <img class="rounded-circle mb-2" src="<?php echo get_template_directory_uri(); ?>/images/ccf-education.jpg" alt="Placeholder">
                          <h5>Education</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="text-primary text-center">
                          <img class="rounded-circle mb-2" src="<?php echo get_template_directory_uri(); ?>/images/ccf-conservation.jpg" alt="Placeholder">
                          <h5>Conservation</h5>
                        </a>
                      </li>
                    </ul>

                  </div>


                </div>
                <!-- .narrow -->

              </div>
              <!-- .col -->
            </div>
            <!-- .row -->
          
          </div>
          <!-- .row -->
          </div>
          <!-- .container-fluid -->
        </div>
      </div>

    </section>

    <section class="featured-panel responsive-lg">

      <div class="card bg-dark">
        <img class="card-img opacity-30" src="<?php echo get_template_directory_uri(); ?>/images/donate.jpg" alt="Placeholder">
        <div class="card-img-overlay d-flex px-0">

          <div class="container align-self-center">

            <div class="narrow py-4">

              <h5 class="card-title h1 text-white text-center text-shadow">
                Join the race to
                <a class="text-primary" href="#">#SaveTheCheetah</a>
              </h5>

              <div class="row matrix-border shadow-lg">

                <div class="col-md-6">
                  <a class="btn btn-lg btn-block btn-primary" href="#" title="Donate">Donate</a>
                </div>
                <!-- .col -->

                <div class="col-md-6">
                  <a class="btn btn-lg btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
                </div>
                <!-- .col -->

              </div>
              <!-- .matrix-border -->

            </div>

          </div>
          <!-- .container -->
        </div>
      </div>

    </section>

  </main>
  <!-- #content -->

  <?php get_footer(); ?>