@extends('layouts.main')

@section('pageTitle', 'Emplois Mahajanga - Toutes les offres')
@section('companies', 'active')

@section('content')

    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Offres d'emplois à Mahajanga</h3>
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
                        <div class="filterbar">
                            <h5>98 offres d'emplois</h5>
                            <div class="sortby-sec">
                                <span>Trier par</span>
                                <select data-placeholder="Le plus récent" class="chosen">
                                    <option>Le plus récent</option>
                                    <option>Le plus récent</option>
                                    <option>Le plus récent</option>
                                    <option>Le plus récent</option>
                                </select>
                                <select data-placeholder="20 par page" class="chosen">
                                    <option>30 par page</option>
                                    <option>40 par page</option>
                                    <option>50 par page</option>
                                    <option>60 par page</option>
                                </select>
                            </div>
                        </div>
                        <div class="job-grid-sec">
                            <div class="row">
                                @foreach($adverts as $advert)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="job-grid border">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="{{ asset('images/resource/jg1.png') }}" alt="" /> </div>
                                                <h3><a href="job_details.php" title="">{{ $advert->title }}</a></h3>
                                                <span>Massimo Artemisis</span>

                                            </div>
                                            <span class="job-lctn">Sacramento, California</span>
                                        </div><!-- JOB Grid -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
