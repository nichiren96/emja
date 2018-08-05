@extends('layouts.master')

@section('pageTitle', 'Emploi Mahajanga - Tableau de bord')

@section('customCss')
    <style>

        .navbar {
            background-color: rgb(62, 97, 153);
        }

        body {
            padding-top: 70px;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session('success'))
                    <div class="alert alert-success">
                        {{ Session('success') }}
                    </div>
                @endif
                <h2>Bienvenue
                    @if (Auth::check())
                        <span>{{ Auth::user()->firstname }}</span>
                    @endif
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="cv">Télécharger votre CV</label>
                        <input type="file" class="form-control" id="cv" name="cv" />
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

