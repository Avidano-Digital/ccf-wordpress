<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once($root . '/include/global-header.php');

  $page_title = 'Member Portal';
  $section = 'member-portal';

  $is_donor = false;
  $is_recipient = false;
?>

<?php include_once($root . '/include/head.php'); ?>

<main id="content" class="bg-light" role="main">

  <?php include_once($root . '/include/sub-page-header-member-portal.php'); ?>

    <div class="container-fluid wide" id="page-start">

      <div class="row">
        
        <div class="col-lg-4 col-xl-3 collapse d-lg-block py-3 py-lg-5 bg-light" id="aside-nav" >
          <?php include_once($root . '/include/aside-member-portal.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-5 px-lg-5 bg-white" id="article-content">

          <div class="narrow">

            <section class="mb-5">

              <header class="mb-4">
                <h2 class="h1 text-center text-primary">Become a Donor</h2>
              </header>

              <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient.</p>

              <div class="alert alert-danger my-5 d-none" role="alert">
                <p class="alert-heading">
                  <span class="fas fa-times-circle"></span>
                  <span class="px-2">Your application was not sent</span>
                </p>
                <p>To continue with your application, correct then following errors and resubmit the form.</p>
              </div>

              <p class="text-right text-danger fs-md" aria-hidden="true">* Required</p>

              <form class="needs-validation mobile-margin-offset-x" novalidate>

                <fieldset>

                  <legend>Company Information</legend>

                  <div class="p-4">

                    <div class="form-group">
                      <label for="companyName">Company Name
                        <span class="sr-only">required</span>
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="companyName" required>
                        <p class="invalid-feedback" id="companyName-invalid" aria-hidden="false">
                          <span class="fas fa-exclamation-triangle"></span>
                          <span class="mx-1">Company Name is required</span>
                        </p>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="companyType" aria-labelledby="companytype-invalid">Company Type
                          <span class="fs-md text-danger" aria-hidden="true">*</span>
                        </label>
                        <select class="form-control form-control-lg" id="companyType" required>
                          <option value="">Select...</option>
                          <option value="Government">Government</option>
                          <option value="Nonprofit">Nonprofit</option>
                          <option value="Business">Business</option>
                        </select>
                        <p class="invalid-feedback" id="companyType-invalid">
                          <span class="fas fa-exclamation-triangle" aria-hidden="true"></span>
                          <span class="mx-1">Select your borough</span>
                        </p>
                      </div>
                      <!-- .col -->

                      <div class="form-group col-lg-6">
                        <label for="taxID">Tax ID (if applicable)</label>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="taxID">
                      </div>
                      <!-- .col -->

                    </div>
                    <!-- .row -->

                    <div class="form-group">
                      <label for="streetAddress">Street Address
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="streetAddress" required>
                        <p class="invalid-feedback">
                          <span class="fas fa-exclamation-triangle" aria-hidden="true"></span>
                          <span class="mx-1">Enter a valid street address</span>
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="city">
                          City
                          <span class="fs-md text-danger" aria-hidden="true">*</span>
                        </label>
                        <input type="text" class="form-control form-control-lg" id="city" required>
                    </div>

                    <div class="form-row">

                      <div class="form-group col-lg-6">
                        <label for="state">State
                          <span class="fs-md text-danger" aria-hidden="true">*</span>
                        </label>
                        <select class="form-control form-control-lg" id="state" required>
                          <option value="">Select...</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="CO">Colorado</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="DC">District Of Columbia</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="HI">Hawaii</option>
                          <option value="ID">Idaho</option>
                          <option value="IL">Illinois</option>
                          <option value="IN">Indiana</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NV">Nevada</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NM">New Mexico</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="ND">North Dakota</option>
                          <option value="OH">Ohio</option>
                          <option value="OK">Oklahoma</option>
                          <option value="OR">Oregon</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="SD">South Dakota</option>
                          <option value="TN">Tennessee</option>
                          <option value="TX">Texas</option>
                          <option value="UT">Utah</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <p class="invalid-feedback">
                          <span class="fas fa-exclamation-triangle" aria-hidden="true"></span>
                          <span class="mx-1">Select your state</span>
                        </p>
                      </div>
                      <!-- .col -->

                      <div class="form-group col-lg-6">
                        <label for="postal-code">
                          Postal Code
                          <span class="fs-md text-danger" aria-hidden="true">*</span>
                        </label>
                        <input type="text" class="form-control form-control-lg" id="postal-code" required>
                      </div>
                      <!-- .col -->

                    </div>
                    <!-- .row -->

                  </div>
                  <!-- .container -->

                </fieldset>

                <fieldset>

                  <legend>Personal Information</legend>

                  <div class="p-4">

                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="salutation" >Salutation</label>
                        <select class="form-control form-control-lg" id="salutation" required>
                          <option value="">Select...</option>
                          <option value="">Dr.</option>
                          <option value="">M.</option>
                          <option value="">Miss.</option>
                          <option value="">Mr.</option>
                          <option value="">Mrs.</option>
                          <option value="">Ms.</option>
                        </select>
                        <p class="invalid-feedback">
                          <span class="fas fa-exclamation-triangle" aria-hidden="true"></span>
                          <span class="mx-1">Select your borough</span>
                        </p>
                      </div>

                    </div>
                    <!-- .row -->

                    <div class="form-group">
                      <label for="firstName">First Name
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="firstName" required>
                        <p class="invalid-feedback">
                          <span class="fas fa-exclamation-triangle" aria-hidden="true"></span>
                          <span class="mx-1">Provide your first name</span>
                        </p>
                    </div>

                    <div class="form-group">
                      <label for="lastName">Last Name
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="lastName" required>
                        <p class="invalid-feedback">
                          <span class="fas fa-exclamation-triangle" aria-hidden="true"></span>
                          <span class="mx-1">Provide your last name</span>
                        </p>
                    </div>

                    <div class="form-group">
                      <label for="jobPosition">Job or Postion</label>
                      <input type="text" class="form-control form-control-lg" id="jobPosition">
                    </div>

                    <div class="form-group">
                      <label for="Email">Email Address</label>
                      <input type="email" class="form-control form-control-lg" id="Email" value="john@nyctheatre.org" readonly>
                    </div>

                  </div>
                  <!-- .container -->

                </fieldset>

                <fieldset>

                  <legend>Thank You Letters</legend>

                  <div class="p-4">

                    <p class="fs-md"> 
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit perferendis omnis a atque maiores expedita perspiciatis qui quaerat accusamus.
                    </p>

                    <div class="form-group">

                      <ul class="checkbox-radio-list">
                        <li>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="thank-you-email" name="donor-preferences" checked>
                            <label class="custom-control-label" for="thank-you-email">I want to receive thank you
                              letters by email</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="thank-you-letters" name="donor-preferences">
                            <label class="custom-control-label" for="thank-you-letters">I want to opt-out of thank you
                              letters</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="donate-anonymously" name="donor-preferences">
                            <label class="custom-control-label" for="donate-anonymously">I want to donate anonymously</label>
                          </div>
                        </li>
                      </ul>
                    </div>

                  </div>
                  <!-- .p-4 -->

                </fieldset>
                
                <button class="btn btn-lg btn-block btn-secondary text-primary my-5" type="submit">Submit Application</button>

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