@extends('layouts.main')

@section('pageTitle', 'Emploi Mahajanga')
@section('login', 'active')

@section('customCss')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div class="logo-menu">
        @include('layouts.menu')
    </div>
    <div class="page-header" style="background: url({{asset('assets/img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Mon Compte</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">
                                    <i class="ti-home"></i> Home</a>
                            </li>
                            <li class="current">Se connecter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="content" class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
                    <div id="cd-login" class="is-selected">
                        <div class="page-login-form">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            <form role="form" class="login-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">Je suis </label>

                                    <div class="col-md-6">
                                        <select name="role_id" class="form-control" required>
                                            <option value="3">à la recherche d'un emploi</option>
                                            <option value="2">un recruteur</option>
                                        </select>

                                        @if ($errors->has('role_id'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-user"></i>
                                        <input type="text" id="sender-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                               value="{{ old('email') }}" placeholder="E-mail" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-lock"></i>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mot de passe" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <button class="btn btn-common log-btn">Connexion</button>
                                <div class="checkbox-item">
                                    <div class="checkbox">
                                        <label for="rememberme" class="rememberme">
                                            <input name="remember" id="rememberme"
                                                   {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                            Se souvenir de moi</label>
                                    </div>
                                    <p class="cd-form-bottom-message">
                                        <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection