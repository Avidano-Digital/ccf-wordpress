<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $section = 'tear-sheet';
  $page_title = 'Tear Sheet';
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">
  
  <?php include_once($root . '/include/sub-page-header.php'); ?>

  <article role="article">

    <div class="container-fluid wide">

      <div class="row">
    
        <div class="col-lg-4 col-xl-3 py-3 py-lg-5">
          <?php include_once($root . '/tear-sheet/include/aside-nav.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-3 py-lg-5 px-lg-5 bg-white" id="article-content">

          <div class="narrow">

            <section class="mb-5">

              <header class="mb-4">
                <h1>Tables</h1>
              </header>

              </section>

              <section class="mb-5">

                    <div class="table-responsive mb-2">
                      
                      <table class="table">

                          <thead>
                              <tr class="text-info">
                              <th class="col-a">Title</th>
                              <th class="col-b">Title</th>
                              <th class="col-c">Title</th>
                              <th class="col-d">Title</th>
                              <th class="col-e">Title</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                            <tr>
                              <td class="col-a">Mus malesuada dapibus</td>
                              <td class="col-b">Adipiscing ut blandit</td>
                              <td class="col-c">99</td>
                              <td class="col-d">99</td>
                              <td class="col-e">99</td>
                            </tr>
                          </tbody>
                        </table>
                      
                    </div><!-- .table-responsive -->

                    <p class="fs-md text-muted text-right">If table appears trimmed, scroll right <span class="fas fa-long-arrow-alt-right ml-2"></span></p>

              </section>

          </div><!-- .narrow -->

        </div><!-- .col -->

      </div><!-- .row --> 

    </div><!-- .container -->

  </article>

</main><!-- content -->

<?php if ($section != 'member-portal'){ include_once($root . '/include/business-footer.php'); } ?>
<?php include_once($root . '/include/foot.php'); ?>
<?php include_once($root . '/include/global-footer.php'); ?>