<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('assets/images/users/user-12.jpg')}}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);"
                    class="text-dark font-weight-normal dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Heavenly Joice</a>
            </div>
            <p class="text-muted">Admin</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{url('./admin/dashboard')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#weekend" data-toggle="collapse">
                        <i data-feather="calendar"></i>
                        <span> SaCode's Weekend </span>
                    </a>
                    <div class="collapse show" id="weekend">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('./admin/sacodesweekends/create')}}">New Event</a>
                            </li>
                            <li>
                                <a href="{{url('./admin/sacodesweekends/active')}}">Active</a>
                            </li>
                            <li>
                                <a href="{{url('./admin/sacodesweekends/trash')}}">Trash</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{url('./admin/contributors')}}">
                        <i class="fe-user-check mr-1"></i>
                        <span> Contributors </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('./admin/forum')}}">
                        <i class="fe-message-square mr-1"></i>
                        <span> Forum </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('./admin/donation')}}">
                        <i data-feather="pocket"></i>
                        <span> Donations </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('./admin/courses')}}">
                        <i class="fe-book-open mr-1"></i>
                        <span> Courses </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('./admin/blogs')}}">
                        <i class="fe-book mr-1"></i>
                        <span> Blogs </span>
                    </a>
                </li>

                <li class="menu-title">Administrator</li>

                <li>
                    <a href="{{url('admin/users')}}">
                        <i class="fe-users mr-1"></i>
                        <span> Users </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/settings')}}">
                        <i class="fe-settings mr-1"></i>
                        <span> Settings </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
