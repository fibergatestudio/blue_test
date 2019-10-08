<aside class="sidebar" id="sidebar">
    <div class="manage-account">
        <h2 class="manage-account__title">Manage Account</h2>
        <ul class="manage-account__menu">

            <?php if (\Request::is('customer/account/profile')) { ?>

                <li class="manage-account__item manage-account__item_current">
                    <a href="{{ url('customer/account/profile') }}">Personal Information</a>
                </li>
                
             <?php } else { ?>

                <li class="manage-account__item ">
                    <a href="{{ url('customer/account/profile') }}">Personal Information</a>
                </li>

             <?php } ?>

             <?php if (\Request::is('customer/account/changepassword')) { ?>

                <li class="manage-account__item manage-account__item_current">
                    <a href="{{ url('customer/account/changepassword') }}">Change Password</a>
                </li>

             <?php } else { ?>

                <li class="manage-account__item">
                    <a href="{{ url('customer/account/changepassword') }}">Change Password</a>
                </li>
             
             <?php } ?>

             <?php if (\Request::is('customer/account/subscription')) { ?>

                <li class="manage-account__item manage-account__item_current">
                    <a href="{{ url('customer/account/subscription') }}">Newsletter Subscription</a>
                </li>

            <?php } else { ?>

                <li class="manage-account__item">
                    <a href="{{ url('customer/account/subscription') }}">Newsletter Subscription</a>
                </li>

            <?php } ?>

            <?php if (\Request::is('customer/account/addresses')) { ?>

                <li class="manage-account__item manage-account__item_current">
                    <a href="{{ url('customer/account/addresses') }}">Billing</a>
                </li>

            <?php } else { ?>

                <li class="manage-account__item">
                    <a href="{{ url('customer/account/addresses') }}">Billing</a>
                </li>

            <?php } ?>

            <?php if (\Request::is('customer/account/orders')) { ?>

                <li class="manage-account__item manage-account__item_current">
                    <a href="{{ url('customer/account/orders') }}">Your Purchases</a>
                </li>

            <?php } else { ?>

                <li class="manage-account__item">
                    <a href="{{ url('customer/account/orders') }}">Your Purchases</a>
                </li>

            <?php } ?>

            <?php if (\Request::is('customer/account/refer')) { ?>

                <li class="manage-account__item manage-account__item_current">
                    <a href="{{ url('customer/account/refer') }}">Refer a Friend</a>
                </li>

            <?php } else { ?>

                <li class="manage-account__item">
                    <a href="{{ url('customer/account/refer') }}">Refer a Friend</a>
                </li>

            <?php } ?>

        

        </ul>
    </div>
</aside>