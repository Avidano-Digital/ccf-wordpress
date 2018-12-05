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

              <header class="mb-4">
                <h2 class="h1 text-center text-primary">Shopping History</h2>
              </header>

              <p>Please review the list of shopping appointments attended or not attended by your group. If changes are needed, please call us at 718-729-3001.</p>
            </section>

            <section class="mb-5">
              <div class="table-responsive mb-2">

                <table class="table">

                  <thead>
                    <colgroup>
                      <col class="w-30">
                      <col class="w-50">
                      <col class="w-20">
                    </colgroup>
                    <tr class="text-info">
                      <th>Date &amp; Time</th>
                      <th>Attendee</th>
                      <th class="text-right">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; while ($i <= 12): ?>
                    <tr>
                      <td>
                        <span class="date d-block">05-29-2018</span>
                        <span class="time d-block">1:30 PM</span>
                      </td>
                      <td>Doe, John</td>
                      <td class="text-right">On time</td>
                    </tr>
                    <?php $i++; endwhile; ?>

                  </tbody>
                </table>

              </div>
              <!-- .table-responsive -->

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