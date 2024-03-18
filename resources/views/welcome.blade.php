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

    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');"
             id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <h1 class="text-white font-weight-bold">Le moyen le plus simple d'obtenir l'emploi de vos
                            rêves</h1>
                    </div>
                    <form method="post" class="search-jobs-form">
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Titre de l'emploi, Entreprise...">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%"
                                        data-live-search="true" title="Selectiomnner la Region">
                                    <option>Mali</option>
                                    <option>Benin</option>
                                    <option>Nigeria</option>
                                    <option>Congo</option>
                                    <option>Rwanda</option>
                                    <option>Niger</option>
                                    <option>Cote d'Ivoire</option>
                                    <option>Algerie</option>
                                    <option>Afrique du Sud</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%"
                                        data-live-search="true" title="Selectionner le type d'emploi">
                                    <option>Temps partiel</option>
                                    <option>A plein temps</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search">
                                    <span class="icon-search icon mr-2"></span>Search Job
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <a href="index.html#next" class="scroll-button smoothscroll">
            <span class=" icon-keyboard_arrow_down"></span>
        </a>
    </section>
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next"
             style="background-image: url('images/im2.jpg');">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde
                        officiis recusandae sequi excepturi corrupti.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="1930">0</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="54">0</strong>
                    </div>
                    <span class="caption">Jobs Posted</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="120">0</strong>
                    </div>
                    <span class="caption">Jobs Filled</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="550">0</strong>
                    </div>
                    <span class="caption">Companies</span>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <h2 class="section-title mb-2">Categories de services</h2>
                            <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam
                                fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/app_mobile.png" alt="Image" class="img-fluid logo-1"></li>
                        <li>Developpeur d'application mobile</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/dev_back.png" alt="Image" class="img-fluid logo-2"></li>
                        <li>Developpeur Backend</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/log_bureau.png" alt="Image" class="img-fluid logo-3">
                        <li>Developpeur de logiciels_bureau</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/full-stack.jpeg" alt="Image" class="img-fluid logo-4"></li>
                        <li>Developpeur Full-Stack</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/dev_se.jpeg alt=" Image" class="img-fluid logo-5"></li>
                        <li>Developpeur de systeme d'exploitation</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/dev_jeux.png" alt="Image" class="img-fluid logo-6"></li>
                        <li>Developpeur des jeux</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/int_artifi.webp" alt="Image" class="img-fluid logo-7"></li>
                        <li>Developpeur en intelligence artificielle</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <ul>
                        <li><img src="images/dev_front.jpg" alt="Image" class="img-fluid logo-8"></li>
                        <li>Developpeur Frontend</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-md-7">
            <h2 class="section-title mb-2">Les developpeurs les mieux notees</h2>
        </div>
        <div></div>
        <div></div>
    </section>
    <footer class="site-footer">
        <a href="index.html#top" class="smoothscroll scroll-top">
            <span class="icon-keyboard_arrow_up"></span>
        </a>
        <div class="container">
            <div class="row mb-5">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Search Trending</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html#">Web Design</a></li>
                        <li><a href="index.html#">Graphic Design</a></li>
                        <li><a href="index.html#">Web Developers</a></li>
                        <li><a href="index.html#">Python</a></li>
                        <li><a href="index.html#">HTML5</a></li>
                        <li><a href="index.html#">CSS3</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html#">About Us</a></li>
                        <li><a href="index.html#">Career</a></li>
                        <li><a href="index.html#">Blog</a></li>
                        <li><a href="index.html#">Resources</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html#">Support</a></li>
                        <li><a href="index.html#">Privacy</a></li>
                        <li><a href="index.html#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Contact Us</h3>
                    <div class="footer-social">
                        <a href="index.html#"><span class="icon-facebook"></span></a>
                        <a href="index.html#"><span class="icon-twitter"></span></a>
                        <a href="index.html#"><span class="icon-instagram"></span></a>
                        <a href="index.html#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <p class="copyright"><small>

                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                        </small></p>
                </div>
            </div>
        </div>
    </footer>
</div>
@include('partials.scripts')
</body>
</html>
