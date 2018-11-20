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
                <h2 class="h1 text-center text-primary">Invoice #99999</h2>
              </header>

              <p>Please review the list on invoices attended or not attended by your group. If changes are needed, please call us at 718-729-3001.</p>
                    
            </section>

            <section class="mb-5">

                <div class="mobile-margin-offset-x">

                    <div class="fieldset mb-5">

                        <h3 class="legend">Invoice Details</h3>


                        <div class="p-4">

                            <dl class="row no-gutters fs-md mb-4">
                                <dt class="col-sm-4">Contact:</dt>
                                <dd class="col-sm-8">Sansone, Tara</dd>
                                <dt class="col-sm-4">Date:</dt>
                                <dd class="col-sm-8">05-29-2018</dd>
                                <dt class="col-sm-4">Thank You Letter:</dt>
                                <dd class="col-sm-8"> <span class="text-success">Sent</span></dd>
                            </dl>

                            <div class="table-responsive mb-2">

                                <table class="table">

                                    <thead>
                                        <colgroup>
                                            <col class="w-20">
                                            <col class="w-30">
                                            <col class="w-20">
                                            <col class="w-30">
                                        </colgroup>
                                        <tr class="text-info">
                                            <th>Item ID</th>
                                            <th>Category</th>
                                            <th class="text-center">QTY</th>
                                            <th>Donor</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $i = 1;
                                        while ($i <= 8): ?>

                                        <tr>
                                            <td>118808</td>
                                            <td class="col-b">Art &amp; Craft Item</td>
                                            <td class="text-center">99</td>
                                            <td>
                                                <span class="d-block">
                                                    Schofield Films
                                                </span>
                                                <span class="d-block">
                                                    Jesse Mendelson
                                                </span>
                                                <address>
                                                    560 Broadway <br>
                                                    Suite 204 <br>
                                                    New York, NY 10012
                                                </address>
                                            </td>
                                        </tr>

                                        <?php $i++; 
                                        endwhile;
                                        ?>

                                    </tbody>

                                </table>

                            </div>
                            <!-- .table-responsive -->

                        </div>

                    </div>
                    <!-- .fieldset -->

                </div>
                <!-- .mobile-margin-offset-x -->
                
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