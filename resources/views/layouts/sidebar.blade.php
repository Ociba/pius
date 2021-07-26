<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
        <!-- Brand demo (see assets/css/demo/demo.css) -->
        <div class="app-brand demo">
            <span class="app-brand-logo demo">
                <img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">
            </span>
            <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>
            <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                <i class="ion ion-md-menu align-middle"></i>
            </a>
        </div>
        <div class="sidenav-divider mt-0"></div>

        <!-- Links -->
        <ul class="sidenav-inner py-1">
          <li class="sidenav-divider mb-1"></li>
            <li class="sidenav-header small font-weight-semibold">Admin Panels</li>
            <!-- Dashboards -->
            <li class="sidenav-item active open">
                <a href="javascript:" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon feather icon-home"></i>
                    <div>Dashboard</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item active">
                        <a href="dashboards_ecommerce.html" class="sidenav-link">
                            <div>Admin Dashboard</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon feather icon-activity"></i>
                    <div>Organisation</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item"><a href="/get-department" class="sidenav-link"><div>Department</div></a></li>
                    <li class="sidenav-item"><a href="/get-employee" class="sidenav-link"><div>Employees</div></a></li>
                    <li class="sidenav-item"><a href="/get-asset" class="sidenav-link"><div>Asset</div></a></li>
                    {{--<li class="sidenav-item"><a href="/get-store" class="sidenav-link"><div>Store</div></a></li>--}}
                    {{--<li class="sidenav-item"><a href="/get-pricing" class="sidenav-link"><div>Pricing</div></a></li>--}}
                </ul>
            </li>
            
            <li class="sidenav-item">
                <a href="javascript:" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon feather icon-user-check"></i>
                    <div>Transactions</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item"><a href="/get-transaction" class="sidenav-link"><div>Transactions</div></a></li>
                    <li class="sidenav-item"><a href="/get-withdraw" class="sidenav-link"><div>Withdraw</div></a></li>
                    <li class="sidenav-item"><a href="/get-expenditure" class="sidenav-link"><div>Expenditure</div></a></li>
                    <li class="sidenav-item"><a href="/get-receipt" class="sidenav-link"><div>Receipts</div></a></li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon feather icon-life-buoy"></i>
                    <div>Account Setting</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item"><a href="/get-profile" class="sidenav-link"><div>Profile</div></a></li>
                    <li class="sidenav-item"><a href="help-create-ticket.html" class="sidenav-link"><div>Permissions</div></a></li>
                </ul>
            </li>
            <li class="sidenav-item">
                <a href="javascript:" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon feather icon-book"></i>
                    <div>Events</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item"><a href="/get-calendar" class="sidenav-link"><div>Full Calendar</div></a></li>
                    <li class="sidenav-item"><a href="/get-chat" class="sidenav-link"><div>Chat</div></a></li>
                </ul>
            </li>
        </ul>
    </div>