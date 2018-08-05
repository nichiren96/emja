@extends('layouts.main')

@section('pageTitle', 'Emploi Mahajanga - Liste des entreprises à Mahajanga')
@section('companies', 'active')

@section('content')

    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Entreprises à Mahajanga</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block less-top">
            <div class="container">
                <div class="row">
                    <div class="emply-list-sec">
                        <div class="row" id="masonry">
                            @include('layouts.companylist')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
