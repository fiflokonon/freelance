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
                    <h1 class="text-white font-weight-bold">S'inscrire/Se connecter</h1>
                    <div class="custom-breadcrumbs">
                        <a href="/">Accueil</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>S'inscrire</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5">
                    <h2 class="mb-4">S'inscrire à JobBoard</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="p-4 border rounded" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="last_name">Nom</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" placeholder="Votre Nom">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="first_name">Prénoms</label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="Vos Prénoms">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="email">Email</label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Votre adresse email">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="password">Mot de passe</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="votre mot de passe">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="confirm-password">Confirmez Mot de passe</label>
                                <input type="password" id="confirm-password" name="password_confirmation"
                                       class="form-control" placeholder="Reconfirmez votre mot de passe">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="country">Pays</label>
                                <input type="text" id="country" name="country" class="form-control" value="{{ old('country') }}" placeholder="Votre pays">
                            </div>
                        </div>
                        {{--<div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="photo">Photo</label>
                                <input type="file" id="photo" name="photo" class="form-control"
                                       placeholder="Choisir une image ">
                            </div>
                        </div>--}}
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="role">Role</label>
                                <select id="role" name="role" class="form-control">
                                    <option value="">Sélectionner un rôle</option>
                                    <option value="developer">Développeur</option>
                                    <option value="employer">Employeur</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn px-4 btn-primary text-white">S'inscrire</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous !</a>
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
