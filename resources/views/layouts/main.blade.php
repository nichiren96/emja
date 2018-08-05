<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('pageTitle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    @yield('customCss')


</head>
<body>

<div class="page-loading">
    <img src="images/loader.gif" alt="" />
</div>

<div class="theme-layout" id="scrollup">

    <div class="responsive-header">
        <div class="responsive-menubar">
            <div class="res-logo"><a href="index.html" title=""><img src="{{ asset('images/resource/job.png') }}" width="80" alt="" /></a></div>
            <div class="menu-resaction">
                <div class="res-openmenu">
                    <img src="{{ asset('images/icon.png') }}" alt="" /> Menu
                </div>
                <div class="res-closemenu">
                    <img src="{{ asset('images/icon2.png') }}" alt="" /> Close
                </div>
            </div>
        </div>
        <div class="responsive-opensec">
            <div class="btn-extars">
                <a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
                <ul class="account-btns">
                    <li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
                    <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
                </ul>
            </div><!-- Btn Extras -->
            <form class="res-search">
                <input type="text" placeholder="Job title, keywords or company name" />
                <button type="submit"><i class="la la-search"></i></button>
            </form>
            <div class="responsivemenu">
                <ul>
                    <li class="menu-item active">
                        <a href="index.php" title=""><i class="la la-home"></i></a>
                    </li>
                    <li class="menu-item">
                        <a href="#" title="">Entreprises</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" title="">Candidats</a>
                    </li>
                    <li class="menu-item">
                        <a href="about_us.php" title="">À propos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- header desktop -->
    <header class="stick-top forsticky">
        <div class="menu-sec">
            <div class="container">

                <div class="logo">
                    <a href="index.php" title=""><img class="hidesticky" src="{{ asset('images/resource/job.png') }}" width="178" alt="" /><img class="showsticky" src="{{ asset('images/resource/job.png') }}" width="178" alt="" /></a>
                </div>
                <!-- Logo -->

                <div class="btn-extars">
                    <a href="#" title="" class="post-job-btn"><i class="la la-edit"></i>Publier un Emploi</a>
                    <ul class="account-btns">
                        <li class="signup-popup"><a title=""><i class="la la-key"></i> S'inscrire</a></li>
                        <li class="signin-popup"><a title=""><i class="la la-user"></i> S'identifier</a></li>
                    </ul>
                </div><!-- Btn Extras -->

                <nav>
                    <ul>
                        <li class="menu-item active">
                            <a href="index.php" title=""><i class="la la-home"></i></a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('all_companies') }}" title="">Entreprises</a>
                        </li>
                        <li class="menu-item">
                            <a href="candidats/list_candidat.php" title="">Candidats</a>
                        </li>
                        <li class="menu-item">
                            <a href="about_us.php" title="">À propos</a>
                        </li>
                    </ul>
                </nav><!-- Menus -->
            </div>
        </div>
    </header>


    @yield('content')

    <footer>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="about_widget">
                                <div class="logo">
                                    <a href="index.html" title=""><img src="images/resource/job.png"  width="178" alt="" /></a>
                                </div>
                                <span>Collin Street West, Victor 8007, Australia.</span>
                                <span>+1 246-345-0695</span>
                                <span>info@jobhunt.com</span>
                                <div class="social">
                                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div><!-- About Widget -->
                        </div>
                    </div>
                    <div class="col-lg-2 column">
                        <div class="widget">
                            <h3 class="footer-title">Navigation</h3>
                            <div class="link_widgets3 nolines">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="contact.php" title="">Contact </a>
                                        <a href="#" title="">FAQ’s </a>
                                        <a href="#" title="">Politique de confidentialité </a>
                                        <a href="#" title="">Mentions légales </a>
                                        <a href="#" title="">Cookies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 column">
                        <div class="widget">
                            <h3 class="footer-title">Besoin d'aide ?</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="">
                                        <a href="mailto:jobmajunga@emploi-mahajanga.mg"><i class="fa fa-envelope"></i> jobmajunga@emploi-mahajanga.mg</a>
                                        <a href="tel:+261349345251"><i class="fa fa-phone"></i> +261349345251</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-3 column">
                        <div class="widget">
                            <div class="download_widget">
                                <a href="#" title=""><img src="images/resource/dw1.png" alt="" /></a>
                                <a href="#" title=""><img src="images/resource/dw2.png" alt="" /></a>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-lg-5 column">
                        <div class="widget">
                            <h3 class="footer-title">Newsletter</h3>
                            <div class="subscribe_widget">
                                <p>Laissez-nous maintenant à propos de votre problème et un professionnel vous contactera.</p>
                                <form>
                                    <input type="text" placeholder="Entrez une adresse e-mail valide" />
                                    <button type="submit"><i class="la la-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <span>© 2018 Emploi Mahajanga - All rights reserved.</span>
            <a href="#scrollup" class="back-top" title=""><i class="la la-arrow-up"></i></a>
        </div>
    </footer>

</div>

<!-- LOGIN POPUP -->
<div class="account-popup-area signin-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Connexion</h3>
        <span>Qui vous êtes?</span>
        <div class="select-user">
            <span>Candidat</span>
            <span>Employeur</span>
        </div>
        <form action="dashbord_employer.php" method="">
            <div class="cfield">
                <input type="text" placeholder="Nom d'utilisateur" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="Mot de passe" />
                <i class="la la-key"></i>
            </div>
            <p class="remember-label">
                <input type="checkbox" name="cb" id="cb1"><label for="cb1">Souvien de moi</label>
            </p>
            <a href="#" title="">Mot de passe oublié?</a>
            <button type="submit">Connexion</button>
        </form>
        <!--<div class="extra-login">
            <span>Ou</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>-->
    </div>
</div>
<!-- LOGIN POPUP -->

<!-- SIGNUP POPUP -->
<div class="account-popup-area signup-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>S'inscire</h3>
        <span style="color:red">* Obligatoire</span>
        <!--<div class="select-user">
            <span>Candidat</span>
            <span>Employeur</span>
        </div>-->
        <form action="dashbord_candidates.php" method="">
            <!--<div class="cfield">
                <input type="text" placeholder="Nom d'utilisateur" />
                <i class="la la-user"></i>
            </div>-->
            <div class="cfield">
                <input type="text" placeholder="Email*" />
                <i class="la la-envelope-o"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="Mot de passe*" />
                <i class="la la-key"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="Confirmer mot de passe*" />
                <i class="la la-key"></i>
            </div>
            <div class="dropdown-field">
                <select data-placeholder="Please Select Specialism" class="chosen">
                    <option value="" selected="" disabled="">Je suis*</option>
                    <option value="">Candidat</option>
                    <option value="">Employeur</option>
                </select>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Téléphone*" />
                <i class="la la-phone"></i>
            </div>
            <button type="submit">Créer un compte</button>
        </form>
        <div class="extra-login">
            <span>Ou</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- SIGNUP POPUP -->

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/slick.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/parallax.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/select-chosen.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.scrollbar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/rslider.js') }}" type="text/javascript"></script>

</body>
</html>
