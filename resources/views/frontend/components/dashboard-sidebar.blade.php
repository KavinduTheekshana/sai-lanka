<div class="col-lg-4 col-md-12 col-12">
    <div class="sidepannal">
        <div class="pannal-box mt-0">
            <h5>My Profile</h5>
            <div class="pannal-content">
                <ul class="profile-setting">
                    <li><a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}"><span><i
                                    class="fas fa-user-alt"></i></span> Profile Info</a></li>
                    <li><a href="dashboard-notification.html"><span><i class="fas fa-bell"></i></span>
                            Notifications Setting</a></li>
                    <li><a href="dashboard-connections-requests.html"><span><i
                                    class="fas fa-user-friends"></i></span> Connections Requests</a>
                    </li>
                    <li><a href="dashboard-account.html"><span><i class="fas fa-user-alt"></i></span>
                            Account Info</a></li>
                    <li><a href="dashboard-billing.html"><span><i
                                    class="fas fa-file-invoice-dollar"></i></span> Billing & Payout</a>
                    </li>
                    <li><a href="javascript:;"><span><i class="fas fa-history"></i></span> View purchase
                            history</a></li>
                    <li><a href="{{ route('logout') }}"><span><i class="fas fa-sign-out-alt"></i></span>
                            Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>