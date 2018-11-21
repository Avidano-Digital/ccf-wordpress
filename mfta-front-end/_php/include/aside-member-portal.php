<a class="sr-only sr-only-focusable tab-skipper" href="#article-content" id="skip-to-content" title="Skip Navigation">Skip Side Navigation</a>

<nav class="py-3" role="navigation">

    <ul class="link-list fs-md">
        <li><a class="<?php if( $section == 'member-portal' && $page == 'index'  ){ echo 'active' ;} ?>" href="/member-portal/" title="Home"><span class="fas fa-home"></span><span class="mx-2">Home</span></a></li>
        <li><a class="<?php if( $page == 'authorized-contacts' ){ echo 'active' ;} ?>" href="/member-portal/authorized-contacts.php" title="Authorized Contacts"><span class="fas fa-user-alt"></span><span class="mx-2">Authorized Contacts</span></a></li>
        <li><a class="<?php if( $page == 'company-settings' ){ echo 'active' ;} ?>"  href="/member-portal/company-settings.php" title="Company Settings"><span class="fas fa-cog"></span><span class="mx-2">Company Settings</span></a></li>
        
        <!-- Recipients -->
        
        <li>
            <strong class="text-muted">Recipients</strong>
            <ul class="link-list">
                
                <?php if(!$is_recipient) : ?>

                <li>
                    <a class="<?php if($page == 'recipient-application'){ echo 'active' ;} ?>" href="/member-portal/recipients/recipient-application.php" href="#" title="Become a Recipient">Become a Recipient</a>
                </li>

                <?php else : ?>
                
                <li>
                    <a class="<?php if($page == 'new-shopping-appointment'){ echo 'active' ;} ?>" href="/member-portal/recipients/new-shopping-appointment.php" title="New Shopping Appointment">New Shopping Appointment</a>
                </li>
                <li>
                    <a class="<?php if($page == 'direct-donations'){ echo 'active' ;} ?>" href="/member-portal/recipients/direct-donations.php" title="Direct Donations">Direct Donations</a>
                    <ul class="link-list <?php if($page != 'direct-donation-requests'){ echo 'd-none' ;} ?>">
                        <li>
                            <a class="<?php if($page == 'direct-donation-requests'){ echo 'active' ;} ?>" href="/member-portal/recipients/direct-donation-requests.php"
                                title="My Requests">
                                My Requests</a>
                            <span class="badge badge-info text-white rounded">3</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="<?php if($page == 'invoices' || $page == 'invoice-detail' ){ echo 'active' ;} ?>" href="/member-portal/recipients/invoices.php" title="Invoices">Invoices</a>
                </li>
                <li>
                <a class="<?php if($page == 'shopping-history'){ echo 'active' ;} ?>" href="/member-portal/recipients/shopping-history.php" title="Donation History">Shopping History</a>
                </li>
                <li>
                    <a href="#" title="Recipient Settings">Recipient Settings</a>
                </li>

                <?php endif; ?>

            </ul>
        </li>

        <!-- Donors -->

        <li>
            <strong class="text-muted">Donors</strong>
            <ul class="link-list">

                <?php if(!$is_donor) : ?>

                <li>
                    <a class="<?php if($page == 'company-donor-application'){ echo 'active' ;} ?>" href="/member-portal/donors/company-donor-application.php" title="Become a Donor">Become a Donor</a>
                </li>

                <?php else : ?>

                <li>
                    <a href="#" title="Make a Donation">Make a Donation</a>
                </li>
                <li>
                    <a href="#" title="Submit Direct Donation">Submit Direct Donation</a>
                </li>
                <li>
                    <a class="#" href="#" title="Shopping History">Donation History</a>
                </li>
                <li>
                    <a href="#" title="Donor Settings">Donor Settings</a>
                </li>

                <?php endif; ?>
            
            </ul>
        </li>
    </ul>

</nav>