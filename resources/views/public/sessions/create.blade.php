@extends('layouts.master')

@section('pageTitle', 'Milakandra - Se connecter àvotre compte')

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
                @if (Session('error'))
                    <div class="alert alert-danger">
                       {{ Session('error') }}
                    </div>
                @endif
                <h2>Se connecter votre compte</h2>
                <form action="{{ route('post_login') }}" method="post">

                   {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required/>
                    </div>



                    <button type="submit" class="btn btn-primary">Go</button>
                </form>
            </div>
        </div>
    </div>

@endsection
