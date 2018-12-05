<div class="p-4 fs-md">

    <ul class="list-group list-group-flush">
    
        <?php 
        $i = 1;
        while ($i <= 4): ?>

        <li class="list-group-item">
            <div class="row no-gutters align-items-center">
                <div class="col text-truncate px-2">carl@nycarts.org</div>
                <div class="col text-truncate px-2">Carl Avidano</div>
                <div class="col-auto px-2">
                    <ul class="link-list horizontal fs-md">
                        <li>
                            <button class="no-btn-style text-info" type="button" data-toggle="modal" data-target="#edit-email-address">
                                <span class="fas fa-pen"></span>
                                <span class="sr-only">Edit</span>
                            </button>
                        </li>
                        <li>
                            <button class="no-btn-style text-info delete-item" type="button" data-toggle="modal" data-target="#delete-confirmation">
                                <span class="fas fa-trash"></span>
                                <span class="sr-only">Delete</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        
        <?php $i++; 
        endwhile;
        ?>

        <li class="list-group-item">
            <button class="btn btn-info mx-2"
                type="button" 
                data-toggle="modal"
                data-target="#add-new-email-address">
                    Add New
            </button>
        </li>

    </ul>
    
</div>