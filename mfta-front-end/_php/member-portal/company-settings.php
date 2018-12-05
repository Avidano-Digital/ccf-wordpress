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
              <h2 class="h1 text-center text-primary">Company Settings</h2>
            </header>

            <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et
              dolor parturient.</p>

          </section>

          <section class="mb-4">

            <div class="mobile-margin-offset-x">

              <div class="fieldset mb-5">

                <h3 class="legend">Email Addresses</h3>

                <?php include($root . '/include/_template_parts/list-group-edit-email-addresses.php'); ?>

              </div>

              <div class="fieldset mb-5">

                <h3 class="legend">Phone Numbers</h3>

                <?php include($root . '/include/_template_parts/list-group-edit-phone-numbers.php'); ?>

              </div>

              <div class="fieldset mb-5">

                <h3 class="legend">Addresses</h3>

                <?php include($root . '/include/_template_parts/list-group-edit-street-address.php'); ?>

              </div>

              <div class="fieldset mb-5">

                <h3 class="legend">Financial Status</h3>

                <?php include($root . '/include/_template_parts/list-group-edit-financial-status.php'); ?>

              </div>

              <div class="fieldset mb-5">

                <h3 class="legend">Website</h3>

                <?php include($root . '/include/_template_parts/list-group-edit-websites.php'); ?>

              </div>

            </div>

          </section>

        </div>
        <!-- .narrow -->

      </div><!-- .col -->

    </div><!-- .row -->

  </div><!-- .container -->

</main><!-- content -->

<?php include_once($root . '/include/confirm-delete.php'); ?>

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>
