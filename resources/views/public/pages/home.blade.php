@extends('layouts.main')

@section('pageTitle', 'Emploi Mahajanga - Offres d\'emplois et stages à Mahajanga')
@section('home', 'active')

@section('content')
    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec">
                            <ul class="main-slider-sec text-arrows">
                                <li class="slideHome"><img src="{{ asset('images/resource/mslider3.jpg') }}" alt="" /></li>
                                <li class="slideHome"><img src="{{ asset('images/resource/mslider2.jpg') }}" alt="" /></li>
                                <li class="slideHome"><img src="{{ asset('images/resource/mslider1.jpg') }}" alt="" /></li>
                            </ul>
                            <div class="job-search-sec">
                                <div class="job-search">
                                    <h3>Trouvez l'emploi qui vous correspond</h3>
                                    <span>Trouver des emplois, et des opportunités de carrière</span>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <input type="text" placeholder="Titre du poste, mots-clés ou nom de l'entreprise" />
                                                    <i class="la la-keyboard-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <select data-placeholder="categories" class="chosen-city">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->label }}</option>
                                                        @endforeach
                                                    </select>
                                                    <i class="la la-list-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                <button type="submit"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="or-browser">
                                        <span>Parcourir les offres d'emploi à</span>
                                        <a href="#" title="">Mahajanga</a>
                                    </div>
                                </div>


                            </div>
                            <div class="scroll-to">
                                <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="scroll-here">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Catégories populaires</h2>
                        </div><!-- Heading -->
                        <div class="cat-sec">
                            <div class="row no-gape">
                               @include('layouts.categorylist')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Parcourir toutes les catégories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="block gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-sec">
                            <ul class="nav nav-tabs">
                                <li><a class="current" data-tab="fjobs">Offres récentes</a></li>
                            </ul>
                            <div id="fjobs" class="tab-content current">
                                <div class="job-listings-tabs">

                                           @include('layouts.joblist')

                                </div>
                            </div>
                            <div class="browse-all-cat">
                                <a href="all_job.php" title="" class="style2">Charger plus d'annonces</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="how-to-sec style2">
                            <div class="how-to">
                                <span class="how-icon"><i class="la la-newspaper-o"></i></span>
                                <h3>Facile</h3>
                                <p>Gagnez du temps en postant vos offres d'emploi depuis n'importe où et n'importe quel appareil.</p>
                            </div>
                            <div class="how-to">
                                <span class="how-icon"><i class="la la-suitcase"></i></span>
                                <h3>Efficace</h3>
                                <p>Recevez 3 fois plus de candidatures que sur les sites d'emploi classiques. </p>
                            </div>
                            <div class="how-to">
                                <span class="how-icon"><i class="la la-street-view"></i></span>
                                <h3>Interactif</h3>
                                <p>Soyez là où se trouvent vos candidats.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block double-gap-top double-gap-bottom">
            <div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text-block">
                            <h3>Faites une différence avec votre CV en ligne!</h3>
                            <span>Votre CV en quelques minutes avec l'assistant CV <b>Emploi Mahajanga</b> est prêt!</span>
                            <a href="404.php" title="">Créer votre CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>En collaboration avec</h2>
                            <!--<span>Certaines des entreprises que nous avons aidé à recruter d'excellents candidats au fil des ans.</span>-->
                        </div><!-- Heading -->
                        <div class="comp-sec">
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc1.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc2.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc3.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc4.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc5.jpg" alt="" /></a>
                            </div><!-- Client  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Vous avez une question?</h3>
                            <span>Nous sommes ici pour vous aider. Consultez notre FAQ, envoyez-nous un courriel ou appelez-nous au +261 (0) 34 93 452 51</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('header')
    <section id="intro" class="section-intro">
        <div class="logo-menu">
            @include('layouts.menu')
        </div>
        <div class="search-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Trouvez votre prochain emploi</h1>
                        <br>
                        <h2>Plus de
                            <strong>12,000</strong> emplois disponible pour booster votre carrière</h2>
                        <div class="content">
                            <form method="" action="#">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="">
                                            <i class="ti-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select class="dropdown-product selectpicker">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->label }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-6">
                                        <button type="button" class="btn btn-search-icon">
                                            <i class="ti-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Offres récentes</h2>
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.joblist')
                </div>
            </div>
        </div>
    </section>

    <section class="category section">
        <div class="container">
            <h2 class="section-title">Catégories</h2>
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.categorylist')
                </div>
            </div>
        </div>
    </section>

    <section class="section purchase" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="section-content text-center">
                    <h1 class="title-text">
                        Vous êtes à la recherche d'un emploi?
                    </h1>
                    <p>Inscrivez-vous et déposez votre CV !</p>
                    <a href="{{ route('register') }}" class="btn btn-common">S'nscrire</a>
                </div>
            </div>
        </div>
    </section>
@endsection