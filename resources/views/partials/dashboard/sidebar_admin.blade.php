<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #06794f">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JOB BOARD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Informations
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCandidatures"
           aria-expanded="true" aria-controls="collapseCandidatures">
            <i class="fas fa-fw fa-chart-area"></i>
            <span> Candidatures</span>
        </a>
        <div id="collapseCandidatures" class="collapse" aria-labelledby="headingCandidatures" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Types de candidatures</h6>
                <a class="collapse-item" href="#">Candidatures acceptées</a>
                <a class="collapse-item" href="#">Candidatures refusées</a>
                <a class="collapse-item" href="#">Candidatures en cours</a>
                <a class="collapse-item" href="#">Candidatures rejetées</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span> Offres d'emploi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span> Entités de recrutement</span></a>
    </li>
        

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilisateurs"
           aria-expanded="true" aria-controls="collapseUtilisateurs">
            <i class="fas fa-fw fa-cog"></i>
            <span>Utilisateurs</span>
        </a>
        <div id="collapseUtilisateurs" class="collapse" aria-labelledby="headingUtilisateurs" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Types d'utilisateurs</h6>
                <a class="collapse-item" href="{{ route('userlist') }}">Développeurs</a>
                <a class="collapse-item" href="{{ route('userlist') }}">Employeurs</a>
                <a class="collapse-item" href="{{ route('userlist') }}">Administrateurs</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
