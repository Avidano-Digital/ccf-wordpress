<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $page_title = 'Member Portal';
  $section = 'member-portal';

  $is_donor = true;
  $is_recipient = true;
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">

  <?php include_once($root . '/include/sub-page-header-member-portal.php'); ?>

    <div class="container-fluid wide">

      <div class="row">
        
        <div class="col-lg-4 col-xl-3 collapse d-lg-block py-3 py-lg-5 bg-light" id="aside-nav" >
          <?php include_once($root . '/include/aside-member-portal.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-5 px-lg-5 bg-white" id="article-content">
        
          <div class="narrow">

            <section class="mb-5">

              <header class="mb-4">
                <h2 class="h1 text-center text-primary">New Shopping Appointment</h2>
              </header>

              <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient.</p>

              <p class="text-right text-danger fs-md">* Required</p>

              <form class="needs-validation mobile-margin-offset-x" novalidate>

                <fieldset>

                  <legend>Appointment</legend>

                  <div class="p-4">

                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="selectDay">Day
                          <span class="fs-md text-danger"  aria-hidden="true">*</span>
                        </label>
                        <select class="form-control form-control-lg" id="selectDay" required>
                          <option value="">Select...</option>
                          <option value="Government">09-09-19 (Thursday) | Arts Group Only</option>
                          <option value="Government">09-09-19 (Thursday) | All Groups</option>
                          <option value="Government">09-09-19 (Thursday) | Arts Group Only</option>
                          <option value="Government">09-09-19 (Thursday) | All Groups</option>
                          <option value="Government">09-09-19 (Thursday) | Arts Group Only</option>
                        </select>
                      </div>
                      <!-- .col -->

                      <div class="form-group col-lg-6">
                        <label for="selectTime">Check in Time
                          <span class="fs-md text-danger"  aria-hidden="true">*</span>
                        </label>
                        <select class="form-control form-control-lg" id="selectTime" required>
                          <option value="">Select...</option>
                          <option value="Government">10:00 am - 10:30 am</option>
                          <option value="Government">2:00 pm - 2:30 pm</option>
                        </select>
                      </div>
                      <!-- .col -->

                    </div>
                    <!-- .row -->

                  </div>
                  <!-- .container -->

                </fieldset>

                <fieldset>

                  <legend>Attendees</legend>

                  <div class="p-4">
                    
                    <p class="mb-4">Who will be attending this shopping appointment?</p>

                    <div class="form-group">
                        <ul class="checkbox-radio-list">

                            <?php 
                            $i = 1;
                            while ($i <= 4): ?>
                            
                            <li>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="carl-avidano-<?php echo $i; ?>">
                                  <label class="custom-control-label" for="carl-avidano-<?php echo $i; ?>">
                                      Carl Avidano<br>
                                      Job Title
                                  </label>
                              </div>
                            </li>

                            <?php $i++; 
                            endwhile;
                            ?>

                        </ul>
                    </div>
                   
                  </div>
                  <!-- .container -->

                </fieldset>
                
                <button class="btn btn-lg btn-block btn-secondary text-primary my-5" type="submit">Book Appointment</button>

              </form>

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
