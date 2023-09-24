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
                        <a href="{{route('home')}}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Tableau de bord</span></a>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Contacts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Liste complète</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Ajouter manuellement</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Importer</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Groupes de contact</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Messages</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Mes campagnes</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Modeles</a></li>
                        </ul>
                    </li>

                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Mon compte</li>
                    <li>
                        <a href="{{route('user.profil.mon_profil')}}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Profil</span></a>
                    </li>
                    <li>
                        <a href="{{route('user.profil.setting')}}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Paramètres</span></a>
                    </li>

                    <div class="update-msg text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <h5 class="mt-3">{{config('app.name')}}</h5>
                        <p class="mb-3">Profitez plus de notre système en souscrivant à nos packs.</p>
                        <a href="{{route('user.packs.voir_les_packs')}}" class="btn btn-outline-warning btn-sm">Nos plans</a>
                    </div>

                </ul>


            </div>
        </div>
