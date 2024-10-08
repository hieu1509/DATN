<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('velzon/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('velzon/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('velzon/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('velzon/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/dashboard" role="button" aria-expanded="false"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>

                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class=" ri-book-3-line"></i> <span data-key="t-apps">Danh mục</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}" class="nav-link" data-key="t-chat">Danh sách danh mục </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.create') }}" class="nav-link" data-key="t-api-key">Thêm danh mục</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApp" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApp">
                        <i class=" ri-book-3-line"></i> <span data-key="t-apps">Danh mục con</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApp">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('subcategories.index') }}" class="nav-link" data-key="t-chat">Danh sách danh mục con</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('subcategories.create') }}" class="nav-link" data-key="t-api-key">Thêm danh mục con</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i data-feather="package"></i><span data-key="t-Pages">Products</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/listProduct" class="nav-link" data-key="t-chat"> Product List </a>
                            </li>
                            <li class="nav-item">
                                <a href="/addProduct" class="nav-link" data-key="t-api-key"> Add Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="/variant" class="nav-link" data-key="t-api-key"> Variant</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages2" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages2" data-bs-parent="#accordionExample">
                        <i data-feather="package"></i><span data-key="t-Pages">Variant</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages2" data-bs-parent="#accordionExample">
                        <ul class="nav nav-sm flex-column">

                            <!-- Chip -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarOtherProducts" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarOtherProducts">
                                    <span data-key="t-Pages">Chips</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarOtherProducts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('admins.chips.index')}}" class="nav-link" data-key="t-option1"> Chip List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('admins.chips.create')}}" class="nav-link" data-key="t-option2"> Add Chip</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Ram -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarFolder2" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarFolder2">
                                    <span data-key="t-Pages">Rams</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarFolder2">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('admins.rams.index')}}" class="nav-link" data-key="t-option1"> Ram List </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('admins.rams.create')}}" class="nav-link" data-key="t-option2"> Add Ram</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Storage -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarFolder3" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarFolder3">
                                    <span data-key="t-Pages">Storages</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarFolder3">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('admins.storages.index')}}" class="nav-link" data-key="t-option1"> Storage List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('admins.storages.create')}}" class="nav-link" data-key="t-option2"> Add Storage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/customers" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Customers</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/comments" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class=" ri-chat-3-line"></i> <span data-key="t-authentication">Comments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/orders" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-shopping-cart-line"></i> <span data-key="t-authentication">Orders</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/statistics" role="button"
                        aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ri-pie-chart-line"></i> <span data-key="t-charts"> Statistics </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
