<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin Ican</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('asset-landing-page-admin/css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset-landing-page-admin/css/dashboard.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
</head>


<body class="sb-nav-fixed">
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark" >
        <a class="navbar-brand ps-3" href="/dashboard">Dashboard Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars" style="color: black;"></i>

        </button>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion bg-custom-blue" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading text-white">Kategori</div>

                        <!-- Manage -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                            Manage
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <!-- About -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                    Home
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a href="{{ url('/admin/dashboard/home') }}" class="btn btn-primary btn-sm">Manage Home</a>
                                    </nav>
                                </div>

                                <!-- About -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAbout" aria-expanded="false" aria-controls="pagesCollapseAbout">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    About
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAbout" aria-labelledby="headingAbout" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a href="{{ url('/admin/dashboard/about') }}" class="btn btn-primary btn-sm">Manage About</a>
                                    </nav>
                                </div>

                                <!-- Certificate -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseCertificate" aria-expanded="false" aria-controls="pagesCollapseCertificate">
                                    <div class="sb-nav-link-icon"><i class="fas fa-award"></i></div>
                                    Certificate
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseCertificate" aria-labelledby="headingCertificate" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a href="{{ url('/admin/dashboard/certificate') }}" class="btn btn-primary btn-sm">Manage Certificate</a>
                                    </nav>
                                </div>

                                <!-- Project -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseProject" aria-expanded="false" aria-controls="pagesCollapseProject">
                                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                    Project
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseProject" aria-labelledby="headingProject" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a href="{{ url('/admin/dashboard/project') }}" class="btn btn-primary btn-sm">Manage Project</a>
                                    </nav>
                                </div>

                                <!-- Skill -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseSkill" aria-expanded="false" aria-controls="pagesCollapseSkill">
                                    <div class="sb-nav-link-icon"><i class="fas fa-lightbulb"></i></div>
                                    Skill
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseSkill" aria-labelledby="headingSkill" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a href="{{ url('/admin/dashboard/skill') }}" class="btn btn-primary btn-sm">Manage Skill</a>
                                    </nav>
                                </div>

                                <!-- Contact -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseContact" aria-expanded="false" aria-controls="pagesCollapseContact">
                                    <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                                    Contact
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseContact" aria-labelledby="headingContact" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a href="{{ url('/admin/dashboard/contact') }}" class="btn btn-primary btn-sm">Manage Contact</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
  
<body>
    <!-- Bentuk melayang -->
    <div class="floating floating-1"></div>
    <div class="floating floating-2"></div>
    <div class="floating floating-3"></div>

    <!-- Container Selamat Datang -->
    <div class="welcome-container">
        <h1>Selamat Datang, Admin Ican!</h1>
        <p>Siap mengelola dashboard dengan lebih mudah dan modern!</p>
    <!-- Mengganti link menjadi tombol atau elemen lainnya -->
        <div class="greeting-button">"Mari mulai, Ican!"</div>


    </div>
</body>
</html>



                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('asset-landing-page-admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('asset-landing-page-admin/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('asset-landing-page-admin/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('asset-landing-page-admin/js/datatables-simple-demo.js') }}"></sript>
    <script src="{{ asset('asset-landing-page-admin/js/spinner.js') }}"></sript>

</body>
</html>