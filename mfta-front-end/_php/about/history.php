<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'give';
  $page_title = 'About MFTA';
  $hero_image = '03';
?>


<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">

  <?php include_once($root . '/include/sub-page-header.php'); ?>
  
  <article role="article">

    <div class="container-fluid wide">

      <div class="row">
        
        <div class="col-lg-4 col-xl-3 py-3 py-lg-5 bg-light">
          <?php include_once($root . '/include/aside-about.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-5 px-lg-5 bg-white" id="article-content">
        
          <div class="narrow">

            <section class="mb-4">

              <header>
                <h2 class="h1 text-center text-primary mb-4">MFTA History</h2>
              </header>

              <p>In 1978, Angela Fremont was a young artist working in Central Park for the Department of Cultural Affairs. One day, Angela
                heard the Children's Zoo was looking for a refrigerator to house medicine for their animals. Pre-Craigslist, Fremont
                contacted a local radio show to make an on-air appeal for a working refrigerator. Within minutes, her office was inundated
                with phone calls and the concept of Materials for the Arts was born.

                <figure class="my-5">
                  <img src="/images/figure/history.jpg" class="figure-img" alt="Placeholder">
                  <figcaption class="figure-caption">Angela Fremont in Washington Square Park</figcaption>
                </figure>

                <p>Over the next six years with the active support of Commissioner Henry Geldzahler, Angela wrote grants and was joined
                  first by Diana Billipp and then Jill Moser. Together they helped advance the program, borrowing trucks, hiring drivers,
                  utilizing a warehouse space at PS 1 and adding donors through advertising campaigns and arts and cultural member organizations.
                  When Fremont left to pursue other opportunities in 1984, MFTA was already bringing in over 1 million dollars’ worth
                  of reusable materials annually. But this was just the beginning.</p>

                <p>Susan Glass took the helm and for the next 16 years worked tirelessly to raise MFTA's profile, traveling across the country
                  to tout MFTA's role as a reuse program supporting the arts and advocating to New York City government when the program
                  was threatened with budget cuts. In the late 1980's Susan approached Sanitation Commissioner Brendan Sexton to introduce
                  him to Materials for the Arts and its impact on the environment. He then recognized the important work MFTA was doing
                  and included the program as part of the City’s 25 year solid waste plan. As a result, MFTA began to receive funding
                  from the City's Department of Sanitation through their Bureau of Waste Prevention, Reuse, and Recycling. In 1997, Ms.
                  Glass forged another key partnership with Dr. Sharon Dunn through the Department of Education's Project ARTS initiative.
                  This intra-agency agreement allowed art teachers access to MFTA materials and helped support the restoration of arts
                  education in public schools.</p>

                <p>In 2000, MFTA moved from the Chelsea Market to its present-day Long Island City location, doubling its warehouse space.
                  Friends of Materials for the Arts was founded in 2002 with the help of newly appointed Executive Director Harriet Taub.
                  With the creation of Friends of Materials for the Arts, the nonprofit organization that guides and supports the work
                  of MFTA, the program was transformed into a public/private partnership.</p>

            </section>

            <section class="mb-5">

              <figure class="figure py-4">
                <img src="/images/figure/history-01.jpg" class="figure-img" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
              </figure>

              <h3>MFTA Today</h3>
              <p>These partnerships, both public and private, enable MFTA to offer unique support to the arts and cultural community while advancing reuse, recycling, and waste reduction as a goal of municipal government. MFTA continues to set high standards for efficient operations, distribution of materials, and educational programming.</p>
              <p>From one person with a desk and phone to a 35,000-square-foot warehouse, a fleet of vehicles, an online donations system, and robust education programs, Materials for the Arts is New York City's premier donation center supporting the arts and education.</p>

            </section>

            <?php include_once($root . '/include/article-footer.php'); ?>

          </div><!-- .narrow -->

        </div><!-- .col -->

      </div><!-- .row --> 

    </div><!-- .container -->

  </article>

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>