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

    <div class="container-fluid wide" id="page-start">

      <div class="row">

        <div class="col-lg-4 col-xl-3 py-3 py-lg-5">
          <?php include_once($root . '/tear-sheet/include/aside-nav.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-3 py-lg-5 px-lg-5 bg-white" id="article-content">

          <div class="narrow">

            <section class="mb-5" id="myDiv">

              <header class="mb-4">
                <h2 class="h1 text-center text-primary">Become a Donor</h2>
              </header>

              <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient.</p>

              <div class="alert alert-danger d-none mt-5" role="alert">
                <p class="alert-heading">
                  <span class="fas fa-times-circle"></span>
                  <span class="px-2">Your application was not sent</span>
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consequuntur eius ex cum adipisci
                  sint reiciendis
                  odit doloremque.</p>
                <ul>
                  <li><a href="#" class="blended-link">First Name is required</a></li>
                  <li><a href="#" class="blended-link">Last Name is required</a></li>
                  <li><a href="#" class="blended-link">Email is required</a></li>
                  <li><a href="#" class="blended-link">Select your borough</a></li>
                </ul>
              </div>

              <form class="needs-validation" novalidate>

                <p class="text-right text-danger fs-md">* Required</p>

                <fieldset>

                  <legend>Labels and Input Fields</legend>

                  <div class="p-4">

                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="exampleFormControlSelect1" class="sr-only">Salutation</label>
                        <select class="form-control form-control-lg" required>
                          <option>Salutation</option>
                          <option value="">Dr.</option>
                          <option value="">M.</option>
                          <option value="">Miss.</option>
                          <option value="">Mr.</option>
                          <option value="">Mrs.</option>
                          <option value="">Ms.</option>
                        </select>
                      </div>

                    </div>
                    <!-- .row -->

                    <div class="form-group">
                      <label for="firstName">First Name
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="firstName" required>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle"></span>
                        <span class="px-1">First Name is required</span>
                      </p>
                    </div>

                    <div class="form-group">
                      <label for="lastName">Last Name
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="lastName" required>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle"></span>
                        <span class="px-1">Last Name is required</span>
                      </p>
                    </div>

                    <div class="form-group">
                      <label for="emailAdress">Email Address
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                      </label>
                      <input type="email" class="form-control form-control-lg" id="emailAddress" required>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle mr-1"></span>
                        <span class="px-1">Enter a valid email address</span>
                      </p>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="exampleFormControlSelect1">Borough
                          <span class="fs-md text-danger"  aria-hidden="true">*</span>
                        </label>
                        <select class="form-control form-control-lg" required>
                          <option value="">Select a Borough</option>
                          <option value="Brooklyn">Brooklyn</option>
                          <option value="Bronx">Bronx</option>
                          <option value="Manhattan">Manhattan</option>
                          <option value="Staten Island">Staten Island</option>
                          <option value="Queens">Queens</option>
                        </select>
                        <p class="invalid-feedback">
                          <span class="fas fa-exclamation-triangle"></span>
                          <span class="px-1">Select your borough</span>
                        </p>
                      </div>
                      <!-- .col -->

                      <div class="form-group col-lg-6">
                        <label for="inlineFormInputGroup">Phone</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                          </div>
                          <input type="text" class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                      </div>
                      <!-- .col -->

                    </div>
                    <!-- .row -->

                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="email" class="form-control form-control-lg" id="subject">
                    </div>

                    <div class="form-group">
                      <label for="message">Message
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="6" required></textarea>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle"></span>
                        <span class="px-1">Message is required</span>
                      </p>
                    </div>

                  </div>
                  <!-- .container -->

                </fieldset>

                <fieldset>

                  <legend>Checkboxes and Radios</legend>

                  <div class="p-4">

                    <div class="form-group">
                      <ul class="checkbox-radio-list">
                        <li>
                          <p>
                            <strong>Select All that apply
                              <span class="fs-md text-danger"  aria-hidden="true">*</span>
                            </strong>
                          </p>
                        </li>
                        <li>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" required>
                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" required>
                            <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                          </div>
                        </li>
                        <li>
                          <p class="invalid-feedback">
                            <span class="fas fa-exclamation-triangle"></span>
                            <span class="px-1">One checkbox is required</span>
                          </p>
                        </li>
                      </ul>
                    </div>

                    <div class="form-group">
                      <ul class="checkbox-radio-list">
                        <li>
                          <p>
                            <strong>Select One</strong>
                          </p>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom
                              radio</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">Or toggle this other custom
                              radio</label>
                          </div>
                        </li>
                      </ul>
                    </div>

                  </div>
                  <!-- .container -->

                </fieldset>


                <fieldset>

                  <legend>Document Uploads</legend>

                  <div class="p-4">


                    <?php 
                      $i = 1;
                      while ($i <= 5){
                        include($root . '/include/_template_parts/file-upload.php');
                        $i++;
                      }
                    ?>

                  </div>
                  <!-- .p-4 -->

                </fieldset>




                <button class="btn btn-lg btn-block btn-secondary text-primary my-4" type="submit">Submit Form</button>

              </form>

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