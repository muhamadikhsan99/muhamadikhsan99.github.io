<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Kategori</div>

            <!-- Manage -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                Manage
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a href="{{ url('/admin/dashboard/about') }}" class="btn btn-primary btn-sm">Manage About Me</a>
                    <a href="{{ url('/admin/dashboard/certificate') }}" class="btn btn-primary btn-sm">Manage Certificate</a>
                    <a href="{{ url('/admin/dashboard/project') }}" class="btn btn-primary btn-sm">Manage Project</a>
                    <a href="{{ url('/admin/dashboard/skill') }}" class="btn btn-primary btn-sm">Manage Skill</a>
                    <a href="{{ url('/admin/dashboard/contact') }}" class="btn btn-primary btn-sm">Manage Contact</a>
                </nav>
            </div>
        </div>
    </div>
</nav>
