<aside class="sidebar" id="sidebar">
    <div class="manage-account">
        <h2 class="manage-account__title">Manage Account</h2>
        <ul class="manage-account__menu">
            <li class="manage-account__item">
                <a href="{{ url('customer/account/profile') }}">Personal Information</a>
            </li>
            <li class="manage-account__item">
                <a href="{{ url('customer/account/changepassword') }}">Change Password</a>
            </li>
            <li class="manage-account__item">
                <a href="{{ url('customer/account/subscription') }}">Newsletter Subscription</a>
            </li>
            <li class="manage-account__item">
                <a href="{{ url('customer/account/addresses') }}">Billing</a>
            </li>
            <li class="manage-account__item">
                <a href="{{ url('customer/account/orders') }}">Your Purchases</a>
            </li>
            <li class="manage-account__item">
                <a href="{{ url('customer/account/refer') }}">Refer a Friend</a>
            </li>
        </ul>
    </div>
</aside>