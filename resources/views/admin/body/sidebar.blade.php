<div class="vertical-menu">

    <div data-simplebar class="h-100">

        @php
            $user = Auth::user();
        @endphp

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('backend/assets/images/users/logo-admin.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $user->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('city.index') }}" class="waves-effect">
                        <i class="ri-building-line"></i>
                        <span>City</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('home.category.index') }}" class="waves-effect">
                        <i class="ri-bookmark-3-line"></i>
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('home.subcategory.index') }}" class="waves-effect">
                        <i class="ri-bookmark-2-line"></i>
                        <span>Sub Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('city.index') }}" class="waves-effect">
                        <i class="ri-book-2-line"></i>
                        <span>Batik</span>
                    </a>
                </li>

                <li class="menu-title">Admin</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">User</a></li>
                        <li><a href="#">Change Password</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
