    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="{{ asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Main</li>
                <li>
                    <a href="javascript: void(0);"> <i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.home')}}"><i
                                    class="ti-control-record"></i>Analytics</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"> <i data-feather="home"  class="align-self-center menu-icon"></i>
                        <span>Abonnements</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span>
                        </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.liste')}}"><i
                                    class="ti-control-record"></i>Les packs</a></li>
                        <li class="nav-item"><a class="nav-link" href="sales-index.html"><i
                                    class="ti-control-record"></i>Les souscriptions</a></li>
                    </ul>
                </li>
            </ul>


        </div>
    </div>
