<!-- Donor Create Account Disclaimer -->
<div class="modal" 
    id="donor-create-account" 
    aria-labelledby="donor-create-account-title" 
    aria-hidden="true" 
    tabindex="-1" 
    role="dialog">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="donor-create-account-title">Create Donor Account</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->
            
            <div class="modal-body py-4">

                <div class="row matrix-gutter">

                    <div class="col-lg-6">
                        <h2 class="h5">Donate as an individual</h2>
                        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo.</p>
                        <a class="btn btn-secondary btn-block text-primary" href="member-portal-donor-become-donor-individual.html">
                            Register
                        </a>
                    </div>
                    
                    <div class="col-lg-6">
                        <h2 class="h5">Donate as a company</h2>
                        <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo.</p>
                        <a class="btn btn-secondary btn-block text-primary" href="member-portal-donor-become-donor-company.html">
                        Register
                        </a>


                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>
</div>

<!-- New Authorized Contact Modal -->
<div class="modal" 
     id="new-authorized-contact"
     aria-labelledby="new-authorized-contact-title"
     data-backdrop="static"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

     <div class="modal-dialog modal-dialog-centered" role="document">
         
        <div class="modal-content position-relative">

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="new-authorized-contact-title">New Authorized Contact</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->

            <form class="needs-validation position-relative" novalidate>
            
                <div class="modal-body">

                    <p class="text-right text-danger fs-md mb-0">* Required</p>

                    <div class="form-group">
                        <label for="contactFullName">Full Name
                            <span class="fs-md text-danger"  aria-hidden="true">*</span>
                        </label>
                        <input type="text" class="form-control form-control-lg" id="contactFullName" required>
                    </div>

                    <div class="form-group">
                        <label for="contactEmail">Email
                            <span class="fs-md text-danger"  aria-hidden="true">*</span>
                        </label>
                        <input type="text" class="form-control form-control-lg" id="contactEmail" required>
                    </div>

                    <div class="form-group">
                        <label for="contactPhone">Phone
                            <span class="fs-md text-danger"  aria-hidden="true">*</span>
                        </label>
                        <input type="text" class="form-control form-control-lg" id="contactPhone" required>
                    </div>

                    <div class="form-group">
                        <label for="contactRole">Role
                            <span class="fs-md text-danger" aria-hidden="true">*</span>
                        </label>
                        <select class="form-control form-control-lg" id="contactRole" required>
                            <option value="Primary User">Primary User</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Account Manager">Account Manager</option>
                            <option value="Representative">Representative</option>
                        </select>
                    </div>

                </div>
                <!-- .model-body -->

                <div class="modal-footer">

                    <div class="row matrix-gutter">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-lg btn-block btn-primary text-secondary">Add</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-lg btn-block btn-outline-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>

                </div>
                <!-- .model-footer -->

                <div class="modal-confirm px-3 py-4">

                        <h2 class="h5">
                            <span class="far fa-check-circle text-success"></span>
                            <span class="text-primary mx-1">Contact Added</span>
                        </h2>

                        <p class="mb-4">Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis
                            pretium et dolor parturient.</p>

                        <ul class="link-list horizontal fs-md">
                            <li><a href="#" class="text-info">Add Another Contact</a></li>
                            <li><a href="#" class="text-info" data-dismiss="modal">Close Window</a></li>
                        </ul>

                </div>

            </form>


        </div>
    </div>
</div>

<!-- Edit Authorized Contact Modal -->
<div class="modal" 
     id="edit-authorized-contact"
     aria-labelledby="edit-authorized-contact-title"
     data-backdrop="static"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

     <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content needs-validation" novalidate>

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="edit-authorized-contact-title">Edit Authorized Contact</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->

            <div class="modal-body">

                <p class="text-right text-danger fs-md mb-0">* Required</p>

                <div class="form-group">
                    <label for="contactFullName">Full Name
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                    </label>
                    <input type="text" class="form-control form-control-lg" id="contactFullName" value="Carl Avidano" required>
                </div>

                <div class="form-group">
                    <label for="contactEmail">Email
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                    </label>
                    <input type="text" class="form-control form-control-lg" id="contactEmail" value="cavidano@artsnyc.org" required>
                </div>

                <div class="form-group">
                    <label for="contactPhone">Phone
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                    </label>
                    <input type="text" class="form-control form-control-lg" id="contactPhone" value="718-999-9999" required>
                </div>

                <div class="form-group">
                    <label for="contactRole">Role
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                    </label>
                    <select class="form-control form-control-lg" id="contactRole" required>
                        <option value="Primary User">Primary User</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Account Manager">Account Manager</option>
                        <option value="Representative">Representative</option>
                    </select>
                </div>

            </div>
            <!-- .model-body -->

            <div class="modal-footer">

                <div class="row matrix-gutter">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-primary text-secondary" data-dismiss="modal">Save</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
            <!-- .model-footer -->

        </form>
    </div>
