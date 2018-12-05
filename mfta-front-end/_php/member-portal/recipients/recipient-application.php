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

    <div class="container-fluid wide">

      <div class="row">
        
        <div class="col-lg-4 col-xl-3 collapse d-lg-block py-3 py-lg-5 bg-light" id="aside-nav">
          <?php include_once($root . '/include/aside-member-portal.php'); ?>
        </div>

        <div class="col-lg-8 col-xl-9 py-5 px-lg-5 bg-white" id="article-content">
        
          <div class="narrow">

            <section class="mb-5">

              <header class="mb-4">
                <h2 class="h1 text-center text-primary">Become a Recipient</h2>
              </header>

              <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient
                duis pretium et dolor
                parturient.</p>

              <p class="text-right text-danger fs-md">* Required</p>

              <form class="needs-validation mobile-margin-offset-x" novalidate>

                <fieldset>

                  <legend>Organization Information</legend>

                  <div class="p-4">

                    <div class="form-group">
                      <label for="organizationName">Organization Name
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="organizationName" required>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle mr-1"></span>Organization
                        already exists in our
                        system.
                        <span class="d-block">Need Help? <a href="#">Email Us</a></span>
                      </p>
                    </div>

                    <div class="form-group">
                      <label for="organization-type">Organization Type
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <select class="form-control form-control-lg" id="organization-type" required>
                        <option value="">Select...</option>
                        <option value="Arts Group">Arts Group</option>
                        <option value="Non-arts Group">Non-arts Group</option>
                        <option value="NYC DOE">NYC DOE</option>
                        <option value="Government">Government</option>
                        <option value="Religous">Religous</option>
                      </select>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle mr-1"></span>
                        Select your borough
                      </p>
                    </div>

                    <div class="form-group d-none" id="sponsorship">
                      <ul class="list-unstyled horizontal">
                        <li class="mb-3">
                          <p>
                            <strong>Are you Sponsored?</strong>
                          </p>
                        </li>
                        <li>
                          <ul class="checkbox-radio-list">
                            <li class="custom-control custom-radio mr-4">
                              <input type="radio" id="sponsored-yes" name="sponsored" class="custom-control-input">
                              <label class="custom-control-label" for="sponsored-yes">Yes</label>
                            </li>
                            <li class="custom-control custom-radio">
                              <input type="radio" id="sponsored-no" name="sponsored" class="custom-control-input">
                              <label class="custom-control-label" for="sponsored-no">No</label>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-6 d-none" id="sponsorship-type">
                        <label for="sponsoring-organizations">Sponsoring Organizations
                          <span class="fs-md text-danger" aria-hidden="true">*</span>
                        </label>
                        <select class="form-control form-control-lg" id="sponsoring-organizations" required>
                          <option value="">Select...</option>
                          <option value="Org A">Org A</option>
                          <option value="Org B">Org B</option>
                          <option value="Org C">Org C</option>
                          <option value="Org D">Org D</option>
                          <option value="Other">Other</option>
                        </select>
                        <p class="invalid-feedback">
                          <span class="fas fa-exclamation-triangle mr-1"></span>
                          Select your borough
                        </p>
                      </div>
                      <!-- .col -->

                    </div>
                    <!-- .row -->

                    <div class="form-group d-none" id="wrap-organization-sponsor">
                      <label for="organization-sponsor-name">
                        We are sponsored by
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <textarea class="form-control form-control-lg" id="organization-sponsor-name" rows="3" required></textarea>
                      <small id="emailHelp" class="form-text text-muted">Enter Sponsoring
                        Organization Name, address,
                        and phone.</small>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle"></span>
                        <span class="px-1">Sponsor information is required</span>
                      </p>
                    </div>

                    <div class="form-group">

                      <label for="organization-category">Organization Category
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <select class="form-control form-control-lg" id="organization-category" required>
                        <option value="">Select...</option>
                        <option value="Category 1">Category 1</option>
                        <option value="Category 2">Category 2</option>
                        <option value="Category 3">Category 3</option>
                        <option value="Category 4">Category 4</option>
                        <option value="Category 5">Category 5</option>
                        <option value="Category 6">Category 6</option>
                        <option value="Category 7">Category 7</option>
                        <option value="Category 8">Category 8</option>
                        <option value="Category 9">Category 9</option>
                        <option value="Category 10">Category 10</option>
                      </select>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle mr-1"></span>
                        Organization Category is required
                      </p>

                    </div>
                    <!-- .form-group -->

                    <div class="form-group">
                      <label for="taxID">Tax ID (if applicable)</label>
                      <input type="text" class="form-control form-control-lg" id="taxID" required>
                    </div>

                  </div>
                  <!-- .container -->

                </fieldset>

                <fieldset>

                  <legend>Organization Address</legend>

                  <div class="p-4">

                    <div class="form-group">
                      <label for="streetAddress">Street Address
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="streetAddress" required>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle mr-1"></span>
                        Enter a valid street address
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
                          <span class="fas fa-exclamation-triangle mr-1"></span>
                          Select your state
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

                  <legend>Primary Contact Information</legend>

                  <div class="p-4">

                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="salutation">Salutation</label>
                        <select class="form-control form-control-lg" id="salutation">
                          <option value="">Select...</option>
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
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="firstName" required>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle mr-1"></span>
                        Provide your first name
                      </p>
                    </div>

                    <div class="form-group">
                      <label for="lastName">Last Name
                        <span class="fs-md text-danger" aria-hidden="true">*</span>
                      </label>
                      <input type="text" class="form-control form-control-lg" id="lastName" required>
                      <p class="invalid-feedback">
                        <span class="fas fa-exclamation-triangle mr-1"></span>
                        Provide your last name
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

                <!-- Here we can change out the recipient document according to the organization type selected above -->

                <div id="recipient-documentation">

                  <div class="mb-4">

                    <h2>Recipient Documentation</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos
                      neque quod iure
                      voluptates architecto et recusandae.</p>

                  </div>

                  <fieldset>

                    <legend>Formal Request Letter</legend>

                    <div class="p-4">

                      <p class="fs-md">
                        A formal request letter must be on official letterhead, addressed to
                        Ms. Harriet Taub,
                        Executive Director, and include:
                      </p>

                      <ol class="fs-md">
                        <li>Your job title and contact information.</li>
                        <li>Date and signature; unsigned letters will be returned.</li>
                        <li>Description of your organization's arts programming</li>
                        <li>Mission Statement</li>
                        <li>List of Board of Directors and their titles if applicable</li>
                        <li>Fiscally sponsored artists must submit a resume, CV or bio of key
                          personnel in lieu of
                          the Board of Directors
                          list.</li>
                        <li>Total annual operating budget</li>
                        <li>List and name your organization's funding sources (do not include
                          the names of private
                          donors)
                        </li>
                      </ol>

                      <div class="form-group mt-4">

                        <div class="wrap-file-input text-center">
                          <input type="file" name="file-upload-01" id="file-upload-01" aria-describedby="file-upload-help-01"
                            class="input-file sr-only">
                          <label class="file-input-label" for="file-upload-01">
                            <span class="file-choose">
                              <span class="fas fa-upload"></span>
                              <span class="title mx-1">Upload Document</span>
                            </span>
                            <span class="file-name">No file selected</span>
                          </label>
                          <small class="text-muted sr-only" id="file-upload-help-01">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit quod neque quibusdam.
                          </small>

                        </div>
                        <!-- .wrap-file-input -->

                      </div>
                      <!-- .form-group -->

                    </div>
                    <!-- .p-4 -->

                  </fieldset>

                  <fieldset>

                    <legend>Proof of Nonprofit Status</legend>

                    <div class="p-4">

                      <p class="fs-md">
                        Proof of nonprofit status or fiscal sponsorship (only one is required):
                      </p>


                      <ol class="fs-md">
                        <li>A copy of the IRS 501(c)(3) approval letter.</li>
                        <li>New York State Charities Registration.</li>
                        <li>A letter from sponsoring organization outlining the scope and
                          timeframe of sponsorship</li>
                      </ol>


                      <div class="form-group mt-4">

                        <div class="wrap-file-input text-center">
                          <input type="file" name="file-upload-02" id="file-upload-02" aria-describedby="file-upload-help-02"
                            class="input-file sr-only">
                          <label class="file-input-label" for="file-upload-02">
                            <span class="file-choose">
                              <span class="fas fa-upload"></span>
                              <span class="title mx-1">Upload Document</span>
                            </span>
                            <span class="file-name">No file selected</span>
                          </label>
                          <small class="text-muted sr-only" id="file-upload-help-02">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit quod neque quibusdam.
                          </small>

                        </div>
                        <!-- .wrap-file-input -->

                      </div>
                      <!-- .form-group -->
                    </div>
                    <!-- .p-4 -->

                  </fieldset>

                  <fieldset>

                    <legend>Proof of Arts Programing</legend>

                    <div class="p-4">

                      <div class="alert alert-danger mb-3" role="alert">
                        <p class="alert-heading">
                          <span class="fas fa-times-circle"></span>
                          <span class="mx-1">The document you sent was incomplete</span>
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                          consequuntur eius ex cum
                          adipisci
                          sint reiciendis odit doloremque.</p>
                      </div>

                      <p class="fs-md">
                        At least a two years established history; anything from the current
                        year does not apply.
                        All proof must be from
                        prior years of programming. Three different forms must be provided from
                        the following
                        categories:
                      </p>

                      <ol class="fs-md">
                        <li>A copy of the IRS 501(c)(3) approval letter.</li>
                        <li>New York State Charities Registration.</li>
                        <li>A letter from sponsoring organization outlining the scope and
                          timeframe of sponsorship</li>
                      </ol>

                      <div class="form-group mt-4">

                        <div class="wrap-file-input text-center">
                          <input type="file" name="file-upload-03" id="file-upload-03" aria-describedby="file-upload-help-03"
                            class="input-file sr-only">
                          <label class="file-input-label" for="file-upload-03">
                            <span class="file-choose">
                              <span class="fas fa-upload"></span>
                              <span class="title mx-1">Upload Document</span>
                            </span>
                            <span class="file-name">No file selected</span>
                          </label>
                          <small class="text-muted sr-only" id="file-upload-help-03">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit quod neque quibusdam.
                          </small>

                        </div>
                        <!-- .wrap-file-input -->

                      </div>
                      <!-- .form-group -->

                    </div>
                    <!-- .p-4 -->

                  </fieldset>

                </div>
                <!-- #recipient-documentation -->

                <button class="btn btn-lg btn-secondary text-primary btn-block my-5" type="submit">Submit
                  Application</button>

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
