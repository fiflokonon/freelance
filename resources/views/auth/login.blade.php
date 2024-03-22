<!doctype html>
<html lang="en">
@include('partials.head')
<body id="top">
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('partials.header')

    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
             id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Se connecter</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ route('login') }}">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Log In</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <h2 class="mb-4">Se connecter à JobBoard</h2>
                    <form method="POST" action="{{ route('login') }}" class="p-4 border rounded">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control"
                                       placeholder="Votre adresse email">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="password">Mot de passe</label>
                                <input type="password" id="password" name="password" class="form-control"
                                       placeholder="Votre mot de passe">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn px-4 btn-primary text-white">Se connecter</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                Vous n'avez pas encore de compte ? <a href="{{ route('register') }}">Inscrivez-vous !</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
</div>
@include('partials.scripts')
</body>
</html>

