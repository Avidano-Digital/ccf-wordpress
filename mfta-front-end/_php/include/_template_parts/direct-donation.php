<div class="card border mb-5">

    <div class="card-header border-bottom">
        <h3 class="h5">Air Conditioner</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 col-md-4 d-flex order-sm-last">

                <?php if ($i % 2 == 0): ?>
                <img class="align-self-center mx-auto" src="http://via.placeholder.com/150x200/e9ecef/777677.png?text=Thumbnail" alt="">
                <?php else : ?>
                <img class="align-self-center mx-auto" src="http://via.placeholder.com/200x150/e9ecef/777677.png?text=Thumbnail" alt="">
                <?php endif; ?>

            </div>
            <!-- .col -->
            <div class="col-12 border-top my-4 d-sm-none"></div>
            <div class="col-sm-9 col-md-8">
                <dl class="row fs-md">
                    <dt class="col-sm-4">Item ID:</dt>
                    <dd class="col-sm-8">210801</dd>
                </dl>
                <dl class="row fs-md">
                    <dt class="col-sm-4">Zipcode:</dt>
                    <dd class="col-sm-8">11101</dd>
                </dl>
                <dl class="row fs-md">
                    <dt class="col-sm-4">Category:</dt>
                    <dd class="col-sm-8">Large Appliance</dd>
                </dl>
                <dl class="row fs-md">
                    <dt class="col-sm-4">Description:</dt>
                    <dd class="col-sm-8">Friedrich Air Conditioner in mint condition available for pick up in Long Island City</dd>
                </dl>
            </div>
            <!-- .col -->
        </div>
        <!-- .row -->

    </div>

    <?php if ($page == 'direct-donations'): ?>
        <div class="card-footer border-top">
            <button class="btn btn-block btn-secondary text-primary request">Request This Item</button>
            <div class="alert alert-success mt-2 rg-button-height d-none" role="alert">
                <p class="text-center">
                    <span class="fas fa-check-circle fa-sm"></span>
                    Item Requested
                    <span class="px-3">|</span>
                    <a href="/member-portal/recipients/direct-donation-requests.php">My Requests</a>
                </p>
            </div>
        </div>
    <?php else : ?>
        <div class="card-body border-top">
            <dl class="fs-md">
                <dt class="mb-2">Contact:</dt>
                <dd>Jane Doe</dd>
                <dd><a href="#">janedoe@gmail.com</a></dd>
                <dd>718-999-9999</dd>
            </dl>
        </div>
        <div class="card-footer border-top">
            <button class="btn btn-block btn-info text-white"
            type="button" 
                data-toggle="modal"
                data-target="#cancel-dd-request-confirmation">
                Cancel Request
            </button>
            <div class="alert alert-success mt-2 rg-button-height d-none" role="alert">
                <p class="text-center">
                    <span class="fas fa-check-circle fa-sm"></span>
                    Request Cancelled
                </p>
            </div>
        </div>
    <?php endif; ?>

</div>
<!-- .dd-results -->