</div>

<!-- Delete Confirmation -->
<div class="modal" 
     id="delete-confirmation"
     aria-labelledby="delete-confirmation-title"
     data-backdrop="static"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

     <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content needs-validation" novalidate>

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="delete-confirmation-title">Delete Permanently?</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->

            <div class="modal-body">

                <p>This action cannot be undone.</p>

            </div>
            <!-- .model-body -->

            <div class="modal-footer">

                <div class="row matrix-gutter">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-primary text-secondary" data-dismiss="modal">Yes</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-outline-danger" data-dismiss="modal">No</button>
                    </div>
                </div>

            </div>
            <!-- .model-footer -->

        </form>
    </div>
</div>

<!-- Cancel Direct Donation Request -->
<div class="modal" 
     id="cancel-dd-request-confirmation"
     aria-labelledby="cancel-dd-request-confirmation-title"
     data-backdrop="static"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

     <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content needs-validation" novalidate>

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="cancel-dd-request-confirmation-title">Cancel Direct Dontation Request?</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->

            <div class="modal-body">

                <p>This action cannot be undone.</p>

            </div>
            <!-- .model-body -->

            <div class="modal-footer">

                <div class="row matrix-gutter">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-primary text-secondary" data-dismiss="modal">Yes</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-outline-danger" data-dismiss="modal">No</button>
                    </div>
                </div>

            </div>
            <!-- .model-footer -->

        </form>
    </div>
</div>

<!-- Edit Email Address -->
<div class="modal" 
     id="edit-email-address"
     aria-labelledby="edit-email-address-title"
     data-backdrop="static"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

     <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content needs-validation" novalidate>

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="edit-email-address-title">Edit Email Address</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->

            <div class="modal-body">

                <p class="text-right text-danger fs-md mb-0">* Required</p>

                <div class="form-group">
                    <label for="emailLabel">
                        Email Label
                    </label>
                    <input type="text" class="form-control form-control-lg" id="emailLabel" value="Carl Avidano">
                </div>
                <div class="form-group">
                    <label for="contactEmail">
                        Email Address
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                    </label>
                    <input type="text" class="form-control form-control-lg" id="contactEmail" value="cavidano@artsnyc.org" required>
                </div>

            </div>
            <!-- .model-body -->

            <div class="modal-footer">

                <div class="row matrix-gutter">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-primary text-secondary" data-dismiss="modal">Save</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
            <!-- .model-footer -->

        </form>
    </div>
</div>

<!-- Add New Email Address -->
<div class="modal" 
     id="add-new-email-address"
     aria-labelledby="add-new-email-address-title"
     data-backdrop="static"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

     <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content needs-validation" novalidate>

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="add-new-email-address-title">New Email Address</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->

            <div class="modal-body">

                <p class="text-right text-danger fs-md mb-0">* Required</p>

                <div class="form-group">
                    <label for="emailLabel">
                        Email Label
                    </label>
                    <input type="text" class="form-control form-control-lg" id="emailLabel">
                    <small id="emailLabelHelp" class="form-text text-muted">Email owner or type (e.g. John Doe, general info)</small>
                </div>

                <div class="form-group">
                    <label for="contactEmail">
                        Email Address
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                    </label>
                    <input type="text" class="form-control form-control-lg" id="contactEmail" required>
                </div>

            </div>
            <!-- .model-body -->

            <div class="modal-footer">

                <div class="row matrix-gutter">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-primary text-secondary" data-dismiss="modal">Add</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
            <!-- .model-footer -->

        </form>
    </div>
</div>

<!-- Edit Websites -->
<div class="modal" 
     id="edit-websites"
     aria-labelledby="edit-websites-title"
     data-backdrop="static"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

     <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content needs-validation" novalidate>

            <div class="modal-header text-info">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col">
                        <h1 class="modal-title h4 mb-0" id="edit-websites-title">Edit Website</h1>
                    </div>
                    <div class="col-auto">
                        <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- .modal-header -->

            <div class="modal-body">

                <p class="text-right text-danger fs-md mb-0">* Required</p>

                <div class="form-group mb-0">

                    <label for="websiteUrl">
                        Website URL
                        <span class="fs-md text-danger"  aria-hidden="true">*</span>
                    </label>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="url-prefix">https://</span>
                        </div>
                        <input type="text" class="form-control form-control-lg" id="basic-url" aria-describedby="url-prefix">
                    </div>

                </div>

            </div>
            <!-- .model-body -->

            <div class="modal-footer">

                <div class="row matrix-gutter">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-primary text-secondary" data-dismiss="modal">Save</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-lg btn-block btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
            <!-- .model-footer -->

        </form>
    </div>
</div>

<footer>

<!-- Optional sub-footer goes here -->

<?php include_once($root . '/include/nyc-bottom-footer.php'); ?>

</footer>