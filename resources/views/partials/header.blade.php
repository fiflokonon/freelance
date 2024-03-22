<header class="site-navbar mt-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6"><a href="/">Page d'emploi</a></div>
            <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                    <li><a href="/" class="nav-link active">Accueil</a></li>
                    <li><a href="about.html">Tâches</a></li>
                    <li class="has-children">
                        <a href="job-listings.html">Développeurs</a>
                    </li>
                    <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span>Poster un emploi</a></li>
                    <li class="d-lg-none"><a href="login.html">S'inscrire / s'identifier</a></li>
                </ul>
            </nav>
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                <div class="ml-auto">
                    <a href="{{ route('new_job') }}" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Nouveau Job</a>
                    <a href="{{route('login')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Se connecter</a>
                </div>
                <a href="index.html#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>
        </div>
    </div>
</header>
